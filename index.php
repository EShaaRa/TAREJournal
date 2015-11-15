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
        
        <!--Body Section-->
        <div class="container-fluid">
            <div class="col-lg-6 col-lg-offset-3 col-md-8 col-sm-12" style="position: absolute; top: 23%;">
                <div class="panel panel-success text-center">
                    <?php $template->showMessage(); ?>
                    <div class="panel-heading">
                        <h3 class="panel-title">User Login</h3>
                    </div>
                    <div class="panel-body">
                        <img src="lib/images/login.png"/><br/><br/>
                        <form action="apps/model/user/_login.php" method="POST">
                            Login as: <br>
                            <input type="radio" name="user_role" value="Author" id="Author" checked="true">Author &nbsp;
                            <input type="radio" name="user_role" value="Reviewer" id="Reviewer">Reviewer &nbsp;
                            <input type="radio" name="user_role" value="Editor" id="Editor">Editor <br>
                            <br>
                            <input type="text" placeholder="Username" name="username" id="username"/><br/>
                            <input type="password" placeholder="Password" name="password" id="password"/><br/>
                            <input type="checkbox" id="rememberme" name="remember" />                       
                            <label for="remember">&nbsp; Remember me</label> <br/>  
                            <button type="submit" name="btnLogin" class="btn btn-success" value="Login">
                                <span class="glyphicon glyphicon-log-in"></span>  Login
                            </button>
                            <br> 
                            <a href="">Forgot username or password?</a><br/>
                            <a href="apps/view/user/register.php">Not a user? Register with us </a>
                        </form>
                    </div>
                </div>
            </div>
        </div> 
    </body>
</html>
<?php $template->getFooter(); ?>        
</body>
</html>
