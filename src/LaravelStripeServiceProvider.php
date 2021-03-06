<?php

namespace AbstractEverything\LaravelStripe;

use Illuminate\Support\ServiceProvider;
use Stripe\Stripe;

class LaravelStripeServiceProvider extends ServiceProvider
{
    protected $defer = false;

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        if (config('stripe.live') === true)
        {
            Stripe::setApiKey(config('stripe.secret_key'));
        }
        else
        {
            Stripe::setApiKey(config('stripe.test_secret_key'));
        }
    }

    /**
     * Perform post-registration booting of services.
     *
     * @return void
     */
    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__.'/config/stripe.php' => config_path('stripe.php'),
            ], 'stripe');
        }
    }
}