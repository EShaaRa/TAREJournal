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
        Reviewer Guidelines

        All selected reviewers must adhere and follow the guidelines formed by TARE editorial board. 

        1. Reviewers must critically review the assigned paper in specified time frame of TARE. 

        2. Reviewers must follow the international refereeing process to ensure the quality review. 

        3. All the review feedbacks must be provided in written form through TARE Review template. 

        4. Reviewers must highlight the parts of submitted manuscripts that require amendments from authors. The expert reviewer suggestions will be value added. 

        5. If reviewers find any paper suitable for publishing even then critical remarks should be given in order to improve the quality of manuscripts. 

        6. The paper will be reviewed by the same reviewer once the suggested changes are done in reviewed paper. 

        7. Reviewers must maintain the formatting and style of original manuscripts as strictly adhered by templates of TARE. 

        8. Editorial board of TARE has every right to override any suggested changes by reviewers and their decision should not be ruled out by reviewer.

        <?php $template->getFooter(); ?>        
    </body>
</html>
