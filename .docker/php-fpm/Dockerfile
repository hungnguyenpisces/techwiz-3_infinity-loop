# Sử dụng image php:8.1-fpm-alpine
FROM php:8.1-fpm-alpine

ARG DEBIAN_FRONTEND=noninteractive

# Cài đặt những thư viện cần thiết
RUN docker-php-ext-install \
    bcmath \
    pdo_mysql
