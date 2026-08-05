<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Church display name
    |--------------------------------------------------------------------------
    |
    | Used in page titles, navigation, footer, and other public-facing copy.
    | Must live in config (not env() in views) so it works with config:cache.
    |
    */

    'name' => env('CHURCH_NAME', env('APP_NAME', 'Church')),

    /*
    |--------------------------------------------------------------------------
    | Church city / location
    |--------------------------------------------------------------------------
    */

    'city' => env('CHURCH_CITY', ''),

    /*
    |--------------------------------------------------------------------------
    | Admin panel allow-list
    |--------------------------------------------------------------------------
    |
    | Comma-separated list of email addresses permitted to access Filament.
    | Example: ADMIN_USERS="admin@example.com,editor@example.com"
    |
    */

    'admin_users' => env('ADMIN_USERS', ''),

];
