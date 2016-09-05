# Laravel-Facebook

A simple Laravel service provider for the Facebook Graph SDK

## Installation

First, include the library with Composer:

```sh
composer config repositories.laravel-facebook vcs https://github.com/stratedge/laravel-facebook.git
composer require stratedge/laravel-facebook:dev-master
```

Next, add the service provider to your `config/app.php` file:

```php
Stratedge\LaravelFacebook\FacebookServiceProvider::class,
```

Finally, add `FB_APP_ID`, `FB_APP_SECRET`, and `FB_GRAPH_VERSION` to your `.env` file.

## Instantiation

Resolve a new instance of the Facebook client through the Laravel service container:

```php
$fb = app(\Facebook\Facebook::class);
```
