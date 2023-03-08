FROM php:8.1.0-apache

RUN apt-get update -y --fix-missing && \
    apt-get install -y libmcrypt-dev zlib1g-dev libzip-dev curl gnupg && \
    pecl install mcrypt-1.0.5 && \
    docker-php-ext-enable mcrypt && \
    docker-php-ext-install zip pdo pdo_mysql && \
    curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

COPY . /var/www/html
COPY apache.conf /etc/apache2/sites-enabled/000-default.conf

WORKDIR /var/www/html

RUN a2enmod rewrite headers ssl && \
    service apache2 restart

RUN apt-get clean && apt-get autoremove -y && apt-get autoclean -y && \
    rm -rf /var/lib/apt/lists/* /tmp/* /var/tmp/*

EXPOSE 80
