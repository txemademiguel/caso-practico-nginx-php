FROM php:8.2-fpm
 
RUN apt-get update && apt-get install -y \
    nginx \
    && rm -rf /var/lib/apt/lists/*
 
COPY nginx/default.conf /etc/nginx/sites-available/default
COPY src/ /var/www/html/
 
EXPOSE 80
 
CMD ["sh", "-c", "php-fpm -D && nginx -g 'daemon off;'"]
