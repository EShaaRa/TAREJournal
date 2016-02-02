<?php

require_once '../../controller/config/config.php';

$temp_manu_title = trim($_POST['manu_title']);
$temp_manu_sub = trim($_POST['manu_sub']);
$temp_manu_abstract = trim($_POST['manu_abstract']);
$temp_manu_keywords = trim($_POST['manu_keywords']);
$temp_manu_id=1;
$lastId = $_SESSION['dataId'];

try {
    $sql2 = "UPDATE tbl_temp_manuscript SET temp_manu_title=:manu_title, temp_manu_sub=:manu_sub,temp_manu_abstract=:manu_abstract,temp_manu_keywords=:manu_keywords WHERE temp_manu_id='$lastId'";
    $qry = $conn->prepare($sql2);
    $qry->execute(array(':manu_title' => $temp_manu_title, ':manu_sub' => $temp_manu_sub, ':manu_abstract' => $temp_manu_abstract, ':manu_keywords' => $temp_manu_keywords));
     $_SESSION['SUCCESS'][] = "Manuscript Information OK";
     header("Location: " . BASE_URL . 'apps/view/submission/authorInfo.php');
} catch (Exception $ex) {
    echo $ex->getMessage();
}