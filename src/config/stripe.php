<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Live
    |--------------------------------------------------------------------------
    |
    | When live is set to true your real secret key will be used, otherwise
    | your test secret key will be used.
    |
    */

    'live' => false,

    /*
    |--------------------------------------------------------------------------
    | Stripe Javascript URL
    |--------------------------------------------------------------------------
    |
    | The URL to Stripe.js - you can optionally use this in your view.
    |
    */
   
    'stripe_js_url' => 'https://js.stripe.com/v2/',

    /*
    |--------------------------------------------------------------------------
    | Stripe Secret Key
    |--------------------------------------------------------------------------
    |
    | The live secret key found here:
    | https://dashboard.stripe.com/account/apikeys
    |
    */

    'secret_key' => env('STRIPE_SECRET_KEY'),

    /*
    |--------------------------------------------------------------------------
    | Test Stripe Secret Key
    |--------------------------------------------------------------------------
    |
    | The test secret key found here:
    | https://dashboard.stripe.com/account/apikeys
    |
    */

    'test_secret_key' => env('TEST_STRIPE_SECRET_KEY'),

    /*
    |--------------------------------------------------------------------------
    | Stripe Publishable Key
    |--------------------------------------------------------------------------
    |
    | The live publishable key found here:
    | https://dashboard.stripe.com/account/apikeys
    |
    */

    'publishable_key' => env('STRIPE_PUBLISHABLE_KEY'),

    /*
    |--------------------------------------------------------------------------
    | Test Stripe Publishable Key
    |--------------------------------------------------------------------------
    |
    | The test publishable key found here:
    | https://dashboard.stripe.com/account/apikeys
    |
    */

    'test_publishable_key' => env('TEST_STRIPE_PUBLISHABLE_KEY'),

];
