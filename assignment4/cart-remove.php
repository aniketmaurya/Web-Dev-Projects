<?php
require 'common.php';
$item_id= $_GET['id'];
$query= "DELETE FROM user_items WHERE item_id='$item_id';";
$result= mysqli_query($con, $query)
        or die(mysqli_error($con));
header('location:cart.php');
?>