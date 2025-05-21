FROM php:8.3-fpm

RUN apt-get update && apt-get install -y \
    libicu-dev \
    libzip-dev \
    libonig-dev \
    libxml2-dev \
    nginx \
    supervisor \
    && rm -rf /var/lib/apt/lists/*


RUN docker-php-ext-install intl pdo pdo_mysql mysqli mbstring xml zip

COPY build/conf/default.conf /etc/nginx/conf.d/default.conf
RUN rm -f /etc/nginx/sites-enabled/default

COPY build/conf/supervisord.conf /etc/supervisor/conf.d/supervisord.conf

WORKDIR /var/www/html

EXPOSE 80

CMD ["/usr/bin/supervisord"]