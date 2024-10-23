# Usar a imagem base PHP 8.2 com FPM
FROM php:8.2-fpm

# Instalar dependências do sistema necessárias e Nginx
RUN apt-get update && apt-get install -y \
    nginx \
    git \
    zip \
    unzip \
    curl \
    sudo

# Instalar Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Definir diretório de trabalho
WORKDIR /var/www/html

# Copiar os arquivos do projeto para o container
COPY . .

# Conceder permissões totais ao diretório do projeto
RUN chmod -R 777 /var/www/html

# Instalar dependências do Composer
RUN composer install --working-dir=/var/www/html --optimize-autoloader

# Copiar o arquivo de configuração do Nginx
COPY nginx/default.conf /etc/nginx/conf.d/default.conf

# Expor a porta 80 para o Nginx
EXPOSE 80

# Comando para iniciar tanto o Nginx quanto o PHP-FPM
CMD service nginx start && php-fpm
