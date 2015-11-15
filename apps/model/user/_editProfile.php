<?php

require_once '../../controller/config/config.php';

$user_email = trim($_POST['user_email']);
$user_title = trim($_POST['user_title']);
$user_fname = trim($_POST['user_fname']);
$user_lname = trim($_POST['user_lname']);
$user_gender = trim($_POST['user_gender']);
$user_address = trim($_POST['user_address']);
$user_country = trim($_POST['user_country']);
$user_mobile = trim($_POST['user_mobile']);
$user_tp = trim($_POST['user_tp']);
$user_job = trim($_POST['user_job']);
$user_area1 = trim($_POST['user_area1']);
$user_area2 = trim($_POST['user_area2']);
$user_area3 = trim($_POST['user_area3']);
$user_area4 = trim($_POST['user_area4']);
$user_area = $user_area1 . ',' . $user_area2 . ',' . $user_area3 . ',' . $user_area4;
$user_academic = trim($_POST['user_academic']);
$user_journals = trim($_POST['user_journals']);
$user_experience = trim($_POST['user_experience']);
$username = trim($_POST['username']);
$password = md5($_POST['password']);
$password = md5($_POST['new_password']);
$cpassword = md5($_POST['cpassword']);





try {

//-----------Begin File Upload------------------------------------------------------
    $allowedExts = array("gif", "jpeg", "jpg", "png");
    $temp = explode(".", $_FILES["user_pic"]["name"]);    // user_pic
    //explode- seperate file name and extension from dot
    $extension = end($temp);

    if (true) {

        if ($_FILES["user_pic"]["error"] > 0) {
            $_SESSION['SUCCESS'][] = "Return Code: " . $_FILES["user_pic"]["error"] . "<br>";
        } else {
            $_SESSION['SUCCESS'][] = "Upload: " . $_FILES["user_pic"]["name"] . "<br>";
            if (file_exists("upload/" . $_FILES["user_pic"]["name"])) {
                $_SESSION['SUCCESS'][] = $_FILES["user_pic"]["name"] . " already exists. ";
            } else {
                move_uploaded_file($_FILES["user_pic"]["tmp_name"], "upload/" . $_FILES["user_pic"]["name"]);
                $_SESSION['SUCCESS'][] = "Stored in: " . "upload/" . $_FILES["user_pic"]["name"] . "<br>";
                $user_pic = $_FILES["user_pic"]["name"];
            }
        }
    } else {
        $_SESSION['SUCCESS'][] = "Invalid file";
    }
    //Pics are saved to the folder named "Upload" and its path is saved to the db not the pic

    //-------------------End File Upload----------------------------------------------
    
    if (isset($_POST['editProfile'])) {
        //$sql = "UPDATE tbl_user SET =:user_email,user_title=:user_title,user_fname=:user_fname,user_lname=:user_lname,user_gender=:user_gender,user_address=:user_address,user_country=:user_country,user_mobile=:user_mobile,user_tp=:user_tp,user_job=:user_job,user_pic=:user_pic WHERE username=:username";
        $sql = "UPDATE tbl_user SET user_pic=:user_pic WHERE username=:username";
        $qry = $conn->prepare($sql);
        $qry->execute(array(':username' => $_SESSION['username'], ':user_pic' => $user_pic));
        //$qry->execute(array(':user_email' => $user_email,':user_title' => $user_title, ':user_fname' => $user_fname, ':user_lname' => $user_lname, ':user_gender' => $user_gender,  ':user_address' => $user_address, ':user_country' => $user_country, ':user_mobile' => $user_mobile, ':user_tp' => $user_tp,  ':user_job' => $user_job, ':user_pic' => $user_pic));
        
        $_SESSION['SUCCESS'][] = "Successfully Updated !";
    }
} catch (Exception $ex) {
    if ($ex->getCode() == '23000') {
        $_SESSION['ERR'][] = 'User Email ' . $user_email . ' already exists, try another !';
    } else {
        $_SESSION['ERR'][] = $ex->getMessage();
    }
}
header("Location: " . $_SERVER['HTTP_REFERER']);
?>