FROM php:8.0-apache

# Install dependencies
RUN apt-get update && apt-get install -y \
    libpng-dev \
    libonig-dev \
    libxml2-dev \
    zip \
    unzip \
    && docker-php-ext-install pdo_mysql mbstring exif pcntl bcmath gd

#install composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Copy source code
COPY . /var/www/html

# Set working directory
WORKDIR /var/www/html

# copy apache vhost file to proxy php requests to php-fpm container
COPY ./docker/apache2/vhost.conf /etc/apache2/sites-available/000-default.conf

#run composer dependencies
RUN composer install --no-dev --no-scripts --no-autoloader && \
    composer dump-autoload --optimize

#cp .env.example .env
RUN cp .env.example .env

#generate laravel key
RUN php artisan key:generate

#link to storage
RUN php artisan storage:link

#change ownership
RUN chown -R www-data:www-data /var/www/html
RUN chmod 777 /var/www/html

#change environment database
ENV APP_NAME=Luxspace
ENV DB_CONNECTION=mysql
ENV DB_HOST=34.173.2.254
ENV DB_PORT=3306
ENV DB_DATABASE=luxspace-new
ENV DB_USERNAME=luxspace-new
ENV DB_PASSWORD=Yogi1551!

#set permissions for storage and bootstrap/cache
RUN chown -R www-data:www-data /var/www/html/storage
RUN chown -R www-data:www-data /var/www/html/bootstrap/cache
RUN chmod 777 /var/www/html/storage
RUN chmod 777 /var/www/html/bootstrap/cache
        
# Enable apache rewrite module
RUN a2enmod rewrite

# Expose port 80
EXPOSE 80

# Start Apache
CMD ["apache2-foreground"]
