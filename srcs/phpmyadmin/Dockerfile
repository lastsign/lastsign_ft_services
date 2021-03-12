FROM alpine:3.12

EXPOSE 5000

RUN apk update && apk upgrade
RUN apk add wget php php-fpm php-cli nginx openssl supervisor \
php-mysqli php-zip php-gd php-cgi php-session php-json mariadb mariadb-client openrc php7-mbstring php7-phar
RUN	rc-update add php-fpm7 default

COPY srcs/nginx.conf /etc/nginx/conf.d/default.conf
COPY srcs/supervisord.conf /etc/supervisord.conf

RUN openssl req -newkey rsa:2048 -nodes -keyout /etc/ssl/certs/key.key \ 
-x509 -sha256 -days 356 -out /etc/ssl/certs/certificate.crt -subj \ 
'/C=RU/ST=XX/L=XX/O=XX/OU=XX/CN=poweredBySber'

RUN mkdir -p /var/www
RUN wget http://files.directadmin.com/services/all/phpMyAdmin/phpMyAdmin-5.0.1-all-languages.tar.gz
RUN tar -xzvf phpMyAdmin-5.0.1-all-languages.tar.gz && mv phpMyAdmin-5.0.1-all-languages /var/www/phpMyAdmin
RUN rm phpMyAdmin-5.0.1-all-languages.tar.gz

COPY srcs/config.inc.php /var/www/phpMyAdmin/config.inc.php

RUN adduser -D -g www 'www'
RUN mkdir -p /run/nginx
RUN mkdir -p /var/run/php
RUN chmod -R 755 /var/www/*
CMD ["/usr/bin/supervisord", "-c", "/etc/supervisord.conf"]