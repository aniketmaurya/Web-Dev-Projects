<?php
require 'common.php';
$email= mysqli_real_escape_string($con, $_POST['email']);
$password= md5(mysqli_real_escape_string($con, $_POST['password']));
$query= "SELECT `id`,`email`,`name`,`password`,`type` FROM `users` WHERE email='$email' AND password='$password'";
$result= mysqli_query($con, $query)
        or die(mysqli_error($con));
$num_rows= mysqli_num_rows($result);
$array= mysqli_fetch_array($result);
if($num_rows==0)
{
    header("location:login.php?login_err");
}
else
{
    session_start();
    $_SESSION['id']= mysqli_insert_id($con);
    $_SESSION['email']=$email;
    if($array['type']=="Student"){
        $_SESSION['type']="Student";
    }
 else if($array['type']=="Employer"){
        $_SESSION['type']="Employer";
    }
    header('location:index.php');
}


?>