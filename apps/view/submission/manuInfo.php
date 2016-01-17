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
    <body >
        <?php
        $template->getPlainBody();
        $template->getHeader();
        $template->getMenu();
        $template->showMessage();
//        print_r($_SESSION['SUCCESS']);
//        echo '' . $_SESSION['SUCCESS'][1];
        ?>


        <div class="container-fluid">

            <div class="wizard-steps">
                <div class="completed-step"><a href="checklist.php"><span>1</span> Checklist</a></div>
                <div class="completed-step"><a href="upload.php"><span>2</span> Upload the Manuscript</a></div>
                <div class="active-step"><a href="manuInfo.php"><span>3</span>Manuscript information</a></div>
                <div><a href="authorInfo.php"><span>4</span> Author information</a></div> 
                <div><a href="validate.php"><span>5</span>Validation</a></div>
            </div>

            <div class="col-lg-6 col-lg-offset-2">
                <br>
                <form action="../../../apps/model/submission/_manuInfo.php" method="post">
                    <legend class="scheduler-border">Fill the details</legend>
                    <hr/>
                    <table align="center" width="100%">
                        <tr>
                            <td align="right">Title of your manuscript&emsp;</td>
                            <td><input type="text" class="form-control" name="manu_title" placeholder="" required=""></td>
                        </tr>
                        <tr><td>&nbsp;</td></tr>
                        <tr>
                            <td align="right">Please select the &emsp;<br>subject area of article &emsp;</td>
                            <td>
                                <select name="manu_sub" class="input-field">
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
                            <td><textarea cols="" rows="10" class="form-control" name="manu_abstract" required=""> </textarea></td>
                        </tr>
                        <tr><td>&nbsp;</td></tr>
                        <tr>
                            <td align="right">Keywords &emsp;<br>(Separate using commas)&emsp;</td>
                            <td>
                                <input type="text" class="form-control" name="manu_keywords" placeholder="" required="">
                            </td>
                    </table>
                    <hr/>
                    <button id="btnPreviousToUpload" class="btn btn-rounded" onclick="window.location.href = 'upload.php'">&laquo;&nbsp;Previous</button>
                    <div class="pull-right">
                        <button type="submit" id="btnNextToAuthor" class="btn btn-rounded">Next&nbsp;&raquo;</button>
                    </div>
                    <div class="row">&nbsp;</div> 
                </form>
                <div class="row">&nbsp;</div> 
            </div>
            <?php $template->getFooter(); ?>  
        </div>
    </body>
</html>