FROM php:8.1-fpm

RUN apt-get update && apt-get install -y libpng-dev \
        libzip-dev \
        zip \
    && docker-php-ext-install zip \
    && docker-php-ext-install mysqli \
    && docker-php-ext-install gd

COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

COPY SuiteCRM /var/www/html

WORKDIR /var/www/html

CMD ["php-fpm"]