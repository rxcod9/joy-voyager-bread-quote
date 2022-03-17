<?php

return [

    /*
     * If enabled for voyager-bread-quote package.
     */
    'enabled' => env('VOYAGER_BREAD_QUOTE_ENABLED', true),

    /*
     * The config_key for voyager-bread-quote package.
     */
    'config_key' => env('VOYAGER_BREAD_QUOTE_CONFIG_KEY', 'joy-voyager-bread-quote'),

    /*
     * The route_prefix for voyager-bread-quote package.
     */
    'route_prefix' => env('VOYAGER_BREAD_QUOTE_ROUTE_PREFIX', 'joy-voyager-bread-quote'),

    /*
    |--------------------------------------------------------------------------
    | Controllers config
    |--------------------------------------------------------------------------
    |
    | Here you can specify voyager controller settings
    |
    */

    'controllers' => [
        'namespace' => 'Joy\\VoyagerBreadQuote\\Http\\Controllers',
    ],
];
