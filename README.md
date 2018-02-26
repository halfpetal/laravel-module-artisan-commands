# Laravel Artisan Commands
[![Total Downloads](https://poser.pugx.org/halfpetal/laravel-artisan-commands/downloads)](https://packagist.org/packages/halfpetal/laravel-artisan-commands)
[![Latest Stable Version](https://poser.pugx.org/halfpetal/laravel-artisan-commands/version)](https://packagist.org/packages/halfpetal/laravel-artisan-commands)
[![License](https://poser.pugx.org/halfpetal/laravel-artisan-commands/license)](https://packagist.org/packages/halfpetal/laravel-artisan-commands)

## Supported Versions
| Laravel Version 	| Tested            	| Working           	|
|-----------------	|-------------------	|-------------------	|
| v5.6            	| :heavy_check_mark: 	| :heavy_check_mark: 	|
| v5.5            	| :heavy_check_mark: 	| :heavy_check_mark: 	|

## About
Laravel Artisan Commands makes new commands available through `php artisan` that could prove helpful to you throughout your development process.

## Installation
```php
composer require halfpetal/laravel-artisan-commands
```

If you use Laravel 5.5+, you have nothing else to do. If not, add our service provider to `config/app.php`
```php
'providers' => [
    ...
    Halfpetal\Laravel\ArtisanCommands\ArtisanCommandServiceProdiver,
    ...
];
```

## Commands

### `make:observer`
We aren't sure why this one is not in Laravel by default. It's very useful and we've needed it on countless occasions.

#### Arguments
`name` - The class name
`model` - The model for the observer to use.
`namespace` (_optional_) - The application namespace. The default will be used.

### `route:simplelist`
The default `route:list` can be so cluttered. This on is a simplified version of that.


## Thanks
Huge thanks to Jordan Dalton over at [Larastream](https://larastream.com) for the final kick in the ass to do this package.