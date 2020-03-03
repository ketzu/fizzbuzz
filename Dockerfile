FROM php:7.2-apache
RUN a2enmod rewrite
COPY *.php .htaccess /var/www/html/
EXPOSE 80/tcp