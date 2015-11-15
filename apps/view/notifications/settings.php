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

        <script>
            function showFieldsEmail() {
                if (document.getElementById('cbEmail').checked)
                {
                    $(".showEmail").show();
                }
                else
                {
                    $(".showEmail").hide();
                }
            }
            function showFieldsSMS() {
                if (document.getElementById('cbSMS').checked)
                {
                    $(".showSMS").show();
                }
                else
                {
                    $(".showSMS").hide();
                }
            }
        </script>
        <style>
            .showSMS
            {
                display: none;
            }
            .showEmail
            {
                display: none;
            }
        </style>
        <div class="col-lg-offset-1">
            <h3>Notification Settings</h3>
            <form id="frmSettings" action="'. BASE_URL . '/apps/model/settings/_settings.php" method="post">
                <table>
                    <tr><td>&nbsp;</td></tr>
                    <tr>
                        <td><input type="checkbox" id="cbSMS" onchange="showFieldsSMS()"></td>
                        <td>Get notifications via SMS</td>
                    </tr>
                    <tr class="showSMS">
                        <td></td>
                        <td>Phone Number&emsp;
                            <input type="number" name="sms_mobile" id="mobile" placeholder="Please enter with counry code" validate="true" match="^[0-9]+$" error="Please Enter a valid mobile number" required="">
                        </td>
                    </tr>
                    <tr><td>&nbsp;</td></tr>
                    <tr>
                        <td><input type="checkbox" id="cbEmail" onchange="showFieldsEmail()"></td>
                        <td>Send notification via Email</td>
                    </tr>
                    <tr class="showEmail">
                        <td></td>
                        <td>
                            <input type="radio" name="email" id="digest" value="digest" validate="true" error="Please select one">&nbsp; As a daily digest <br>
                            <input type="radio" name="email" id="all" value="all" validate="true" error="Please select one">&nbsp;One email per one notification
                        </td>
                    </tr>
                    <tr><td>&nbsp;</td></tr>
                    <tr>
                        <td>
                            <input type="submit" id="btnSave" class="btn btn-success" value="Save" name="Settings"/>
                        </td>
                        <td align="center">
                            <input type="reset" id="btnCancel" class="btn btn-success" value="Cancel"/>
                        </td>
                    </tr>
                </table>
            </form>
        </div>
        <?php $template->getFooter(); ?>        
    </body>
</html>