# Use the official PHP image as a base
FROM php:8.1-fpm

# Install system dependencies
RUN apt-get update && \
    apt-get install -y \
    git \
    unzip \
    libpq-dev \
    libjpeg-dev \
    libpng-dev \
    libfreetype6-dev \
    libzip-dev \
    zip \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install -j$(nproc) gd pdo pdo_mysql pdo_pgsql zip

# Set the working directory in the container
WORKDIR /var/www/html

# Install Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Install PHP dependencies
RUN composer install

# Copy the rest of the application code to the container
COPY . .

# Install Node.js and npm
RUN apt-get update && \
    apt-get install -y \
    nodejs \
    npm

# Install npm dependencies and build assets
RUN npm install && \
    npm run dev

# Expose port 8000 and start Laravel server
EXPOSE 8000
CMD ["php", "artisan", "serve", "--host", "0.0.0.0", "--port", "8000"]