<?php
require 'common.php';
if(!isset($_SESSION['email']))
{
    header('location:index.php');
}
 else {
    
    
    echo '<h3>Your order is confirmed. Thank you for shopping with us. <a href="products.php">Click here </a>to purchase any other item.</h3>';
    
}

?>