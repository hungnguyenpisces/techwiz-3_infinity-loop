FROM composer:2.3

FROM php:8.1

ARG DEBIAN_FRONTEND=noninteractive

# Cài đăt composer
COPY --from=composer:2.3 /usr/bin/composer /usr/bin/composer

# Cài đặt các tool cần thiết
RUN apt-get update && apt-get install -y \
    software-properties-common \
    locales

RUN apt-get update && apt-get install -y \
    git \
    curl \
    nano \
    net-tools \
    pkg-config \
    iputils-ping \
    apt-utils \
    zip \
    unzip

# Cài đặt những thư viện cần thiết
RUN docker-php-ext-install \
    bcmath \
    pdo_mysql

