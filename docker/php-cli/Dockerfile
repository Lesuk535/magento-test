FROM php:7.4-cli

RUN apt-get update && apt-get install -y \
    libpq-dev unzip\
    wget \
    zlib1g-dev \
    libfreetype6-dev \
    libmcrypt-dev \
    libjpeg62-turbo-dev \
    libzip-dev \
    libpng-dev \
    libicu-dev \
    libxml2-dev \
    libxslt-dev \
    zip

RUN apt-get update && apt-get install -y libpq-dev \
    && docker-php-ext-install pdo_mysql \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install -j$(nproc) gd \
    && docker-php-ext-configure intl \
    && docker-php-ext-install intl \
    && docker-php-ext-install soap \
    && docker-php-ext-install xsl \
    && docker-php-ext-install zip \
    && docker-php-ext-install bcmath \
    && docker-php-ext-install sockets

COPY ./xdebug.ini /usr/local/etc/php/conf.d/xdebug.ini
COPY ./auth.json /root/.composer/auth.json

RUN wget https://getcomposer.org/installer -O - -q | php -- --install-dir=/bin --filename=composer --quiet
RUN composer self-update --1

RUN cd /usr/local/etc/php/conf.d/ && \
  echo 'memory_limit = -1' >> /usr/local/etc/php/conf.d/docker-php-memlimit.ini

ENV COMPOSER_ALLOW_SUPERUSER 1
ENV COMPOSER_MEMORY_LIMIT -1

WORKDIR /app
