FROM php:7-fpm
RUN docker-php-ext-install mysqli pdo pdo_mysql
RUN apt-get update && \
    apt-get install -y libicu-dev && \
    docker-php-ext-install intl