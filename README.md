# Laravel Simple Ticket
Simple ticket system with Laravel 9 and Voyager Admin

## Quick starting guide

### Clone this repository

`$ https://github.com/foldesistudio/laravel-simple-ticket.git
`
### Install dependencies and build the front-end theme assets

`$ composer install`

`$ npm install && npm run build && npm run dev`

Rename '.env.example' file to '.env' at the project root folder.

`$ cp .env.example .env`

Next make sure to create a new database _(collation: utf8mb4_unicode_ci)_ and add your database credentials to your .env file, you will also want to add your application URL in the APP_URL variable.

### Generate Application 

`$ php artisan key:generate`


### Set up database tables and seed default records

`$ php artisan voyager:install --with-dummy`

### This project came with predefined admin

URL: 

`/admin/`

* email: admin@admin.com
* password: password  

## Minimum Requirements
This app made with the following development systems:

* Laravel v9.20.0
* PHP v8.1.7
* MySQL v5.7.33
