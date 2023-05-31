<?php 

require_once("dbconfig.php");

$connection;

    if(isset($_POST['send'])) {
        $seat = $_POST['seats'];
        $model = $_POST['model'];
        $gsm = $_POST['gsm']; 
        $engine = $_POST['engine']; 
        $mileage = $_POST['mileage'];

        $imageOneContent;
        $imageTwoContent;
        $imageThreeContent;
        $imageFourContent;

        if(!empty($_FILES["imageOne"]["name"])) {
            // GET FILE INFO
            $fileName = basename($_FILES["imageOne"]["name"]);
            $fileType = pathinfo($fileName, PATHINFO_EXTENSION);

            // CHECK FILE TYPE
            $allowedTypes = array('jpg', 'png', 'jpeg', 'JPG', 'JPEG', 'PNG');
            if(in_array($fileType, $allowedTypes)) {

                $image = $_FILES["imageOne"]["tmp_name"];
                $imageOneContent = addslashes(file_get_contents($image));
            }
        }
        if(!empty($_FILES["imageTwo"]["name"])) {
            // GET FILE INFO
            $fileName = basename($_FILES["imageTwo"]["name"]);
            $fileType = pathinfo($fileName, PATHINFO_EXTENSION);

            // CHECK FILE TYPE
            $allowedTypes = array('jpg', 'png', 'jpeg', 'JPG', 'JPEG', 'PNG');
            if(in_array($fileType, $allowedTypes)) {

                $image = $_FILES["imageTwo"]["tmp_name"];
                $imageTwoContent = addslashes(file_get_contents($image));
            }
        }
        if(!empty($_FILES["imageThree"]["name"])) {
            // GET FILE INFO
            $fileName = basename($_FILES["imageThree"]["name"]);
            $fileType = pathinfo($fileName, PATHINFO_EXTENSION);

            // CHECK FILE TYPE
            $allowedTypes = array('jpg', 'png', 'jpeg', 'JPG', 'JPEG', 'PNG');
            if(in_array($fileType, $allowedTypes)) {

                $image = $_FILES["imageThree"]["tmp_name"];
                $imageThreeContent = addslashes(file_get_contents($image));
            }
        }
        if(!empty($_FILES["imageFour"]["name"])) {

            // GET FILE INFO
            $fileName = basename($_FILES["imageFour"]["name"]);
            $fileType = pathinfo($fileName, PATHINFO_EXTENSION);

            // CHECK FILE TYPE
            $allowedTypes = array('jpg', 'png', 'jpeg', 'JPG', 'JPEG', 'PNG');
            if(in_array($fileType, $allowedTypes)) {

                $image = $_FILES["imageFour"]["tmp_name"];
                $imageFourContent = addslashes(file_get_contents($image));
            }
        }

        $insert = $connection->query("INSERT INTO cars (id, img1, img2, img3, img4, seat, model, gsm, engine, mileage) VALUES ('', '$imageOneContent', '$imageTwoContent', '$imageThreeContent', '$imageFourContent', '$seat', '$model', '$gsm', '$engine', '$mileage')"); 

         if($insert) {
            echo "DATA HAS BEEN INSERTED";
         }

    }

?>