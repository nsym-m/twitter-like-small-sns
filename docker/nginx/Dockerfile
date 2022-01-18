FROM nginx:latest
SHELL ["/bin/bash", "-oeux", "pipefail", "-c"]

RUN apt-get update && \
  apt-get install -y g++ tzdata && \
  cp /usr/share/zoneinfo/Asia/Tokyo /etc/localtime

COPY ./default.conf /etc/nginx/conf.d/default.conf

WORKDIR /var/www/html