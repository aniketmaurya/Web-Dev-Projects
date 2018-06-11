<?php require 'common.php'; 
if (isset($_SESSION['id'])) {
    header('location: products.php'); 
    
}
?>
<!DOCTYPE html>
<html>
    <title>Lifestyle Store</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
        <script src="js/jquery.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <body style="padding-top: 50px;" >
        <?php
        require 'includes/header.php';
        ?>
        <div id="content">
            <!--Main banner image-->
            <div id = "banner_image">
                <div class="container">	
                    <center>
                        <div id="banner_content">
                            <h1>We sell lifestyle.</h1>
                            <p>Flat 40% OFF on premium brands </p>
                            <br/>
                            <a  href="products.php" class="btn btn-danger btn-lg active">Shop Now</a>
                        </div>
                    </center>
                </div>
            </div>
        
        <div class="container">
            <div id="item_list" class="row">
                <div class="col-sm-4">
                    <div class="thumbnail">
                        <img src="img/1.jpg" alt="camera">
                        <a class="caption" style="text-align: center">
                            <h3>Cameras</h3>
                            <p>Choose among the best in the world.</p>
                        </a>
                    </div>
                </div>
                <div  class="col-sm-4">
                    <div class="thumbnail">
                        <img src="img/10.jpg" alt="watch">
                        <a class="caption" style="text-align: center"><h3>Watches</h3><p>Original watches from  the best brand.</p></a>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="thumbnail">
                        <img src="img/13.jpg" alt="shirt">
                        <a class="caption" style="text-align: center"><h2>Shirts</h2><p>Our exquisite collection of shirts.</p></a>
                    </div>
                </div>
            </div>
        </div>
        <?php        require 'footer.php'; ?>
    </body>
</html>