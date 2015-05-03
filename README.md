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

3. Run command **composer du** and **composer update**

## Commands

#### Crud command:

```
php artisan crud:generate crud-name --fields="name:string, email:string, phone:integer, message:text"
```

#### Others individual command:

For controller generator: 

```
php artisan crud:controller NameController --crud-name="Name"
```

For controller generator: 

```
php artisan crud:controller NameController --crud-name="Name"
```

For model generator: 

```
php artisan crud:model Name --fillable="['name', 'email', 'message']"
```

For migration generator: 

```
php artisan crud:migration migration-name --fields="name:string, email:string, phone:integer, message:text"
```

For view generator: 

```
php artisan crud:view view-crud-name --fields="name:string, email:string, phone:integer, message:text"
```

##Author

<a href="http://www.sohelamin.com">Sohel Amin</a>
