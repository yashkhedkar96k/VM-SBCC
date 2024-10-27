<?php

return [

    // Other configurations...

    /*
    |--------------------------------------------------------------------------
    | Application Service Providers
    |--------------------------------------------------------------------------
    |
    | Here you may list your application's service providers.
    |
    */

    

    /*
    |--------------------------------------------------------------------------
    | Class Aliases
    |--------------------------------------------------------------------------
    |
    | Here you may define your class aliases for the application.
    |
    */


    // Other configurations...

    'cipher' => 'AES-256-CBC',

    'key' => env('APP_KEY'),

'previous_keys' => array_filter(
    explode(',', env('APP_PREVIOUS_KEYS', ''))
),


    /*
    |--------------------------------------------------------------------------
    | Maintenance Mode Driver
    |--------------------------------------------------------------------------
    |
    | These configuration options determine the driver used to determine and
    | manage Laravel's "maintenance mode" status. The "cache" driver will
    | allow maintenance mode to be controlled across multiple machines.
    |
    | Supported drivers: "file", "cache"
    |
    */

    'maintenance' => [
        'driver' => env('APP_MAINTENANCE_DRIVER', 'file'),
        'store' => env('APP_MAINTENANCE_STORE', 'database'),
    ],
];
