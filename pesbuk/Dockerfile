FROM richarvey/nginx-php-fpm
WORKDIR /var/www/html
RUN mv index.php index.php.old
COPY web/ .
EXPOSE 80
