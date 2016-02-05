<?php
require_once '../../controller/config/config.php';
require_once '../../login_info.php';
$template = new template();
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Forum</title>
        <?php $template->getHead(); ?> 
    </head> 
    <body>
        <?php $template->getHeader(); ?>
        <?php $template->getMenu(); ?> 
        <link rel="stylesheet" type="text/css" id="wizard" href="../../../lib/css/pages/correspondence/index.css"/>
        <script type="text/javascript" id="wizard" src="../../../lib/js/pages/correspondence/index.js"></script>

        <div class="row-fluid main-body">
            <div class="col-lg-8 col-md-12 col-lg-offset-2">
                <legend class="scheduler-border">General Discussions</legend>
                <div style="text-align: justify; font-family: arial,helvetica,sans-serif; color: rgb(0, 0, 51);"><font size="3">This is a forum to ask the general questions related to projects. Before you post a question, please browse other resources and postings below. We also invite you to share your opinions/comments on others questions. Facilitators and coordinator may also reply if it is necessary.</font></div>
                <br>
                <div align="center">
                    <input type="submit" id="btnAddNewPost" class="btn btn-success btn-rounded" value="Add a new discussion topic" onclick="window.location.href='newDiscussion.php'"/>
                </div>
                <table class="forumheaderlist" width="90%" align="center">
                    <thead>
                        <tr>
                            <th class="header topic" scope="col">Discussion</th>
                            <th class="header author" scope="col"><span class="glyphicon glyphicon-user"></span> Started by</th>
                            <th class="header replies" scope="col">Replies</th>
<!--                            <th class="header replies" scope="col"><span class="glyphicon glyphicon-ok">Unread</span></th>-->
                            <th class="header lastpost" scope="col">Last posted</th>
                        </tr>
                    </thead>
                    <tbody>

<!--                        <tr class="discussion r0"><td class="topic starter"><a href="http://vle.bit.lk/project/mod/forum/discuss.php?d=468">Year 3 Result</a></td>
                            <td class="picture"><a href="http://vle.bit.lk/project/user/view.php?id=921&amp;course=5"><img src="http://vle.bit.lk/project/theme/image.php/vidupiyasa_vle/core/1395674650/u/f2" alt="Picture of RHNM WEERASIRI" title="Picture of RHNM WEERASIRI" class="userpicture defaultuserpic" width="35" height="35"></a></td>
                            <td class="author"><a href="http://vle.bit.lk/project/user/view.php?id=921&amp;course=5">RHNM WEERASIRI</a></td>
                            <td class="replies"><a href="http://vle.bit.lk/project/mod/forum/discuss.php?d=468">3</a></td>
                            <td class="replies"><span class="read">0</span></td>
                            <td class="lastpost"><a href="http://vle.bit.lk/project/user/view.php?id=432&amp;course=5">Ms. K Weerakkody</a><br><a href="http://vle.bit.lk/project/mod/forum/discuss.php?d=468&amp;parent=1600">Wed, 18 Feb 2015, 9:56 AM</a></td>
                        </tr>-->



                        <tr class="discussion r1">
                            <td class="topic starter"><a href="/">Unable to view 3rd Progress Report</a></td>
                            <td class="author"><a href="">GPHAJ PUNCHIHEWA</a></td>
                            <td class="replies"><a href="">0</a></td>
<!--                            <td class="replies"><span class="read">0</span></td>-->
                            <td rowspan="2" class="lastpost"><a href="">GPHAJ PUNCHIHEWA</a><br>Tue, 17 Feb 2015, 6:55 PM</td>
                        </tr>
                        <tr></tr>
                        <tr>&nbsp;</tr>
                        <tr class="discussion r1">
                            <td class="topic starter"><a href="/">Unable to view 3rd Progress Report</a></td>
                            <td class="author"><a href="">GPHAJ PUNCHIHEWA</a></td>
                            <td class="replies"><a href="">0</a></td>
<!--                            <td class="replies"><span class="read">0</span></td>-->
                            <td rowspan="2" class="lastpost"><a href="">GPHAJ PUNCHIHEWA</a><br>Tue, 17 Feb 2015, 6:55 PM</td>
                        </tr>

                    </tbody>
                </table>

            </div>
        <div class="row"></div>
        <div class="row"></div>
        <?php $template->getFooter(); ?>   
        </div>
    </body>
</html>
