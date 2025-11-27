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

# Configure Apache for Cloud Run (listen on port 8080)
RUN echo "Listen 8080" > /etc/apache2/ports.conf
RUN sed -i 's/80/8080/g' /etc/apache2/sites-available/*.conf
RUN sed -i 's/80/8080/g' /etc/apache2/apache2.conf

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

# Use the PORT environment variable (Cloud Run requirement)
ENV PORT 8080
EXPOSE 8080

# Start Apache on the correct port
CMD sed -i "s/Listen 80/Listen ${PORT}/g" /etc/apache2/ports.conf && \
    sed -i "s/:80/:${PORT}/g" /etc/apache2/sites-available/*.conf && \
    apache2-foreground