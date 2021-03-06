<?php

require_once '../../controller/config/config.php';
require_once '../../login_info.php';

$user_title = trim($_POST['user_title']);
$user_fname = trim($_POST['user_fname']);
$user_mname = trim($_POST['user_mname']);
$user_lname = trim($_POST['user_lname']);
$user_email = trim($_POST['user_email']);
$user_mobile = trim($_POST['user_mobile']);
$user_tp = trim($_POST['user_tp']);
$user_address = trim($_POST['user_address']);
$user_country = trim($_POST['user_country']);
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
$role = $roleA . ',' . $roleR;

if ($roleR == 'Reviewer') {  // when some one is registered as reviewer, immediately his user_status in tbl_usser goes as Inactive untill it is approved by the author
    $user_status = 'InActive';
} else {
    $user_status = 'Active'; //When someone is registered only for Author
}

try {
    if ((isset($_POST['Register'])) && ($_POST['agreement'] == 'disagree')) {
        $_SESSION['ERR'][] = "Agree Term & Conditions to proceed";
    } else if (($password != $cpassword)) {
        $_SESSION['ERR'][] = "Passwords do not match";
    } else if ((isset($_POST['Register'])) && ($_POST['agreement'] == 'agree') && ($password == $cpassword) && ($_POST['Author'] == 'Author') && ($_POST['Reviewer'] == '')) {  // user register as authour
        $sql2 = "INSERT INTO  tbl_user(user_title,user_fname,user_mname,user_lname,username,password,user_email,user_mobile,user_tp,user_address,user_country,user_job,user_role,user_status) "
                . "values(:user_title,:user_fname,:user_mname,:user_lname,:username,:password,:user_email,:user_mobile,:user_tp,:user_address,:user_country,:user_job,:user_role,:user_status)";
        $qry = $conn->prepare($sql2);
        $qry->execute(array(':user_title' => $user_title, ':user_fname' => $user_fname, ':user_mname' => $user_mname,':user_lname' => $user_lname, ':username' => $username, ':password' => $password, ':user_email' => $user_email, ':user_mobile' => $user_mobile, ':user_tp' => $user_tp, ':user_address' => $user_address, ':user_country' => $user_country, ':user_job' => $user_job, ':user_role' => $role, ':user_status' => $user_status));
        header("Location: " . BASE_URL . 'index.php');
        $_SESSION['SUCCESS'][] = "Successfully Registered! Please Login";
    } else if ((isset($_POST['Register'])) && ($_POST['agreement'] == 'agree') && ($password == $cpassword) && ($_POST['Author'] == '') && ($_POST['Reviewer'] == 'Reviewer')) {    // user register  reviewer
        $sql2 = "INSERT INTO  tbl_user(user_title,user_fname,user_mname,user_lname,username,password,user_email,user_mobile,user_tp,user_address,user_country,user_job,user_role,user_status) "
                . "values(:user_title,:user_fname,:user_mname,:user_lname,:username,:password,:user_email,:user_mobile,:user_tp,:user_address,:user_country,:user_job,:user_role,:user_status)";
        $qry = $conn->prepare($sql2);
        $qry->execute(array(':user_title' => $user_title, ':user_fname' => $user_fname,':user_mname' => $user_mname, ':user_lname' => $user_lname, ':username' => $username, ':password' => $password, ':user_email' => $user_email, ':user_mobile' => $user_mobile, ':user_tp' => $user_tp, ':user_address' => $user_address, ':user_country' => $user_country, ':user_job' => $user_job, ':user_role' => $role, ':user_status' => $user_status));
        $sql2 = "INSERT INTO  tbl_user_reviewer(user_area,user_academic,user_journals,user_experience,user_rev_email) "
                . "values(:user_area,:user_academic,:user_journals,:user_experience,:user_rev_email)";
        $qry = $conn->prepare($sql2);
        $qry->execute(array(':user_area' => $user_area, ':user_academic' => $user_academic, ':user_journals' => $user_journals, ':user_experience' => $user_experience, ':user_rev_email' => $user_email));
        header("Location: " . BASE_URL . 'index.php');
        $_SESSION['SUCCESS'][] = "Thank you for registering with us, Reviewer information sent for approval! We will mail you when when it is approved.";
    } else if ((isset($_POST['Register'])) && ($_POST['agreement'] == 'agree') && ($password == $cpassword) && ($_POST['Author'] == 'Author') && ($_POST['Reviewer'] == 'Reviewer')) {    // user register  reviewer
        $sql2 = "INSERT INTO  tbl_user(user_title,user_fname,user_mname,user_lname,username,password,user_email,user_mobile,user_tp,user_address,user_country,user_job,user_role,user_status) "
                . "values(:user_title,:user_fname,:user_mname,:user_lname,:username,:password,:user_email,:user_mobile,:user_tp,:user_address,:user_country,:user_job,:user_role,:user_status)";
        $qry = $conn->prepare($sql2);
        $qry->execute(array(':user_title' => $user_title, ':user_fname' => $user_fname,':user_mname' => $user_mname, ':user_lname' => $user_lname, ':username' => $username, ':password' => $password, ':user_email' => $user_email, ':user_mobile' => $user_mobile, ':user_tp' => $user_tp, ':user_address' => $user_address, ':user_country' => $user_country, ':user_job' => $user_job, ':user_role' => $role, ':user_status' => $user_status));
        $sql2 = "INSERT INTO  tbl_user_reviewer(user_area,user_academic,user_journals,user_experience,user_rev_email) "
                . "values(:user_area,:user_academic,:user_journals,:user_experience,:user_rev_email)";
        $qry = $conn->prepare($sql2);
        $qry->execute(array(':user_area' => $user_area, ':user_academic' => $user_academic, ':user_journals' => $user_journals, ':user_experience' => $user_experience, ':user_rev_email' => $user_email));

        $_SESSION['SUCCESS'][] = "Thank you for registering with us, Reviewer information sent for approval! We will mail you when it is approved. Now you can login as author";
        header("Location: " . BASE_URL . 'index.php');
    }
} catch (Exception $ex) {
    if ($ex->getCode() == '23000') { // SQL error code for duplication records
        $_SESSION['ERR'][] = 'User email ' . $user_email . ' already exists!';
    } else {
        $_SESSION['ERR'][] = $ex->getMessage();
    }
}
//header("Location: " . $_SERVER['HTTP_REFERER']); //Direct to same page
?>