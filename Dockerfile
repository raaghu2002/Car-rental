# Use the official PHP Apache image
FROM php:8.1-apache

# Install necessary PHP extensions if needed (e.g., MySQL)
RUN docker-php-ext-install mysqli pdo pdo_mysql

# Copy project files to the web server root directory
COPY . /var/www/html/

# Set correct permissions for the project files
RUN chmod -R 755 /var/www/html

# Expose port 80 (default HTTP port)
EXPOSE 80

# Start the Apache server (default behavior, no CMD needed for php:apache)
