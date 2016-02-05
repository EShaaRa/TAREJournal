<?php
require_once '../../controller/config/config.php';
require_once '../../login_info.php';
$template = new template();
?>

<!DOCTYPE html>
<html>
    <head>
        <title>New discussion</title>
        <?php $template->getHead(); ?> 
    </head> 
    <body>
        <?php $template->getHeader(); ?>
        <?php $template->getMenu(); ?> 

        <div class="row-fluid main-body">
            <div class="col-lg-6 col-md-6 col-lg-offset-3">
                <div class="panel panel-success">
                    <div class="panel-heading">Add a new discussion topic</div>
                    <div class="panel-body">
                        <form>
                            <div class="form-group">
                                <label for="forumSubject">Subject</label>
                                <input type="text" class="form-control" id="emailSubject" placeholder="Enter subject">
                                <div class="alert alert-danger error" role="alert">This is the error msg!</div>
                            </div>
                            <div class="form-group">
                                <label for="forumMsg">Message</label>
                                <textarea class="ckeditor" id="emailBody"></textarea>
                                <div class="alert alert-danger error" role="alert">This is the error msg!</div>
                            </div>
                            <div>
                                <input type="radio" name="subscribe" value="subscribe" checked> Subscribe me to this post via emails<br>
                                <input type="radio" name="subscribe" value="unsubscribe"> I do not need notification to this post<br> 
                            </div>
                            <br>
                            <div class="form-group">
                                <label for="forumAttach">Attachments</label>
                                <br>
                                Maximum size for new files: 500KB, maximum attachments: 1
                                <input type="file"  id="forumAttach"/>
                                <div class="alert alert-danger error" role="alert">This is the error msg!</div>
                            </div>

                            <div class="panel-footer text-right">
                                <button class="btn btn-success" id="btnPostForum">Post to forum</button>
                            </div>
                            <br>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php $template->getFooter(); ?>        
</body>
</html>
