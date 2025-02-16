<?php

return [
    'host' => env('REVERB_HOST', 'localhost'),
    'port' => env('REVERB_PORT', 8080),
    'scheme' => env('REVERB_SCHEME', 'http'),
    'app_id' => env('REVERB_APP_ID'),
    'app_key' => env('REVERB_APP_KEY'),
    'app_secret' => env('REVERB_APP_SECRET'),
    'ssl' => [
        'cert' => env('REVERB_SSL_CERT'),
        'key' => env('REVERB_SSL_KEY'),
    ],
];
