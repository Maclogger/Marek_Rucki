FROM php:8.2-fpm

# Install required dependencies
RUN apt-get update && apt-get install -y \
  git \
  unzip \
  curl \
  libpng-dev \
  libonig-dev \
  libxml2-dev \
  zip \
  libzip-dev \
  && docker-php-ext-install pdo_mysql mbstring exif pcntl bcmath gd zip

# Install Composer
COPY --from=composer:2.6 /usr/bin/composer /usr/bin/composer

# Install Laravel Installer globally
RUN composer global require laravel/installer

# Add Composer's global bin directory to PATH
ENV PATH="$PATH:/root/.composer/vendor/bin"

# Set working directory
WORKDIR /var/www/html
