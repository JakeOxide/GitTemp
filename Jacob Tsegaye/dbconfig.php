<?php

// DB Config

$servername = 'localhost';
$username = 'root';
$password = '';
$databaseName = "loadout_test";




$connection;



    function connectDB() {
        global $connection, $servername, $username, $password, $databaseName ;
        $connection = mysqli_connect($servername, $username, $password, $databaseName);
        
        if($connection->connect_error) {
            die("Error Connecting to Database: " . $connection->connect_error);
        }
        
        return $connection;
    }


    function disconnectDB() {
        global $connection;
        if($connection->connect_error){
            return;
        }
        $connection->close();
    }

    function validateLogin($email, $password) {
        connectDB();
        global $connection;
        $valid = false;
        $result = $connection->query("SELECT `password` FROM `users` WHERE `email` = '$email'");
        if($result->num_rows <= 0) {
            disconnectDB();
            return $valid;  //mysqli_num_rows())
        }                       
        while($row = $result->fetch_assoc()){
            if($row['password'] == $password) {
                $valid = true;
            }
        }
        disconnectDB();
        return $valid;
    }

    function getCurrentBalance($email) {
        connectDB();
        global $connection;
        $curBalance = 0;
        $result = $connection->query("SELECT `curBalance` FROM `users` WHERE `email` = '$email'");

        while($row = $result->fetch_assoc()) {
            $curBalance = $row['curBalance'];
        }
        disconnectDB();
        return $curBalance;
    }
    function getuserData($email) {
        connectDB();
        global $connection;
        $result = $connection->query("SELECT `fname`, `curBalance` FROM `users` WHERE `email` = '$email'");
        disconnectDB();
        return $result;
    }






// Queries


// Test
/* 
INSERT INTO `users`(`id`, `fname`, `lname`, `email`, `password`, `curBalance`) VALUES ('','Admin','Qwerty','admin@a.com','admin','1356');
INSERT INTO `users`(`id`, `fname`, `lname`, `email`, `password`, `curBalance`) VALUES ('','Qwerty','Tester','qwerty@b.com','qwerty','1243');
INSERT INTO `users`(`id`, `fname`, `lname`, `email`, `password`, `curBalance`) VALUES ('','User','Local','user@c.com','user','936'); */

?>