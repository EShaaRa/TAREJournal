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

        <h3><b>Terms and Conditions</b></h3>
        <pre>

By accessing or using this site, you agree to be bound by the terms and conditions below. If you do not agree with these Terms and Conditions, please do not use this Site. TARE manuscript management system(TMMS) reserves the right to change, modify, add or remove portions of these Terms and Conditions in its sole discretion at any time and without prior notice. Please check this page periodically for any modifications. Your continued use of this Site following the posting of any changes will mean that you have accepted the changes. All content in this Site, including site layout, design, images, programs, text and other information is the property of TMMS and it is protected by copyright and other intellectual property laws. You may not copy, display, distribute, modify, publish, reproduce, store, transmit, create derivative works from, or sell or license all or any part of the Content, products or services obtained from this Site in any medium to anyone, except as otherwise expressly permitted under applicable law or as described in these Terms and Conditions. Any questions about whether a particular use is authorized and any requests for permission to publish, reproduce, distribute, display or make derivative works from any Content should be directed to TMMS Help Desk.

The names and email addresses entered in this journal site will be used exclusively for the stated purposes of this system and will not be made available for any other purpose or to any other party.
        </pre>

        <?php $template->getFooter(); ?>        
    </body>
</html>
