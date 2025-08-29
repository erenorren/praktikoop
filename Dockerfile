# Gunakan official PHP image dengan Apache
FROM php:8.2-apache
# Salin file PHP ke direktori web
COPY . /var/www/html/
# (Opsional) Tambahkan ekstensi PHP jika diperlukan
# RUN docker-php-ext-install mysqli pdo pdo_mysql
# Expose port 80 (default untuk Apache)
EXPOSE 7860
# Server akan otomatis dijalankan oleh Apache
RUN sed -i 's/80/7860/g' /etc/apache2/ports.conf /etc/apache2/sites-enabled/000-default.conf
CMD ["apache2-foreground"]
