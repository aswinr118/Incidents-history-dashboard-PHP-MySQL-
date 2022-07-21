FROM php:8-apache
WORKDIR /var/www/html
COPY index.php index.php
COPY insert.php insert.php
COPY outage_form.php outage_form.php
COPY favicon.ico favicon.ico
COPY config/ config
RUN docker-php-ext-install mysqli
EXPOSE 80
EXPOSE 3306

