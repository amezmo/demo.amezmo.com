<?php

return [
    // Other code omitted
    'default' => 'local'
    'disks' => [

        'local' => [
            'driver' => 'local',
            'root' => '/webroot/storage',
            'permissions' => [
                'file' => [
                    'public' => 0664,
                    'private' => 0664,
                ],
                'dir' => [
                    'public' => 0700,
                    'private' => 0700,
                ],
            ],
        ],

        'public' => [
            'driver' => 'local',
            'root' => '/webroot/storage/public',
            'url' => env('APP_URL').'/storage',
            'visibility' => 'public',
            'permissions' => [
                'file' => [
                    'public' => 0664,
                    'private' => 0664,
                ],
                'dir' => [
                    'public' => 0700,
                    'private' => 0700,
                ],
            ],
        ],
    ],

];
