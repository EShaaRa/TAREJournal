<?php
require_once '../../controller/config/config.php';
//require_once '../../login_info.php';
$template = new template();
$lastId = $conn->lastInsertId();
$sql = "SELECT temp_manu_title,temp_manu_type,temp_manu_sub,temp_manu_abstract,	temp_manu_keywords FROM tbl_temp_manuscript WHERE temp_manu_id = '$lastId'";

$stmt = $conn->prepare($sql);
$stmt->execute();
$result = $stmt->fetchAll();

$details = $result[0];
print_r($details);
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Verify</title>
        <?php $template->getHead(); ?>
        <?php $template->getHead(); ?> 
        <link rel="stylesheet" type="text/css" id="wizard" href="../../../lib/css/pages/submission/upload.css"/>
        <script type="text/javascript" id="wizard" src="../../../lib/js/pages/submission/index.js"></script>
         <title><?php echo $title; ?></title>
    </head>
    <body>
        <?php $template->getPlainBody(); ?> 
        <?php $template->getHeader(); ?>
        <?php $template->getMenu(); ?>

            <div class="wizard-steps">
                <div class="completed-step"><a href="checklist.php"><span>1</span>Checklist</a></div>
                <div class="completed-step"><a href="upload.php"><span>2</span>Upload the Manuscript</a></div>
                <div class="completed-step"><a href="manuInfo.php"><span>3</span>Manuscript information</a></div>
                <div class="completed-step"><a href="authorInfo.php"><span>4</span>Author information</a></div>
                <div class="active-step"><a href="validate.php"><span>5</span>Validation</a></div>
            </div>
   <div class="row-fluid main-body">
            <div class="row">
            <div class="col-lg-6 col-lg-offset-2">
                <br>
                <form action="../../../apps/model/submission/_validate.php" method="post">
<!--                    <hr style="color: black; size: 20px; border-width: 1px;">-->
                    <table class="table" id="validate">
                        <br>
                        <tr>
                            <th>Title of your manuscript</th>
                            <td>
                                <input type="text" name="title" value=<?php echo $details['user_fname']; ?> required=""/>
                            </td>
                        </tr>
                        <tr>
                            <th>Article Type</th>
                            <td>
                                <input type="text" name="type" value=<?php echo $user_email; ?> required=""/>
                            </td>
                        </tr>
                        <tr>
                            <th>Subject</th>
                            <td>
                                <input type="text" name="sub" value=<?php echo $temp_manu_title; ?> required=""/>
                            </td>
                        </tr>
                        <tr>
                            <th>Abstract</th>
                            <td>
                                <input type="text" name="abstract" value=<?php echo $temp_manu_title; ?> required=""/>
                            </td>
                        </tr>
                        <tr>
                            <th>Keywords</th>
                            <td>
                                <input type="text" name="keywords" value=<?php echo $temp_manu_title; ?> required=""/>
                            </td>
                        </tr>
                    </table>
<!--                    <hr>
                    <legend class="scheduler-border">Corresponding author</legend>
                    <table>
                        <tr>
                            <th>Title</th>
                            <td>
                                <input type="text" name="ca_title" value=<?php echo $temp_manu_title; ?> required=""/>
                            </td>
                        </tr>
                        <tr><td>&nbsp;</td></tr>
                        <tr>
                            <th>First Name</th>
                            <td>
                                <input type="text" name="ca_fname" value=<?php echo $temp_manu_title; ?> required=""/>
                            </td>
                        </tr>
                        <tr><td>&nbsp;</td></tr>
                        <tr>
                            <th>Middle Name</th>
                            <td>
                                <input type="text" name="ca_mname" value=<?php echo $temp_manu_title; ?> required=""/>
                            </td>
                        </tr>
                        <tr><td>&nbsp;</td></tr>
                        <tr>
                            <th>Last Name</th>
                            <td>
                                <input type="text" name="ca_lname" value=<?php echo $temp_manu_title; ?> required=""/>
                            </td>
                        </tr>
                        <tr><td>&nbsp;</td></tr>
                        <tr>
                            <th>Email</th>
                            <td>
                                <input type="text" name="ca_email" value=<?php echo $temp_manu_title; ?> required=""/>
                            </td>
                        </tr>
                        <tr><td>&nbsp;</td></tr>
                        <tr>
                            <th>University/ Institute &emsp; <br>(Academic) </th>
                            <td>
                                <input type="text" name="ca_uni" value=<?php echo $temp_manu_title; ?> required=""/>
                            </td>
                        </tr>
                        <tr><td>&nbsp;</td></tr>
                        <tr>
                            <th>Address</th>
                            <td>
                                <input type="text" name="ca_addr" value=<?php echo $temp_manu_title; ?> required=""/>
                            </td>
                        </tr>
                        <tr><td>&nbsp;</td></tr>
                        <tr>
                            <th>Telephone</th>
                            <td>
                                <input type="text" name="ca_tp" value=<?php echo $temp_manu_title; ?> required=""/>
                            </td>
                        </tr>
                    </table>
                    <hr/>
                    <div class="form-group">-->
<!--                        <hr/>
                        <legend class="scheduler-border">Other authors</legend>
                        <table>
                            <tr>
                                <th>First Name</th>
                                <td>
                                    <input type="text" name="fname" required="" value=<?php echo $fname; ?> />
                                </td>
                            </tr>
                            <tr><td>&nbsp;</td></tr>
                            <tr>
                                <th>Middle Name</th>
                                <td><input type="text" name="mname" value=<?php echo $temp_manu_title; ?> required=""/>
                                </td>
                            </tr>
                            <tr><td>&nbsp;</td></tr>
                            <tr>
                                <th>Last Name</th>
                                <td>
                                    <input type="text" name="lname" value=<?php echo $temp_manu_title; ?> required=""/>
                                </td>
                            </tr>
                            <tr><td>&nbsp;</td></tr>
                            <tr>
                                <th>Email</th>
                                <td>
                                    <input type="text" name="email" value=<?php echo $temp_manu_title; ?> required=""/>
                                </td>
                            </tr>
                            <tr><td>&nbsp;</td></tr>
                            <tr>
                                <th>University/ Institute &emsp; <br>(Academic) </th>
                                <td>
                                    <input type="text" name="uni" value=<?php echo $temp_manu_title; ?> required=""/>
                                </td>
                            </tr>
                        </table>
                        <hr/>-->
<!--                    </div>-->

                    <!--                    <button id="btnPreviousToAuthorInfo" class="btn btn-rounded" onclick="window.location.href = 'authorInfo.php'">&laquo;&nbsp;Previous</button>-->
                    <button type="submit" id="btnsubmit" class="btn btn-success btn-rounded">Submit</button>
                    <div class="pull-right">
                        <button type="reset" id="btnsubmit" class="btn btn-success btn-rounded">Cancel</button>
                    </div>
                  
                </form>      
            </div>
        </div>
   </div>
        <?php $template->getFooter(); ?>  

    </body>
</html>