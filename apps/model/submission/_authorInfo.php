<?php

require_once '../../controller/config/config.php';

$temp_manu_author_fname = trim($_POST['fname']);
$temp_manu_author_lname = trim($_POST['lname']);
$temp_manu_author_email = trim($_POST['email']);
$temp_manu_author_address = trim($_POST['address']);

 try {

                $sql = "INSERT INTO tbl_manuscipt_authors(manu_author_fname,manu_author_lname,manu_author_email,manu_author_address) values(:manu_type,:manu_file)";
                $qry = $conn->prepare($sql);
                $qry->execute(array(':manu_type' => $temp_manu_type, ':manu_file' => $temp_manu_file));
                header("Location: " . BASE_URL . 'apps/view/submission/manuInfo.php');
                $_SESSION['SUCCESS'][] = "Successfully Registered! Please Login";
            } catch (Exception $ex) {
                $_SESSION['ERR'][] = $ex->getMessage();
            }

