<?php
require_once '../../controller/config/config.php';
$template = new template();
?>

<!DOCTYPE html>
<html>
    <head>
        <?php $template->getHead(); ?> 
        <link rel="stylesheet" type="text/css" id="wizard" href="../../../lib/css/pages/submission/upload.css"/>
        <link rel="stylesheet" type="text/javascript" id="wizard" href="../../../lib/js/pages/submission/index.js"/>
    </head>
    <body>

        <?php $template->getHeader(); ?> 
        <?php $template->getMenu(); ?>

        <div class="container-fluid">
            <div class="wizard-steps">
            <div class="completed-step"><a href="checklist.php"><span>1</span> Checklist</a></div>
            <div class="completed-step"><a href="upload.php"><span>2</span> Upload the Manuscript</a></div>
            <div class="completed-step"><a href="manuInfo.php"><span>3</span>Manuscript information</a></div>
            <div class="active-step"><a href="authorInfo.php"><span>4</span> Author information</a></div>
            <div><a href="validate.php"><span>5</span>Validation</a></div>
        </div>

        <div class="col-lg-8 col-lg-offset-2">
            <br>
            <div class="form-group">
                <fieldset class="scheduler-border">
                    <legend class="scheduler-border">Add author (One by one)</legend>
                    <div class="control-group">
                        <table align="center" width="100%">
                            <tr>
                                <td>First Name*&emsp;</td>
                                <td><input type="text" class="form-control" name="fname" placeholder="" validate="true" match="^[a-zA-Z]+$" error="Please Enter First Name" required=""></td>
                            </tr>
                            <tr><td>&nbsp;</td></tr>
                            <tr>
                                <td>Last Name*</td>
                                <td>
                                    <input type="text" class="form-control" name="lname" placeholder="" validate="true" match="^[a-zA-Z]+$" error="Please Enter Last Name" required="">
                                </td>
                            </tr>
                            <tr><td>&nbsp;</td></tr>
                            <tr>
                                <td>Email*</td>
                                <td>
                                    <input type="email" class="form-control" name="email" placeholder="" validate="true" match="^[a-zA-Z]+$" error="Please Enter a valid email address" required="">
                                </td>
                            </tr>
                            <tr><td>&nbsp;</td></tr>
                            <tr>
                                <td>Work Address *</td>
                                <td>
                                    <input type="text" class="form-control" name="address" placeholder="" validate="true" match="^[a-zA-Z]+$" error="Please Enter The Address" required="">
                                </td>
                            </tr>
                            <tr><td>&nbsp;</td></tr>
                        </table>
                        <button class="btn btn-rounded" id="btnAddAuthor"> + Add Author</button>
                    </div>
                </fieldset>

                <fieldset class="scheduler-border">
                    <legend class="scheduler-border">Corresponding Author</legend>
                    <div class="control-group">
                        <table align="center" width="100%">
                            <tr>
                                <td>Title*</td>
                                <td>
                                    <select name="title" name="title" validate="true" error="Please select a title">
                                        <option value="0">Please select</option>
                                        <option value="Dr">Dr</option>
                                        <option value="Prof">Prof</option>
                                        <option value="Mr">Mr</option>
                                        <option value="Mrs">Mrs</option>
                                        <option value="Miss">Miss</option>
                                    </select>
                                </td>
                            </tr>
                            <tr><td>&nbsp;</td></tr>
                            <tr>
                                <td>First Name*</td>
                                <td>
                                    <input type="text" class="form-control" name="fname" placeholder="" validate="true" match="^[a-zA-Z]+$" error="Please Enter First Name">
                                </td>
                            </tr>
                            <tr><td>&nbsp;</td></tr>
                            <tr>
                                <td>Middle Name</td>
                                <td>
                                    <input type="text" class="form-control" name="mname" placeholder="">
                                </td>
                            </tr>
                            <tr><td>&nbsp;</td></tr>
                            <tr>
                                <td>Last Name*</td>
                                <td>
                                    <input type="text" class="form-control" name="lname" placeholder="" validate="true" match="^[a-zA-Z]+$" error="Please Enter Last Name">
                                </td>
                            </tr>
                            <tr><td>&nbsp;</td></tr>
                            <tr>
                                <td>Email*</td>
                                <td>
                                    <input type="email" class="form-control" name="email" placeholder="" validate="true" match="^[a-zA-Z]+$" error="Please Enter a valid email address">
                                </td>
                            </tr>  
                            <tr><td>&nbsp;</td></tr>
                            <tr>
                                <td>Telephone</td>
                                <td>
                                    <input type="text" name="mobile" placeholder="Please enter with counry code" validate="true" match="^[0-9]+$" error="Please Enter a valid mobile number">
                                </td>
                            </tr>
                            <tr><td>&nbsp;</td></tr>
                            <tr>
                                <td>Address *</td>
                                <td>
                                    <textarea id="address" name="addr" cols="75" rows="4" ></textarea>
                                </td>
                            </tr>
                            <tr><td>&nbsp;</td></tr>
                            <tr>
                                <td>University/ Institute (Academic)*</td>
                                <td>
                                    <input type="text" class="form-control" name="uni" placeholder="">
                                </td>
                            </tr>
                        </table>
                    </div>
                </fieldset>

                <button id="btnNextToValidate" class="btn btn-rounded">Next&nbsp;&raquo;</button>
                <div class="pull-right">
                    <button id="btnPreviousToManuInfo" class="btn btn-rounded" onclick="window.location.href='manuInfo.php'">&laquo;&nbsp;Previous</button>
                </div>
                <div>&emsp;</div>
            </div>
        </div>
        <?php $template->getFooter(); ?>        
    </body>
</html>

