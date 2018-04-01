<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Stripe, Mailgun, SparkPost and others. This file provides a sane
    | default location for this type of information, allowing packages
    | to have a conventional place to find your various credentials.
    |
    */

    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
    ],

    'ses' => [
        'key' => env('SES_KEY'),
        'secret' => env('SES_SECRET'),
        'region' => 'us-east-1',
    ],

    'sparkpost' => [
        'secret' => env('SPARKPOST_SECRET'),
    ],

    'stripe' => [
        'model' => App\User::class,
        'key' => env('STRIPE_KEY'),
        'secret' => env('STRIPE_SECRET'),
    ],

    'facebook' => [
        'client_id' => '169661560360882',
        'client_secret' => '1ce01be636961198140bb038b5fb1ca9',
        'redirect' => env('FACEBOOK_REDIRECT'),
    ],
    'google' => [
        'client_id' => '135382734332-lmbdftosul8fel07od56bpccnqljpl0m.apps.googleusercontent.com',
        'client_secret' => 'd2iSOwwEVcaXpmU2sl8WIrvI',
        'redirect' => env('GOOGLE_REDIRECT'),
    ],
    'twitter' => [
        'client_id' => 'QgcbeJ2ymstZ3RHdyDomLhDXD',
        'client_secret' => 'pZTC1UzteuvYImrViiN1hf1Y3wfM1Pfb0oreQmULfLnsHiQa8W',
        'redirect' => env('TWITTER_REDIRECT'),
    ],
    'linkedin' => [
        'client_id' => '78v9mo2s0blrve',
        'client_secret' => 'q511V5YsGPMu1GLh',
        'redirect' => env('LINKEDIN_REDIRECT'),
    ],

];
