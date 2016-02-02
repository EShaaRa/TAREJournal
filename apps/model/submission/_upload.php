<?php

require_once '../../controller/config/config.php';

$temp_manu_type = trim($_POST['manu_type']);

//-----------Begin File Upload------------------------------------------------------
$allowedExts = array("doc", "docx", "odt", "ods", "odp", "dot");
$temp = explode(".", $_FILES["manu_file"]["name"]);    // temp_manu_file
//explode- seperate file name and extension from dot
$realExts = end($temp);
if (!in_array($realExts, $allowedExts)) {
    $_SESSION['ERR'][] = "Please upload only in document formats";
      header("Location: " . BASE_URL . 'apps/view/submission/upload.php');
} else {
    if (($_FILES["manu_file"]["error"]) > 0) {
        $_SESSION['ERR'][] = "Return Code: " . $_FILES["manu_file"]["error"] . "<br>";
          header("Location: " . BASE_URL . 'apps/view/submission/upload.php');
    } else {
        if (file_exists("upload_file/" . $_FILES["manu_file"]["name"])) {
            $_SESSION['ERR'][] = $_FILES["manu_file"]["name"] . " already exists. ";
              header("Location: " . BASE_URL . 'apps/view/submission/upload.php');
        } else {
            $_SESSION['ERR'][] = "";
            $_SESSION['SUCCESS'][] = "Upload: " . $_FILES["manu_file"]["name"] . "<br>";

            move_uploaded_file($_FILES["manu_file"]["tmp_name"], "upload_file/" . $_FILES["manu_file"]["name"]);
            $_SESSION['SUCCESS'][] = "Stored in: " . "upload_file/" . $_FILES["manu_file"]["name"] . "<br>";
            $temp_manu_file = $_FILES["manu_file"]["name"];
            try {

                $sql2 = "INSERT INTO  tbl_temp_manuscript(temp_manu_type,temp_manu_file,temp_manu_img,temp_manu_tbl) values(:manu_type,:manu_file,manu_img,manu_tbl)";
                $qry = $conn->prepare($sql2);
                $qry->execute(array(':manu_type' => $temp_manu_type, ':manu_file' => $temp_manu_file, ':manu_img' => $temp_manu_img, ':manu_tbl' => $temp_manu_tbl));
                $lastId = $conn->lastInsertId();
                $_SESSION['dataId'] = $lastId;
                $_SESSION['SUCCESS'][] = "Successfully Uploaded! go ahead";
            } catch (Exception $ex) {
                $_SESSION['ERR'][] = $ex->getMessage();
            }
            header("Location: " . BASE_URL . 'apps/view/submission/manuInfo.php');
        }
    }
} 

//Pics are saved to the folder named "Upload" and its path is saved to the db not the pic
//-------------------End File Upload----------------------------------------------





