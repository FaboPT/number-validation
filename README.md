# Phone Number test

## Requirements

- [composer](https://getcomposer.org/download/)
- PHP >= 7.3
- Sqlite3 PHP connector

## Info

- [Laravel 8 Info](https://laravel.com/docs/8.x/installation)

## Installation/Configuration

### Install dependencies

```
composer install
```

### copy .env.example to .env

Change database configurations

```
DB_DATABASE=/absolute/path/project/sample.db
``` 

#### Generate APP Key

```
php artisan key:generate
```

#### Run server

```
php artisan serve
```

#### Open browser http://localhost:8000
