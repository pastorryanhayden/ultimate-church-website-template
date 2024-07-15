<?php

return [
    'disks' => [
        'vultr' => [
            'driver' => 's3',
            'key' => env('VULTR_ACCESS_KEY'),
            'secret' => env('VULTR_SECRET_KEY'),
            'region' => env('VULTR_REGION'),
            'bucket' => env('VULTR_BUCKET'),
            'endpoint' => env('VULTR_ENDPOINT'),
        ],
    ],
];
