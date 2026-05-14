#!/bin/sh
set -e

# The public/ dir is a shared volume that persists across deploys, so we sync
# the freshly built frontend assets into it at startup. Remove the old build
# directory first so we don't nest into it (busybox `cp -r src dst` copies
# `src` *into* `dst` when `dst` already exists) and to clear stale hashes.
rm -rf public/build
cp -r /tmp/public-build public/build

# Drop any stray Vite dev marker — its presence forces @vite() to point at a
# non-existent dev server and breaks all asset URLs in production.
rm -f public/hot

touch database/database.sqlite

php artisan migrate --force --no-interaction
php artisan config:cache
php artisan route:cache
php artisan view:cache

exec php-fpm
