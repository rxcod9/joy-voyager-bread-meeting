<?php

return [

    /*
     * If enabled for voyager-bread-meeting package.
     */
    'enabled' => env('VOYAGER_BREAD_MEETING_ENABLED', true),

    /*
     * The config_key for voyager-bread-meeting package.
     */
    'config_key' => env('VOYAGER_BREAD_MEETING_CONFIG_KEY', 'joy-voyager-bread-meeting'),

    /*
     * The route_prefix for voyager-bread-meeting package.
     */
    'route_prefix' => env('VOYAGER_BREAD_MEETING_ROUTE_PREFIX', 'joy-voyager-bread-meeting'),

    /*
    |--------------------------------------------------------------------------
    | Controllers config
    |--------------------------------------------------------------------------
    |
    | Here you can specify voyager controller settings
    |
    */

    'controllers' => [
        'namespace' => 'Joy\\VoyagerBreadMeeting\\Http\\Controllers',
    ],
];
