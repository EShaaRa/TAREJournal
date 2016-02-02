<?php

require_once '../../controller/config/config.php';

//$temp_manu_author_fname = trim($_POST['fname']);
//$temp_manu_author_lname = trim($_POST['lname']);
//$temp_manu_author_mname = trim($_POST['mname']);
//$temp_manu_author_email = trim($_POST['email']);
//$temp_manu_author_uni = trim($_POST['uni']);
//
//
//$temp_ca_title = trim($_POST['ca_title']);
//$temp_ca_mobile = trim($_POST['ca_mobile']);
//$temp_ca_addr = trim($_POST['ca_addr']);

foreach ($_POST as $key => $value) {
    $$key = trim("$value");
}

//print_r($_POST);

try {
    $fileId = $_SESSION['dataId'];
    $sql = "INSERT INTO tbl_manuscipt_authors(manu_author_fname,manu_author_mname,manu_author_lname,manu_author_email,manu_author_uni,temp_manu_id) values('$fname','$mname','$lname','$email','$uni','$fileId')";
    $qry = $conn->prepare($sql);
    $qry->execute();
//    header("Location: " . BASE_URL . 'apps/view/submission/manuInfo.php');
    $_SESSION['SUCCESS'][] = "Author information done! Please validate details";
    $lastId = $conn->lastInsertId();
    
      
    
    if (isset($cbCa) && $cbCa == 'on') {
        
        if(@$_SESSION['ca_set'] == true){
            echo json_encode(array('status'=>false,'error'=>'ca_error'));
        }else{
        
        $sql2 = "INSERT INTO tbl_corresponding_authors (ca_title,ca_mobile, ca_address,ca_author_id) VALUES ('$ca_title','$ca_mobile','$ca_addr','$lastId')";
        $qry2 = $conn->prepare($sql2);
        $qry2->execute();
        $lastId2 = $conn->lastInsertId();
        
        if($lastId2 > 0){
            $_SESSION['ca_set'] = true;
            echo json_encode(array('status'=>true,'data'=>$_SESSION['ca_set']));
        }else{
             echo json_encode(array('status'=>false));
        }
        }
    }else{
        if($lastId > 0){
            echo json_encode(array('status'=>true));
        }else{
             echo json_encode(array('status'=>false));
        }
    }
} catch (Exception $ex) {
    $_SESSION['ERR'][] = $ex->getMessage();
}

//
//try {
//    $sql = "INSERT INTO tbl_corresponding_authors(ca_title,ca_fname,ca_mname,ca_lname,ca_email,ca_mobile,ca_addr,ca_uni) values(:ca_title,:ca_fname,:ca_mname,:ca_lname,:ca_email,:ca_mobile,:ca_addr,:ca_uni)";
//    $qry = $conn->prepare($sql);
//    $qry->execute(array(':ca_title' => $temp_ca_title, ':ca_fname' => $temp_ca_fname, ':ca_mname' => $temp_ca_mname, ':ca_lname' => $temp_ca_lname,':ca_email' => $temp_ca_email,':ca_mobile' => $temp_ca_mobile,':ca_addr' => $temp_ca_addr,':ca_uni' => $temp_ca_uni));
//    header("Location: " . BASE_URL . 'apps/view/submission/validate.php');
//    $_SESSION['SUCCESS'][] = "Corresponding Author information taken! Please validate your details";
//} catch (Exception $ex) {
//    $_SESSION['ERR'][] = $ex->getMessage();
//}

