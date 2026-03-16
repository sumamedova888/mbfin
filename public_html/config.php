<?php
/**
 * Hostinger deployment configuration template.
 *
 * 1) Copy .env.example to .env
 * 2) Fill in the correct Hostinger values
 * 3) Keep real credentials out of git
 */

return [
    'db' => [
        'host' => getenv('HOSTINGER_DB_HOST') ?: 'localhost',
        'port' => getenv('HOSTINGER_DB_PORT') ?: '3306',
        'name' => getenv('HOSTINGER_DB_NAME') ?: '',
        'user' => getenv('HOSTINGER_DB_USER') ?: '',
        'password' => getenv('HOSTINGER_DB_PASSWORD') ?: '',
    ],
    'app_url' => getenv('APP_URL') ?: 'https://your-new-domain.com',
];
