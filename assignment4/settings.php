<?php
require 'common.php';?>
<!DOCTYPE html>
<html>
    <title>Settings</title>
        meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
        <script src="js/jquery.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <body style="padding-top: 50px; margin-top: 50px;">
<?php
if(!isset($_SESSION['email'])){
    header('location:index.php?error=login_first');
}
else{
    require 'includes/header.php'; ?>
            <div><?php if(isset($_GET['error'])){ echo $_GET["error"]; }?></div>
            <div class="container row">
                <div class="col-xs-6 col-xs-offset-3">
                    <form class="form" method="post" action="settings_script.php">
                        <div class="form-group"><input class="form-control" type="password" placeholder="Old Password" name="oldpassword"></div>
                        <div class="form-group"><input class="form-control" type="password" placeholder="New Password" name="newpassword"></div>
                        <div class="form-group"><input class="form-control" type="password" placeholder="Retype New Password" name="r_newpassword"></div>
                        <div class="form-group"><input type="submit" name="submit" value="Submit" class="btn btn-primary"></div>
                    </form>
                </div>
            </div>
        </body>
</html>
<?php
}?>