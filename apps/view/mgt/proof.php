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
        <?php $template->getBody(); ?>

Download here



        <?php $template->getFooter(); ?>        
    </body>
</html>
