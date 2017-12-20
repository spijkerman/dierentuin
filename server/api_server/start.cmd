@echo off

php artisan key:generate

composer install

php artisan migrate

php artisan db:seed

php artisan serve
