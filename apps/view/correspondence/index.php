<?php
require_once 'apps/controller/config/config.php';
$template = new template();
?>

<!DOCTYPE html>
<html>
    <?php $template->getHead(); ?> 

    <body>
        <?php $template->getBody(); ?>
        <?php $template->getHeader(); ?>
        <?php $template->getMenu(); ?> 

        <link href="../css/pages/<?php echo $ScriptController; ?>/<?php echo $Scriptaction ?>.css" rel="stylesheet"/>
        <script src="../js/pages/<?php echo $ScriptController; ?>/<?php echo $Scriptaction ?>.js" type="text/javascript"></script>   
        <div class="row-fluid main-body">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="panel panel-primary">
                        <div class="panel-heading">Send Emails</div>
                        <div class="panel-body">
                            <form>
                                <div class="form-group">
                                    <label for="emailTo">To</label>
                                    <input type="email" class="form-control" id="emailTo" placeholder="Enter email">
                                    <div class="alert alert-danger error" role="alert">This is the error msg!</div>
                                </div>
                                <div class="form-group">
                                    <label for="emailFrom">From</label>
                                    <input type="text" class="form-control" id="emailFrom" placeholder="Enter email">
                                    <div class="alert alert-danger error" role="alert">This is the error msg!</div>
                                </div>
                                <div class="form-group">
                                    <label for="emailSubject">Subject</label>
                                    <input type="text" class="form-control" id="emailSubject" placeholder="Enter email">
                                    <div class="alert alert-danger error" role="alert">This is the error msg!</div>
                                </div>
                                <div class="form-group">
                                    <label for="emailBody">Body</label>
                                    <textarea class="ckeditor" id="emailBody"></textarea>
                                    <div class="alert alert-danger error" role="alert">This is the error msg!</div>
                                </div>
                            </form>
                        </div>
                        <div class="panel-footer text-right">
                            <button class="btn btn-success" id="btnSendEmail"><span class="glyphicon glyphicon-envelope"></span>Send Email</button>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 col-md-6">
                    <div class="panel panel-warning">
                        <div class="panel-heading">Send SMS</div>
                        <div class="panel-body">
                            <form>
                                <div class="form-group">
                                    <label for="smsNo">Mobile Number</label>
                                    <input type="text" class="form-control" id="smsNo" placeholder="Enter email">
                                    <div class="alert alert-danger error" role="alert">This is the error msg!</div>
                                </div>
                                <div class="form-group">
                                    <label for="smsBody">Body</label>
                                    <textarea class="form-control" id="smsBody"></textarea>
                                    <div class="alert alert-danger error" role="alert">This is the error msg!</div>
                                </div>
                            </form>
                        </div>
                        <div class="panel-footer text-right">
                            <button class="btn btn-success" id="btnSendSMS"><span class="glyphicon glyphicon-envelope"></span>Send SMS</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php $template->getFooter(); ?>        
    </body>
</html>
