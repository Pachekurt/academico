<?php

use Illuminate\Database\Capsule\Manager as Database;

$conexion = new Database;
$conexion->addConnection([
    'driver'    => 'mysql',
    'host'      => DB_HOST,
    'database'  => DB_NAME,
    'username'  => DB_USER,
    'password'  => DB_PASSWORD,
    'charset'   => DB_CHARSET,
    'collation' => 'utf8_unicode_ci'
]);
$conexion->setAsGlobal();
$conexion->bootEloquent();
