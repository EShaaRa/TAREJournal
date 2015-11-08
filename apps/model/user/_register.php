<?php

require_once '../../controller/config/config.php';

$user_title = trim($_POST['user_title']);
$user_fname = trim($_POST['user_fname']);
$user_lname = trim($_POST['user_lname']);
$user_email = trim($_POST['user_email']);
$user_mobile = trim($_POST['user_mobile']);
$user_tp = trim($_POST['user_tp']);
$user_address = trim($_POST['user_address']);
$user_country = trim($_POST['user_country']);
$user_gender = trim($_POST['user_gender']);
$user_job = trim($_POST['user_job']);
$username = trim($_POST['username']);
$password = md5($_POST['password']);
$cpassword = md5($_POST['cpassword']);

$user_area1 = trim($_POST['user_area1']);
$user_area2 = trim($_POST['user_area2']);
$user_area3 = trim($_POST['user_area3']);
$user_area4 = trim($_POST['user_area4']);
$user_area = $user_area1 . ',' . $user_area2 . ',' . $user_area3 . ',' . $user_area4;
$user_academic = trim($_POST['user_academic']);
$user_journals = trim($_POST['user_journals']);
$user_experience = trim($_POST['user_experience']);

$roleA = trim($_POST['Author']);
$roleR = trim($_POST['Reviewer']);
$role = $roleA.','.$roleR;
$id = $_POST['pid'];

try {
    if ((isset($_POST['Register'])) && ($_POST['agreement'] == 'agree') && ($password == $cpassword) && ($_POST['Author'] == 'Author')  && ($_POST['Reviewer'] == '')) {

        $sql = "INSERT INTO  tbl_user(user_title,user_fname,user_lname,user_gender,username,password,user_email,user_mobile,user_tp,user_address,user_country,user_job,user_role) "
                . "values(:user_title,:user_fname,:user_lname,:user_gender,:username,:password,:user_email,:user_mobile,:user_tp,:user_address,:user_country,:user_job,:user_role)";
        $qry = $conn->prepare($sql);
        $qry->execute(array(':user_title' => $user_title, ':user_fname' => $user_fname, ':user_lname' => $user_lname, ':user_gender' => $user_gender, ':username' => $username, ':password' => $password, ':user_email' => $user_email, ':user_mobile' => $user_mobile, ':user_tp' => $user_tp, ':user_address' => $user_address, ':user_country' => $user_country, ':user_job' => $user_job,':user_role' => $role));
        $_SESSION['SUCCESS'][] = "Successfully Saved!";
    } else if ($_POST['agreement'] == 'diagree') {

        $_SESSION['ERR'][] = "Agree term to proceed";
    } else if (($password != $cpassword)) {

        $_SESSION['ERR'][] = "Please verify password";
    } else if ((isset($_POST['Register'])) && ($_POST['agreement'] == 'agree') && ($password == $cpassword)  && ($_POST['Reviewer'] == 'Reviewer')) {

        $sql = "INSERT INTO  tbl_user(user_title,user_fname,user_lname,user_gender,username,password,user_email,user_mobile,user_tp,user_address,user_country,user_job,user_role) "
                . "values(:user_title,:user_fname,:user_lname,:user_gender,:username,:password,:user_email,:user_mobile,:user_tp,:user_address,:user_country,:user_job,:user_role)";
        $qry = $conn->prepare($sql);
        $qry->execute(array(':user_title' => $user_title, ':user_fname' => $user_fname, ':user_lname' => $user_lname, ':user_gender' => $user_gender, ':username' => $username, ':password' => $password, ':user_email' => $user_email, ':user_mobile' => $user_mobile, ':user_tp' => $user_tp, ':user_address' => $user_address, ':user_country' => $user_country, ':user_job' => $user_job,':user_role' => $role));

        $sql = "INSERT INTO  tbl_user_reviewer(user_area,user_academic,user_journals,user_experience,Revi_user_email) "
                . "values(:user_area,:user_academic,:user_journals,:user_experience,:Revi_user_email)";
        $qry = $conn->prepare($sql);
        $qry->execute(array(':user_area' => $user_area, ':user_academic' => $user_academic, ':user_journals' => $user_journals, ':user_experience' => $user_experience, ':Revi_user_email' => $user_email));

        $_SESSION['SUCCESS'][] = "Successfully Saved!";
    } else if (isset($_POST['Edit'])) {
        $sql = "UPDATE  tbl_user SET user_title=:user_title,user_fname=:user_fname,user_lname=:user_lname,user_gender=:user_gender,user_email=:user_email,user_mobile=:user_mobile,user_tp=:user_tp,user_address=:user_address,user_country=:user_country,user_job=:user_job";
        $qry = $conn->prepare($sql);
        $qry->execute(array(':user_title' => $user_title, ':user_fname' => $user_fname, ':user_lname' => $user_lname, ':user_gender' => $user_gender, ':user_email' => $user_email, ':user_mobile' => $user_mobile, ':user_tp' => $user_tp, ':user_address' => $user_address, ':user_country' => $user_country, ':user_job' => $user_job));

        $_SESSION['SUCCESS'][] = "Successfully Edited !";
    } else if (isset($_POST['Remove'])) {
        $sql = "DELETE FROM  tbl_user where user_email=:user_email";
        $qry = $conn->prepare($sql);
        $qry->execute(array(':user_email' => $user_email));

        $_SESSION['SUCCESS'][] = "Successfully Deleted!";
    }
} catch (Exception $ex) {
    $_SESSION['ERR'][] = $ex->getMessage();
}
header("Location: " . $_SERVER['HTTP_REFERER']);
?>