<?php

require_once '../../controller/config/config.php';
require_once '../../login_info.php';


$sql = "SELECT user_fname,user_mname,user_lname,user_email,user_job FROM tbl_user WHERE username = '$username'";


$stmt = $conn->prepare($sql);
$stmt->execute();
$result = $stmt->fetchAll();

$details = $result[0];
$c_fname = $details['user_fname'];
$c_mname = $details['user_mname'];
$c_lname = $details['user_lname'];
$c_email = $details['user_email'];
$c_job = $details['user_job'];

$lastId = $_SESSION['dataId'];

$sql0 = "INSERT INTO tbl_manuscipt_authors (manu_author_fname,manu_author_mname,manu_author_lname,manu_author_email,manu_author_org,temp_manu_id,c_author) VALUE('$c_fname','$c_mname','$c_lname','$c_email','$c_job','$lastId','1')";
    $qry0 = $conn->prepare($sql0);
    $qry0->execute();

for ($index = 0; $index < count($_POST['au_fname']); $index++) {
    $fname = $_POST['au_fname'][$index];
    $mname = $_POST['au_mname'][$index];
    $lname = $_POST['au_lname'][$index];
    $email = $_POST['au_email'][$index];
    $uni = $_POST['au_uni'][$index];

    $sql = "INSERT INTO tbl_manuscipt_authors (manu_author_fname,manu_author_mname,manu_author_lname,manu_author_email,manu_author_org,temp_manu_id) VALUE('$fname','$mname','$lname','$email','$uni','$lastId')";
    $qry = $conn->prepare($sql);
    $qry->execute();
}
$_SESSION['location'] = 'validate.php';

echo json_encode(array('status'=>true));


//$fname = trim($_POST['fname']);
//$lname = trim($_POST['lname']);
//$mname = trim($_POST['mname']);
//$email = filter_var($_POST['email'], FILTER_VALIDATE_EMAIL); //take only email format FILTER_VALIDATE_INT
//$uni = trim($_POST['uni']);
//$ca_title = trim($_POST['ca_title']);
//$ca_fname = trim($_POST['ca_fname']);
//$ca_mname = trim($_POST['ca_mname']);
//$ca_lname = trim($_POST['ca_lname']);
//$ca_email = trim($_POST['ca_email']);
//$ca_org = trim($_POST['ca_org']);
//$ca_addr = trim($_POST['ca_addr']);
//$ca_mobile = trim($_POST['ca_mobile']);

//foreach ($_POST as $key => $value) {
//    $key = trim("$value");
//}


//try {
//    $sql2 = "INSERT INTO tbl_corresponding_authors (ca_title,ca_fname,ca_mname,ca_lname,ca_email,ca_org,ca_mobile,ca_addr,ca_tp,ca_manu_id)"
//            . " VALUES ('$ca_title','$ca_fname','$ca_mname','$ca_lname','$ca_email','$ca_org','$ca_addr','$ca_mobile','$lastId')";
//    $qry2 = $conn->prepare($sql2);
//    $qry2->execute(array(':ca_title' => $ca_title, ':ca_fname' => $ca_fname, ':ca_mname' => $ca_mname, ':ca_lname' => $lname, ':ca_email' => $email, ':ca_org' => $ca_org, ':ca_mobile' => $ca_mobile, ':ca_addr' => $ca_addr));
//    $lastId = $conn->lastInsertId();
//    $_SESSION['SUCCESS'][] = "Corresponding author added. We will deal only with him future regarding this manuscript";
//    header("Location: " . BASE_URL . 'apps/view/submission/authorInfo.php');
//} catch (Exception $ex) {
//    echo $ex->getMessage();
//}
//$lastId2 = $conn->lastInsertId();


//try {
//
//
//    $fileId = $_SESSION['dataId'];
//    $sql2 = "INSERT INTO tbl_manuscipt_authors(manu_author_fname,manu_author_mname,manu_author_lname,manu_author_email,manu_author_org,temp_manu_id) "
//            . "values('$fname','$mname','$lname','$email','$org','$fileId')";
//    $qry = $conn->prepare($sql2);
//    $qry->execute();
//    $lastId = $conn->lastInsertId();
//    $_SESSION['SUCCESS'][] = "Corresponding author added. We will deal only with him future regarding this manuscript";
////    header("Location: " . BASE_URL . 'apps/view/submission/authorInfo.php');
//    $_SESSION['SUCCESS'][] = "Author added. Add next author if any";
//} catch (Exception $ex) {
//    $_SESSION['ERR'][] = $ex->getMessage();
////    header("Location: " . BASE_URL . 'apps/view/submission/authorInfo.php');
//}
