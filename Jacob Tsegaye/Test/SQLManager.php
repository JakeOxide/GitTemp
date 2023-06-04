<?php

    //PHP Code that controls SQL connections and query executions on behalf of other pages

    // Connection Values and Variables
    $databaseName;
    $connection;
    
    // Functions (Setters and Getters)

    function setDatabaseName($dbname) {
        global $databaseName;
        if(isset($dbname)){
            $databaseName = $dbname;
            echo "DB NAME SET";
        }
        die("Database Name Empty");
    }

    // Connection Management

    function connectDB() {
        global $connection, $databaseName;
        $connection = mysqli_connect('localhost', 'root', '', $databaseName);
        if(!$connection->connect_error){
            return;
        }
            //echo
                //'<script> alert(Connection to the Database Cannot be Created) </script>';
                //return null;
                die("Connection Failed: " . $connection->connect_error);
    }

    function disconnectDB() {
        global $connection;
        if($connection->connect_error){
            return;
        }
        $connection->close();
    }


    // Input Management

    function inputData($fname, $lname, $email, $password) {
        global $connection;
        if($connection->connect_error){
            die("Connection Failed: " . $connection->connect_error);
        }
        $statement = $connection->prepare("INSERT INTO users VALUES (?,?,?,?)");
        $statement->bind_param("ssss", $fname, $lname, $email, $password);
        $statement->execute();
        echo "Record Added Successfully";
        $statement->close();
    }

?>