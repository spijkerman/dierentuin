@echo off

verifieer enable php_curl.dll
composer install

if not exist .env (
  copy .env.example .env
  voeg server URI toe
  php artisan key:generate
)

php artisan serve
