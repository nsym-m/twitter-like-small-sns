FROM node:16.13.2-buster-slim
SHELL ["/bin/bash", "-oeux", "pipefail", "-c"]

RUN apt-get update && \
  apt-get install -y g++ tzdata && \
  cp /usr/share/zoneinfo/Asia/Tokyo /etc/localtime

WORKDIR /var/www/html
COPY ./frontend/ /var/www/html/

RUN yarn install

EXPOSE 3000

ENTRYPOINT ["yarn", "dev"]
