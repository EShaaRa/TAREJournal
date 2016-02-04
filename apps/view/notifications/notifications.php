<?php
require_once '../../controller/config/config.php';
require_once '../../login_info.php';
$template = new template();
?>

<html>
    <head>
        <title>Notification</title>
        <?php $template->getHead(); ?> 
    </head>
    <body>
        <?php $template->getHeader(); ?>
        <?php $template->getBody(); ?>
        <?php $template->getMenu(); ?> 


        <div class="col-lg-10 col-lg-offset-1 col-md-8 col-sm-12">
            <div class="col-lg-9">
                <p style="font: 20px arial, sans-serif, bold;">Your notifications</p>
            </div>
            <div class="pull-right"><a href="settings.php"> Notification Settings</a></div>
        </div>
        <br>
        <hr size="100%">

        <?php $template->getFooter(); ?>        
    </body>
</html>

