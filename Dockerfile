FROM laravelsail/php82-composer

# Instalar dependencias del sistema
RUN apt-get update && apt-get install -y \
    git unzip zip && \
    docker-php-ext-install zip pdo pdo_mysql

# Directorio de trabajo
WORKDIR /var/www

# Copiar proyecto
COPY . .

# Instalar dependencias PHP
RUN composer install --no-dev --optimize-autoloader

# Instalar dependencias JS y compilar con Vite
RUN npm install && npm run build

# Permisos necesarios
RUN chown -R www-data:www-data /var/www/storage /var/www/bootstrap/cache
RUN chmod -R 775 /var/www/storage /var/www/bootstrap/cache

# Exponer puerto Laravel
EXPOSE 8000

# Comando de arranque
CMD ["php", "artisan", "serve", "--host=0.0.0.0", "--port=8000"]