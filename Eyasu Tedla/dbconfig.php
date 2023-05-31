<?php

/*

CREATE TABLE `eazyoasis`.`cars` (`id` INT(11) NOT NULL AUTO_INCREMENT , `img1` LONGBLOB NOT NULL , `img2` LONGBLOB NOT NULL , `img3` LONGBLOB NOT NULL , `img4` LONGBLOB NOT NULL , `seat` INT NOT NULL , `model` VARCHAR NOT NULL , `gsm` VARCHAR NOT NULL , `engine` VARCHAR NOT NULL , `mileage` VARCHAR NOT NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB CHARSET=utf8 COLLATE utf8_general_ci; 


*/

$servername = "localhost";
$username = "root";
$password = "";
$databaseName = "eazyoasis";

$connection = mysqli_connect($servername, $username, $password, $databaseName);

if($connection->connect_error) {
    die("Connection Error " . $connection->connect_error);
}


?>