#!/bin/bash
set -e

if [ ! -f .env ]; then
    echo "-> Creating .env from .env.example..."
    cp .env.example .env
fi

echo "-> Syncing environment variables from container..."
php -r '
    $env = [];
    if (file_exists(".env")) {
        $lines = file(".env", FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
        foreach ($lines as $line) {
            $line = trim($line);
            if ($line === "" || str_starts_with($line, "#")) continue;
            if (str_contains($line, "=")) {
                [$k, $v] = explode("=", $line, 2);
                $env[trim($k)] = trim($v);
            }
        }
    }
    $keys = [
        "APP_KEY","APP_ENV","APP_DEBUG","APP_URL","APP_NAME",
        "DB_CONNECTION","DB_HOST","DB_PORT","DB_DATABASE","DB_USERNAME","DB_PASSWORD","DB_URL",
        "SESSION_DRIVER","SESSION_LIFETIME",
        "CACHE_STORE","QUEUE_CONNECTION",
        "LOG_CHANNEL","LOG_LEVEL",
        "MAIL_MAILER","MAIL_HOST","MAIL_PORT","MAIL_USERNAME","MAIL_PASSWORD","MAIL_FROM_ADDRESS",
        "FILESYSTEM_DISK","BROADCAST_CONNECTION",
    ];
    foreach ($keys as $key) {
        $val = getenv($key);
        if ($val !== false && $val !== "") {
            $env[$key] = $val;
        }
    }
    // Platform auto-detection (override APP_URL with public HTTPS URL)
    $externalUrl = getenv("RENDER_EXTERNAL_URL") ?: getenv("RAILWAY_PUBLIC_DOMAIN") ?: getenv("HEROKU_APP_URL") ?: "";
    if ($externalUrl !== "") {
        $scheme = parse_url($externalUrl, PHP_URL_SCHEME) ?: "https";
        $host = parse_url($externalUrl, PHP_URL_HOST) ?: $externalUrl;
        $env["APP_URL"] = "$scheme://$host";
    }
    $out = "";
    foreach ($env as $k => $v) {
        if (str_contains($v, " ") || str_contains($v, "#") || $v === "") {
            $v = "\"" . str_replace(["\\", "\""], ["\\\\", "\\\""], $v) . "\"";
        }
        $out .= "$k=$v\n";
    }
    file_put_contents(".env", $out);
'

CURRENT_KEY=$(grep "^APP_KEY=" .env | cut -d= -f2- | tr -d '\"')
if [ -z "$CURRENT_KEY" ]; then
    echo "-> Generating APP_KEY..."
    php artisan key:generate --force
fi

echo "-> Optimizing Laravel..."
php artisan config:cache
php artisan route:cache
php artisan view:cache

echo "-> Running migrations..."
php artisan migrate --force --isolated 2>/dev/null || php artisan migrate --force

chown -R www-data:www-data storage bootstrap/cache database 2>/dev/null || true
chmod -R 775 storage bootstrap/cache database 2>/dev/null || true

echo "-> Starting Apache..."
exec "$@"
