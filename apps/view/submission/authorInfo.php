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

    <html>
        <head>
            <link rel="stylesheet" type="text/css" id="wizard" href="../css/pages/submission/upload.css"/>
        </head>
        <body>

            <div class="wizard-steps">
                <div class="completed-step"><a href="checklist"><span>1</span> Checklist</a></div>
                <div class="completed-step"><a href="upload"><span>2</span> Upload the Manuscript</a></div>
                <div class="completed-step"><a href="manuInfo"><span>3</span>Manuscript information</a></div>
                <div class="active-step"><a href="authorInfo"><span>4</span> Author information</a></div>
                <div><a href="validate"><span>5</span>Validation</a></div>
            </div>
            <div class="col-lg-8 col-lg-offset-2">
                <br>
                <div class="form-group">
                    <fieldset class="scheduler-border">
                        <legend class="scheduler-border">Add author (One by one)</legend>
                        <div class="control-group">
                            <label class="col-sm-2 control-label">First Name*</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="fname" placeholder="" validate="true" match="^[a-zA-Z]+$" error="Please Enter First Name">
                            </div>
                            <label class="col-sm-2 control-label">Last Name*</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="lname" placeholder="" validate="true" match="^[a-zA-Z]+$" error="Please Enter Last Name">
                            </div>
                            <label class="col-sm-2 control-label">Email*</label>
                            <div class="col-sm-10">
                                <input type="email" class="form-control" id="email" placeholder="" validate="true" match="^[a-zA-Z]+$" error="Please Enter a valid email address">
                            </div>
                            <label class="col-sm-2 control-label">Address *</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="lname" placeholder="" validate="true" match="^[a-zA-Z]+$" error="Please Enter The Address">
                            </div>

                            <button class="btn btn-success" id="btnAddAuthor"> + Add Author</button>
                        </div>
                    </fieldset>
                </div>
                <div class="form-group">
                    <fieldset class="scheduler-border">
                        <legend class="scheduler-border">Corresponding Author</legend>
                        <div class="control-group">
                            <label class="col-sm-2 control-label">Title*</label>
                            <select name="title" id="title" validate="true" error="Please select a title">
                                <option value="0">Please select</option>
                                <option value="Dr">Dr</option>
                                <option value="Prof">Prof</option>
                                <option value="Mr">Mr</option>
                                <option value="Mrs">Mrs</option>
                                <option value="Miss">Miss</option>
                            </select>
                        </div>
                        <br>
                        <label class="col-sm-2 control-label">First Name*</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="fname" placeholder="" validate="true" match="^[a-zA-Z]+$" error="Please Enter First Name">
                        </div>
                        <label class="col-sm-2 control-label">Middle Name</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="mname" placeholder="">
                        </div>
                        <label class="col-sm-2 control-label">Last Name*</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="lname" placeholder="" validate="true" match="^[a-zA-Z]+$" error="Please Enter Last Name">
                        </div>
                        <label class="col-sm-2 control-label">Email*</label>
                        <div class="col-sm-10">
                            <input type="email" class="form-control" id="email" placeholder="" validate="true" match="^[a-zA-Z]+$" error="Please Enter a valid email address">
                        </div>
                        <label class="col-sm-2 control-label">Telephone</label>
                        <div class="col-sm-10">
                            <input type="text" id="mobile" placeholder="Please enter with counry code" validate="true" match="^[0-9]+$" error="Please Enter a valid mobile number">
                        </div>
                        <label class="col-sm-2 control-label">Address *</label>
                        <div class="col-sm-10">
                            <textarea id="address" name="addr" cols="75" rows="4" ></textarea>
                        </div>
                        <label class="col-sm-2 control-label">University/ Institute (Academic)*</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="uni" placeholder="">
                        </div>  
                    </fieldset>

                    <button id="btnNextToValidate" class="btn btn-success">
                        <span class="glyphicon"></span> Next&nbsp;&raquo;
                    </button>
                    <div class="pull-right">
                        <button id="btnPreviousToManuInfo" class="btn btn-success">
                            <span class="glyphicon"></span> &laquo;&nbsp;Previous
                        </button>
                    </div>


                </div>
            </div>
            <?php $template->getFooter(); ?>        
        </body>
    </html>

