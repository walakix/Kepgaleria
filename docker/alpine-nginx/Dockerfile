FROM alpine
LABEL Maintainer="walaki"
RUN apk update 
RUN apk upgrade
RUN apk add bash nginx
RUN apk add php8 php8-fpm php8-opcache
RUN apk add php8-gd php8-zlib php8-curl
RUN mv /etc/nginx/nginx.conf /etc/nginx/nginx.conf.orig
COPY nginx.conf /etc/nginx/
COPY php /etc/php8 
WORKDIR /app
COPY ../../app/. .
RUN mkdir /var/run/php
EXPOSE 8000
CMD ["/bin/bash", "-c", "php-fpm8 && chmod 777 /var/run/php/php8-fpm.sock && chmod 755 /app/* && nginx -g 'daemon off;'"]
