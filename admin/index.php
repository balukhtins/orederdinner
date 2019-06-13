<?php

$host = 'localhost';
$user = 'root';
$password = '';
$dbName = 'dinner';

$link = mysqli_connect($host, $user, $password, $dbName);
mysqli_query($link, "SET NAMES 'utf8'");

include 'viev.php';

