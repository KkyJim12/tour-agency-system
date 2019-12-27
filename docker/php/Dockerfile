FROM php:7.3-fpm

RUN curl --silent --show-error https://getcomposer.org/installer | php

RUN set -eux; \
            curl -o mongodb-1.6.1.tgz https://pecl.php.net/get/mongodb-1.6.1.tgz; \
            tar -zxvf mongodb-1.6.1.tgz; \
            cd mongodb-1.6.1; \
            phpize; \
            ./configure; \
            make -j "$(nproc)"; \
            make install; \
            docker-php-ext-enable mongodb

RUN set -eux; \
        \
        apt-get update; \
        apt-get install -y --no-install-recommends libmagickwand-dev; \
        rm -rf /var/lib/apt/lists/*; \
        mkdir -p /tmp/imagick; \
        curl -o /tmp/imagick.tgz https://pecl.php.net/get/imagick-3.4.4.tgz; \
        tar -C /tmp/imagick -zxvf /tmp/imagick.tgz --strip-components=1; \
        cd /tmp/imagick; \
        phpize; \
        ./configure; \
        make -j "$(nproc)"; \
        make install; \
        rm -rf /tmp/imagick*; \
        docker-php-ext-enable imagick

RUN set -eux; \
        \
        apt-get update; \
        apt-get install -y --no-install-recommends imagemagick ghostscript; \
        rm -rf /var/lib/apt/lists/*

RUN set -eux; \
        \
        apt-get update; \
        apt-get install -y --no-install-recommends libwebp-dev libjpeg-dev libpng-dev libxpm-dev libfreetype6-dev; \
        rm -rf /var/lib/apt/lists/*; \
        docker-php-ext-configure gd --with-webp-dir --with-jpeg-dir \
            --with-png-dir --with-xpm-dir --with-freetype-dir; \
        docker-php-ext-install gd;

RUN docker-php-ext-enable opcache
