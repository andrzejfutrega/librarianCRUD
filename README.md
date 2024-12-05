<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

![image](public/ss1.PNG)
## Description
This is a web-based Library Management System built using the Laravel framework. The application allows to manage books, readers, loans and libraries efficiently, providing essential CRUD functionality to organize and maintain library resources.
## Clone the repository
Start by cloning the repository to your local machine.

## Install Dependencies
Use Composer to install the PHP dependencies for the project
```
composer install
```
## Set Up Environment File
```
cp .env.example .env
```
## Generate Application Key
Laravel requires an application key to be set. This can be generated by running:
```
php artisan key:generate
```

## Set Up the Database
* Create a new database in MySQL
* Update the .env file with your database credentials:
```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=your_database_name
DB_USERNAME=your_database_user
DB_PASSWORD=your_database_password
```
## Run Migrations
After setting up the database, run the migrations to create the necessary tables:
```
php artisan migrate
```
## Seed the Database
To add some sample data to the application (books, readers, etc.), run the database seeders:
```
php artisan db:seed
```
##  Run the Application
Now you can run the application using Laravel's built-in development server:
```
php artisan serve
```
