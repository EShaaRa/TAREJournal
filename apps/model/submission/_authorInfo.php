<?php

require_once '../../controller/config/config.php';

$temp_manu_author_fname = trim($_POST['fname']);
$temp_manu_author_lname = trim($_POST['lname']);
$temp_manu_author_email = trim($_POST['email']);
$temp_manu_author_address = trim($_POST['address']);

 try {

                $sql = "INSERT INTO tbl_manuscipt_authors(manu_author_fname,manu_author_lname,manu_author_email,manu_author_address) values(:fname,:lname,:email,:address)";
                $qry = $conn->prepare($sql);
                $qry->execute(array(':manu_author_fname' => $temp_manu_author_fname, ':manu_author_lname' => $temp_manu_author_lname, ':manu_author_email' => $temp_manu_author_email, ':manu_author_address' => $temp_manu_author_address));
                header("Location: " . BASE_URL . 'apps/view/submission/manuInfo.php');
                $_SESSION['SUCCESS'][] = "Author information done! Please Fill corresponding details";
            } catch (Exception $ex) {
                $_SESSION['ERR'][] = $ex->getMessage();
            }

