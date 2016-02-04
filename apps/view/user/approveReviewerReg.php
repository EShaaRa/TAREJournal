<?php
include 'Common/header.php';
include 'Common/menu.php';
include 'Common/footer.php';
require_once '../../login_info.php';
?>
<html>
    <head>
        <title>Approve referee</title>
        <?php $template->getHead(); ?> 
    </head>
    <link href="../css/pages/<?php echo $ScriptController; ?>/<?php echo $Scriptaction ?>.css" rel="stylesheet"/>
    <script src="../js/pages/<?php echo $ScriptController; ?>/<?php echo $Scriptaction ?>.js" type="text/javascript"></script>       

    <!--<div class="row-fluid main-body">-->
    <body>
        <div class="container-fluid">
            <div class="col-lg-8 col-lg-offset-2 col-md-12 col-sm-12" style="position: absolute;">
                <div class="panel panel-success">
                    <div class="panel-heading">Profile of new user</div>
                    <div class="panel-body">
                        <form id="frmRegister" action="../dashboard/index" method="post" enctype="multipart/form-data">                        
                            <table id="register_form" border="0">
                                <tr>
                                    <td align="right">Title &emsp;</td>                               
                                    <td> <label id="title"></label></td>                               
                                </tr>
                                <tr> <td>&nbsp;</td></tr>
                                <tr>
                                    <td align="right">Country &emsp;</td>
                                    <td> <label id="country"></label></td> 
                                </tr>
                                <tr> <td>&nbsp;</td></tr>
                                <tr>
                                    <td align="right">Employer & job title &emsp;</td>
                                    <td> <label id="job"></label></td> 
                                </tr>
                                <tr> <td>&nbsp;</td></tr>
                                <tr>
                                    <td align="right">Specialized area(s) &emsp;</td>
                                    <td> <label id="areas"></label></td> 
                                </tr>
                                <tr> <td>&nbsp;</td></tr>
                                <tr>
                                    <td align="right">Academic qualifications &emsp;</td>
                                    <td> <label id="academic"></label></td> 
                                </tr>
                                <tr> <td>&nbsp;</td></tr>
                                <tr>
                                    <td align="right">Other journals reviewing for &emsp;</td>
                                    <td> <label id="journals"></label></td> 
                                </tr>            
                                <tr> <td>&nbsp;</td></tr>
                                <tr>
                                    <td align="right">Experience of reviewing (years) &emsp;</td>
                                    <td> <label id="experience"></label></td> 
                                </tr>
                                <tr> <td>&nbsp;</td></tr>   
                            </table>
                            <div align="center">
                                <button id="btnApprove" class="btn btn-success"> Approve </button>&emsp;
    <!--                            <input type="submit" id="submit" value="Submit"/>--> 
                                <button id="btnDeny" class="btn btn-success"> Deny </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>


