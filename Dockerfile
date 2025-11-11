FROM php:8.2-apache

RUN apt-get update && apt-get install -y \
    libicu-dev \
    && docker-php-ext-install intl pdo pdo_mysql

RUN a2enmod rewrite

# Copy CodeIgniter app
COPY . /var/www/html

# Change Apache root directory to public/
ENV APACHE_DOCUMENT_ROOT /var/www/html/public

# Update Apache configuration
RUN sed -ri -e 's!/var/www/html!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/sites-available/*.conf \
    && sed -ri -e 's!/var/www/!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/apache2.conf /etc/apache2/conf-available/*.conf

WORKDIR /var/www/html
