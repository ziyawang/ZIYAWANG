<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Stripe, Mailgun, Mandrill, and others. This file provides a sane
    | default location for this type of information, allowing packages
    | to have a conventional place to find your various credentials.
    |
    */

    'mailgun' => [
<<<<<<< HEAD
        'domain' => '',
        'secret' => '',
    ],

    'mandrill' => [
        'secret' => '',
    ],

    'ses' => [
        'key'    => '',
        'secret' => '',
=======
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
    ],

    'mandrill' => [
        'secret' => env('MANDRILL_SECRET'),
    ],

    'ses' => [
        'key'    => env('SES_KEY'),
        'secret' => env('SES_SECRET'),
>>>>>>> 41aa23a07d02027e49ea70a65c2d9a47bbb0f18d
        'region' => 'us-east-1',
    ],

    'stripe' => [
        'model'  => App\User::class,
<<<<<<< HEAD
        'key'    => '',
        'secret' => '',
=======
        'key'    => env('STRIPE_KEY'),
        'secret' => env('STRIPE_SECRET'),
>>>>>>> 41aa23a07d02027e49ea70a65c2d9a47bbb0f18d
    ],

];
