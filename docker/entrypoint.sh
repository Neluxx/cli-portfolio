#!/bin/sh
set -e

cd /var/www/html

# Sync public/ contents into the shared volume (volume persists across rebuilds,
# so we refresh it from the image on every start to pick up new builds/assets).
if [ -d /var/www/html/public-src ]; then
    cp -a /var/www/html/public-src/. /var/www/html/public/
fi

# Ensure storage and bootstrap/cache are writable (volume may be fresh)
mkdir -p storage/framework/cache storage/framework/sessions \
         storage/framework/views storage/logs bootstrap/cache
chown -R www-data:www-data storage bootstrap/cache
chmod -R ug+rwX storage bootstrap/cache

# APP_KEY must be provided via env (e.g. in .env loaded by compose `env_file`).
# Fail fast if missing rather than silently running insecure.
if [ -z "${APP_KEY:-}" ]; then
    echo "ERROR: APP_KEY is not set. Generate one with 'php artisan key:generate --show' and add to .env" >&2
    exit 1
fi

# Create SQLite DB in the mounted app-database volume.
# The volume may be fresh, so ensure dir + file exist and are www-data-owned
# (SQLite also needs the parent dir writable for -journal / -wal files).
mkdir -p database/data
touch database/data/database.sqlite
chown -R www-data:www-data database/data

# Cache config / routes / views / events for production
php artisan config:cache
php artisan route:cache
php artisan view:cache
php artisan event:cache

# Run database migrations
php artisan migrate --force --no-interaction

# Create storage symlink (no-op if it already exists)
php artisan storage:link || true

# Hand off to the main process (php-fpm by default)
exec "$@"
