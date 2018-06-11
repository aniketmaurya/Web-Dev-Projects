<?php require 'common.php'; ?>
<!DOCTYPE html>
<html>
    <title>Products</title>
        meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
        <script src="js/jquery.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <body>
            <?php require 'includes/header.php'; 
                include 'includes/check_if_added.php';
            ?>
        <div class="container" id="content">

            <!-- Jumbotron Header -->
            <div class="jumbotron home-spacer" id="products-jumbotron">
                <h1>Welcome to our Lifestyle Store!</h1>
                <p>We have the best cameras, watches and shirts for you. No need to hunt around, we have all in one place.</p>

            </div>
            <hr>

            <div class="row text-center" id="cameras">
                
                <div class="col-md-3 col-sm-6 home-feature">
                    <div class="thumbnail" id="1">
                        <img src="img/2.jpg" alt="">
                        <div class="caption">
                            <h3>Cannon EOS </h3>
                            <p>Price: Rs. 36000.00 </p>
<?php                                        
if (isset($_SESSION['id'])){
    if(check_if_added_to_cart(1)==0){ ?>
                            <p><a href="cart-to.php?id=1" role="button" class="btn btn-primary btn-block">Add to  cart</a></p>
<?php
    }
    else { ?>
                            <p><a href="cart-to.php" role="button" class="btn btn-primary btn-block disabled" disabled>Add to cart</a></p>
<?php
    }
}
else { ?>

                            <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>  
<?php                            
} ?>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 home-feature">
                    <div class="thumbnail" id="2">
                        <img src="img/3.jpg" alt="">
                        <div class="caption">
                            <h3>Olympus DSLR </h3>
                            <p>Price: Rs. 533000.00 </p>
<?php                                        
if (isset($_SESSION['id'])){
    if(check_if_added_to_cart(2)==0){ ?>
                            <p><a href="cart-to.php?id=2" role="button" class="btn btn-primary btn-block">Add to  cart</a></p>
<?php
    }
    else { ?>
                            <p><a href="cart-to.php" role="button" class="btn btn-primary btn-block disabled" disabled>Add to cart</a></p>
<?php
    }
}
else { ?>

                            <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>  
<?php                            
} ?>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 home-feature">
                    <div class="thumbnail" id="3">
                        <img src="img/4.jpg" alt="">
                        <div class="caption">
                            <h3>Nikon EOS </h3>
                            <p>Price: Rs. 4,00,000.00 </p>
<?php                                        
if (isset($_SESSION['id'])){
    if(check_if_added_to_cart(3)==0){ ?>
                            <p><a href="cart-to.php?id=3" role="button" class="btn btn-primary btn-block">Add to  cart</a></p>
<?php
    }
    else { ?>
                            <p><a href="cart-to.php" role="button" class="btn btn-primary btn-block disabled" disabled>Add to cart</a></p>
<?php
    }
}
else { ?>

                            <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>  
<?php                            
} ?>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 home-feature">
                    <div class="thumbnail" id="4">
                        <img src="img/5.jpg" alt="">
                        <div class="caption">
                            <h3>Sony DSLR </h3>
                            <p>Price: Rs. 50000.00 </p>
<?php                                        
if (isset($_SESSION['id'])){
    if(check_if_added_to_cart(4)==0){ ?>
                            <p><a href="cart-to.php?id=4" role="button" class="btn btn-primary btn-block">Add to  cart</a></p>
<?php
    }
    else { ?>
                            <p><a href="cart-to.php" role="button" class="btn btn-primary btn-block disabled" disabled>Add to cart</a></p>
<?php
    }
}
else { ?>

                            <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>  
<?php                            
} ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row text-center" id="shirts">
                
                <div class="col-md-3 col-sm-6 home-feature">
                    <div class="thumbnail" id="5">
                        <img src="img/22.jpg" alt="">
                        <div class="caption">
                            <h3>Titan Model #301  </h3>
                            <p>Price: Rs. 36000.00.00 </p>
<?php                                        
if (isset($_SESSION['id'])){
    if(check_if_added_to_cart(5)==0){ ?>
                            <p><a href="cart-to.php?id=5" role="button" class="btn btn-primary btn-block">Add to  cart</a></p>
<?php
    }
    else { ?>
                            <p><a href="cart-to.php" role="button" class="btn btn-primary btn-block disabled" disabled>Add to cart</a></p>
<?php
    }
}
else { ?>

                            <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>  
<?php                            
} ?>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 home-feature">
                    <div class="thumbnail" id="6">
                        <img src="img/23.jpg" alt="">
                        <div class="caption">
                            <h3>Titan Model #201</h3>
                            <p>Price: Rs. 3000.00 </p>
