FROM php:8.4-fpm

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

# Install NodeJS
RUN curl -fsSL https://deb.nodesource.com/setup_23.x | bash - \
    && apt-get install -y nodejs \
    && npm install -g npm@latest

# Install Composer
COPY --from=composer:2.6 /usr/bin/composer /usr/bin/composer

# Install Laravel Installer globally
RUN composer global require laravel/installer

# Add Composer's global bin directory to PATH
ENV PATH="$PATH:/root/.composer/vendor/bin"

RUN groupadd -g 1000 user && useradd -m -u 1000 -g user user
USER user

RUN echo 'alias pa="php artisan"' >> ~/.bashrc



# Set working directory
WORKDIR /var/www/html






