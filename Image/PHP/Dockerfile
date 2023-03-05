FROM php:7.4.0-fpm-buster

WORKDIR /var/www

COPY ./Apps /var/www

RUN docker-php-ext-install bcmath pdo_mysql

RUN apt-get update
RUN apt-get install -y git zip unzip

COPY --from=composer /usr/bin/composer /usr/bin/composer

EXPOSE 9000