@echo off

composer install

php artisan key:generate

enable pdo_mysql in php.ini
php artisan migrate

php artisan db:seed

php artisan serve
