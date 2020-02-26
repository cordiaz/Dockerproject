FROM richarvey/nginx-php-fpm
WORKDIR /var/www/html
RUN apk update && apk add  wget  && apk add   unzip
RUN wget https://github.com/sdcilsy/sosial-media/archive/master.zip
RUN unzip master.zip
EXPOSE 80
