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


        <?php $template->getBody(); ?>
        <?php $template->getHeader(); ?> 
        <?php $template->getMenu(); ?>

        <div class="container-fluid">
            <div class="wizard-steps">
                <div class="active-step"><a href="checklist.php"><span>1</span> Checklist</a></div>
                <div><a href="upload.php"><span>2</span> Upload the manuscript</a></div>
                <div><a href="manuInfo.php"><span>3</span>Manuscript information</a></div>
                <div><a href="authorInfo.php"><span>4</span> Author information</a></div>
                <div><a href="validate.php"><span>5</span>Validation</a></div>
            </div>


            <div class="col-lg-8 col-lg-offset-2">
                <br>
                <form action="upload.php" method="post">
                    <legend class="scheduler-border">Checklist</legend>
                    <hr/>
                    <table>
                        <tr>
                            <td><input type="checkbox" name="checklist" class="cb" required=""/></td>
                            <td>&nbsp;</td>
                            <td> The papers submitting to the Journal should not have been published previously in the same, or any other form or language, or being considered for publication elsewhere.</td>
                        </tr>
                        <tr>
                            <td><input type="checkbox" name="checklist" class="cb" required=""/></td>
                            <td>&nbsp;</td>
                            <td>The submission file is in OpenOffice or Microsoft Word file format.</td>
                        </tr>
                        <tr>
                            <td><input type="checkbox" name="checklist" class="cb" required=""/></td>
                            <td>&nbsp;</td>
                            <td>Language of publication is English</td>
                        </tr>
                        <tr>
                            <td><input type="checkbox" name="checklist" class="cb" required=""/></td>
                            <td>&nbsp;</td>
                            <td>Your manuscript is in correct length</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>&nbsp;</td>
                            <td>&emsp;Review: no limitations<br/>
                                &emsp;Research articles: less than 20 pages<br/>
                                &emsp;Short Communications: an abstract of about 50 words, should not exceed 2000 words including a maximum of two tables
                            </td>
                        </tr>
                        <tr>
                            <td><input type="checkbox" name="checklist" id="cb5" required=""/></td>
                            <td>&nbsp;</td>
                            <td>My article follows TARE guidelines</td>
                        </tr>
                    </table>

                    <hr/>
                    <button type="Submit" class="btn btn-rounded" >Next&nbsp;&raquo;</button>
                    <div class="row">&nbsp;</div> 
                </form>
                <div class="row">&nbsp;</div> 
            </div>
            <?php $template->getFooter(); ?>  
        </div>
    </body>
</html>

