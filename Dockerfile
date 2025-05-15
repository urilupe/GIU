# Etapa 1: Node para compilar Vite
FROM node:18-alpine as node

WORKDIR /app

COPY package*.json vite.config.js ./
COPY resources/ resources/
RUN npm install && npm run build

# Etapa 2: PHP + Laravel
FROM php:8.2-fpm

# Instalar dependencias del sistema
RUN apt-get update && apt-get install -y \
    git unzip zip curl libzip-dev && \
    docker-php-ext-install pdo pdo_mysql zip

# Instalar Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Directorio de trabajo
WORKDIR /var/www

# Copiar proyecto Laravel
COPY . .

# Copiar archivos compilados por Vite
COPY --from=node /app/public/build public/build

# Instalar dependencias PHP
RUN composer install --no-dev --optimize-autoloader
RUN apt-get update && apt-get install -y nodejs npm

# Permisos necesarios
RUN chown -R www-data:www-data storage bootstrap/cache && \
    chmod -R 775 storage bootstrap/cache

# Exponer puerto
EXPOSE 8000

# Comando para iniciar Laravel
CMD ["php", "artisan", "serve", "--host=0.0.0.0", "--port=8000"]