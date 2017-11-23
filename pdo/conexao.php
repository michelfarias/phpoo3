<?php

//DSN - Data Source Name
//User
//Senha

$user = "linux";
$pass = "123";
$host = "localhost";
$dbname = "dexterescola";
$dsn = "pgsql: host={$host}; dbname={$dbname}";

$con = new PDO($dsn, $user, $pass);
$con->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
var_dump($con);
?>