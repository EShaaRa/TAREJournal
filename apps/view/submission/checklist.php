<?php
require_once '../../controller/config/config.php';
require_once '../../login_info.php';
$template = new template();
?>

<!DOCTYPE html>
<html>
    <head>
         <title>Checklist</title>
        <?php $template->getHead(); ?>
        
        <link rel="stylesheet" type="text/css" id="wizard" href="../../../lib/css/pages/submission/upload.css"/>
        <script type="text/javascript" id="wizard" src="../../../lib/js/pages/submission/index.js"></script>
    </head>
    <body>

        <?php $template->getHeader(); ?> 
        <?php $template->getMenu(); ?>
        <?php $template->getPlainBody(); ?> 

        <div class="wizard-steps">
            <div class="active-step"><a href="checklist.php"><span>1</span> Checklist</a></div>
            <div><a><span>2</span> Upload the manuscript</a></div>
            <div><a><span>3</span>Manuscript information</a></div>
            <div><a><span>4</span> Author information</a></div>
            <div><a><span>5</span>Validation</a></div>
        </div>
        <div class="row-fluid main-body">
            <div class="row">

                <div class="col-lg-8 col-lg-offset-2">
                    <br>
                    <form action="upload.php" method="post">
                        <legend class="scheduler-border">Checklist</legend>
                        <hr style="border-width: 3px;"/>
                        <table>
                            <tr>
                                <td><input type="checkbox" name="checklist" class="cb" required=""/></td>
                                <td>&emsp;</td>
                                <td> You are the corresponding author of the article.
                            </tr>
                            <tr>
                                <td></td>
                                <td></td>
                                <td>
                                    (If not ask that person to do the submission )</td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" name="checklist" class="cb" required=""/></td>
                                <td>&emsp;</td>
                                <td>Main article, images file, table file and authors' declaration form are ready.
                            </tr>
                            <tr>
                                <td></td>
                                <td></td>
                                <td>
                                    (Go to <a href="../help/guide.php">help</a> page for more details)</td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" name="checklist" id="cb5" required=""/></td>
                                <td>&emsp;</td>
                                <td>My article follows TARE guidelines</td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" name="checklist" class="cb" required=""/></td>
                                <td>&emsp;</td>
                                <td>All files are in OpenOffice or Microsoft Word file format.</td>
                            </tr>
                        </table>
                        <hr style="border-width: 3px;"/>
                        <button type="reset" class="btn btn-success btn-rounded" >Cancel</button>
                        <div class="pull-right">
                            <button type="Submit" class="btn btn-success btn-rounded" >Next&nbsp;&raquo;</button>
                        </div>
                    </form>
                </div>
            </div>
            <?php $template->getFooter(); ?>  
        </div>
    </body>
</html>

