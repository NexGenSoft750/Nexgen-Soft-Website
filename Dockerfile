FROM php:8.3-apache

# Install mysqli extension
RUN docker-php-ext-install mysqli

# Enable mod_rewrite
RUN a2enmod rewrite

COPY . /var/www/html/