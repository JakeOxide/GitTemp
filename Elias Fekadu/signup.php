<?php

if(isset($_POST['send'])){
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $password = $_POST['password'];

}
$servername='localhost';
$serveruser='root';
$serverpass='';
$databaseName='php2';

$connection;


connectDB();
inputData($fname,$lname,$email,$passowrd);


function connectDB(){

    global $connection,$databaseName,$servername,$serveruser,$serverpass;

    $connection = mysqli_connect($servername,$serveruser,$serverpass,$databaseName);
    if(!$connection->connect_error){
        return;
    }

    die("connection failed:" . $connection->connect_error);
}

function inputData($fname,$lname,$email,$passowrd){
    global $connection;
    if($connection->connect_error){
        die("connection failed:" . $connection->connect_error);

    }
    $statement=$connection->prepare("INSERT INTO users VALUES (?,?,?,?,?,?,?,?)");
    $statement=bind_param("sssi"$fname,$lname,$email,$passowrd);
    $statement->execute();
    echo "Record Added Successfully!";
    $statement->close();
    $connection->close();

}


?>