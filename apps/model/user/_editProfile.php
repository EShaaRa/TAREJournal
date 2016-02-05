<?php

require_once '../../controller/config/config.php';
require_once '../../login_info.php';

$user_email = ($_POST['user_email']);
$user_title = ($_POST['user_title']);
$user_fname = ($_POST['user_fname']);
$user_mname = ($_POST['user_mname']);
$user_lname = ($_POST['user_lname']);
$user_address = ($_POST['user_address']);
$user_country = ($_POST['user_country']);
$user_mobile = ($_POST['user_mobile']);
$user_tp = ($_POST['user_tp']);
$user_job = ($_POST['user_job']);
$user_area1 = ($_POST['user_area1']);
$user_area2 = ($_POST['user_area2']);
$user_area3 = ($_POST['user_area3']);
$user_area4 = ($_POST['user_area4']);
$user_academic = ($_POST['user_academic']);
$user_journals = ($_POST['user_journals']);
$user_experience = ($_POST['user_experience']);


try {

  
    //Pics are saved to the folder named "Upload" and its path is saved to the db not the pic

    //-------------------End File Upload----------------------------------------------
    
    if (isset($_POST['editProfile'])) {
        //-----------Begin File Upload------------------------------------------------------
    $allowedExts = array("gif", "jpeg", "jpg", "png");
    $temp = explode(".", $_FILES["user_pic"]["name"]);    // user_pic
    //explode- seperate file name and extension from dot
    $extension = end($temp);
    if(isset($_FILES['user_pic'])){
        if ($_FILES["user_pic"]["error"] > 0) {
            $_SESSION['SUCCESS'][] = "Return Code: " . $_FILES["user_pic"]["error"] . "<br>";
        } else {
//            $_SESSION['SUCCESS'][] = "Upload: " . $_FILES["user_pic"]["name"] . "<br>";
            $pic_string = $_SESSION['username']."_".time();
              $fileName= $pic_string.'.'.$extension;

                move_uploaded_file($_FILES["user_pic"]["tmp_name"], "upload/" . $fileName);
                $_SESSION['SUCCESS'][] = "Upload is done <br>";
            
        }
    }

        $username = $_SESSION['username'];
        $sql2 = "UPDATE tbl_user SET user_pic='$fileName' WHERE username='$username'";
        $qry = $conn->prepare($sql2);
        $qry->execute();

        
        $_SESSION['SUCCESS'][] = "Successfully Updated !";
    }
} catch (Exception $ex) {
    if ($ex->getCode() == '23000') {
        $_SESSION['ERR'][] = 'User Email ' . $user_email . ' already exists, try another !';
    } else {
        $_SESSION['ERR'][] = $ex->getMessage();
    }
}

//header("Location: " . $_SERVER['HTTP_REFERER']);
?>