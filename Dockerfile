FROM php:8.2-fpm

RUN apt-get update && apt-get install -y \
    git curl unzip libpng-dev libonig-dev libxml2-dev zip \
    && docker-php-ext-install pdo_mysql mbstring bcmath gd

COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

WORKDIR /var/www

COPY . .

# ✅ Create required directories
RUN mkdir -p storage bootstrap/cache

# ✅ Fix permissions BEFORE composer
RUN chown -R www-data:www-data /var/www \
    && chmod -R 775 storage bootstrap/cache

# ✅ Disable scripts during build
RUN composer install \
    --no-dev \
    --optimize-autoloader \
    --no-interaction \
    --no-scripts

EXPOSE 9000

CMD ["php-fpm"]
