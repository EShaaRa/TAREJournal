<?php
require_once '../../controller/config/config.php';
//require_once '../../login_info.php';
$template = new template();
$username = $_SESSION['username'];

$path = $_SESSION['location'];

$currentLocation =  basename(__FILE__); 

if($currentLocation != $path){
    header('location:'.$path);
}



$sql = "SELECT user_fname,user_mname,user_lname,user_email,user_job FROM tbl_user WHERE username = '$username'";


$stmt = $conn->prepare($sql);
$stmt->execute();
$result = $stmt->fetchAll();

$details = $result[0];
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Author Info</title>
        <?php $template->getHead(); ?> 
        <link rel="stylesheet" type="text/css" id="wizard" href="../../../lib/css/pages/submission/upload.css"/>
        <link rel="stylesheet" type="text/css" id="wizard" href="../../../lib/bootstrap3-editable/css/bootstrap-editable.css"/>
        
        <script type="text/javascript" id="wizard" src="../../../lib/js/pages/submission/index.js"></script>
        <script type="text/javascript" id="wizard" src="../../../lib/bootstrap3-editable/js/bootstrap-editable.min.js"></script>
    </head>
    <body>
        <?php $template->getPlainBody(); ?> 
        <?php $template->getHeader(); ?> 
        <?php $template->getMenu(); ?>


        <div class="wizard-steps">
            <div class="completed-step"><a href="checklist.php"><span>1</span> Checklist</a></div>
            <div class="completed-step"><a href="upload.php"><span>2</span> Upload the Manuscript</a></div>
            <div class="completed-step"><a href="manuInfo.php"><span>3</span>Manuscript information</a></div>
            <div class="active-step"><a href="authorInfo.php"><span>4</span> Author information</a></div>
            <div><a href="validate.php"><span>5</span>Validation</a></div>
        </div>
        <div class="row-fluid main-body">
            <div class="row">

                <!--            <form action="../../../apps/model/submission/validate.php" method="post" id="frmAuthor">-->
                <div class="col-lg-5 col-lg-offset-1">
                    <br>
                    <div>    
                        <fieldset class="scheduler-border">
                            <legend class="scheduler-border">Corresponding Author</legend>
                            We will communicate only with the corr author regarding this article in future. Therefore if you want to give a different CA from below, just cancel this submission and ask him to do it from a new login
                        </fieldset>             
                    </div>

                    <div class="form-group">
                        <form action="../../../apps/model/submission/_authorInfo.php" method="post" id="frmAuthor">
                            <fieldset class="scheduler-border">
                                <legend class="scheduler-border">Other Authors (Add one by one)</legend>
                                <div class="control-group">
                                    <table align="center" width="100%" id="tblInfo">  
                                        <tr>
                                            <td>First Name*</td>
                                            <td><input type="text" class="form-control" name="fname" placeholder="" validate="true" match="^[a-zA-Z]+$" error="Please Enter First Name" required=""></td>
                                        </tr>
                                        <tr><td>&nbsp;</td></tr>
                                        <tr>
                                            <td>Middle Name</td>
                                            <td>
                                                <input type="text" class="form-control" name="mname" placeholder="">
                                            </td>
                                        </tr>
                                        <tr><td>&nbsp;</td></tr>
                                        <tr>
                                            <td>Last Name*</td>
                                            <td>
                                                <input type="text" class="form-control" name="lname" placeholder="" validate="true" match="^[a-zA-Z]+$" error="Please Enter Last Name" required="">
                                            </td>
                                        </tr>
                                        <tr><td>&nbsp;</td></tr>
                                        <tr>
                                            <td>Email*</td>
                                            <td>
                                                <input type="email" class="form-control" name="email" placeholder="" validate="true" match="^[a-zA-Z]+$" error="Please Enter a valid email address" required="">
                                            </td>
                                        </tr>
                                        <tr><td>&nbsp;</td></tr>
                                        <tr>
                                            <td>Organization Address*</td>
                                            <td>
                                                <input type="text" class="form-control" name="uni" placeholder="" validate="true" match="^[a-zA-Z]+$" error="Please Enter The Address" required="">
                                            </td>
                                        </tr>
                                    </table>
                                    <br>
                                    <button type="submit" class="btn btn-rounded" id="btnAddAuthor"> +Add Author</button>
                                    <div class="pull-right">
                                        <button type="reset" class="btn btn-rounded" id="btnCancel"> Cancel</button>
                                    </div>
                                </div>
                            </fieldset>
                        </form>
                    </div>

                </div>
                <div class="col-lg-6 pull-right">
                    <br><br>
                    <p>
                        You cannot edit corresponding author details here. If you wish to update any detail there, go to Edit profile. 
                    You can edit other authors' entries except their emails. Just click on any field you wish to update. You can delete an entry too. After doing, necessary changes click on Next button
                    </p>
                    <br>
                    <div class="control-group">
                        <div class="table-responsive">
                            <form id="confirmAuth">
                                <table width="100%" id="tblCA" class="table">
                                    <tr>
                                    <thead>
                                    <th>First name</th>
                                    <th>Middle name</th>
                                    <th>Last name</th>
                                    <th>Email</th>
                                    <th>Organization</th>
                                    <th>Corr Author</th>
                                    <th></th>
                                    </thead>
                                    </tr>

                                    <tbody id="tbodayAuthorDetails">
                                        <tr>
                                            <td><?php echo $details['user_fname']; ?> </td>
                                            <td><?php echo $details['user_mname']; ?> </td>
                                            <td><?php echo $details['user_lname']; ?> </td>
                                            <td><?php echo $details['user_email']; ?> </td>
                                            <td><?php echo $details['user_job']; ?> </td>
                                            <td><input type="checkbox" checked="checked" disabled="disabled"/></td>
                                            <td></td>
                                        </tr>                   
                                    </tbody>
                                </table>
                            </form>
                            <br>
                            <br>
                            <div align='center'>
                                <button type="submit" id="btnNextToValidate" class="btn btn-success btn-rounded">Next&nbsp;&raquo;</button>
                         
                        </div>
                    </div>
                </div>

                <!--                <button id="btnPreviousToManuInfo" class="btn btn-rounded" onclick="window.location.href = 'manuInfo.php'">&laquo;&nbsp;Previous</button>-->
                <!--                <div class="pull-right">
                                    <button type="submit" id="btnNextToValidate" class="btn btn-rounded">Next&nbsp;&raquo;</button>
                                    <div class="row">&nbsp;</div>
                                </div>
                                <div class="row">&nbsp;</div>
                                <div class="row">&nbsp;</div>-->
            </div>
        </div>
        <?php $template->getFooter(); ?>  
            
            
    </body>
