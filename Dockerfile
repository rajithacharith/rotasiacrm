FROM php:8.2-fpm

RUN apt-get update && apt-get install -y composer

COPY . /var/www/html

WORKDIR /var/www/html

RUN composer install

USER 10001

EXPOSE 80

CMD ["php", "artisan", "serve"]