<?php

require_once '../../controller/config/config.php';

$user_email = trim($_POST['user_email']);

if (isset($_POST['editProfile'])) {
        //$sql = "UPDATE tbl_user SET =:user_email,user_title=:user_title,user_fname=:user_fname,user_lname=:user_lname,user_gender=:user_gender,user_address=:user_address,user_country=:user_country,user_mobile=:user_mobile,user_tp=:user_tp,user_job=:user_job,user_pic=:user_pic WHERE username=:username";
        $sql = "UPDATE tbl_manuscipt_authors SET manu_author_fname=:manu_author_fname WHERE username=:username";
        $qry = $conn->prepare($sql);
        $qry->execute(array(':username' => $_SESSION['username'], ':user_pic' => $user_pic));
        //$qry->execute(array(':user_email' => $user_email,':user_title' => $user_title, ':user_fname' => $user_fname, ':user_lname' => $user_lname, ':user_gender' => $user_gender,  ':user_address' => $user_address, ':user_country' => $user_country, ':user_mobile' => $user_mobile, ':user_tp' => $user_tp,  ':user_job' => $user_job, ':user_pic' => $user_pic));
        
        $_SESSION['SUCCESS'][] = "Successfully Updated !";
}
 else
        {}
        