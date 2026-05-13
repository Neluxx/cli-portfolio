# Stage 1: Build frontend assets
FROM node:24-alpine AS node_builder

WORKDIR /app

COPY package*.json ./
RUN npm ci

COPY . .
RUN npm run build


# Stage 2: PHP application
FROM php:8.4-fpm-alpine

WORKDIR /var/www/html

# Install system dependencies and PHP extensions
RUN apk add --no-cache \
        libzip-dev \
        sqlite-dev \
        unzip \
    && docker-php-ext-install \
        pdo \
        pdo_sqlite \
        zip \
    && rm -rf /tmp/*

# Install Composer
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

# Copy application source
COPY . .

# Copy built frontend assets from node stage to a staging dir
# (the actual public/ dir is a shared volume that persists between deploys,
#  so we sync fresh assets into it at container startup via CMD)
COPY --from=node_builder /app/public/build /tmp/public-build

# Install PHP dependencies (production only)
RUN composer install --no-dev --optimize-autoloader --no-interaction \
    && rm /usr/bin/composer

# Create storage directories, set correct permissions
RUN mkdir -p storage/framework/{sessions,views,cache} storage/logs \
    && chown -R www-data:www-data storage bootstrap/cache database \
    && chmod -R 775 storage bootstrap/cache

EXPOSE 9000

USER www-data

CMD ["sh", "-c", "cp -r /tmp/public-build public/build && touch database/database.sqlite && php artisan migrate --force && php artisan config:cache && php artisan route:cache && php artisan view:cache && exec php-fpm"]
