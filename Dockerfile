FROM php:8.2-fpm

# Instalar extensiones necesarias
RUN apt-get update && apt-get install -y \
    git unzip curl libzip-dev zip && \
    docker-php-ext-install zip pdo pdo_mysql

# Instalar Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Establecer directorio de trabajo
WORKDIR /var/www

# Copiar los archivos del proyecto
COPY . .

# Instalar dependencias
RUN composer install --no-dev --optimize-autoloader

# Instalar y compilar assets con Vite
RUN npm install && npm run build


# Establecer permisos (necesario para Laravel)
RUN chown -R www-data:www-data /var/www/storage /var/www/bootstrap/cache


# Puerto expuesto
EXPOSE 8000

# Comando para iniciar Laravel con servidor embebido
CMD ["php", "artisan", "serve", "--host=0.0.0.0", "--port=8000"]