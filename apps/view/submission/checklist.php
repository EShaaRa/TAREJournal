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
    <html>
        <head>
            <link rel="stylesheet" type="text/css" id="wizard" href="../css/pages/submission/upload.css"/>
        </head>

        <body>
            <div class="container-fluid">
                <div class="wizard-steps">
                    <div class="active-step"><a href="checklist"><span>1</span> Checklist</a></div>
                    <div><a href="upload"><span>2</span> Upload the manuscript</a></div>
                    <div><a href="manuInfo"><span>3</span>Manuscript information</a></div>
                    <div><a href="authorInfo"><span>4</span> Author information</a></div>
                    <div><a href="validate"><span>5</span>Validation</a></div>
                </div>



                <!--    <nav>
                        <ul class="pagination pagination-lg">
                            <li>
                                <span>
                                    <span aria-hidden="true">&laquo;</span>
                                </span>
                            </li>
                            <li class="active">
                                <span>1.Checklist <span class="sr-only">current</span></span>
                            </li>
                            <li>
                                <span>2. Upload Manuscript <span class="sr-only">(current)</span></span>
                            </li>
                            <li>
                                <span>3. Fill the details <span class="sr-only">(current)</span></span>
                            </li>
                            <li>
                                <span>4. Validation <span class="sr-only">(current)</span></span>
                            </li>
                            <li class="disabled">
                                <span>
                                    <span aria-hidden="true">&raquo;</span>
                                </span>
                            </li>
                        </ul>
                    </nav>-->

                <div class="col-lg-8 col-lg-offset-1">
                    <br>
                    <h3>Submission Checklist</h3>
                    <table>
                        <tr><td>&nbsp;</td></tr>
                        <tr>
                            <td><input type="checkbox" name="checklist" value="1"/>&emsp;</td>
                            <td>The papers submitting to the Journal should not have been published previously in the same, or any other form or language, or being considered for publication elsewhere. </td>
                        </tr>
                        <tr>
                            <td>  <input type="checkbox" name="checklist" value="2"/></td>
                            <td>The submission file is in OpenOffice or Microsoft Word file format.</td>
                        </tr>
                        <tr>
                            <td><input type="checkbox" name="checklist" value="3"/></td>
                            <td>Language of publication is English</td>
                        </tr>
                        <tr>
                            <td><input type="checkbox" name="checklist" value="4"/></td>
                            <td>Your manuscript is in correct length</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>&emsp;Review: no limitations</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>&emsp;Research articles: less than 20 pages</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>&emsp;Short Communications: an abstract of about 50 words, should not exceed 2000 words including a maximum of two tables</td>
                        </tr>
                        <tr>
                            <td><input type="checkbox" name="checklist" value="5"/></td>
                            <td>My article follows TARE guidelines<br></td>
                        </tr>
                        <tr><td>&nbsp;</td></tr>
                        <tr>
                            <td></td>
                            <td>
                                <button id="btnNextToUpload" class="btn btn-success">
                                    <span class="glyphicon"></span>Next&nbsp;&raquo;
                                </button> 
                            <td>
                        </tr>
                    </table>
                    <!--        Validation is required-->
                </div>
            </div>
            <?php $template->getFooter(); ?>        
        </body>
    </html>