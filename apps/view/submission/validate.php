?php
require_once 'apps/controller/config/config.php';
$template = new template();
?>

<!DOCTYPE html>
<html>
    <?php $template->getHead(); ?> 

    <body>
        <?php $template->getBody(); ?>
        <?php $template->getHeader(); ?>         

    <html>
        <head>
            <link rel="stylesheet" type="text/css" id="wizard" href="../css/pages/submission/upload.css"/>
        </head>
        <body>

            <div class="wizard-steps">
                <div class="completed-step"><a href="checklist"><span>1</span>Checklist</a></div>
                <div class="completed-step"><a href="upload"><span>2</span>Upload the Manuscript</a></div>
                <div class="completed-step"><a href="manuInfo"><span>3</span>Manuscript information</a></div>
                <div class="completed-step"><a href="authorInfo"><span>4</span>Author information</a></div>
                <div class="active-step"><a href="validate"><span>5</span>Validation</a></div>
            </div>


            <div class="col-lg-8 col-lg-offset-2">
                <div class="form-group">
                    <div class="table-responsive">
                        <table class="table" id="validate">
                            <br>
                            <tr>
                                <th>Title</th>
                            </tr>
                            <tr>
                                <th>Article Type</th>
                            </tr>
                            <tr>
                                <th>Abstract</th>
                            </tr>
                            <tr>
                                <th>Keywords</th>
                            </tr>
                        </table>
                        <fieldset class="scheduler-border">
                            <legend class="scheduler-border">Corresponding author</legend>
                            <label class="col-sm-2 control-label">First Name</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="fname">
                            </div>
                            <label class="col-sm-2 control-label">Last Name</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="lname">
                            </div>
                            <label class="col-sm-2 control-label">Email</label>
                            <div class="col-sm-10">
                                <input type="email" class="form-control" id="email">
                            </div>
                            <label class="col-sm-2 control-label">Telephone</label>
                            <div class="col-sm-10">
                                <input type="text" id="mobile">
                            </div>
                            <label class="col-sm-2 control-label">Address</label>
                            <div class="col-sm-10">
                                <textarea id="address" name="addr" cols="75" rows="4" ></textarea>
                            </div>
                            <label class="col-sm-2 control-label">University/ Institute (Academic)</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="uni">
                            </div>  
                        </fieldset>
                        <div class="form-group">
                            <fieldset class="scheduler-border">
                                <legend class="scheduler-border">Other authors</legend>
                                <div class="control-group">
                                    <label class="col-sm-2 control-label">First Name</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="fname">
                                    </div>
                                    <label class="col-sm-2 control-label">Last Name</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="lname">
                                    </div>
                                    <label class="col-sm-2 control-label">Email</label>
                                    <div class="col-sm-10">
                                        <input type="email" class="form-control" id="email">
                                    </div>
                                </div>
                        </div>
                    </div>

                    <div class="container-fluid">
                        <div class="col-lg-4">
                            <button id="btnSubmit" class="btn btn-success">
                                <span class="glyphicon"></span> Submit
                            </button>
                        </div>
                        <button id="btnSave" class="btn btn-success">
                            <span class="glyphicon"></span> Save without submitting
                        </button>
                        <div class="col-lg-4">
                            <div class="pull-right">
                                <button id="btnPreviousToManuInfo" class="btn btn-success">
                                    <span class="glyphicon"></span> &laquo;&nbsp;Previous
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php $template->getFooter(); ?>        
        </body>
    </html>

