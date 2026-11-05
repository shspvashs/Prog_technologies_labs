FROM alpine:latest
RUN apk add --no-cache php83 php83-fpm php83-pdo php83-pdo_pgsql php83-pdo_mysql php83-redis
RUN mkdir -p /run/php-fpm
COPY zz-docker.conf /etc/php83/php-fpm.d/zz-docker.conf
EXPOSE 9000
CMD ["php-fpm83", "-F"]
