<?php
require 'common.php';
$item_id= $_GET['id'];

$query= "INSERT INTO user_items (user_id, item_id, status) VALUES ('$_SESSION[id]', '$item_id', 'Added to cart')";
$query_result= mysqli_query($con, $query)
        or die(mysqli_error($con));

header('location:products.php');
?>