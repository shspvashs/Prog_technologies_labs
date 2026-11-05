FROM alpine:latest
RUN apk add --no-cache postgresql16
RUN mkdir -p /run/postgresql && chown -R postgres:postgres /run/postgresql
RUN mkdir -p /var/lib/postgresql/data && chown -R postgres:postgres /var/lib/postgresql
USER postgres
RUN initdb -D /var/lib/postgresql/data
RUN echo "host all all all trust" >> /var/lib/postgresql/data/pg_hba.conf
EXPOSE 5432
CMD ["postgres", "-D", "/var/lib/postgresql/data", "-c", "listen_addresses=*"]
