# Laravel5 Crud Generator
Laravel CRUD Generator

## Installation

1. Put these files into laravel directory same as github hierarchy.
2. Add service provide on **/config/app.php** file.
  ```php
  'providers' => [
	...
 
	'App\Providers\AppzcoderCrudGeneratorServiceProvider',
	```

3. Run command **composer du" and **composer update**

## Commands

php artisan crud:generate crud-name --fields="name:string, email:string, phone:integer, message:text"

## Author

Sohel Amin
