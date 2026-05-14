#!/bin/sh
set -e

# The public/ dir is a shared volume that persists across deploys, so we sync
# the freshly built frontend assets into it at startup.
cp -r /tmp/public-build public/build

touch database/database.sqlite

php artisan migrate --force --no-interaction
php artisan config:cache
php artisan route:cache
php artisan view:cache

exec php-fpm
