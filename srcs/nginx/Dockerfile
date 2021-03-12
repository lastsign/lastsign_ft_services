FROM alpine:3.12

RUN apk update && apk upgrade
RUN apk add nginx openssl openssh supervisor

COPY srcs/nginx.conf /etc/nginx/conf.d/default.conf
COPY srcs/supervisord.conf /etc/supervisord.conf

RUN openssl req -newkey rsa:2048 -nodes -keyout /etc/ssl/certs/key.key \ 
-x509 -sha256 -days 356 -out /etc/ssl/certs/certificate.crt -subj \ 
'/C=RU/ST=XX/L=XX/O=XX/OU=XX/CN=poweredBySber'

EXPOSE 80 443 22

COPY srcs/start.sh /tmp
RUN chmod +x /tmp/start.sh
RUN mkdir -p /run/nginx
CMD ["/tmp/start.sh"]
