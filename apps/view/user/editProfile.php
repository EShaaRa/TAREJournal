<?php
require_once '../../controller/config/config.php';
$template = new template();

// load the user info at the page load
$sql = "SELECT user_pic,user_job,user_email,user_title,user_fname,user_lname,user_gender,username,password,user_role,user_status,user_address,user_country,user_mobile ,user_tp ,user_job  "
        . "FROM tbl_user WHERE username=:username";

$stmt = $conn->prepare($sql);
$stmt->execute(array(':username' => $_SESSION['username']));
$result = $stmt->fetchAll();

if (count($result)) {   // get user info
    $row = $result[0];

    $user_status = $row['user_status'];
    $user_email = $row['user_email'];
    $user_title = $row['user_title'];
    $user_fname = $row['user_fname'];
    $user_lname = $row['user_lname'];
    $user_gender = $row['user_gender'];
    $user_address = $row['user_address'];
    $user_country = $row['user_country'];
    $user_mobile = $row['user_mobile'];
    $user_tp = $row['user_tp'];
    $user_job = $row['user_job'];
//    $user_area1 = $row['user_area1'];
//    $user_area2 = $row['user_area2'];
//    $user_area3 = $row['user_area3'];
//    $user_area4 = $row['user_area4'];
//    $user_academic = $row['user_academic'];
//    $user_journals = $row['user_journals'];
    $user_pic = $row['user_pic'];
}
?>

<!DOCTYPE html>
<html>
<?php $template->getHead(); ?> 

    <body>
    <?php $template->getHeader(); ?>
