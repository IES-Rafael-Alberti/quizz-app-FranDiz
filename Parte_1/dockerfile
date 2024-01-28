FROM php:apache

WORKDIR /var/www/html

EXPOSE 80

VOLUME /var/www/html

CMD ["apache2-foreground"]

RUN echo "DirectoryIndex index.php" >> /etc/apache2/apache2.conf