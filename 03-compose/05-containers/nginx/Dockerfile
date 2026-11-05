FROM alpine:latest
RUN apk add --no-cache nginx
COPY default.conf /etc/nginx/http.d/default.conf
COPY index.php /var/www/html/index.php
EXPOSE 80
CMD ["nginx", "-g", "daemon off;"]
