<?php
require_once '../../controller/config/config.php';
$template = new template();
?>

<!DOCTYPE html>
<html>
    <?php $template->getHead(); ?> 

    <body>
        <?php $template->getBody(); ?>
        <?php $template->getHeader(); ?>
        <?php $template->getMenu(); ?>
        <h3><b>Guide for Authors' Submissions</b></h3>
        <ul style="list-style-type:disc">
            <li>The submission should not been previously published, nor is it before another journal for consideration</li>
            <li>The submission file should be in OpenOffice or Microsoft Word format.</li>
        </ul>

        
    <h7>User Registration</h7>
    Login page-> New user
    
    If you are an existing user in one role(Eg: Author) and now you want to register as another role (Eg:reviewer), Go to 
    New User-> Tick only the role you want to regidter newly, 
    then give the email address. Database will fill the basic detail and you will the rest
        
        
        <?php $template->getFooter(); ?>        
    </body>
</html>
