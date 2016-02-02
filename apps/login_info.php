<?php

if (isset($_SESSION['username'])) {

    $username = $_SESSION['username'];

    $sql2 = "SELECT username FROM tbl_user WHERE username=:username";

    $stmt = $conn->prepare($sql2);
    $stmt->execute(array(':username' => $username));
    $result = $stmt->fetchAll();

    if (count($result) == 0) {
        $_SESSION['username'] = null;
        session_destroy();
         header("location:".BASE_URL."");
    }
} else {
    header("location:".BASE_URL."");
}


