FROM alpine:latest
RUN apk add --no-cache mysql mysql-client
RUN mysql_install_db --user=mysql --datadir=/var/lib/mysql
RUN sed -i 's/^skip-networking.*/skip-networking=0/g' /etc/my.cnf.d/mariadb-server.cnf || true
RUN sed -i 's/^port.*/port=3306/g' /etc/my.cnf.d/mariadb-server.cnf || true
RUN sed -i 's/^bind-address.*/bind-address=0.0.0.0/g' /etc/my.cnf.d/mariadb-server.cnf || true
RUN echo -e "\n[mysqld]\nskip-networking=0\nport=3306\nbind-address=0.0.0.0" >> /etc/my.cnf.d/mariadb-server.cnf
RUN mkdir -p /run/mysqld && chown -R mysql:mysql /run/mysqld /var/lib/mysql
EXPOSE 3306
CMD ["mysqld", "--user=mysql"]
