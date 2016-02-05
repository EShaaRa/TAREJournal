<?php

require_once '../../controller/config/config.php';
require_once '../../login_info.php';

$temp_manu_type = ($_POST['manu_type']);

function checkHash($filename,$folder) {
    $originalHash = sha1(file_get_contents($filename));


    $dirImagesFiles = scandir('upload_file/ImagesFiles/');
    $dirMainArticles = scandir('upload_file/MainArticles/');
    $dirManuStatements = scandir('upload_file/ManuStatements/');
    $dirTableFiles = scandir('upload_file/TableFiles/');
//    $dir = scandir('upload_file/ImagesFiles/');

    //check in img files
    foreach ($dirImagesFiles as $value) {

        $filePath = 'upload_file/ImagesFiles/' . $value;
        
        $hash = @sha1(file_get_contents($filePath));

        if ($originalHash === $hash) {
            unlink($filename);
//            return 'Duplicate checksum detected in img!';
            return $folder;
        }
    }

    //check in main articles
    foreach ($dirMainArticles as $value) {

        $filePath = 'upload_file/MainArticles/' . $value;
        $hash = @sha1(file_get_contents($filePath));

        if ($originalHash === $hash) {
            $_SESSION['error_file'] = $_FILES['manu_file']['name'];
            unlink($filename);
//            return 'Duplicate checksum detected in Main Articles!';
            return $folder;
        }
    }

    //check in ManuStatements
    foreach ($dirManuStatements as $value) {

        $filePath = 'upload_file/ManuStatements/' . $value;
        $hash = @sha1(file_get_contents($filePath));

        if ($originalHash === $hash) {
            $_SESSION['error_file'] = $_FILES['manu_statement']['name'];
            unlink($filenaCme);
//            return 'Duplicate checksum detected in Manu Statements!';
            return $folder;
        }
    }

    //check in TableFiles
    foreach ($dirTableFiles as $value) {

        $filePath = 'upload_file/TableFiles/' . $value;
        $hash = @sha1(file_get_contents($filePath));

        if ($originalHash === $hash) {
            $_SESSION['error_file'] = $_FILES['manu_tbl']['name'];
            unlink($filename);
//            return 'Duplicate checksum detected in TableFiles!';
            return $folder;
        }
    }
}

//print_r($_FILES);
//-----------Begin File Upload------------------------------------------------------
$allowedExts = array("doc", "docx", "odt", "ods", "odp", "dot");

$temp = explode(".", $_FILES["manu_file"]["name"]);    // temp_manu_file
//
//explode- seperate file name and extension from dot
$realExts = end($temp);

if (!in_array($realExts, $allowedExts)) {
     echo __LINE__; 
    $_SESSION['ERR'][] = "Please upload only in document formats";
    header("Location: " . BASE_URL . 'apps/view/submission/upload.php');
} else {
    echo __LINE__; 
    
    if (($_FILES["manu_file"]["error"]) > 0) {
        $_SESSION['ERR'][] = "Return Code: " . $_FILES["manu_file"]["error"] . "<br>";
        header("Location: " . BASE_URL . 'apps/view/submission/upload.php');
    } else {

        $originalManu_file = $_FILES['manu_file']['tmp_name'];
        $originalManu_img = $_FILES['manu_img']['tmp_name'];
        $originalManu_tbl = $_FILES['manu_tbl']['tmp_name'];
        $originalManu_statement = $_FILES['manu_statement']['tmp_name'];

//        if (checkHash($originalFile) != '') {
//            $_SESSION['ERR'][] = checkHash($originalFile);
//            header("Location: " . BASE_URL . 'apps/view/submission/upload.php');
//        } else {

        $fileTag = $_SESSION['username'] . '_' . time();

        $temp_manu_img = '';
        $temp_manu_tbl = '';
        $temp_manu_statement = '';
        $temp_manu_file = '';
        $duplicateFile = false;
        $duplicateFileName = array();


        if ($_FILES['manu_file']['name'] != '') {

            $hashOut = checkHash($originalManu_file,'Main article');
            if ( $hashOut== '') {
                $temp_manu_file = "$fileTag" . "_menu." . $realExts;
            } else {

                $duplicateFile = true;

//                array_push($duplicateFileName, 'Main article');
                array_push($duplicateFileName, $hashOut);
            }
        }
        if ($_FILES['manu_img']['name'] != '') {

            $hashOut = checkHash($originalManu_img,'Images file');
            if ( $hashOut== '') {

                $temp_manu_img = $fileTag . '_img.' . $realExts;
            } else {
                $duplicateFile = true;
                array_push($duplicateFileName, $hashOut);
            }
        }
        if ($_FILES['manu_tbl']['name'] != '') {

            $hashOut = checkHash($originalManu_tbl,'Table file');
            if ($hashOut == '') {

                $temp_manu_tbl = $fileTag . '_tbl.' . $realExts;
            } else {
                $duplicateFile = true;
                array_push($duplicateFileName, $hashOut);
            }
        }
        if ($_FILES['manu_statement']['name'] != '') {

            $hashOut = checkHash($originalManu_statement,'Authors\' statement document');
            if ($hashOut == '') {


                $temp_manu_statement = $fileTag . '_statement.' . $realExts;
            } else {
                $duplicateFile = true;
                array_push($duplicateFileName, $hashOut);
            }
        }
        if ($duplicateFile == false) {
            try {

                move_uploaded_file($_FILES["manu_file"]["tmp_name"], "upload_file/MainArticles/" . $temp_manu_file);
                move_uploaded_file($_FILES["manu_img"]["tmp_name"], "upload_file/ImagesFiles/" . $temp_manu_img);
                move_uploaded_file($_FILES["manu_tbl"]["tmp_name"], "upload_file/TableFiles/" . $temp_manu_tbl);
                move_uploaded_file($_FILES["manu_statement"]["tmp_name"], "upload_file/ManuStatements/" . $temp_manu_statement);

                $_SESSION['location'] = 'manuInfo.php';

                $sql2 = "INSERT INTO tbl_temp_manuscript(temp_manu_type,temp_manu_file,temp_manu_img,temp_manu_tbl,temp_manu_statement) values('$temp_manu_type','$temp_manu_file','$temp_manu_img','$temp_manu_tbl','$temp_manu_statement')";
                $qry = $conn->prepare($sql2);
                $qry->execute();
                $lastId = $conn->lastInsertId();

                $_SESSION['dataId'] = $lastId;
            } catch (PDOException $ex) {
//                $_SESSION['ERR'][] = $ex->getMessage();
            }
            
              header("Location: " . BASE_URL . 'apps/view/submission/manuInfo.php');
        } else {
            $_SESSION['file_handle_error'] = $duplicateFileName;
//                    echo __LINE__; 
            print_r($duplicateFileName);
            header("Location: " . BASE_URL . 'apps/view/submission/upload.php');
        }

//        }


        }
} 

//Pics are saved to the folder named "Upload" and its path is saved to the db not the pic
//-------------------End File Upload----------------------------------------------





