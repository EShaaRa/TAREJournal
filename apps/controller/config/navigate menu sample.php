  
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
                <li class="active" page="upload"><a href="' . BASE_URL . 'apps/view/submission/checklist.php">Upload an article <span class="sr-only">(current)</span></a></li>
                
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="true">Upload articles  <span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="'. BASE_URL . 'apps/view/submission/checklist.php">New Submission</a></li>
                        <li><a href="'. BASE_URL . 'apps/view/submission/uncomplete.php">Uncomplete Submissions</a></li> 
                    </ul>
                </li>
                
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="true">My Manuscripts <span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="'. BASE_URL . 'apps/view/myManuscripts/allManuscripts.php">Manuscripts History</a></li>
                        <li><a href="#">Paper Tracking</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Services <span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        <li page="report"><a href="'. BASE_URL . 'apps/view/report/index">Reports</a></li>
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