<?php
require_once '../../controller/config/config.php';
require_once '../../login_info.php';
$template = new template();
?>

<!DOCTYPE html>
<html>
    <head>
         <title>Upload files</title>
        <?php $template->getHead(); ?>
        <?php $template->getHead(); ?> 
        <link rel="stylesheet" type="text/css" id="wizard" href="../../../lib/css/pages/submission/upload.css"/>
        <script type="text/javascript" id="wizard" src="../../../lib/js/pages/submission/index.js"></script>
    </head>
    <body>
        <?php $template->getPlainBody(); ?>
        <?php $template->getHeader(); ?> 
        <?php $template->getMenu(); ?>
        <?php $template->showMessage(); ?>

        <div class="wizard-steps">
            <div class="completed-step"><a href="checklist.php"><span>1</span> Checklist</a></div>
            <div class="active-step"><a href="upload.php"><span>2</span> Upload the Manuscript</a></div>
            <div><a><span>3</span>Manuscript information</a></div>
            <div><a><span>4</span> Author information</a></div>
            <div><a><span>5</span>Validation</a></div>
        </div>


        <div class="row-fluid main-body">
            <div class="row">
                <div class="col-lg-6 col-lg-offset-2">
                    <br>
                    <form enctype="multipart/form-data" action="../../../apps/model/submission/_upload.php" method="post">
                        <legend class="scheduler-border">Upload your manuscript</legend>
                        <hr style="border-width: 3px;"/>
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
                        <label>Main article</label>
                        <input type="file" name="manu_file" id="manu_file">

                        <p class="help-block">Please upload your manuscript in word format(.doc or .docx) < 8 MB</p>

                        <label>Images file</label>
                        <input type="file" name="manu_img" id="manu_img"> 
                        <p class="help-block">Please insert your all images to a single word document with clear reference(.doc or .docx) < 8 MB</p>

                        <label>Table file</label>
                        <input type="file" name="manu_tbl" id="manu_tbl">
                        <p class="help-block">Please insert your all tables to a single word document with clear reference(.doc or .docx) < 8 MB</p>

                        <label>Upload Authors' statement document</label>
                        <input type="file" name="manu_statement" id="manu_statement">
                        <p class="help-block">Please download Authors' statement document here, fill it, scan and upload here (.doc or .docx) < 8 MB</p>

                        <hr style="border-width: 3px;"/>
                        <table width='100%'>
                            <tr>
                                <td>
                                    <button id="btnPreviousToChecklist" class="btn btn-success btn-rounded">&laquo;&nbsp;Previous</button>
                                </td>
                                <td>
                                    <button type="submit" id="btnNextToManuInfo" class="btn btn-success btn-rounded">Next&nbsp;&raquo;</button>
                                </td>
                                <td>
                                    <button type="reset" class="btn btn-success btn-rounded" >Cancel</button>
                                </td>
                            </tr>
                        </table>
                    </form>
                </div>
            </div>
            <?php $template->getFooter(); ?>  
        </div>
    </body>
</html>