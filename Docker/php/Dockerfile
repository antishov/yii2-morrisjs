FROM php:5.6-fpm

ARG GITHUB_AT

RUN apt-get update && apt-get install -y \
curl \
libzip-dev \
zip \
git \
libmcrypt-dev \
&& docker-php-ext-configure zip --with-libzip \
&& docker-php-ext-install zip \
&& docker-php-ext-install mcrypt

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

COPY . /var/www/yii2-morrisjs
WORKDIR /var/www/yii2-morrisjs

RUN composer config --global github-oauth.github.com $GITHUB_AT
RUN composer update

CMD ["php-fpm"]