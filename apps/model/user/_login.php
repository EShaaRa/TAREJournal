<?php

require_once '../../controller/config/config.php';


$username = trim($_POST['username']);
$password = md5($_POST['password']);
$user_role = trim($_POST['user_role']);

$sql2 = "SELECT username,password,user_role,user_status,user_pic FROM tbl_user WHERE username=:username";

$stmt = $conn->prepare($sql2);
$stmt->execute(array(':username' => $username));
$result = $stmt->fetchAll();

if (count($result)) {   // Check if user has an email registered
    $row = $result[0];
    $dbPassword = $row['password'];
    $user_status = $row['user_status'];

    if ($password == $dbPassword) {      // check whether user entered pw is same as DB pw        
//seperate user role in ybl_user by comma and save 1st section(Author) to $user_role_Author and second section (Reviewer) to $user_role_Reviewer
            $array = explode(',', $row['user_role']);  //  Author,Reviewer
            $user_role_Author = $array[0];
            $user_role_Reviewer = $array[1];
            
        $_SESSION['user_role'] = $user_role;
        $_SESSION['user_pic'] = $row['user_pic'];

        if (($user_role_Author == 'Author') && ($user_role == 'Author')) {//$user_role_Author is in db and $user_role from check box
            $_SESSION['user_role'] == 'Author';
            $_SESSION['username'] = $row['username'];
            header("Location: " . BASE_URL . 'apps/view/dashboard/author.php');
            //user_status is InActive for the reviewers' sent for approval of editor to be registered on the system
        } else if (($user_role_Reviewer == 'Reviewer') && ($user_status == 'Active') && ($user_role == 'Reviewer')) {
            $_SESSION['user_role'] == 'Reviewer';
            $_SESSION['username'] = $row['username'];
            header("Location: " . BASE_URL . 'apps/view/dashboard/reviewer.php');
        } else if (($user_role_Reviewer == 'Reviewer') && ($user_status == 'InActive') && ($user_role == 'Reviewer')) {
            $_SESSION['user_role'] == 'Reviewer';
            $_SESSION['ERR'][] = "Sorry! Reviewer registration has not been approved !!";
            header("Location: " . $_SERVER['HTTP_REFERER']);
        } else if (($user_role == 'Editor') && ($row['user_role']== 'Editor')) {
            $_SESSION['user_role'] == 'Editor';
            $_SESSION['ERR'][] = "Invalid user name or password !!";
            header("Location: " . BASE_URL . 'apps/view/dashboard/editor.php');
        } else {
            $_SESSION['ERR'][] = "Invalid user role !!";//No user role with this username
            header("Location: " . $_SERVER['HTTP_REFERER']);
        }
    } else {
        $_SESSION['ERR'][] = "Invalid user name or password";//When pw is wrong
        header("Location: " . $_SERVER['HTTP_REFERER']);
    }
} else {
    $_SESSION['ERR'][] = "Invalid user name or password";//When there is no username registered
    header("Location: " . $_SERVER['HTTP_REFERER']);
}
?>