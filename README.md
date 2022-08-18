# Lumen Form Request

[![Latest Version on Packagist](https://img.shields.io/packagist/v/webregul/lumen-form-request.svg?style=flat-square)](https://packagist.org/packages/webregul/lumen-form-request)
[![Software License](https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square)](LICENSE.md)
[![StyleCI](https://styleci.io/repos/259593361/shield?branch=master)](https://styleci.io/repos/259593361)

Adopt the Laravel Form Request to Lumen framework.
Используется namespace ```Illuminate\Foundation\``` для совместимости со [Scribe](https://scribe.knuckles.wtf/laravel/)

* [Installation](#installation)
* [Usage](#usage)
* [License](#license)

## Installation

You can install the package via composer:

``` bash
composer require webregul/lumen-form-request
```

Register the service provider in your `boostrap/app.php` configuration file:

```php
$app->register(Illuminate\Foundation\Providers\FormRequestServiceProvider::class);
```

## Usage

Let's continue the official [Laravel's documantation](https://laravel.com/docs/8.x/validation).

По дефолту добавлены кастомизированные сообщения об ошибках. Для их отключения в Request классе объявить: 
```php
public static bool $disableDefaultMessages = false;
```
либо использовать метод ```messages()``` 
Для добавления собственных ошибок без отключения дефолтных:
```php
public static array $messages = [
    'rule' => 'custom message'; //будет добавлено к сообщениям, либо заменит дефолтное при совпадении правила
];
```


## License

This package is licensed under [The MIT License (MIT)](LICENSE).
