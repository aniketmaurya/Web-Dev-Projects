<?php
require 'common.php'; session_start();?>
<!DOCTYPE html>
<html>
    <title>Settings</title>
        <meta charset="UTF-8">
        <title>Internship | Summer Internship | Summer Training | Winter Training</title>
        <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
        <script type="text/javascript" src="js/jquery.js"></script>
        <script type="text/javascript" src="js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="css/style.css" type="text/css">
        
<?php
if(!isset($_SESSION['id'])){
    header('location:index.php?error=login_first');
}
else{
    require 'header.php'; ?>
            <div><?php if(isset($_GET['error'])){ echo $_GET["error"]; }?></div>
            <div  style="padding-top: 50px;">
            <div class="container">
                <div class="col-xs-6 col-xs-offset-3">
                    <form class="form" method="post" action="settings_script.php">
                        <div class="form-group"><input class="form-control" type="password" placeholder="Old Password" name="oldpassword"></div>
                        <div class="form-group"><input class="form-control" type="password" placeholder="New Password" name="newpassword"></div>
                        <div class="form-group"><input class="form-control" type="password" placeholder="Retype New Password" name="r_newpassword"></div>
                        <div class="form-group"><input type="submit" name="submit" value="Submit" class="btn btn-primary"></div>
                    </form>
                </div>
            </div>
            </div>
            
        </body>
</html>
<?php
}?>