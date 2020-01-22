<?php

require_once 'vendor/autoload.php';

use App\MySQLiDB;

//$db = new MySQLiDB('localhost', 'root', '123456', 'travninja');
$db = new MySQLiDB([
    'host' => 'localhost',
    'username' => 'root',
    'password' => '123456',
    'dbname' => 'permissions'
]);

$db->update('roles', [
    'dummy' => $db->dec(150)
]);
//$mysqli = new mysqli('localhost', 'root', '123456', 'travninja');
//$db = new MySQLiDB($mysqli);
//$db = new MySQLiDB();

//print_r($db->getOne('users'));