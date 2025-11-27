FROM php:8.2-apache

# Install system dependencies and PHP extensions
RUN apt-get update && apt-get install -y \
    libpng-dev \
    libonig-dev \
    libxml2-dev \
    zip \
    unzip \
    git \
    curl \
    && docker-php-ext-install pdo pdo_mysql mysqli gd mbstring exif

# Enable Apache modules
RUN a2enmod rewrite

# Copy the THREE elements to /var/www/html/
COPY application/ /var/www/html/application/
COPY public/ /var/www/html/public/
COPY .htaccess /var/www/html/.htaccess

# Set proper permissions
RUN chown -R www-data:www-data /var/www/html

# Create temporary directories for Cloud Run
RUN mkdir -p /tmp/cache /tmp/uploads /tmp/sessions
RUN chmod 755 /tmp/cache /tmp/uploads /tmp/sessions

# Increase PHP limits for file uploads
RUN echo "upload_max_filesize = 20M" >> /usr/local/etc/php/conf.d/uploads.ini
RUN echo "post_max_size = 20M" >> /usr/local/etc/php/conf.d/uploads.ini
RUN echo "max_execution_time = 120" >> /usr/local/etc/php/conf.d/uploads.ini

EXPOSE 80