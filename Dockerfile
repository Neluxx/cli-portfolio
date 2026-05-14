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

# Entrypoint script
COPY docker/entrypoint.sh /usr/local/bin/entrypoint.sh
RUN chmod +x /usr/local/bin/entrypoint.sh

# Copy built frontend assets from node stage to a staging dir
# (the actual public/ dir is a shared volume that persists between deploys,
#  so we sync fresh assets into it at container startup via the entrypoint)
COPY --from=node_builder /app/public/build /tmp/public-build

# Install PHP dependencies (production only)
RUN composer install --no-dev --optimize-autoloader --no-interaction \
    && rm /usr/bin/composer

# Create storage directories, set correct permissions
RUN mkdir -p storage/framework/{sessions,views,cache} storage/logs \
    && chown -R www-data:www-data storage bootstrap/cache database public \
    && chmod -R 775 storage bootstrap/cache

EXPOSE 9000

USER www-data

ENTRYPOINT ["/usr/local/bin/entrypoint.sh"]