<?php                                        
if (isset($_SESSION['id'])){
    if(check_if_added_to_cart(6)==0){ ?>
                            <p><a href="cart-to.php?id=6" role="button" class="btn btn-primary btn-block">Add to  cart</a></p>
<?php
    }
    else { ?>
                            <p><a href="cart-to.php" role="button" class="btn btn-primary btn-block disabled" disabled>Add to cart</a></p>
<?php
    }
}
else { ?>

                            <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>  
<?php                            
} ?>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 home-feature">
                    <div class="thumbnail" id="7">
                        <img src="img/24.jpg" alt="">
                        <div class="caption">
                            <h3>HMT Milan </h3>
                            <p>Price: Rs. 8000.00 </p>
<?php                                        
if (isset($_SESSION['id'])){
    if(check_if_added_to_cart(7)==0){ ?>
                            <p><a href="cart-to.php?id=7" role="button" class="btn btn-primary btn-block">Add to  cart</a></p>
<?php
    }
    else { ?>
                            <p><a href="cart-to.php" role="button" class="btn btn-primary btn-block disabled" disabled>Add to cart</a></p>
<?php
    }
}
else { ?>

                            <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>  
<?php                            
} ?>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 home-feature">
                    <div class="thumbnail" id="8">
                        <img src="img/25.jpg" alt="">
                        <div class="caption">
                            <h3>Faber Luba #111 </h3>
                            <p>Price: Rs. 9000.00 </p>
<?php                                        
if (isset($_SESSION['id'])){
    if(check_if_added_to_cart(8)==0){ ?>
                            <p><a href="cart-to.php?id=8" role="button" class="btn btn-primary btn-block">Add to  cart</a></p>
<?php
    }
    else { ?>
                            <p><a href="cart-to.php" role="button" class="btn btn-primary btn-block disabled" disabled>Add to cart</a></p>
<?php
    }
}
else { ?>

                            <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>  
<?php                            
} ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row text-center" id="watches">
                
                <div class="col-md-3 col-sm-6 home-feature">
                    <div class="thumbnail" id="9">
                        <img src="img/18.jpg" alt="">
                        <div class="caption">
                            <h3>H&W </h3>
                            <p>Price: Rs. 800.00 </p>
<?php                                        
if (isset($_SESSION['id'])){
    if(check_if_added_to_cart(9)==0){ ?>
                            <p><a href="cart-to.php?id=9" role="button" class="btn btn-primary btn-block">Add to  cart</a></p>
<?php
    }
    else { ?>
                            <p><a href="cart-to.php" role="button" class="btn btn-primary btn-block disabled" disabled>Add to cart</a></p>
<?php
    }
}
else { ?>

                            <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>  
<?php                            
} ?>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 home-feature">
                    <div class="thumbnail" id="10">
                        <img src="img/19.jpg" alt="">
                        <div class="caption">
                            <h3>Luis Phil</h3>
                            <p>Price: Rs. 870.00 </p>
<?php                                        
if (isset($_SESSION['id'])){
    if(check_if_added_to_cart(10)==0){ ?>
                            <p><a href="cart-to.php?id=10" role="button" class="btn btn-primary btn-block">Add to  cart</a></p>
<?php
    }
    else { ?>
                            <p><a href="cart-to.php" role="button" class="btn btn-primary btn-block disabled" disabled>Add to cart</a></p>
<?php
    }
}
else { ?>

                            <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>  
<?php                            
} ?>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 home-feature">
                    <div class="thumbnail" id="11">
                        <img src="img/20.jpg" alt="">
                        <div class="caption">
                            <h3>John Zok</h3>
                            <p>Price: Rs. 2000.00 </p>
<?php                                        
if (isset($_SESSION['id'])){
    if(check_if_added_to_cart(11)==0){ ?>
                            <p><a href="cart-to.php?id=11" role="button" class="btn btn-primary btn-block">Add to  cart</a></p>
<?php
    }
    else { ?>
                            <p><a href="cart-to.php" role="button" class="btn btn-primary btn-block disabled" disabled>Add to cart</a></p>
<?php
    }
}
else { ?>

                            <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>  
<?php                            
} ?>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 home-feature">
                    <div class="thumbnail" id="12">
                        <img src="img/21.jpg" alt="">
                        <div class="caption">
                            <h3>Jhalsani </h3>
                            <p>Price: Rs. 1300.00 </p>
<?php                                        
if (isset($_SESSION['id'])){
    if(check_if_added_to_cart(12)==0){ ?>
                            <p><a href="cart-to.php?id=12" role="button" class="btn btn-primary btn-block">Add to  cart</a></p>
<?php
    }
    else { ?>
                            <p><a href="cart-to.php" role="button" class="btn btn-primary btn-block disabled" disabled>Add to cart</a></p>
<?php
    }
}
else { ?>

                            <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>  
<?php                            
} ?>
                        </div>
                    </div>
                </div>
            </div>
            
            <?php require 'footer.php'; ?>
        </body>
    </html>