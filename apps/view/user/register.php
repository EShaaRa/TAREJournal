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
        <!--Body Section-->
        <div class="container-fluid">
            <div class="col-lg-6 col-lg-offset-3 col-md-8 col-sm-12" style="position: absolute; top: 23%;">
                <?php $template->showMessage(); ?>
                <div class="panel panel-success text-center">
                    <div class="panel-heading">
                        <h3 class="panel-title">User Register</h3>                         
                    </div>

                    <div class="panel-body">
                        <form id="frmRegister" action="../../../apps/model/user/_register.php" method="post" >                        
                            <table id="register_form" border="0">
                                <tr>
                                    <td align="right">Register as: &emsp;</td> 
                                    <td>
                                        <input type="checkbox" name="Author" value="Author" id="cbAuthor" checked>&nbsp; Author &emsp;
                                        <input type="checkbox" name="Reviewer" value="Reviewer" id="cbRev" onchange="showFields()">&nbsp; Reviewer
                                    </td>
                                </tr>
                                <tr> <td>&nbsp;</td></tr>
                                <tr>
                                    <td align="right">Email &emsp;</td>
                                    <td>
                                        <input type="email" name="user_email" id="email" validate="true" match="^[a-zA-Z0-9]+$" error="Please Enter a valid email address" required=""/> *

                                    </td>
                                </tr>
                                <tr> <td>&nbsp;</td></tr>
                                <tr>
                                    <td align="right">Title &emsp;</td>                               
                                    <td>
                                        <select name="user_title" id="title" validate="true" error="Please select a title">
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
                                    <td>
                                        <input type="text" name="user_fname" id="first_name" size="20" validate="true" match="^[a-zA-Z]+$" error="Please Enter First Name"/> *
                                        <div class="alert alert-danger error" role="alert"></div>
                                    </td>
                                </tr>
                                <tr> <td>&nbsp;</td></tr>
                                <tr>
                                    <td align="right">Last name &emsp;</td>
                                    <td>
                                        <input type="text" name="user_lname" id="last_name" validate="true" match="^[A-z]+$" error="Please Enter Last Name"/> *

                                    </td>
                                </tr>
                                <tr> <td>&nbsp;</td></tr>
                                <tr>
                                    <td align="right">Gender &emsp;</td>
                                    <td>
                                        <input type="radio" name="user_gender" id="male" value="Male" validate="true" error="Please select a gender"/>&nbsp;Male &nbsp;
                                        <input type="radio" name="user_gender" id="female" value="Female" validate="true" error="Please select a gender"/>&nbsp;Female

                                    </td>
                                </tr>           
                                <tr> <td>&nbsp;</td></tr>
                                <tr>
                                    <td align="right">Address &emsp;</td>
                                    <td>
                                        <textarea id="address" name="user_address" cols="20" rows="4" validate="true" match="^[a-zA-Z0-9.,/ \n-]+$" error="Please enter a valid address"></textarea>

                                    </td>
                                </tr>
                                <tr> <td>&nbsp;</td></tr>
                                <tr>
                                    <td align="right">Country &emsp;
                                    </td>
                                    <td>
                                        <select name="user_country"> 
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
                                    <td>
                                        <input type="number" name="user_mobile" id="mobile" placeholder="Please enter with counry code" validate="true" match="^[0-9]+$" error="Please Enter a valid mobile number"/> *

                                    </td>
                                </tr>
                                <tr> <td>&nbsp;</td></tr>
                                <tr>
                                    <td align="right">Telephone(work) &emsp;</td>
                                    <td>
                                        <input type="number" name="user_tp" id="tp" validate="true" match="^[0-9]+$" error="Please Enter a valid phone number"/>

                                    </td>
                                </tr>
                                <tr> <td>&nbsp;</td></tr>
                                <tr>
                                    <td align="right">Employer & job title &emsp;</td>
                                    <td>
                                        <input type="text" name="user_job"/>
                                    </td>
                                </tr>
                                <tr class="showRev"> <td>&nbsp;</td></tr>
                                <tr class="showRev">
                                    <td align="right">Specialized area(s) &emsp;</td>
                                    <td>
                                        <input type="text" name="user_area1" id="area" validate="true" error="Please Enter specialized areas"/>*

                                    </td>
                                </tr>
                                <tr class="showRev">
                                    <td></td>
                                    <td>
                                        <input type="text" name="user_area2" id="area"/>
                                    </td>
                                </tr>
                                <tr class="showRev">
                                    <td></td>
                                    <td>
                                        <input type="text" name="user_area3" id="area"/>
                                    </td>
                                </tr>
                                <tr class="showRev">
                                    <td></td>
                                    <td>
                                        <input type="text" name="user_area4" id="area"/>
                                    </td>
                                </tr>
                                <tr class="showRev"> <td>&nbsp;</td></tr>
                                <tr class="showRev">
                                    <td align="right">Academic qualifications &emsp;</td>
                                    <td>
                                        <textarea id="academic" name="user_academic" placeholder="Please enter briefly" cols="20" rows="4" ></textarea>
                                    </td>
                                </tr>
                                <tr class="showRev"> <td>&nbsp;</td></tr>
                                <tr class="showRev">
                                    <td align="right">Other journals reviewing for &emsp;</td>
                                    <td>
                                        <textarea id="journals" name="user_journals" cols="20" rows="4" ></textarea>
                                    </td>
                                </tr>            
                                <tr class="showRev"> <td>&nbsp;</td></tr>
                                <tr class="showRev">
                                    <td align="right">Experience of reviewing (years) &emsp;</td>
                                    <td>
                                        <input type="text" name="user_experience" id="experience" validate="true" match="^[0-9]+$" error="Please Enter a valid year"/>

                                    </td>
                                </tr>
                                <tr> <td>&nbsp;</td></tr>
                                <tr>
                                    <td align="right">Username &emsp;</td>
                                    <td>
                                        <input type="text" name="username" id="username" validate="true" match="^[0-9a-zA-Z]+$" error="Please Enter a Username"/> *

                                    </td>
                                </tr>

                                <tr> <td>&nbsp;</td></tr>
                                <tr>
                                    <td align="right">Password &emsp;</td>
                                    <td>
                                        <input type="password" name="password" id="password" validate="true" match="^[0-9]+$" error="Please Enter a strong password"/> *

                                    </td>
                                </tr>
                                <tr> <td>&nbsp;</td></tr>
                                <tr>
                                    <td align="right">Confirm password &emsp;</td>
                                    <td>
                                        <input type="password" name="cpassword" id="cpassword" validate="true" match="^[0-9]+$" error="Please Enter a strong password"/> *

                                    </td>
                                </tr>
                                <tr> <td>&nbsp;</td></tr>
                            </table>
                            <input type="radio" name="agreement" id="agree" value="agree" validate="true" error="Please agree T&c to continue"/>&nbsp;I have read and agree to abide by the <a href=""> TARE terms & conditions and privacy policy.* </a> <br>
                            <input type="radio" name="agreement" id="diagree" value="diagree" checked="true"/>&nbsp;I do not agree
                            <div class="error"></div>
                            <div align="center">
                                <input type="submit" id="btnSubmit" class="btn btn-success" value="Submit" name="Register"/> 
                                <input type="reset" id="btnSubmit" class="btn btn-success" value="Clear"/>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div> 

        <?php $template->getFooter(); ?>        
    </body>
</html>
