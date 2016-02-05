<?php
require_once '../../controller/config/config.php';
require_once '../../login_info.php';
$template = new template();
?>

<!DOCTYPE html>
<html>
   <head>
        <title>Correspondence</title>
        <?php $template->getHead(); ?> 
    </head> 
    <body>
        <?php $template->getHeader(); ?>
        <?php $template->getMenu(); ?> 

        <div class="row-fluid main-body">
                <div class="col-lg-6 col-md-6 col-lg-offset-3">
                    <div class="panel panel-primary">
                        <div class="panel-heading">Email to editorial assistant</div>
                        <div class="panel-body">
                            <form>
                                <div class="form-group">
                                    <label for="emailTo">To</label>
                                    <input type="email" class="form-control" id="emailTo" placeholder="Enter email">
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
                            <button class="btn btn-success" id="btnSendEmail"><span class="glyphicon glyphicon-envelope"></span>&nbsp;Send Email</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php $template->getFooter(); ?>        
    </body>
</html>
