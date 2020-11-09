FROM php:7.2-apache
COPY image/server-status.conf /etc/apache2/sites-available/
RUN a2ensite server-status.conf
COPY app /var/www/html/
