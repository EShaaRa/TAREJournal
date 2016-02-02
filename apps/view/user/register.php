<?php
require_once '../../controller/config/config.php';
$template = new template();
?>

<!DOCTYPE html>
<html>
    <?php $template->getHead(); ?> 

    <body>
        <?php $template->getHeader(); ?> 


        <!--Body Section-->
        <div class="container-fluid">
            <div class="col-lg-6 col-lg-offset-3 col-md-8 col-sm-12" style="position: absolute; top: 23%;">
                <?php $template->showMessage(); ?>

                <div class="panel panel-success text-center">
                    <div class="panel-heading">
                        <h3 class="panel-title">User Registration</h3>                         
                    </div>

                    <div class="panel-body">
                        <form id="frmRegister" action="../../../apps/model/user/_register.php" method="post" >                        
                            <table border="0" align="center">
                                <tr>
                                    <td align="right">Register as: &emsp;</td> 
                                    <td align="left">
                                        <input type="checkbox" name="Author" value="Author" id="cbAuthor" checked="">&nbsp; Author &emsp;
                                        <input type="checkbox" name="Reviewer" value="Reviewer" id="cbRev" onchange="showFields()">&nbsp; Reviewer
                                    </td>
                                </tr>
                                <tr> <td>&nbsp;</td></tr>
                                <tr>
                                    <td align="right">Email &emsp;</td>
                                    <td align="left">
                                        <input type="email" name="user_email" id="email" validate="true" required=""/>*
                                    </td>
                                </tr>
                                <tr> <td>&nbsp;</td></tr>
                                <tr>
                                    <td align="right">Title &emsp;</td>                               
                                    <td align="left">
                                        <select name="user_title" id="title" validate="true"  required="">
                                            <option value="Mr">Mr</option>
                                            <option value="Mrs">Mrs</option>
                                            <option value="Miss">Miss</option>                                            
                                            <option value="Dr">Dr</option>
                                            <option value="Prof">Prof</option>
                                        </select> *
                                        <div class="alert alert-danger error" role="alert">This is the error msg!</div>
                                    </td>
                                </tr>
                                <tr> <td>&nbsp;</td></tr>
                                <tr>
                                    <td align="right">First name &emsp;</td>
                                    <td align="left">
                                        <input type="text" name="user_fname" id="first_name" validate="true" required=""/> *
                                    </td>
                                </tr>
                                <tr> <td>&nbsp;</td></tr>
                                <tr>
                                    <td align="right">Middle name &emsp;</td>
                                    <td align="left">
                                        <input type="text" name="user_mname" id="middle_name" validate="true"/>
                                    </td>
                                </tr>
                                <tr> <td>&nbsp;</td></tr>
                                <tr>
                                    <td align="right">Last name &emsp;</td>
                                    <td align="left">
                                        <input type="text" name="user_lname" id="last_name" validate="true" required=""/> *
                                    </td>
                                </tr>            
                                <tr> <td>&nbsp;</td></tr>
                                <tr>
                                    <td align="right">Personal address &emsp;</td>
                                    <td align="left">
                                        <textarea id="address" name="user_address" cols="20" rows="4" validate="true" required=""></textarea>*
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
                                        <input type="number" name="user_mobile" id="mobile" placeholder="Please enter with counry code" validate="true"  required=""/> *
                                    </td>
                                </tr>
                                <tr> <td>&nbsp;</td></tr>
                                <tr>
                                    <td align="right">Telephone(work) &emsp;</td>
                                    <td align="left">
                                        <input type="number" name="user_tp" id="tp" validate="true"/>
                                    </td>
                                </tr>
                                <tr> <td>&nbsp;</td></tr>
                                <tr>
                                    <td align="right">Organizational address &emsp;</td>
                                    <td align="left">
                                        <textarea id="user_job" name="user_job" cols="20" rows="4" validate="true" required=""></textarea>*
                                    </td>
                                </tr>
                                <tr class="showRev"> <td>&nbsp;</td></tr>
                                <tr class="showRev">
                                    <td align="right">Specialized area(s) &emsp;</td>
                                    <td align="left">
                                        <input type="text" name="user_area1" id="area" validate="true" required=""/>*
                                    </td>
                                </tr>
                                <tr class="showRev">
                                    <td></td>
                                    <td align="left">
                                        <input type="text" name="user_area2" id="area"/>
                                    </td>
                                </tr>
                                <tr class="showRev">
                                    <td></td>
                                    <td align="left">
                                        <input type="text" name="user_area3" id="area"/>
                                    </td>
                                </tr>
                                <tr class="showRev">
                                    <td></td>
                                    <td align="left">
                                        <input type="text" name="user_area4" id="area"/>
                                    </td>
                                </tr>
                                <tr class="showRev"> <td>&nbsp;</td></tr>
                                <tr class="showRev">
                                    <td align="right">Academic qualifications &emsp;</td>
                                    <td align="left">
                                        <textarea id="academic" name="user_academic" placeholder="Please enter briefly" cols="20" rows="4" required=""></textarea>*
                                    </td>
                                </tr>
                                <tr class="showRev"> <td>&nbsp;</td></tr>
                                <tr class="showRev">
                                    <td align="right">Other journals reviewing for &emsp;</td>
                                    <td align="left">
                                        <textarea id="journals" name="user_journals" cols="20" rows="4"></textarea>
                                    </td>
                                </tr>            
                                <tr class="showRev"> <td>&nbsp;</td></tr>
                                <tr class="showRev">
                                    <td align="right">Experience of reviewing (years) &emsp;</td>
                                    <td align="left">
                                        <input type="text" name="user_experience" id="experience" validate="true" match="^[0-9]+$" error="Please Enter a valid year"/>
                                    </td>
                                </tr>
                                <tr> <td>&nbsp;</td></tr>
                                <tr>
                                    <td align="right">Username &emsp;</td>
                                    <td align="left">
                                        <input type="text" name="username" id="username" validate="true" required=""/> *
                                    </td>
                                </tr>
                                <tr> <td>&nbsp;</td></tr>
                                <tr>
                                    <td align="right">Password &emsp;</td>
                                    <td align="left">
                                        <input type="password" name="password" id="password" validate="true" required=""/> *
                                    </td>
                                </tr>
                                <tr> <td>&nbsp;</td></tr>
                                <tr>
                                    <td align="right">Confirm password &emsp;</td>
                                    <td align="left">
                                        <input type="password" name="cpassword" id="cpassword" validate="true" match="^[0-9]+$" required=""/> *
                                    </td>
                                </tr>
                                <tr> <td>&nbsp;</td></tr>
                                <tr>
                                    <td colspan="2">
                                        <input type="radio" name="agreement" id="agree" value="agree" validate="true"/>&nbsp;I have read and agree to abide by the <a href=""> TARE terms & conditions and privacy policy. </a> <br>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="2" align="left">
                                        <input type="radio" name="agreement" id="disagree" value="disagree" checked="true"/>&nbsp;I do not agree
                                    </td>
                                </tr>
                                <tr> <td>&nbsp;</td></tr>
                                <tr>
                                    <td><input type="submit" id="btnSubmit" class="btn btn-success" value="Submit" name="Register"/></td>
                                    <td><input type="reset" id="btnSubmit" class="btn btn-success" value="Clear"/></td>
                                </tr>
                            </table> 
                        </form>
                    </div>
                </div>

            </div>
        </div> 

        <!-- Put scripts and styles at the end otherwise this isnt working-->
        <script> //When reviewer is checked show his fields below from ajax
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
        <!--At start these fields should be hidden cz default option is author-->
        <style> 
            .showRev
            {
                display: none;
            }
        </style>


        <?php $template->getFooter(); ?>        
    </body>
</html>
