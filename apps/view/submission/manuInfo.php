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
                <div class="completed-step"><a href="checklist"><span>1</span> Checklist</a></div>
                <div class="completed-step"><a href="upload"><span>2</span> Upload the Manuscript</a></div>
                <div class="active-step"><a href="manuInfo"><span>3</span>Manuscript information</a></div>
                <div><a href="authorInfo"><span>4</span> Author information</a></div> 
                <div><a href="validate"><span>5</span>Validation</a></div>
            </div>
            <br>
            <div class="col-lg-8 col-lg-offset-2">
                <div class="form-group">
                    <h3>Fill the details</h3>
                    <br>
                    <form class="form-horizontal">
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Title of your manuscript</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="title" placeholder="">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Please select your subject area of article</label>
                            <div class="col-sm-10">
                                <select name="article_type" id="article_type" class="input-field" onchange="display(this.value);">
                                    <option value="Econ">Agricultural Economics & Extension</option>
                                    <option value="Agric eng">Agricultural Engineering</option>
                                    <option value="Agro-forestry">Agro-forestry</option>
                                    <option value="Animal">Animal Science</option>
                                    <option value="Biotechnology">Biotechnology</option>
                                    <option value="Crop Science">Crop Science</option>
                                    <option value="Fisheries Biology">Fisheries Biology</option>
                                    <option value="Food">Food Science & Post Harvest Technology</option>
                                    <option value="Genetics">Genetics & Plant Breeding</option>
                                    <option value="Plant Protection">Plant Protection</option>
                                    <option value="Indigenous Knowledge Systems">Indigenous Knowledge Systems</option>
                                    <option value="Integrated Farming Systems">Integrated Farming Systems</option>
                                    <option value="Soil">Natural Resource Management and Soil Science</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Abstract</label>
                            <div class="col-sm-10">
                                <textarea cols="" rows="10" class="form-control" id="abstract"> </textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Keywords (separate by comma)</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="title" placeholder="">
                            </div>
                        </div>

                    </form>
                    <button id="btnNextToAuthor" class="btn btn-success">
                        <span class="glyphicon"></span> Next&nbsp;&raquo;
                    </button>
                    <div class="pull-right">
                        <button id="btnPreviousToUpload" class="btn btn-success">
                            <span class="glyphicon"></span> &laquo;&nbsp;Previous
                        </button>
                    </div>
                </div>
            </div>
            <?php $template->getFooter(); ?>        
        </body>
    </html>