## Installatie
1) Open Command Prompt in api_client project.
2) Verifieer dat php_curl.dll in php.ini is enabled.
3) Voer `composer install` uit.
4) Kopieer .env.example en hernoem naar .env.
5) Voer `php artisan key:generate` uit.
6) Verander `localhost` in de BASE_URL in AnimalController.php naar het ip van de api_server. (Deze wordt gegeven)
7) Start de api_client door `php artisan server` uit te voeren.

The API client draait nu op `localhost:8000`.
