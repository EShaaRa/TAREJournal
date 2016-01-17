<?php
require_once '../../controller/config/config.php';
$template = new template();
?>

<!DOCTYPE html>
<html>
    <head>
        <?php $template->getHead(); ?> 
        <link rel="stylesheet" type="text/css" id="wizard" href="../../../lib/css/pages/submission/upload.css"/>
        <script type="text/javascript" id="wizard" src="../../../lib/js/pages/submission/index.js"></script>
    </head>
    <body>
        <?php $template->getBody(); ?>
        <?php $template->getHeader(); ?> 
        <?php $template->getMenu(); ?>

        <div class="container-fluid">

            <div class="wizard-steps">
                <div class="completed-step"><a href="checklist.php"><span>1</span> Checklist</a></div>
                <div class="active-step"><a href="upload.php"><span>2</span> Upload the Manuscript</a></div>
                <div><a href="manuInfo.php"><span>3</span>Manuscript information</a></div>
                <div><a href="authorInfo.php"><span>4</span> Author information</a></div>
                <div><a href="validate.php"><span>5</span>Validation</a></div>
            </div>



            <div class="col-lg-6 col-lg-offset-2">
                <br>
                <form enctype="multipart/form-data" action="../../../apps/model/submission/_upload.php" method="post">
                    <legend class="scheduler-border">Upload your manuscript</legend>
                    <hr/>
                    <label>Please select your type of article</label><br>
                    <select name="manu_type" required="">
                        <option value="Research">Research Article</option>
                        <option value="Review">Review Paper</option>
                        <option value="MiniReview">Mini Review</option>
                        <option value="Short Communication">Short Communication</option>
                        <option value="Case Study">Case Study</option>
                        <option value="Other">Other</option>
                    </select>
                    <br>
                    <br>
                    <br>
                    <label>File input</label>
                    <input type="file" name="manu_file" id="manu_file">
                    <p class="help-block">Please upload your manuscript in word format(.doc or .docx) < 8 MB</p>
                    <hr/>

                    <button id="btnPreviousToChecklist" class="btn btn-rounded">&laquo;&nbsp;Previous</button>
                    <div class="pull-right">
                        <button type="submit" id="btnNextToManuInfo" class="btn btn-rounded">Next&nbsp;&raquo;</button>
                    </div>
                    <div class="row">&nbsp;</div> 
                </form>
                <div class="row">&nbsp;</div> 
            </div>
            <?php $template->getFooter(); ?>  
        </div>
    </body>
</html>