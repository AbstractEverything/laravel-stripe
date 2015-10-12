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
        if (config('stripe.live') == true)
        {
            Stripe::setApiKey(config('stripe.secret_key'));
        }
        
        if (config('stripe.live') == false)
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
        $this->publishAssets();
    }

    /**
     * Publish configuration file.
     *
     * @return void
     */
    protected function publishAssets()
    {
        $this->publishes([
            __DIR__.'/config/stripe.php' => config_path('stripe.php')
        ], 'config');
    }
}