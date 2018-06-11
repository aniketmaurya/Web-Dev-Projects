<?php
require 'common.php';
if(isset($_SESSION['email'])){
header('location:products.php');
} ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" >
        <script src="js/jquery.js" ></script>
        <script src="js/bootstrap.min.js"></script>
        <title>Lifestyle Store</title>
    </head>
    <body>
        <?php
        require 'includes/header.php';
        ?>
        <div style="margin-top: 100px; ">
        <div class="container">
            <div class="panel panel-primary" style="margin-left: 30%; margin-right: 30%;">
                <div class="panel-heading"><h3 style="font-weight: bold;">Login</h3></div>
                <div class="panel-body">
                    <span style="font-weight: bold;" class="text-danger form-group"><em>Login to make a purchase</em></span>
                    <form class="form" method="post" action="login_submit.php">
                        <div class="form-group"><label>Email</label><input class="form-control" type="email" name="email" placeholder="Email"></div>
                        <div class="form-group"><label>Password</label><input class="form-control" type="password" name="password" placeholder="*****"></div>
                        <div class="form-group"><input class="btn btn-primary" type="submit" name="submit"  value="Submit" ></div>
                    </form>
                    
                </div>
                <div class="panel-footer">
                        <p>Don't have an account?</p>
                        <a href="signup.php">Register</a>
                </div>
            </div>
            
        </div>
        </div>
    </body>
</html>