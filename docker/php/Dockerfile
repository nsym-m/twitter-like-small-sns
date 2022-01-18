FROM php:8.1.1-fpm-buster
SHELL ["/bin/bash", "-oeux", "pipefail", "-c"]

ENV TZ=UTC \
  LANG=ja_JP.UTF-8 \
  LANGUAGE=ja_JP:ja \
  COMPOSER_ALLOW_SUPERUSER=1 \
  COMPOSER_HOME=/composer

COPY --from=composer:2.2.4 /usr/bin/composer /usr/bin/composer

RUN apt-get update && \
  apt-get -y install git libicu-dev libonig-dev libzip-dev libfreetype6-dev libjpeg62-turbo-dev libpng-dev unzip tzdata libmagickwand-dev && \
  apt-get clean && \
  rm -rf /var/lib/apt/lists/* && \
  cp /usr/share/zoneinfo/Asia/Tokyo /etc/localtime && \
  mkdir /var/run/php-fpm && \
  mkdir /var/log/php && \
  docker-php-ext-configure gd --with-freetype --with-jpeg && \
  docker-php-ext-install intl pdo_mysql zip bcmath sockets -j$(nproc) gd && \
  composer config -g process-timeout 3600 && \
  composer config -g repos.packagist composer https://packagist.org && \
  pecl install xdebug redis-5.3.4 imagick-3.5.1 && \
  docker-php-ext-enable xdebug redis imagick

COPY ./php-fpm.d/zz-docker.conf /usr/local/etc/php-fpm.d/zz-docker.conf
COPY ./php.ini /etc/php/php.ini

WORKDIR /var/www/html
