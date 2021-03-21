#PHP-FPM Alpine Linux
FROM php:fpm-alpine

#install PDO extension
RUN docker-php-ext-install pdo_mysql

#run php-fpm
CMD ["php-fpm"]

#expose port 9000
EXPOSE 9000