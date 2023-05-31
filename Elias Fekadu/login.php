<?php

if(isset($_POST['send'])){
    $emaillogin = $_POST['emaillogin'];
    $passowrdlogin = $_POST['passwordlogin'];

}


$servername='localhost';
$serveruser='root';
$serverpass='';
$databaseName='php2';


$connection;


connectDB();
fetchData($emaillogin);



function connectDB(){

    global $connection,$databaseName,$servername,$serveruser,$serverpass;

    $connection = mysqli_connect($servername,$serveruser,$serverpass,$databaseName);
    if(!$connection->connect_error){
        return;
    }

    die("connection failed:" . $connection->connect_error);
}

function fetchData($emaillogin){

    global $connection;
    if(!isset($connection)){
        connectDB();
        if($connection->connect_error){
            die("connection failed:" . $connection->connect_error);
        }
    }

    $statement = "SELECT * FROM users WHERE email='$emaillogin'";
    $result = mysqli_query($connection, $statement);
    if($result->num_rows <=0){
        die("No reslut returned");

    }
    while($row = $result->fetch_assoc()){
        echo "<br>" . 
        "Fname______" . $row["fname"]."<br>".
        "Lname______" . $row["lname"]."<br>".
        "Month______" . $row["month"]."<br>".
        "Day______" . $row["day"]."<br>".
        "Year______" . $row["year"]."<br>".
        "Email______" . $row["email"]."<br>".
        "Password______" . $row["password"]."<br>";

        if($row['password']) == $passowrdlogin{
            echo "Login successful!"
        }

    }
}

?>