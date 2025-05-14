FROM php:8.2-cli

# Install any PHP extensions you might need here

# Copy your app files
COPY . /var/www/html
WORKDIR /var/www/html

# Start PHP server on port 10000
CMD ["php", "-S", "0.0.0.0:10000"]
