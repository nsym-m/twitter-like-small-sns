FROM mysql:8.0

ENV MYSQL_DATABASE=sns \
  MYSQL_ROOT_PASSWORD=pass

RUN apt-get install -y tzdata && \
  cp /usr/share/zoneinfo/Asia/Tokyo /etc/localtime

RUN mkdir /var/log/mysql && \
  chown mysql:mysql /var/log/mysql && \
  mkdir -p /var/lib/mysql && \
  chown mysql:mysql /var/lib/mysql
