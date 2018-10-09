# Laravel + Vue.js

Project is written on [Laravel 5.7](https://laravel.com/). 
It provides REST API and vue components.

## Getting Started

These instructions will help to set up and running the project. 

### Server Requirements

```
PHP >= 7.1.3
OpenSSL PHP Extension
PDO PHP Extension
Mbstring PHP Extension
Tokenizer PHP Extension
XML PHP Extension
MySQL 
```

### Deployment

To install the project packages on the server run:

```
composer install --no-dev
```

on local machine:

```
composer install
php artisan vendor:publish --provider="Barryvdh\LaravelIdeHelper\IdeHelperServiceProvider" --tag=config
php artisan ide-helper:generate
npm install
```

Link the **Storage**

```
php artisan storage:link
```

Create the **Database Tables** and run **Seeders**

```
php artisan migrate
composer dump-autoload
php artisan db:seed
```

## License

This project is licensed under the MIT License.