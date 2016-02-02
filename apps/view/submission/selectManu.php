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
                <div class="active-step"><a href="selectManu.php"><span>1</span> Select it</a></div>
                <div><a><span>2</span> Upload the manuscript</a></div>
                <div><a><span>3</span>Manuscript information</a></div>
                <div><a><span>4</span> Author information</a></div>
                <div><a><span>5</span>Validation</a></div>
            </div>


            <div class="col-lg-8 col-lg-offset-2">
                <br>
              
                <form action="../../../apps/model/submission/_manuInfo.php" method="post">
                    <label>Select the manuscript</label>
                    <select name="ca_title">
                                                <!--                                                <option value="0">Please select</option>-->
                                                <option value="Dr">Dr</option>
                                                <option value="Prof">Prof</option>
                                                <option value="Mr">Mr</option>
                                                <option value="Mrs">Mrs</option>
                                                <option value="Miss">Miss</option>
                                            </select>
                </form>
                <div class="row">&nbsp;</div> 
            </div>
            <?php $template->getFooter(); ?>  
        </div>
    </body>
</html>

