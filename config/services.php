<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Mailgun, Postmark, AWS and more. This file provides the de facto
    | location for this type of information, allowing packages to have
    | a conventional file to locate the various service credentials.
    |
    */

    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
        'endpoint' => env('MAILGUN_ENDPOINT', 'api.mailgun.net'),
    ],

    'postmark' => [
        'token' => env('POSTMARK_TOKEN'),
    ],

    'ses' => [
        'key' => env('AWS_ACCESS_KEY_ID'),
        'secret' => env('AWS_SECRET_ACCESS_KEY'),
        'region' => env('AWS_DEFAULT_REGION', 'us-east-1'),
    ],

    'facebook' => [
 
        'client_id' => '3648256615196190', //Facebook API
      
        'client_secret' => 'df861efd88022451c036bf4d3602cddc', //Facebook Secret
      
        'redirect' => 'https://yoc.com.pk/login/facebook/callback',
      
     ],
     
     'google' => [
        'client_id' => '855157156964-0muvsfvsoohmel4915jnqk3dieoepe1i.apps.googleusercontent.com',
        'client_secret' => 'pdh7zYatT4qnIrMBt7FRZ23a',
        'redirect' => 'https://yoc.com.pk/login/google/callback',
    ],
];
