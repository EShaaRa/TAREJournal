<?php

require_once '../../controller/config/config.php';
require_once '../../login_info.php';

foreach ($_POST as $key => $value) {
    $$key = addslashes("$value");
}


$lastId = $_SESSION['dataId'];


try {
    $sql2 = "UPDATE tbl_temp_manuscript SET temp_manu_title='$title', temp_manu_sub='$sub',temp_manu_abstract='$abstract',temp_manu_keywords='$keywords' WHERE temp_manu_id='$lastId'";
    $qry = $conn->prepare($sql2);
    $op = $qry->execute();

    $_SESSION['location'] = 'checklist.php';

    if ($op) {
        echo json_encode(array('status' => true));
    } else {
        echo json_encode(array('status' => false));
    }
} catch (Exception $ex) {
    echo $ex->getMessage();
}