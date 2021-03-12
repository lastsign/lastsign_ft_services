FROM alpine:3.12

EXPOSE 5050

RUN apk update && apk upgrade
RUN apk add wget php php-fpm nginx openssl supervisor php-mysqli php-zip mariadb mariadb-client php-json

RUN adduser -D -g www 'www'
COPY srcs/nginx.conf /etc/nginx/conf.d/default.conf
COPY srcs/supervisord.conf /etc/supervisord.conf

RUN openssl req -newkey rsa:2048 -nodes -keyout /etc/ssl/certs/key.key \ 
-x509 -sha256 -days 356 -out /etc/ssl/certs/certificate.crt -subj \ 
'/C=RU/ST=XX/L=XX/O=XX/OU=XX/CN=poweredBySber'

RUN mkdir -p /var/www/
RUN wget https://wordpress.org/wordpress-5.6.tar.gz
RUN tar -xzvf wordpress-5.6.tar.gz -C /var/www/
RUN rm wordpress-5.6.tar.gz

COPY srcs/wp-config.php /var/www/wordpress/

RUN mkdir -p /run/nginx
RUN mkdir -p /var/run/
RUN chmod -R 755 /var/www/*
CMD ["/usr/bin/supervisord", "-c", "/etc/supervisord.conf"]
