<?php
require 'common.php';
if(!isset($_SESSION['email'])){
    header('location:index.php');
}

$oldpassword= ($_POST['oldpassword']);
$newpassword= ($_POST['newpassword']);
$r_newpassword= ($_POST['r_newpassword']);

if(($newpassword != $r_newpassword)||(strlen($newpassword)<5)){
    header('location:settings.php?error=both passwords not matching');
}
 else {
    
$oldpassword= md5($_POST['oldpassword']);
$newpassword= md5($_POST['newpassword']);
$r_newpassword= md5($_POST['r_newpassword']);

$query= "SELECT * FROM users WHERE id=$_SESSION[id] AND password='$oldpassword';";
$result= mysqli_query($con, $query);
$row= mysqli_num_rows($result);
if($row<0){
    header('location:settings.php?error=password  entered  is wrong');
}
else{
    $update= "UPDATE users SET password='$newpassword';";
    $submit_update= mysqli_query($con, $update);
    $row_update= mysqli_num_rows($submit_update);
    if($row_update<0){
        echo '<h2>Dear '.$_SESSION['name'].' there is an error.<br>Sorry for the inconviniance';
    }
    else{
        header('location:index.php?msg=password updated');
    }
 }}
?>