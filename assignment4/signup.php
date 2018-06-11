<?php
require 'common.php';
if(isset($_SESSION['id'])){
header('location:products.php');
}
?>
<html>
    <title>Sign Up</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
        <script src="js/jquery.js"></script>
        <script src="css/bootstrap.min.js"></script>
        <link rel="stylesheet" type="text/css" href="css/style.css">

        <body>
            <?php
    require 'includes/header.php'; ?>
            <div class="container-fluid decor_bg" id="content">
                <div class="row">
                    <div class="col-md-6 col-lg-4 col-lg-offset-4 col-md-offset-3">
                <h2>SIGN UP</h2>
                <form class="form" method="post" action="signup_script.php">
                    <div class="form-group"><input type="text" name="name" placeholder="Name" class="form-control" required></div>
                    <div class="form-group"><input type="email" name="email" placeholder="Email" class="form-control" required></div>
                    <div class="form-group"><input type="password" name="password" placeholder="Password" class="form-control" required></div>
                    <div class="form-group"><input type="text" name="contact" placeholder="Contact" class="form-control"></div>
                    <div class="form-group"><input type="text" name="city" placeholder="City" class="form-control"></div>
                    <div class="form-group"><input type="text" name="address" placeholder="Address" class="form-control"></div>
                    <div class="form-group"><input type="submit" value="Submit" class="btn btn-primary"></div>
                    
                </form>
            </div>
                </div>
            </div>
            <?php            require 'footer.php'; ?>
        </body>
</html>