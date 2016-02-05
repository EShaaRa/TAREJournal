<?php
error_reporting(false);
require_once '../../controller/config/config.php';
require_once '../../login_info.php';
$lastId = $_SESSION['dataId'];

$sql0= "SELECT * FROM tbl_temp_manuscript WHERE temp_manu_id='$lastId'";
$qry = $conn->prepare($sql0);
$q0 = $qry->execute();

$result = $q0[0];

$menu = $result['temp_manu_file'];
$img = $result['temp_manu_img'];
$tbl = $result['temp_manu_tbl'];
$state = $result['temp_manu_statement'];

$sql1 = "DELETE FROM tbl_temp_manuscript WHERE temp_manu_id = '$lastId'";

$qry = $conn->prepare($sql1);
$q1 = $qry->execute();


$sql2 = "DELETE FROM tbl_manuscipt_authors WHERE temp_manu_id = '$lastId'";
$qry = $conn->prepare($sql2);
$q2 = $qry->execute();

@unlink('upload_file/ImagesFiles/'.$img);
@unlink('upload_file/MainArticles/'.$menu);
@unlink('upload_file/ManuStatements/'.$state);
@unlink('upload_file/TableFiles/'.$tbl);


if($q1 && $q2){
     $_SESSION['location'] = 'checklist.php';
    echo true;
}else{
    echo false;
}
