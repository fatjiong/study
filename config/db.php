<?php

return [
    'class'       => 'yii\db\Connection',
    'dsn'         => 'mysql:host=mysql;dbname=gblog',
    'username'    => 'root',
    'password'    => '123456',
    'charset'     => 'utf8mb4',
    'tablePrefix' => 'gb_',

    // Schema cache options (for production environment)
    //'enableSchemaCache' => true,
    //'schemaCacheDuration' => 60,
    //'schemaCache' => 'cache',
];
