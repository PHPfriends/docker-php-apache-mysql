FROM webdevops/php:5.6

ENV WEB_DOCUMENT_ROOT=/var/www/html

RUN set -x \
    && apt-install \
	&& docker-run-bootstrap \
    && docker-image-cleanup \
    && echo 'alias ll="ls -la"' >> ~/.bashrc

WORKDIR ${WEB_DOCUMENT_ROOT}