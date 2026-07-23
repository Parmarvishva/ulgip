FROM richarvey/nginx-php-fpm:latest

WORKDIR /var/www/html

COPY . .
COPY nginx/default.conf /etc/nginx/sites-enabled/default
RUN composer install --no-dev --optimize-autoloader

RUN php artisan config:cache
RUN php artisan route:cache
RUN php artisan view:cache

EXPOSE 8080
ENV WEBROOT /var/www/html/public
CMD ["/start.sh"]
