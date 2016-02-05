<?php

class template {

    private $conn;

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

//        When put BASE URL, URL comes since the root
    public function getHeader() {
        echo '
        <header class="row bg-success no-print">
      
            <div class="col-lg-1">
                <img src="' . BASE_URL . 'lib/images/logo.gif" width="100" height="120"/>
            </div>
            <div class="col-lg-4">               
                <p style="font: bold 25px arial, sans-serif;color: #25444F; text-shadow: 2px 2px #ADFB63;"> Manuscript Management System</p>
                <p style="font: bold 25px arial, sans-serif;color: #25444F; text-shadow: 2px 2px #ADFB63;"> Faculty of Agriculture</p>
                <p style="font: 20px arial, sans-serif;color: #25444F; text-shadow: 1px 1px #ADFB63;"> University of Ruhuna </p>
            </div> ';

//When there is an active session of username, display the user_salute area
        if (isset($_SESSION['username'])) {
            $path = 'upload/' . $this->getProfilePic();
            echo '
                <div class="col-lg-offset-9" id="user_salute_region">
                <div class="col-lg-6" style="top: -30px;">
                    <img id="ProfilePic" style="cursor: pointer;" src="../../model/user/' . $path . '" class="img-circle" height="75"></a><br>
                    <a href="' . BASE_URL . 'apps/view/user/editProfile.php" style="cursor: pointer;">Edit Profile</a><br>
                    <a href="' . BASE_URL . 'apps/view/user/changePW.php" style="cursor: pointer;">Change password</a>
                </div>
                <div class="col-lg-6">
                    Welcome ' . $_SESSION["username"] . ' as ' . $_SESSION["user_role"] . '<br/>
                    <a href=' . BASE_URL . 'apps/model/user/_logout.php class="logout" style="cursor: pointer;">Logout&nbsp;<span class="glyphicon glyphicon-off"></span></a>                    
                </div>
            </div>
        ';
        }
        echo '</header>';
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
        
        if(isset($_SESSION['file_handle_error'])){
            foreach ($_SESSION['file_handle_error'] as $value) {
            echo 'You have uploaded duplicate file on '.$value.'.<br/>';
                
            }
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

    public function getPlainBody() {
        echo '
        <style>
            body{
               background-color: #DFF0D8;
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
<nav class="row navbar navbar-inverse navbar-static-top" style="top: -20px;">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
       
            <a href="' . BASE_URL . 'apps/view/dashboard/author.php"> <span class="glyphicon glyphicon-home navbar-brand" style="font-size: 18px"></span> </a>

        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav" id="MainMenu">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="true">Submissions <span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="' . BASE_URL . 'apps/view/submission/checklist.php">New Submission</a></li>
                        <li><a href="' . BASE_URL . 'apps/view/submission/selectManu.php">Resubmission</a></li>    
                    </ul>
                </li>
                
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="true">My Manuscripts <span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="' . BASE_URL . 'apps/view/myManuscripts/allManuscripts.php">Manuscripts History</a></li>
                        <li><a href="#">Paper Tracking</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Services <span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        <li page="report"><a href="' . BASE_URL . 'apps/view/services/report.php">Reports</a></li>
                        <li class="divider"></li>
                        <li><a href="' . BASE_URL . 'apps/view/services/payment.php">Payments</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Correspondence <span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        <li page="message"><a href="' . BASE_URL . 'apps/view/correspondence/msg.php">Messages</a></li>
                        <li page="forum"><a href="' . BASE_URL . 'apps/view/correspondence/forum.php">Forum</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Help <span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="' . BASE_URL . 'apps/view/help/guide.php">Guide for Submissions</a></li>
                        <li><a href="' . BASE_URL . 'apps/view/help/TandC.php">Terms and Conditions</a></li>
                        <li><a href="' . BASE_URL . 'apps/view/help/contactus.php">Contact Us</a></li> 
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Manuscript Management <span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="' . BASE_URL . 'apps/view/mgt/proof.php">Proof</a></li>
                        <!--<li><a href="' . BASE_URL . 'apps/view/help/TandC.php">Terms and Conditions</a></li>
                        <li><a href="' . BASE_URL . 'apps/view/help/contactus.php">Contact Us</a></li> -->
                    </ul>
                </li>
                </li>
                <li><a href="' . BASE_URL . 'apps/view/notifications/notifications.php"><span class="glyphicon glyphicon-globe" style="font-size: 18px"><span class="badge">43</span></span></a></li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav> 
 ';
    }

    public function getEditorMenu() {
        echo '  
<!-- Navigation -->
<nav class="row navbar navbar-inverse navbar-static-top" style="top: -20px;">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <a href="' . BASE_URL . 'apps/view/dashboard/author.php"> <span class="glyphicon glyphicon-home navbar-brand" style="font-size: 18px"></span> </a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav" id="MainMenu">
                <li page="requests"><a href="' . BASE_URL . 'apps/view/requests/index.php">Reviewer request</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="true">Submissions <span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="' . BASE_URL . 'apps/view/submission/checklist.php">New Submission</a></li>
                        <li><a href="' . BASE_URL . 'apps/view/submission/selectManu.php">Resubmission</a></li>    
                    </ul>
                </li>
                
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="true">My Manuscripts <span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="' . BASE_URL . 'apps/view/myManuscripts/allManuscripts.php">Manuscripts History</a></li>
                        <li><a href="#">Paper Tracking</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Services <span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        <li page="report"><a href="' . BASE_URL . 'apps/view/services/report.php">Reports</a></li>
                        <li class="divider"></li>
                        <li><a href="' . BASE_URL . 'apps/view/services/payment.php">Payments</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Correspondence <span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        <li page="message"><a href="' . BASE_URL . 'apps/view/correspondence/msg.php">Messages</a></li>
                        <li page="forum"><a href="' . BASE_URL . 'apps/view/correspondence/forum.php">Forum</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Help <span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="' . BASE_URL . 'apps/view/help/guide.php">Guide for Submissions</a></li>
                        <li><a href="' . BASE_URL . 'apps/view/help/TandC.php">Terms and Conditions</a></li>
                        <li><a href="' . BASE_URL . 'apps/view/help/contactus.php">Contact Us</a></li> 
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Manuscript Management <span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="' . BASE_URL . 'apps/view/mgt/proof.php">Proof</a></li>
                        <!--<li><a href="' . BASE_URL . 'apps/view/help/TandC.php">Terms and Conditions</a></li>
                        <li><a href="' . BASE_URL . 'apps/view/help/contactus.php">Contact Us</a></li> -->
                    </ul>
                </li>
                </li>
                <li><a href="' . BASE_URL . 'apps/view/notifications/notifications.php"><span class="glyphicon glyphicon-globe" style="font-size: 18px"><span class="badge">43</span></span></a></li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav> 
 ';
    }

    private function getProfilePic() {
        require_once '../../model/conn.php';

        $db = new DbConnection();
        $this->conn = $db->conn;

        $username = $_SESSION['username'];
        $sql = "SELECT user_pic FROM tbl_user WHERE username=:username";

        $stmt = $this->conn->prepare($sql);
        $stmt->execute(array(':username' => $username));
        $result = $stmt->fetchAll();
        return $result[0]['user_pic'];
//        print_r($result)
    }

}
?>

