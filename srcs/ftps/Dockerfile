FROM alpine:3.7

EXPOSE 21

RUN apk update && apk upgrade
RUN apk add openssl openrc vsftpd

RUN mkdir -p /var/log/ftp && touch /var/log/ftp/xferlog

COPY srcs/vsftpd.conf /etc/vsftpd/vsftpd.conf

RUN openssl req -newkey rsa:2048 -nodes -keyout /etc/ssl/certs/key.key \
-x509 -sha256 -days 356 -out /etc/ssl/certs/certificate.crt -subj \
'/C=RU/ST=XX/L=XX/O=XX/OU=XX/CN=poweredBySber'

RUN echo "root:root" | chpasswd

ENTRYPOINT vsftpd /etc/vsftpd/vsftpd.conf