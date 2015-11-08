<?php

class template {

    public function getHead() {
        echo '
    <head>
        <title>  eJournal</title>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width,initial-scale=1">

        <link href="' . BASE_URL . 'lib/css/bootstrap.min.css" rel="stylesheet"/>
        <link href="' . BASE_URL . 'lib/css/bootstrap-theme.min.css" rel="stylesheet"/>
        <link href="' . BASE_URL . 'lib/js/start/jquery-ui.min.css" rel="stylesheet"/>
        <link href="' . BASE_URL . 'lib/css/style.css" rel="stylesheet"/>

        <script src="' . BASE_URL . 'lib/js/jquery.js" type="text/javascript"></script>
        <script src="' . BASE_URL . 'lib/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="' . BASE_URL . 'lib/js/start/jquery-ui.min.js" type="text/javascript"></script>
        <script src="' . BASE_URL . 'lib/js/charts/highcharts.js" type="text/javascript" ></script>
        <script src="' . BASE_URL . 'lib/js/charts/highcharts-3d.js" type="text/javascript" ></script>
        <script src="' . BASE_URL . 'lib/js/charts/modules/exporting.js" type="text/javascript" ></script>
        <script src="' . BASE_URL . 'lib/js/ckeditor/ckeditor.js" type="text/javascript"></script>
        <script src="' . BASE_URL . 'lib/js/common.js" type="text/javascript"></script>
    </head>
        ';
    }

    public function getHeader() {
        echo '
        <header class="row bg-success no-print">
            <div class="col-lg-1 col-md-1 col-sm-2">
                <img src="' . BASE_URL . 'lib/images/logo.gif" width="100" height="120"/>
            </div>
            <div class="col-lg-4">               
                <p style="font: bold 25px arial, sans-serif;color: #25444F; text-shadow: 2px 2px #ADFB63;"> Manuscript Management System</p>
                <p style="font: bold 25px arial, sans-serif;color: #25444F; text-shadow: 2px 2px #ADFB63;"> Faculty of Agriculture</p>
                <p style="font: 20px arial, sans-serif;color: #25444F; text-shadow: 1px 1px #ADFB63;"> University of Ruhuna </p>
            </div> ';
        if (isset($_SESSION['username']))
        {
           echo ' <div class="col-lg-4 col-lg-offset-2 col-md-6 col-sm-12" id="user_salute_region">
                <div class="col-lg-4 col-md-4 text-right">
                    <img src="' . BASE_URL . 'lib/images/profile_image.png" alt="Profile Picture" class="img-circle" height="75"> <br>
                    <a href="' . BASE_URL . 'apps/view/user/edituser.php" style="cursor: pointer;">Edit Profile</a>
                </div>
                <div class="col-lg-8 col-md-8 pull-right text-left">
                    Welcome ' .$_SESSION["username"]  . '<br/>
                    <a href=' . BASE_URL . 'apps/model/user/_logout.php class="logout" style="cursor: pointer;">Logout&nbsp;<span class="glyphicon glyphicon-off"></span></a>                    
                </div>
            </div>
        </header>       
        ';
        }
    }

    // Displays Success and Error messages
    public function showMessage() {
        if (isset($_SESSION['SUCCESS'])) {
            echo '' . $_SESSION['SUCCESS'][0] . '';
            unset($_SESSION['SUCCESS']);
        }

        if (isset($_SESSION['ERR'])) {
            echo '' . $_SESSION['ERR'][0] . '';
            unset($_SESSION['ERR']);
        }
    }

    //End of error Messages   

    public function getBody() {
        echo '
        <style>
            body{
                background-image: url(' . BASE_URL . 'lib/images/bg1.jpg);
                background-repeat: no-repeat;
                background-size: 100%; 
            }
        </style>  
        ';
    }

    public function getFooter() {
        echo '
        <footer class="row navbar-fixed-bottom navbar-inverse">
            <div class="container-fluid text-center">
                Copyright &COPY; - 2015 TARE Manuscript Management System. All Right Reserved.
            </div>
        </footer>  
        ';
    }

//    <!--Navigation -->
    public function getMenu() {
        echo '    
    <!-- Navigation -->
<nav class="row navbar navbar-inverse navbar-static-top">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
<!--            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>-->
            <a href="' . BASE_URL . 'apps/view/dashboard/author.php"> <span class="glyphicon glyphicon-home navbar-brand" style="font-size: 18px"><br>TMMS</span> </a>
            
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav" id="MainMenu">
                <li class="active" page="invoice"><a href="' . BASE_URL . 'apps/view/submission/checklist.php">Upload an article <span class="sr-only">(current)</span></a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="true">My Manuscripts <span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="'. BASE_URL . 'apps/view/myManuscripts/allManuscripts.php">Manuscripts History</a></li>   
                        <li class="divider"></li>
                        <li><a href="#">Uncompleted Submissions</a></li>
                        <li><a href="#">Paper Tracking</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Services <span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        <li page="report"><a href="'. BASE_URL . 'apps/view/report/index">Report</a></li>
                        <li class="divider"></li>
                        <li><a href="#">Separated link</a></li>
                    </ul>
                </li>
                <li page="correspondence"><a href="'. BASE_URL . 'apps/view/correspondence/index">Correspondence</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Help <span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="'. BASE_URL . 'apps/view/help/guide">Guide for Submissions</a></li>
                        <li><a href="'. BASE_URL . 'apps/view/help/TandC">Terms and Conditions</a></li>
                        <li><a href="/h'. BASE_URL . 'apps/view/help/contactus">Contact Us</a></li> 
                    </ul>
                </li>
                </li>
<!--                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Dropdown <span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        <li page="backuprestore"><a href="../backuprestore/index">Backup & Restore</a></li>
                        <li><a href="#">Another action</a></li>
                        <li><a href="#">Something else here</a></li>
                        <li class="divider"></li>
                        <li><a href="#">Separated link</a></li>
                    </ul>
                </li>-->
<li><a href="../../view/settings/settings.php"><span class="glyphicon glyphicon-cog" style="font-size: 18px"></span>&nbsp;Settings</a></li>
                <li><a href="../correspondence/notificatios"><span class="glyphicon glyphicon-globe" style="font-size: 18px"><span class="badge">43</span></span></a></li>
            </ul>

            <form class="navbar-form navbar-right" role="search">
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Search">
                </div>
                <button type="submit" class="btn btn-default">Submit</button>
            </form>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav> 
 ';
    }

}
?>

