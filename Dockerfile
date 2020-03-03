FROM php:7.4-apache
RUN a2enmod rewrite
COPY src/ /var/www/html/
EXPOSE 80/tcp