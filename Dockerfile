FROM webdevops/php-nginx:8.3

WORKDIR /app

COPY . /app

RUN composer install --no-dev --optimize-autoloader

RUN php artisan config:cache

RUN php artisan route:cache

RUN php artisan view:cache

EXPOSE 80