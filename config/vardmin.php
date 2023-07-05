<?php

declare(strict_types=1);

return [
    'route_prefix' => env('VARDMIN_PREFIX', 'admin'),
    'langs' => explode(',', env('VARDMIN_LANGS', 'en')),
    'registerable' => env('VARDMIN_REGISTER', false),
    'user_class' => \App\Models\User::class
];
