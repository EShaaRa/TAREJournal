<?php

require_once '../../controller/config/config.php';


$username = trim($_POST['username']);
$password = md5($_POST['password']);
$user_role = trim($_POST['user_role']);

$sql = 'SELECT username,password,user_role FROM tbl_user WHERE username=:username';

$stmt = $conn->prepare($sql);
$stmt->execute(array(':username' => $username));
$result = $stmt->fetchAll();

if (count($result)) {   // Check if user with email registered
    $row = $result[0];
    $dbPassword = $row['password'];

    if ($password == $dbPassword) {      // check DB pwd and user entered password same ?
        $_SESSION['username'] = $row['username'];
        $_SESSION['user_role'] = $row['user_role'];
       // $_SESSION['SUCCESS'][] = $_SESSION['username'] . " Welcome!";
        
        if (($user_role == 'Author') && ($_SESSION['user_role'] == 'Author'))
        {header("Location: " .BASE_URL .'apps/view/dashboard/author.php');}
        else if (($user_role == 'Reviewer') && ($_SESSION['user_role'] == 'Reviewer'))
        {header("Location: " .BASE_URL .'apps/view/dashboard/reviewer.php');}
        else if (($user_role == 'Editor') && ($_SESSION['user_role'] == 'Editor'))
        {header("Location: " .BASE_URL .'apps/view/dashboard/editor.php');}
        else {
                $_SESSION['ERR'][] = "Invalid user role !!";
                header("Location: " . $_SERVER['HTTP_REFERER']);
            }
            
    } else {
        $_SESSION['ERR'][] =  "Invalid user name or password";
        header("Location: " . $_SERVER['HTTP_REFERER']);
    }
} else {
    $_SESSION['ERR'][] =  "Invalid user name or password";
    header("Location: " . $_SERVER['HTTP_REFERER']);
}


?>