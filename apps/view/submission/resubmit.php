<?php
require_once '../../controller/config/config.php';
$template = new template();
?>

<html>
    <head>
        <link rel="stylesheet" type="text/css" id="wizard" href="../../../lib/css/pages/submission/upload.css"/>
        <link rel="stylesheet" type="text/javascript" id="wizard" href="../../../lib/js/pages/submission/index.js"/>
        <?php $template->getHead(); ?> 
    </head>
    <body>
        <?php $template->getHeader(); ?>
        <?php $template->getBody(); ?>
        <?php $template->getMenu(); ?> 

        <div class="container-fluid">
            <div class="wizard-steps">  
                <div class="active-step"><a href="reUpload.php"> Upload the manuscript</a></div>
                <div><a href="reManuInfo.php">Manuscript information</a></div>
                <div><a href="reAuthorInfo.php">Author information</a></div>
                <div><a href="reValidate.php">Validation</a></div>
            </div>


        </div>
        <?php $template->getFooter(); ?>        
    </body>
</html>


