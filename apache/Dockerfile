FROM httpd:2.2

ENV WEB_DOCUMENT_ROOT=/var/www/html

ADD conf/vhost.conf /usr/local/apache2/conf/extra/

RUN set -x \
    && apt-get update \
    && apt-get install -y nano \
    && echo "\nServerName localhost\n" >> /usr/local/apache2/conf/httpd.conf \
    && echo "\nInclude conf/extra/vhost.conf\n" >> /usr/local/apache2/conf/httpd.conf \
    && echo 'alias ll="ls -la"' >> ~/.bashrc \
    && mkdir -p /var/www/html \
    && chown -R www-data:nogroup /var/www/html

EXPOSE 80 443

WORKDIR ${WEB_DOCUMENT_ROOT}