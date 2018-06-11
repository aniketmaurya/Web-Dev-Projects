<?php
    require 'common.php';

$email= mysqli_escape_string($con , $_POST['email']);
$password= md5(mysqli_escape_string($con , $_POST['password']));


$query= "SELECT * FROM `ecommerce`.`users` WHERE email='$email' AND password='$password'";
$query_result= mysqli_query($con, $query)
        or die(mysqli_error($con));

$user_array= mysqli_fetch_array($query_result);
$row= mysqli_num_rows($query_result);

if($row==0)
{   
    echo ' You entered Wrong details, Please login again';

}

else
{
   
    $_SESSION['email']=$email;
    $_SESSION['password']=$password;
    $_SESSION['id']=$user_array['id'];
    header('location: products.php');
    
}
?>