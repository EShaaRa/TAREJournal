<?php
require_once '../../controller/config/config.php';
$template = new template();
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Guidelines</title>
        <?php $template->getHead(); ?> 
    </head> 

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
    
    Seperate files for image and tables
    Author declaration form download here
    
    TARE GUIDELINES <br>
    The papers submitting to the Journal should not have been published previously in the same, or any other form or language, or being considered for publication elsewhere.<br>
    Language of publication is English
    Your manuscript is in correct length
    Review: no limitations<br/>
    Research articles: less than 20 pages<br/>
    Short Communications: an abstract of about 50 words, should not exceed 2000 words including a maximum of two tables<br/>
                            
        
        
        <?php $template->getFooter(); ?>        
    </body>
</html>
