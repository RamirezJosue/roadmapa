FROM httpd:2.4.33-alpine

RUN apk update; \
    apk upgrade;

RUN if command -v a2enmod >/dev/null 2>&1; then \
        a2enmod rewrite headers \
    ;fi

# Copy apache vhost file to proxy php requests to php-fpm container
COPY apache.conf /usr/local/apache2/conf/demo.apache.conf
RUN echo "Include /usr/local/apache2/conf/demo.apache.conf" \
    >> /usr/local/apache2/conf/httpd.conf