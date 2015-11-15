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

        <div class="wizard-steps">
            <div class="completed-step"><a href="checklist.php"><span>1</span>Checklist</a></div>
            <div class="completed-step"><a href="upload.php"><span>2</span>Upload the Manuscript</a></div>
            <div class="completed-step"><a href="manuInfo.php"><span>3</span>Manuscript information</a></div>
            <div class="completed-step"><a href="authorInfo.php"><span>4</span>Author information</a></div>
            <div class="active-step"><a href="validate.php"><span>5</span>Validation</a></div>
        </div>


        <div class="col-lg-8 col-lg-offset-2">
            <div class="form-group">
                <div class="table-responsive">
                    <table class="table" id="validate">
                        <br>
                        <tr>
                            <th>Title</th>
                            <td></td>
                        </tr>
                        <tr>
                            <th>Article Type</th>
                            <td></td>
                        </tr>
                        <tr>
                            <th>Subject</th>
                            <td></td>
                        </tr>
                        <tr>
                            <th>Abstract</th>
                            <td></td>
                        </tr>
                        <tr>
                            <th>Keywords</th>
                            <td></td>
                        </tr>
                    </table>
                    <fieldset class="scheduler-border">
                        <legend class="scheduler-border">Corresponding author</legend>
                        <table>
                            <tr>
                                <th>First Name</th>
                                <td>
                                    <label id="fname"></label>
                                </td>
                            </tr>
                            <tr><td>&nbsp;</td></tr>
                            <tr>
                                <th>Last Name</th>
                                <td>
                                    <label id="lname"></label>
                                </td>
                            </tr>
                            <tr><td>&nbsp;</td></tr>
                            <tr>
                                <th>Email</th>
                                <td>
                                    <label id="email"></label>
                                </td>
                            </tr>
                            <tr><td>&nbsp;</td></tr>
                            <tr>
                                <th>Telephone</th>
                                <td>
                                    <label id="mobile"></label>
                                </td>
                            </tr>
                            <tr><td>&nbsp;</td></tr>
                            <tr>
                                <th>Address</th>
                                <td>
                                    <label id="address"></label>
                                </td>
                            </tr>
                            <tr><td>&nbsp;</td></tr>
                            <tr>
                                <th>University/ Institute &emsp; <br>(Academic) </th>
                                <td>
                                    <label id="uni"></label>
                                </td>
                            </tr>
                        </table>
                    </fieldset>
                    <div class="form-group">
                        <fieldset class="scheduler-border">
                            <legend class="scheduler-border">Other authors</legend>
                            <table>
                                <tr>
                                    <th>First Name</th>
                                    <td><label id="fname"></label></td>
                                </tr>
                                <tr><td>&nbsp;</td></tr>
                                <tr>
                                    <th>Last Name</th>
                                    <td><label id="lname"></label></td>
                                </tr>
                                <tr><td>&nbsp;</td></tr>
                                <tr>
                                    <th>Email</th>
                                    <td><label id="email"></label></td>
                                </tr>
                            </table>
                        </fieldset>
                    </div>
                    <table align="center" width="100%">
                        <tr>
                            <td>
                                <button id="btnPreviousToManuInfo" class="btn btn-rounded" onclick="window.location.href='authorInfo.php'">&laquo;&nbsp;Previous</button>
                            </td>
                            <td>
                                <button id="btnSubmit" class="btn btn-rounded">Submit</button>
                            </td>
                            <td>
                                <button id="btnSave" class="btn btn-rounded">Save without submitting</button>
                            </td>
                        </tr>
                        <tr><td>&nbsp;</td></tr>
                    </table>
                </div>
            </div>
        </div>
        <?php $template->getFooter(); ?>        
    </body>
</html>

