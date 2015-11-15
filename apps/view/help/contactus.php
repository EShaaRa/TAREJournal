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

        <!--        <div class="container-fluid">-->
        <p style="font-size:16px;">
            <b>Contact Us</b>
        </p>
        <p style="font-size:12px;">
            <b>You have a problem with TMMS? Ask us! or feedback us!</b>
        </p>
        <div class="row col-lg-8">
            <table cellspacing="0" cellpadding="5" border="0" style="background-color:#eeeeee;" align="center" width="80%">
                <tr> <td>&nbsp;</td></tr>
                <tr>
                    <td align="right">
                        <b>Name:&nbsp; </b>
                    </td>
                    <td>
                        <input type="text" name="name" size="40" required="">*
                    </td>
                </tr>
                <tr> <td>&nbsp;</td></tr>
                <tr>
                    <td align="right">
                        <b>E-mail:&nbsp; </b>
                    </td>
                    <td>
                        <input type="text" name="email" size="40" required="">*
                    </td>
                </tr>
                <tr> <td>&nbsp;</td></tr>
                <tr>
                    <td align="right">
                        <b>Your Message/ <br> Feedback:&nbsp; </b>
                    </td>
                    <td>
                        <textarea name="question" required="" cols="40" rows="10"></textarea>
                    </td>
                </tr>
                <tr> <td>&nbsp;</td></tr>
                <tr>
                    <td></td>
                    <td>
                        <button id="btnSubmit" class="btn btn-success"> Send </button>&emsp;&emsp;&emsp;
                        <button id="btnCancel" class="btn btn-success"> Cancel </button>
                    </td>
                </tr>
                <tr> <td>&nbsp;</td></tr>
                <tr> <td>&nbsp;</td></tr>
            </table>
            <div>&nbsp;</div>
        </div>
        <div class="col-lg-4">
            <pre>
                Mailing Address:
                Editor-in-Chief,
                Editorial Office,
                Faculty of Agriculture,
                University of Ruhuna,
                Kamburupitiya, 81100,
                SRI LANKA.

                Tele/Fax/Mail
                Office:  +94 (0)41 229 2200 (Ext. 381)
                Fax:  +94 (0)41 229 2384
                Email:  tare@agricc.ruh.ac.lk
            </pre>
        </div>
        <!--            </div>-->
        <?php $template->getFooter(); ?>        
    </body>
</html>
