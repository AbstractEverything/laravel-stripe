# Laravel Stripe

A Laravel service provider for [https://github.com/stripe/stripe-php](stripe/stripe-php).

Set [https://dashboard.stripe.com/account/apikeys](Stripe API keys) in your .env file:

STRIPE_SECRET_KEY
TEST_STRIPE_SECRET_KEY
STRIPE_PUBLISHABLE_KEY
TEST_STRIPE_PUBLISHABLE_KEY

## Install

Run `composer require abstracteverything/laravel-stripe` or add:

    {
        "require": {
            "abstracteverything/laravel-stripe": "dev-master"
        }
    }

to your `composer.json` file and run `composer update`.

Add `AbstractEverything\LaravelStripe\LaravelStripeServiceProvider::class` to your providers array.

Export the included config file using `php artisan vendor:publish`.