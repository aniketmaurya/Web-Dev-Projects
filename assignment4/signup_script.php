<?php
require 'common.php';

$email= mysqli_escape_string($con, $_POST['email']);
$password= md5(mysqli_escape_string($con, $_POST['password']));
$name= mysqli_escape_string($con, $_POST['name']);
$contact= mysqli_escape_string($con, $_POST['contact']);
$city= mysqli_escape_string($con, $_POST['city']);
$address= mysqli_escape_string($con, $_POST['address']);
$_SESSION['name']=$name;


$duplicate_check_query= "SELECT id FROM users WHERE email='$email';";
$result_duplicate_check_query= mysqli_query($con,  $duplicate_check_query);

$row= mysqli_num_rows($result_duplicate_check_query);

if($row>0){
    echo 'Email already in use';
}
else{
    $insert_query= "INSERT INTO users (`name`,`email`,`password`,`contact`,`city`,`address`) VALUES ('$name','$email','$password','$contact','$city','$address');";
    $query_submit= mysqli_query($con, $insert_query)
            or die(mysqli_error($con));
    $_SESSION['email']=$email;
    $_SESSION['id']= mysqli_insert_id($con);
    header('location:products.php');
}

?>