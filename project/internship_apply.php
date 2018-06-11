<?php
require 'common.php';
session_start();
$id= $_GET['id'];
$query= "INSERT INTO application(email, internship_id) values('$_SESSION[email]', '$id');";
$result= mysqli_query($con, $query)
        or die(mysqli_error($con));
header('location:student.php');
?>