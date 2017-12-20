@echo off

if not exist .env (
  copy .env.example .env
  php artisan key:generate
)

composer install

php artisan serve
