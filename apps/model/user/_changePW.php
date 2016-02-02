
<?php

require_once '../../controller/config/config.php';

$username = ($_SESSION['username']);
$password = md5($_POST['password']);
$new_password = md5($_POST['new_password']);
$cpassword = md5($_POST['cpassword']);

try {
    $sql = "SELECT * FROM tbl_user WHERE password=:password AND username=:username";
    $qry = $conn->prepare($sql);
    $qry->execute(array(':password' => $password, ':username' => $username));
    $result = $qry->fetchAll();
  
    if(count($result)==1){
         $sql2 = "UPDATE tbl_user SET password=:password WHERE username=:username";
        $qry2 = $conn->prepare($sql2);
        $qry2->execute(array(':password' => $new_password,':username'=>$username));
        $_SESSION['SUCCESS'][] = "Successfully changed passwords!";
    }else{
         $_SESSION['ERR'][] = "Old password didn't match!";
    }
    
} catch (Exception $ex) {
    echo $ex->getMessage();
}



//try {
//    if ((isset($_POST['changePW'])) && ($password != $new_password) && ($new_password == $cpassword) && ($password == $row['password'])) {
//
//        $sql = "UPDATE tbl_user SET new_password=:password WHERE username=:username";
//        $qry = $conn->prepare($sql);
//        $qry->execute(array(':password' => $password));
//        $_SESSION['SUCCESS'][] = "Successfully changed passwords!";
//    } else if ($password != $row['password']) {
//        $_SESSION['ERR'][] = "Your old password is incorrect!!";
//    } else if (($password == $new_password)) {
//        $_SESSION['ERR'][] = "Same password!";
//    } else if (($new_password != $cpassword)) {
//        $_SESSION['ERR'][] = "Passwords do not match";
//    }
//} catch (Exception $ex) {
//    if ($ex->getCode() == '23000') {
//        $_SESSION['ERR'][] = 'User Email ' . $user_email . ' already exists, try another !';
//    } else {
//        $_SESSION['ERR'][] = $ex->getMessage();
//    }
//}
header("Location: " . $_SERVER['HTTP_REFERER']);
?>