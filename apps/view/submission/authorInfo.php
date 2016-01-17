<?php
require_once '../../controller/config/config.php';
$template = new template();
?>

<!DOCTYPE html>
<html>
    <head>
        <?php $template->getHead(); ?> 
        <link rel="stylesheet" type="text/css" id="wizard" href="../../../lib/css/pages/submission/upload.css"/>
        <script type="text/javascript" id="wizard" src="../../../lib/js/pages/submission/index.js"></script>
    </head>
    <body>
        <?php $template->getPlainBody(); ?> 
        <?php $template->getHeader(); ?> 
        <?php $template->getMenu(); 
        @$_SESSION['ca_set'] = false;
        ?>

        <div class="container-fluid">
            <div class="wizard-steps">
                <div class="completed-step"><a href="checklist.php"><span>1</span> Checklist</a></div>
                <div class="completed-step"><a href="upload.php"><span>2</span> Upload the Manuscript</a></div>
                <div class="completed-step"><a href="manuInfo.php"><span>3</span>Manuscript information</a></div>
                <div class="active-step"><a href="authorInfo.php"><span>4</span> Author information</a></div>
                <div><a href="validate.php"><span>5</span>Validation</a></div>
            </div>

            <div class="col-lg-6 col-lg-offset-2">
                <br>
                <div class="form-group">
                    <form action="../../../apps/model/submission/_authorInfo.php" method="post" id="authorForm">
                        <fieldset class="scheduler-border">
                            <legend class="scheduler-border">Add author (one by one)</legend>
                            <div class="control-group">
                                <table align="center" width="100%">
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
                                        <td>University/ Institute(Academic)*</td>
                                        <td>
                                            <input type="text" class="form-control" name="uni" placeholder="" validate="true" match="^[a-zA-Z]+$" error="Please Enter The Address" required="">
                                        </td>
                                    </tr>
                                    <tr><td>&nbsp;</td></tr>

                                    <tr>
                                        <td>&nbsp;</td>
                                        <td>
                                            <div id="cdBlock">  <input type="checkbox" id="cbCa" name="cbCa" onchange="showFields()">&nbsp;Corresponding Author 
                                                <br>(You can have only one corresponding author) </div>
                                        </td>
                                    </tr>
                                    <tr><td>&nbsp;</td></tr>

                                    <tr class="showCa">
                                        <td>Title*</td>
                                        <td>
                                            <select name="ca_title">
<!--                                                <option value="0">Please select</option>-->
                                                <option value="Dr">Dr</option>
                                                <option value="Prof">Prof</option>
                                                <option value="Mr">Mr</option>
                                                <option value="Mrs">Mrs</option>
                                                <option value="Miss">Miss</option>
                                            </select>
                                        </td>
                                    </tr>        
                                    <tr class="showCa"><td>&nbsp;</td></tr>
                                    <tr class="showCa">
                                        <td>Telephone *</td>
                                        <td>
                                            <input type="text" class="form-control" name="ca_mobile" placeholder="Please enter with counry code" validate="true" match="^[0-9]+$" error="Please Enter a valid mobile number" required="">
                                        </td>
                                    </tr>
                                    <tr class="showCa"><td>&nbsp;</td></tr>     
                                    <tr class="showCa">
                                        <td>Personal Address *</td>
                                        <td>
                                            <input type="text" class="form-control" name="ca_addr" placeholder="" required="">
                                        </td>
                                    </tr>

                                </table>
                            </div>
                                <button type="button" class="btn btn-rounded" id="btnAddAuthor"> + Add Author</button>
                     
                        </fieldset>

                        <button id="btnPreviousToManuInfo" class="btn btn-rounded" onclick="window.location.href = 'manuInfo.php'">&laquo;&nbsp;Previous</button>
                        <div class="pull-right">
                            <button type="submit" id="btnNextToValidate" disabled="" class="btn btn-rounded">Next&nbsp;&raquo;</button>
                        </div>
                        </fieldset>
                        <div class="row">&nbsp;</div> 
                        <button type="reset" id="reset" style="display: none"></button>
                    </form>
                </div>
            </div>
        </div>



        <!-- Put scripts and styles at the end otherwise this isnt working-->
        <script> //When reviewer is checked show his fields below from ajax
            function showFields() {
                if (document.getElementById('cbCa').checked)
                {
                    $(".showCa").show();
                }
                else
                {
                    $(".showCa").hide();
                }
            }
        </script>
        <!--At start these fields should be hidden cz default option is author-->
        <style> 
            .showCa
            {
                display: none;
            }
        </style>
        <?php $template->getFooter(); ?>        
    </body>
</html>

