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

        <script>
            function showFields() {
                if (document.getElementById('cbSMS').checked)
                {
                    $(".showSMS").show();
                }
                else
                {
                    $(".showSMS").hide();
                }
            }
            function showFields() {
                if (document.getElementById('cbEmail').checked)
                {
                    $(".showEmail").show();
                }
                else
                {
                    $(".showEmail").hide();
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

        <h3>Notification Settings</h3>
        <form id="frmSettings" action="../../../apps/model/user/_settings.php" method="post">
            <table>
                <tr><td>&nbsp;</td></tr>
                <tr>
                    <td><input type="checkbox" name="cbSMS" value="1"/>&emsp;</td>
                    <td>Send Notification Via SMS</td>
                </tr>
                <tr class="showSMS">
                    <td align="right">Phone Number &emsp;</td>
                    <td>
                        <input type="number" name="sms_mobile" id="mobile" placeholder="Please enter with counry code" validate="true" match="^[0-9]+$" error="Please Enter a valid mobile number" required=""/>
                    </td>
                </tr>
                <tr>
                    <td><input type="checkbox" name="cbEmail" value="2"/></td>
                    <td>Send Notification Via Email</td>
                </tr>
                <tr class="showEmail">
                    <td></td>
                    <td>
                        <input type="radio" name="email_digest" id="digest" value="digest" validate="true" error="Please select one"/>&nbsp; As a daily digest &nbsp;
                        <input type="radio" name="email_all" id="all" value="all" validate="true" error="Please select one"/>&nbsp;One email per one notification
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="submit" id="btnSave" class="btn btn-success" value="Save" name="Settings"/>
                    </td>
                    <td>
                        <input type="reset" id="btnCancel" class="btn btn-success" value="Cancel"/>
                    </td>
                </tr>
            </table>
        </form>
        <?php $template->getFooter(); ?>        
    </body>
</html>