#!/bin/sh
set -e

APP_DIR="/var/www/html"

echo "==> Syncing application files into shared volume..."
# Use rsync-style copy: only copy if destination is empty or outdated.
# We check for artisan as a sentinel file.
if [ ! -f "$APP_DIR/artisan" ]; then
    echo "    Volume is empty, performing full copy..."
    cp -a /app/. "$APP_DIR/"
else
    echo "    Volume already populated, updating changed files..."
    cp -a /app/. "$APP_DIR/"
fi

cd "$APP_DIR"

# Ensure storage and cache directories exist with correct permissions
mkdir -p storage/framework/{sessions,views,cache} \
         storage/logs \
         bootstrap/cache
chown -R www-data:www-data storage bootstrap/cache
chmod -R 775 storage bootstrap/cache

# Ensure SQLite database file exists
if [ ! -f database/database.sqlite ]; then
    echo "==> Creating SQLite database file..."
    touch database/database.sqlite
    chown www-data:www-data database/database.sqlite
fi

echo "==> Running database migrations..."
php artisan migrate --force

echo "==> Caching config, routes and views..."
php artisan config:cache
php artisan route:cache
php artisan view:cache

echo "==> Starting PHP-FPM..."
exec "$@"
