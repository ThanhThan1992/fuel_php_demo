<?php

/**
 * The development database settings. These get merged with the global settings.
 */
return array(
    'default' => array(
        'type' => 'pdo',
        'connection' => array(
            'dsn' => 'mysql:host=localhost;dbname=fuel',
            'username' => 'root',
            'password' => '',
        ),
//        'connection' => array(
//            'dsn' => 'pgsql:host=localhost;dbname=TEST',
//            'username' => 'postgres',
//            'password' => 'root',
//            'persistent' => false,
//            'compress' => false,
//        ),
        'identifier' => '',
        'table_prefix' => '',
        'charset' => NULL,
        'enable_cache' => true,
        'profiling' => false,
    ),
);
