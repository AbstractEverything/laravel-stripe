# Laravel Stripe

This is a simple service provider to make setting up stripe easy. The provided config file makes it easy to switch between live and test mode.

## Install

Make sure you you have the [https://github.com/stripe/stripe-php](stripe-php) package installed then run `composer require abstracteverything/laravel-stripe` or add:

    {
        "require": {
            "abstracteverything/laravel-stripe": "dev-master"
        }
    }

to your `composer.json` file and run `composer update`.

Export the included config file using `php artisan vendor:publish`.