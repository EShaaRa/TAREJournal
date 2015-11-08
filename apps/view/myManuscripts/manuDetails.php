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
        <?php $template->getMenu(); ?>

        <div class="container-fluid">
            <div class="col-lg-8 col-lg-offset-2 col-md-8 col-sm-12" style="position: absolute; top: 19%;">
                <div class="panel panel-success center-block">
                    <div class="panel-heading">
                        <div class="panel-title text-center"><h5><!--Take Manu ID here--></h5></div>                         
                    </div>
                    <div class="panel-body">
                        <div class="col-lg-8 col-lg-offset-2">
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
                                            <label class="col-sm-2 control-label">Name</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="fname">
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
                                                    <label class="col-sm-2 control-label">Name</label>
                                                    <div class="col-sm-10">
                                                        <input type="text" class="form-control" id="fname">
                                                    </div>
                                                    <label class="col-sm-2 control-label">Email</label>
                                                    <div class="col-sm-10">
                                                        <input type="email" class="form-control" id="email">
                                                    </div>
                                                </div>
                                        </div>
                                        <!-- download pdf -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <?php $template->getFooter(); ?> 
