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

        <div class="wizard-steps">
            <div class="completed-step"><a href="checklist.php"><span>1</span> Checklist</a></div>
            <div class="completed-step"><a href="upload.php"><span>2</span> Upload the Manuscript</a></div>
            <div class="active-step"><a href="manuInfo.php"><span>3</span>Manuscript information</a></div>
            <div><a href="authorInfo.php"><span>4</span> Author information</a></div> 
            <div><a href="validate.php"><span>5</span>Validation</a></div>
        </div>

        <div class="col-lg-8 col-lg-offset-2">
            <br>
            <div class="form-group">
                <fieldset class="scheduler-border">
                    <legend class="scheduler-border">Fill the details</legend>
                    <div class="control-group">
                        <table align="center" width="100%">
                            <tr>
                                <td align="right">Title of your manuscript&emsp;</td>
                                <td><input type="text" class="form-control" id="title" placeholder=""></td>
                            </tr>
                            <tr><td>&nbsp;</td></tr>
                            <tr>
                                <td align="right">Please select your <br> subject area of article &emsp;</td>
                                <td>
                                    <select name="article_type" id="article_type" class="input-field" onchange="display(this.value);">
                                        <option value="Econ">Agricultural Economics & Extension</option>
                                        <option value="Agric eng">Agricultural Engineering</option>
                                        <option value="Agro-forestry">Agro-forestry</option>
                                        <option value="Animal">Animal Science</option>
                                        <option value="Biotechnology">Biotechnology</option>
                                        <option value="Crop Science">Crop Science</option>
                                        <option value="Fisheries Biology">Fisheries Biology</option>
                                        <option value="Food">Food Science & Post Harvest Technology</option>
                                        <option value="Genetics">Genetics & Plant Breeding</option>
                                        <option value="Plant Protection">Plant Protection</option>
                                        <option value="Indigenous Knowledge Systems">Indigenous Knowledge Systems</option>
                                        <option value="Integrated Farming Systems">Integrated Farming Systems</option>
                                        <option value="Soil">Natural Resource Management and Soil Science</option>
                                    </select>
                                </td>
                            </tr>
                            <tr><td>&nbsp;</td></tr>
                            <tr>
                                <td align="right">Abstract&emsp;</td>
                                <td><textarea cols="" rows="10" class="form-control" id="abstract"> </textarea></td>
                            </tr>
                            <tr><td>&nbsp;</td></tr>
                            <tr>
                                <td align="right">Keywords &emsp;<br>(Separate using commas)&emsp;</td>
                                <td>
                                    <input type="text" class="form-control" id="title" placeholder="">
                                </td>
                        </table>
                    </div>
                </fieldset>

                <button id="btnNextToAuthor" class="btn btn-rounded">Next&nbsp;&raquo;</button>
                <div class="pull-right">
                    <button id="btnPreviousToUpload" class="btn btn-rounded" onclick="window.location.href='upload.php'">&laquo;&nbsp;Previous</button>
                </div>
                <div>&emsp;</div>
            </div>
        </div>
            <?php $template->getFooter(); ?>        
    </body>
</html>