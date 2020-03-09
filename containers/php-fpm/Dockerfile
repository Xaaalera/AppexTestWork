FROM php:7.2-fpm-alpine

#
# Easy installation of PHP extensions in official PHP Docker images
# https://github.com/mlocati/docker-php-extension-installer
#
COPY --from=mlocati/php-extension-installer /usr/bin/install-php-extensions /usr/bin/

RUN install-php-extensions xdebug