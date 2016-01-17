<?php
require_once '../../controller/config/config.php';
$template = new template();
?>

<!DOCTYPE html>
<html>
    <head>
        <?php $template->getHead(); ?> 
        <link rel="stylesheet" type="text/css" id="wizard" href="../../../lib/css/pages/submission/upload.css"/>
        <script type="text/javascript" id="wizard" href="../../../lib/js/pages/submission/index.js"></script>
    </head>
    <body>
        <?php $template->getBody(); ?>
        <?php $template->getHeader(); ?> 
        <?php $template->getMenu(); ?>

        <div class="container-fluid">
            <div class="wizard-steps">  
                <div class="active-step"><a href="reUpload.php"> Upload the manuscript</a></div>
                <div><a href="reManuInfo.php">Manuscript information</a></div>
                <div><a href="reAuthorInfo.php">Author information</a></div>
                <div><a href="reValidate.php">Validation</a></div>
            </div>

            <div class="col-lg-8 col-lg-offset-2">
                <br>
                <div class="form-group">
                    <fieldset class="scheduler-border">
                        <legend class="scheduler-border">Upload your manuscript</legend>
                        <div class="control-group">
                            <label>Please select your type of article</label><br>
                            <select name="article_type" id="article_type" class="input-field" onchange="display(this.value);">
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
                            <label for="exampleInputFile">File input</label>
                            <input type="file" id="exampleInputFile">
                            <p class="help-block">Please upload your manuscript in word format(.doc or .docx) < 8 MB</p>
                        </div>
                    </fieldset>
                    <button id="btnNextToManuInfo" class="btn btn-rounded">Next&nbsp;&raquo;</button>
                </div>
            </div>
        </div>
        <?php $template->getFooter(); ?>        
    </body>
</html>