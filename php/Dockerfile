FROM edyan/php:5.6
MAINTAINER Emmanuel Dyan <emmanuel.dyan@inetprocess.com>

ENV WEB_DOCUMENT_ROOT=/var/www/html

# Upgrade the system and Install GIT
RUN DEBIAN_FRONTEND=noninteractive apt-get update && \

    DEBIAN_FRONTEND=noninteractive apt-get upgrade -y && \

    DEBIAN_FRONTEND=noninteractive apt-get install -y --no-install-recommends git openssh-client && \

    DEBIAN_FRONTEND=noninteractive apt-get autoremove -y && \
    DEBIAN_FRONTEND=noninteractive apt-get autoclean && \
    DEBIAN_FRONTEND=noninteractive apt-get clean && \
    rm -Rf /var/lib/apt/lists/* /usr/share/man/* /usr/share/doc/* \
    && echo 'alias ll="ls -la"' >> ~/.bashrc

WORKDIR ${WEB_DOCUMENT_ROOT}