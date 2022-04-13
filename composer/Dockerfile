#FROM composer/composer:alpine
FROM composer/composer
#COPY --from=composer /usr/bin/composer /usr/bin/composer

RUN composer self-update

ENTRYPOINT [ "composer" ]
CMD [ "--help" ]
