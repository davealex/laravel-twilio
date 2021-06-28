<?php

/*
 * You can place your custom package configuration in here.
 */
return [

    /*
    |--------------------------------------------------------------------------
    | Default Twilio config credentials
    |--------------------------------------------------------------------------
    */

    'auth_token' => env('TWILIO_AUTH_TOKEN'),
    'sid' => env('TWILIO_SID'),

    /*
    |--------------------------------------------------------------------------
    | Twilio service Configurations
    |--------------------------------------------------------------------------
    */

    'services' => [
        'verify' => [
            'sid' => env('TWILIO_VERIFY_SID'),
        ],
        'conversation' => [
            'sid' => env('TWILIO_CONVERSATION_SID'),
        ],
    ],
];