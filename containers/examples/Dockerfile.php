FROM php:8.0.19-fpm-alpine

RUN mkdir /app
COPY ./ /app/
WORKDIR /app/

RUN composer update

EXPOSE 9000
ENTRYPOINT ["php-fpm"]
