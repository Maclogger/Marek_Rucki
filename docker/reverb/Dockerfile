FROM php:8.4-cli

RUN apt-get update && apt-get install -y \
    git \
    curl \
    libzip-dev \
    zip \
    unzip

# Inštalácia PHP extensions vrátane pcntl
RUN docker-php-ext-install zip pdo pdo_mysql sockets pcntl

# Inštalácia Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

WORKDIR /var/www/html

# Vytvorenie používateľa s rovnakými právami ako v hlavnom kontajneri
RUN groupadd -g 1000 user && useradd -m -u 1000 -g user user
USER user

CMD ["php", "artisan", "reverb:start"]
