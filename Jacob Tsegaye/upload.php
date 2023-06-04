<?php

require_once('dbconfig.php');

if(isset($_POST['submit'])) {
    if(!empty($_FILES["image"]["name"])) {
        // GET FILE INFO
        $fileName = basename($_FILES["image"]["name"]);
        $fileType = pathinfo($fileName, PATHINFO_EXTENSION);

        // CHECK FILE TYPE
        $allowedTypes = array('jpg', 'png', 'jpeg', 'JPG', 'JPEG', 'PNG');
        if(in_array($fileType, $allowedTypes)) {
            $image = $_FILES["image"]["tmp_name"];
            $imageContents = addslashes(file_get_contents($image));

            // INSERT TO DB
            $insert = $connection->query("INSERT INTO imgiso (image) VALUES ('$imageContents')");
            
            if($insert) {
                echo "SUCCESS";
            }
            
        }
    }

}




?>