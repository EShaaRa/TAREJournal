
<?php

require_once '../../controller/config/config.php';
$username = trim($_POST['username']);
$password = md5($_POST['password']);
$new_password = md5($_POST['new_password']);
$cpassword = md5($_POST['cpassword']);




try {
    if ((isset($_POST['changePW'])) && ($password != $new_password) && ($new_password == $cpassword)&& ($password == $row['password'])) {

        $sql = "UPDATE tbl_user SET new_password=:password WHERE username=:username";
        $qry = $conn->prepare($sql);
        $qry->execute(array(':password' => $password));
        $_SESSION['SUCCESS'][] = "Successfully changed passwords!";
    } else if ($password != $row['password']) {
        $_SESSION['ERR'][] = "Your old password is incorrect!!";
    } else if (($password == $new_password)) {
        $_SESSION['ERR'][] = "Same password!";
    } else if (($new_password != $cpassword)) {
        $_SESSION['ERR'][] = "Passwords do not match";
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