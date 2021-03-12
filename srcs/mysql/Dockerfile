FROM alpine:3.12

EXPOSE 3306

RUN apk update && apk upgrade
RUN apk add mariadb mariadb-client

COPY srcs/start.sh /tmp
COPY srcs/wordpress.sql /
COPY srcs/my.cnf /etc/my.cnf
#COPY ./srcs/mysql_setup.sql /

RUN chmod +x /tmp/start.sh
CMD ["/tmp/start.sh"]
