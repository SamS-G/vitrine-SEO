<?php
return [
    'paths' => ['api/*', 'sanctum/csrf-cookie', 'resources/css/*', 'resources/js/*'],
    'allowed_methods' => ['*'],
    'allowed_origins' => ['*'], // Ajuste avec ton domaine si nécessaire
    'allowed_origins_patterns' => [],
    'allowed_headers' => ['*'],
    'supports_credentials' => false,
];
