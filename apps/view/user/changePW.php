<?php
require_once '../../controller/config/config.php';
require_once '../../login_info.php';
$template = new template();

// load the user info at the page load
$sql2 = "SELECT username,password FROM tbl_user WHERE username=:username";

$stmt = $conn->prepare($sql2);
$stmt->execute(array(':username' => $_SESSION['username']));
$result = $stmt->fetchAll();
?>
<!DOCTYPE html>
<html>
    <?php $template->getHead(); ?> 

    <body>
        <?php $template->getHeader(); ?>
        <?php $template->getMenu(); ?>
        <?php $template->getBody(); ?> 



        <!--Body Section-->
        
        <div class="container-fluid">
            <div class="col-lg-6 col-lg-offset-3 col-md-8 col-sm-12">
                <div class="panel panel-success text-center">
                    <?php $template->showMessage(); ?>
                    <div class="panel-heading">
                        <h3 class="panel-title">Change Password</h3>    
                    </div>

                    <div class="panel-body">
                        <form id="frmEditUser" action="../../../apps/model/user/_changePW.php" method="post"> 
                            <table border="0" align="center">
                                <tr>
                                    <td align="right">Username &emsp;</td>
                                    <td align="left">
                                        <input type="text" readonly="" name="username" id="username" value=<?php echo $_SESSION['username']; ?> validate="true" required=""/>
                                    </td>
                                </tr>
                                <tr> <td>&nbsp;</td></tr>
                                <tr>
                                    <td align="right">Old Password &emsp;</td>
                                    <td align="left">
                                        <input type="password" name="password" id="password" validate="true" required=""/>
                                    </td>
                                </tr>
                                <tr> <td>&nbsp;</td></tr>
                                <tr>
                                    <td align="right">New Password &emsp;</td>
                                    <td align="left">
                                        <input type="password" name="new_password" id="new_password" validate="true" required=""/>
                                    </td>
                                </tr>
                                <tr> <td>&nbsp;</td></tr>
                                <tr>
                                    <td align="right">Confirm password &emsp;</td>
                                    <td align="left">
                                        <input type="password" name="cpassword" id="cpassword" validate="true" required=""/>
                                    </td>
                                </tr>
                                <tr> <td>&nbsp;</td></tr>
                                <tr>
                                    <td><input type="submit" id="btnSubmit" class="btn btn-success" value="Update" name="changePW"/> </td>
                                    <td><input type="reset" id="btnSubmit" class="btn btn-success" value="Cancel"/></td>
                                </tr>
                            </table>
                        </form>
                    </div>
                </div>
            </div>
        </div> 



        <?php $template->getFooter(); ?>        
    </body>
</html>