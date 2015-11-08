<?php

require_once '../../config/config.php';

try {

    if (isset($_POST['user_login'])) {    // This executes when user login page login button pressed
        $loginUser_email = $_POST['loginUser_email'];
        $login_passwordI = md5($_POST['login_password']);

        $sql = "SELECT loginUser_email, login_password, login_type FROM tbl_login WHERE login_status='Active' AND loginUser_email=:loginUser_email";

        $stmt = $conn->prepare($sql);
        $stmt->execute(array(':loginUser_email' => $loginUser_email));
        $result = $stmt->fetchAll();

        if (count($result)) {   // Check if user with email registered
            $row = $result[0];
            $dbPassword = $row['login_password'];

            if ($login_passwordI == $dbPassword) {      // check DB pwd and user entered password same ?
                $_SESSION['loginUser_email'] = $row['loginUser_email'];
                $_SESSION['login_type'] = $row['login_type'];

                $_SESSION['info'][] = 'Welcome to Misuki Plaza Hotel Management System';

                if ($_SESSION['login_type'] == 'Admin') {
                    echo "<script language='javascript' type='text/javascript'>window.open('../admin/admin.php','_self')</script>";
                } else if (($_SESSION['login_type'] === 'Online Guest')) {
                    echo "<script language='javascript' type='text/javascript'>window.open('../../index.php','_self')</script>";
                } else if (($_SESSION['login_type'] === 'Receptionist')) {
                    echo "<script language='javascript' type='text/javascript'>window.open('../admin/reception.php','_self')</script>";
                } else if (($_SESSION['login_type'] === 'Manager')) {
                    echo "<script language='javascript' type='text/javascript'>window.open('../admin/manager.php','_self')</script>"; 
                } else if (($_SESSION['login_type'] === 'Clark')) {
                    echo "<script language='javascript' type='text/javascript'>window.open('../admin/clark.php','_self')</script>";
                }
                else {
                    header("Location: " . $_SERVER['HTTP_REFERER']);
                }
            } else {
                $_SESSION['error'][] = 'Please check your password!';
                header("Location: " . $_SERVER['HTTP_REFERER']);
            }
        } else {
            $_SESSION['error'][] = 'Please check your user name and password!';
            header("Location: " . $_SERVER['HTTP_REFERER']);
        }
    }
} catch (Exception $ex) {
//echo $ex->getMessage();
    echo "<script>alert('Login Error !');</script>";
    header("Location: " . $_SERVER['HTTP_REFERER']);
}
?>