<?php
require_once '../../controller/config/config.php';
$template = new template();
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Proof</title>
        <?php $template->getHead(); ?> 
        <link rel="stylesheet" type="text/css" id="wizard" href="../../../lib/css/pages/submission/upload.css"/>
        <script type="text/javascript" id="wizard" src="../../../lib/js/pages/submission/index.js"></script>
    </head>
    <body>

        <?php $template->getHeader(); ?> 
        <?php $template->getMenu(); ?>
        <?php $template->getBody(); ?>

Download here



        <?php $template->getFooter(); ?>        
    </body>
</html>
