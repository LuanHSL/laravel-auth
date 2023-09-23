# Laravel JWT Authentication Template
This is a Laravel authentication template that uses JSON Web Tokens (JWT) to provide secure and scalable authentication for your application. With this template, you can quickly start building a robust authentication system in your Laravel project.

## Arquitetura

> Requisitos mínimos
- [PHP ^7.4.10](https://www.php.net)
- [Mysql 8](https://www.mysql.com)
- [Composer](https://getcomposer.org)

> Frameworks utilizados
- [Laravel ^7.0](https://laravel.com/docs/7.x)

## Installation
Follow these steps to install and set up the JWT authentication template in your Laravel project:

- Clone this repository to your project directory:
```sh
git clone https://github.com/LuanHSL/laravel-auth.git
```

- Navigate to the project directory:
```sh
cd laravel-auth
```

- Install Composer dependencies:
```sh
composer install
```

- Duplicate the .env.example file and rename the copy to .env
- Change the variables DB_USERNAME and DB_PASSWORD to those referring to your local database
```sh
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=laravel-auth
DB_USERNAME=USERNAME
DB_PASSWORD=PASSWORD
```

-Create tables in the database and populate them with the default data
```sh
php artisan migrate --seed
```

- Generate an application key:
```sh
php artisan key:generate
```

- Run the command to publish the package configuration file:
```sh
php artisan vendor:publish --provider="Tymon\JWTAuth\Providers\LaravelServiceProvider”
```

- Generate a key for you:
```sh
php artisan jwt:secret
```

- Start the development server:
```sh
php artisan serve
```

## Usage
This template provides API endpoints for user registration, login, password updating, and user logout. You can customize and expand these features according to your project's needs.
Additionally, JWT authentication is implemented with middleware, allowing you to protect specific routes in your application:
```sh
Route::group(['middleware' => 'jwt.auth'], function () {
  // Place your routes that will be protected by JWT authentication
});
```
