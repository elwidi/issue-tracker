# Laravel + Nginx

Using Exisitng DB

Dockerized. Build with Laravel 8 (PHP 7.4)+ Yajra Datatables + Nginx + MySQL + PHPMyAdmin

Run in dev environment : 
- Makesure you have Docker installed
- Build an Image using Dockerfile on Image/PHP
- Docker compose using docker-compose.yml
- Run composer install on docker service console
- Run cp .env.example .env
- Run php artisan key:generate
- Run chown -R www-data:www-data /var/www
- Run chmod -R 755 /var/www/storage
