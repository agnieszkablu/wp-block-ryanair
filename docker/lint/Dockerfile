FROM php:7.4-alpine

# install zscaler cert
# COPY certs/zscaler.pem /usr/local/share/ca-certificates/zscaler.crt
# RUN update-ca-certificates

# install composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# switch the workdir
WORKDIR /run

# install composer dependencies
COPY composer.json composer.lock ./
RUN composer install

# check the phpcs status
RUN ./vendor/bin/phpcs -i

# copy phpcs config file
COPY phpcs.xml .

# create directory for plugin files
RUN mkdir plugin

# entrypoint
ENTRYPOINT [ "/bin/sh" ]
