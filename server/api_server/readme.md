## Installatie

1) Maak een lege database aan.
2) Prepareer .env file in api_server project.
(Pas DB properties in .env aan op de database die je net gemaakt hebt.)

```
DB_DATABASE=your_db_name
DB_USERNAME=your_db_user
DB_PASSWORD=your_password
```

3) Voer start.cmd uit.
(Deze genereert een APP_KEY in .env, installeert composer dependencies, voert de migraties uit op de zojuist gecreerde database, vult deze vervolgens met data en start als laatste de php server.)


The API server draait nu op `localhost:8000`.