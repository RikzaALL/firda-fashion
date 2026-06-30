FROM php:8.3-apache

# Install dependencies
RUN apt-get update && apt-get install -y \
    git \
    curl \
    unzip \
    zip \
    libzip-dev \
    libpng-dev \
    libonig-dev \
    libxml2-dev \
    libicu-dev \
    nodejs \
    npm \
    && docker-php-ext-install pdo pdo_mysql mbstring zip intl \
    && apt-get clean \
    && rm -rf /var/lib/apt/lists/*

# Enable Apache rewrite ONLY
RUN a2enmod rewrite

# --- FIX MPM conflict (important) ---
# php:8.3-apache normally uses prefork for mod_php
RUN a2dismod mpm_event || true
RUN a2dismod mpm_worker || true
RUN a2enmod mpm_prefork

# Install Composer
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

WORKDIR /var/www/html

COPY . .

RUN composer install --no-dev --optimize-autoloader

# Build Vite
RUN npm install
RUN npm run build

# Laravel permissions
RUN mkdir -p storage/framework/cache storage/framework/sessions storage/framework/views bootstrap/cache && \
    chown -R www-data:www-data storage bootstrap/cache && \
    chmod -R 775 storage bootstrap/cache

# Apache DocumentRoot -> public
ENV APACHE_DOCUMENT_ROOT=/var/www/html/public

RUN sed -ri -e 's!/var/www/html!${APACHE_DOCUMENT_ROOT}!g' \
    /etc/apache2/sites-available/*.conf \
    /etc/apache2/apache2.conf

# SQLite (only if you use sqlite)
RUN touch database/database.sqlite

EXPOSE 80

CMD ["apache2-foreground"]