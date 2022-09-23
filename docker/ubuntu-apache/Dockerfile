FROM ubuntu
LABEL Maintainer="walaki"
RUN apt update && apt -y upgrade
RUN echo 'tzdata tzdata/Areas select Europe' | debconf-set-selections
RUN echo 'tzdata tzdata/Zones/Europe select Budapest' | debconf-set-selections
RUN apt update && DEBIAN_FRONTEND="noninteractive"
RUN apt install -y tzdata && apt install -y apache2 && apt install -y php
RUN rm -rf /var/lib/apt/lists/*
WORKDIR /app
COPY app/. .
COPY ./docker/ubuntu-apache/appsite.conf /etc/apache2/sites-available
RUN a2dissite 000-default.conf && a2ensite appsite.conf
EXPOSE 8000
CMD ["/usr/sbin/apachectl", "-D", "FOREGROUND"]