<?php $template->getMenu(); ?> 



        <!--Body Section-->
        <div class="container-fluid">
            <div class="col-lg-6 col-lg-offset-3 col-md-8 col-sm-12">
                <div class="panel panel-success text-center">
                    <div class="panel-heading">
                        <h3 class="panel-title">Update your profile</h3> 
                        <?php $template->showMessage(); ?>
                    </div>

                    <div class="panel-body">
                        <form id="frmEditUser" action="../../../apps/model/user/_editProfile.php" method="post" enctype="multipart/form-data"> 
                            <!--                            enctype="multipart/form-data" when there are more than 1 submit button. Even 'choose file' is a button-->
                            <table border="0" align="center">
                                <tr>
                                    <td align="right">Register as: &emsp;</td> 
                                    <td align="left">
                                        <input type="checkbox" name="Author" value="Author" id="cbAuthor" checked>&nbsp; Author &emsp;
                                        <input type="checkbox" name="Reviewer" value="Reviewer" id="cbRev" onchange="showFields()">&nbsp; Reviewer
                                    </td>
                                </tr>
                                <tr> <td>&nbsp;</td></tr>
                                <tr>
                                    <td align="right">Email &emsp;</td>
                                    <td align="left">
                                        <input type="email" name="user_email" id="email" value=<?php echo $user_email; ?> validate="true" match="^[a-zA-Z0-9]+$" error="Please Enter a valid email address" required=""/>
                                    </td>
                                </tr>
                                <tr> <td>&nbsp;</td></tr>
                                <tr>
                                    <td align="right">Title &emsp;</td>                               
                                    <td align="left">
                                        <select name="user_title" id="title" validate="true" error="Please select a title" required="">
                                            <option value="0">Please select</option>
                                            <option value="Dr">Dr</option>
                                            <option value="Prof">Prof</option>
                                            <option value="Mr">Mr</option>
                                            <option value="Mrs">Mrs</option>
                                            <option value="Miss">Miss</option>
                                        </select>
                                        <div class="alert alert-danger error" role="alert">This is the error msg!</div>
                                    </td>
                                </tr>
                                <tr> <td>&nbsp;</td></tr>
                                <tr>
                                    <td align="right">First name &emsp;</td>
                                    <td align="left">
                                        <input type="text" name="user_fname" value=<?php echo $user_fname; ?> validate="true" match="^[a-zA-Z]+$" error="Please Enter First Name" required=""/>
                                        <div class="alert alert-danger error" role="alert"></div>
                                    </td>
                                </tr>
                                <tr> <td>&nbsp;</td></tr>
                                <tr>
                                    <td align="right">Last name &emsp;</td>
                                    <td align="left">
                                        <input type="text" name="user_lname" value=<?php echo $user_lname; ?> validate="true" match="^[A-z]+$" error="Please Enter Last Name" required=""/>
                                    </td>
                                </tr>
                                <tr> <td>&nbsp;</td></tr>
                                <tr>
                                    <td align="right">Gender &emsp;</td>
                                    <td align="left">
                                        <?php if ($user_gender == 'Male') { ?> 
                                            <input type="radio" name="user_gender" id="male" value="Male" validate="true" checked=""/>&nbsp;Male &nbsp;
                                            <input type="radio" name="user_gender" id="female" value="Female" validate="true"/>&nbsp;Female
                                        <?php } else { ?> 
                                            <input type="radio" name="user_gender" id="female" value="Female" validate="true" checked=""/>&nbsp;Female
                                        <?php } ?> 
                                    </td>
                                </tr>           
                                <tr> <td>&nbsp;</td></tr>
                                <tr>
                                    <td align="right">Address &emsp;</td>
                                    <td align="left">
                                        <textarea id="address" name="user_address" cols="20" rows="4" validate="true" match="^[a-zA-Z0-9.,/ \n-]+$" error="Please enter a valid address" required=""><?php echo $user_address; ?></textarea>
                                    </td>
                                </tr>
                                <tr> <td>&nbsp;</td></tr>
                                <tr>
                                    <td align="right">Country &emsp;
                                    </td>
                                    <td align="left">
                                        <select name="user_country" required=""> 
                                            <option value="Sri Lanka"> Sri Lanka </option>
                                            <option value="India"> India </option>
                                            <option value="Japan"> Japan </option>
                                            <option value="Korea"> Korea </option>
                                            <option value="other"> Other </option>
                                        </select>
                                    </td>
                                </tr>
                                <tr> <td>&nbsp;</td></tr>
                                <tr>
                                    <td align="right">Mobile &emsp;</td>
                                    <td align="left">
                                        <input type="number" name="user_mobile" id="mobile" value=<?php echo $user_mobile; ?> placeholder="Please enter with counry code" validate="true" match="^[0-9]+$" error="Please Enter a valid mobile number" required=""/>

                                    </td>
                                </tr>
                                <tr> <td>&nbsp;</td></tr>
                                <tr>
                                    <td align="right">Telephone(work) &emsp;</td>
                                    <td align="left">
                                        <input type="number" name="user_tp" id="tp" value=<?php echo $user_tp; ?> validate="true" match="^[0-9]+$" error="Please Enter a valid phone number"/>
                                    </td>
                                </tr>
                                <tr> <td>&nbsp;</td></tr>
                                <tr>
                                    <td align="right">Employer & job title &emsp;</td>
                                    <td align="left">
                                        <input type="text" name="user_job" value=<?php echo $user_job; ?>  />
                                    </td>
                                </tr>
                                <tr class="showRev"> <td>&nbsp;</td></tr>
                                <tr class="showRev">
                                    <td align="right">Specialized area(s) &emsp;</td>
                                    <td align="left">
                                        <input type="text" name="user_area1" id="area" value=<?php echo $user_area1; ?> validate="true" error="Please Enter specialized areas" required=""/>
                                    </td>
                                </tr>
                                <tr class="showRev">
                                    <td></td>
                                    <td align="left">
                                        <input type="text" name="user_area2" id="area" value=<?php echo $user_area2; ?>/>
                                    </td>
                                </tr>
                                <tr class="showRev">
                                    <td></td>
                                    <td align="left">
                                        <input type="text" name="user_area3" id="area" value=<?php echo $user_area3; ?>/>
                                    </td>
                                </tr>
                                <tr class="showRev">
                                    <td></td>
                                    <td align="left">
                                        <input type="text" name="user_area4" id="area" value=<?php echo $user_area4; ?>/>
                                    </td>
                                </tr>
                                <tr class="showRev"> <td>&nbsp;</td></tr>
                                <tr class="showRev">
                                    <td align="right">Academic qualifications &emsp;</td>
                                    <td align="left">
                                        <textarea id="academic" name="user_academic" value=<?php echo $user_academic; ?> placeholder="Please enter briefly" cols="20" rows="4" required=""></textarea>
                                    </td>
                                </tr>
                                <tr class="showRev"> <td>&nbsp;</td></tr>
                                <tr class="showRev">
                                    <td align="right">Other journals reviewing for &emsp;</td>
                                    <td align="left">
                                        <textarea id="journals" name="user_journals" value=<?php echo $user_journals; ?> cols="20" rows="4"></textarea>
                                    </td>
                                </tr>            
                                <tr class="showRev"> <td>&nbsp;</td></tr>
                                <tr class="showRev">
                                    <td align="right">Experience of reviewing (years) &emsp;</td>
                                    <td align="left">
                                        <input type="text" name="user_experience" id="experience" value=<?php echo $user_experience; ?> validate="true" match="^[0-9]+$" error="Please Enter a valid year"/>
                                    </td>
                                </tr>
                                <tr> <td>&nbsp;</td></tr>
                                <tr>
                                    <td align="right">Upload a profile picture &emsp;</td>
                                    <td align="left"><input type="file" name="user_pic" value=<?php echo $user_pic; ?> id="user_pic"/></td>
                                </tr>
                                <tr> <td>&nbsp;</td></tr>
                                <tr>
                                    <td align="right">Username &emsp;</td>
                                    <td align="left">
                                        <input type="text" readonly="" name="username" id="username" value=<?php echo $_SESSION['username']; ?> validate="true" match="^[0-9a-zA-Z]+$" error="Please Enter a Username" required=""/>
                                    </td>
                                </tr>
                                <tr> <td>&nbsp;</td></tr>
                                <tr>
                                    <td align="right">Old Password &emsp;</td>
                                    <td align="left">
                                        <input type="password" name="OldPassword" id="password" validate="true" match="^[0-9]+$" error="Please Enter a strong password" required=""/>
                                    </td>
                                </tr>
                                <tr> <td>&nbsp;</td></tr>
                                <tr>
                                    <td align="right">New Password &emsp;</td>
                                    <td align="left">
                                        <input type="password" name="NewPassword" id="new_password" validate="true" match="^[0-9]+$" error="Please Enter a strong password" required=""/>
                                    </td>
                                </tr>
                                <tr> <td>&nbsp;</td></tr>
                                <tr>
                                    <td align="right">Confirm password &emsp;</td>
                                    <td align="left">
                                        <input type="password" name="cpassword" id="cpassword" validate="true" match="^[0-9]+$" error="Please Enter a strong password" required=""/>
                                    </td>
                                </tr>
                                <tr> <td>&nbsp;</td></tr>
                                <tr>
                                    <td><input type="submit" id="btnSubmit" class="btn btn-success" value="Update" name="editProfile"/> </td>
                                    <td><input type="reset" id="btnSubmit" class="btn btn-success" value="Cancel"/></td>
                                </tr>
                            </table>
                        </form>
                    </div>
                </div>

            </div>
        </div> 

        <script>
            function showFields() {
                if (document.getElementById('cbRev').checked)
                {
                    $(".showRev").show();
                }
                else
                {
                    $(".showRev").hide();
                }
            }
        </script>
        <style>
            .showRev
            {
                display: none;
            }
        </style>        
<?php $template->getFooter(); ?>        
    </body>
</html>