</html>




<!--<tr>
    <td>Title*</td>
    <td>
        <select name="ca_title">
            <option value="0">Please select</option>
            <option value="Dr">Dr</option>
            <option value="Prof">Prof</option>
            <option value="Mr">Mr</option>
            <option value="Mrs">Mrs</option>
            <option value="Miss">Miss</option>
        </select>
    </td>
</tr> 
<tr><td>&nbsp;</td></tr>
<tr>
    <td>First Name*</td>
    <td><input type="text" class="form-control" name="ca_fname" placeholder="" validate="true" match="^[a-zA-Z]+$" error="Please Enter First Name" required=""></td>
</tr>
<tr><td>&nbsp;</td></tr>
<tr>
    <td>Middle Name</td>
    <td>
        <input type="text" class="form-control" name="ca_mname" placeholder="">
    </td>
</tr>
<tr><td>&nbsp;</td></tr>
<tr>
    <td>Last Name*</td>
    <td>
        <input type="text" class="form-control" name="ca_lname" placeholder="" validate="true" match="^[a-zA-Z]+$" error="Please Enter Last Name" required="">
    </td>
</tr>
<tr><td>&nbsp;</td></tr>
<tr>
    <td>Email*</td>
    <td>
        <input type="email" class="form-control" name="ca_email" placeholder="" validate="true" match="^[a-zA-Z]+$" error="Please Enter a valid email address" required="">
    </td>
</tr>
<tr><td>&nbsp;</td></tr>
<tr>
    <td>Organization Address*</td>
    <td>
        <input type="text" class="form-control" name="ca_org" placeholder="" validate="true" match="^[a-zA-Z]+$" error="Please Enter The Address" required="">
    </td>
</tr>
<tr><td>&nbsp;</td></tr>     
<tr>
    <td>Personal Address *</td>
    <td>
        <input type="text" class="form-control" name="ca_addr" placeholder="" required="">
    </td>
</tr>
<tr><td>&nbsp;</td></tr>
<tr>
    <td>Telephone *</td>
    <td>
        <input type="text" class="form-control" name="ca_mobile" placeholder="Please enter with counry code" validate="true" match="^[0-9]+$" error="Please Enter a valid mobile number" required="">
    </td>
</tr>
<tr><td>&nbsp;</td></tr>
</table>
<button type="submit" class="btn btn-rounded" id="btnAddAuthor"> Add Corresponding Author</button>
</fieldset>
</form>
</div>-->