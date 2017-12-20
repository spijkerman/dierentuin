## Installatie

1) Maak een lege MYSQL database aan.
2) Verifieer dat php_curl.dll in php.ini is enabled.
3) Voer `composer install` uit.
4) Kopieer .env.example en hernoem naar .env.
5) Pas DB properties in .env aan op de database die je net gemaakt hebt:

```
DB_DATABASE=your_db_name
DB_USERNAME=your_db_user
DB_PASSWORD=your_password
```

6) Voer `php artisan key:generate` uit.
7) Verifieer dat pdo_mysql in php.ini is enabled.
8) Voer `php artisan migrate` uit om de tabellen in de database aan te maken.
9) Voer `php artisan db:seed` uit om de database te vullen met data.
10) Voer `php artisan serve` uit om de api server te starten.

The API server draait nu op `localhost:8000`.