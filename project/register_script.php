<?php
require 'common.php';
$email= mysqli_real_escape_string($con, $_POST['email']);
$password= md5(mysqli_real_escape_string($con, $_POST['password']));
$contact= $_POST['contact'];
$type= $_POST['type'];
$name= mysqli_real_escape_string($con, $_POST['name']);
$search= "SELECT * FROM users WHERE email='$email';";

$search_result= mysqli_query($con, $search)
        or die(mysqli_error($con));
$search_row= mysqli_num_rows($search_result);

if($search_row!=0) {
    echo 'user email already registered';
}
 else {

    $query= "INSERT INTO `users`(`email`, `name`, `password`, `contact`, `type`) VALUES ('$email', '$name', '$password', '$contact', '$type')";
    $result= mysqli_query($con, $query)
            or die(mysqli_error($con));
    header('location:login.php?login_first');
 }
?>