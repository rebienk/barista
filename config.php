<?php

/**
 * @database - configuration for PDO()
 */

if (!ini_get('display_errors')) {
    ini_set('display_errors', '1');
    define("PRODUCTION", "TRUE");
}else
{
    define("PRODUCTION", "FALSE");
}

    return [
    'database' => [
        'name' => 'S1122010_barista',
        'username' => 'S1122010',
        'password' => 'NsQWgPOE@HV41n',
        'connection' => 'mysql:host=localhost:3306',
        'options' => [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING
        ]
    ]
];
