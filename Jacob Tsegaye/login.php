
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post"> <!-- <?php //echo $_SERVER['REQUEST_URI'] ?> -->
        <label for="email">Email</label>
        <input type="email" name="email" id="email">
        <label for="password">Password</label>
        <input type="password" name="password" id="password">
        <input type="submit" name="btn_login" value="Submit">
    </form>

    <?php

    require_once("dbconfig.php");

        if(isset($_POST['btn_login'])) {
            if(isset($_POST['email']) && isset($_POST['password'])) {
                $inp_email = $_POST['email'];
                $inp_password =$_POST['password'];
                connectDB();
                $validatedLogin = validateLogin($inp_email, $inp_password);
                if($validatedLogin){
                    session_start();
                    $result = getuserData($inp_email);
                    while($row = $result->fetch_assoc()){
                        $_SESSION['userFname'] = $row['fname'];
                        $_SESSION['userBalance'] = $row['curBalance'];
                    }
                    header('location: Homepage/index.php');
                }            
                else {
                    session_start();
                    session_unset();
                    session_reset();
                    session_destroy();
                    die("Wrong Cred Try Again");
                }
            }
            else {
                echo "Please Enter Credentials";
            }
        }

        if(isset($_POST['g_logout'])) {
            session_start();
            session_unset();
            session_reset();
            session_destroy();
        }
    ?>
</body>
</html>