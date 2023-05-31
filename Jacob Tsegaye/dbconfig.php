<?php

// DB Config

$servername = 'localhost';
$username = 'root';
$password = '';
$database = 'imgisolated';

$connection = mysqli_connect($servername, $username, $password, $database);

if($connection->connect_error) {
    die("Error Connecting to Database: " . $connection->connect_error);
}


?>