<?php
require 'common.php';
session_start();
$city= $_GET['city'];
$company= mysqli_escape_string($con, $_GET['company']);
$description= mysqli_escape_string($con, $_GET['description']);
$start_date= $_GET['start_date'];
$apply_by= $_GET['apply_by'];
$stipend= $_GET['stipend'];
$duration= $_GET['duration'];
$employer_email= $_SESSION['email'];

$query= "INSERT INTO internships (company, city, description, start_date, apply_by,stipend, duration,employer_email) VALUES ('$company', '$city', '$description', '$start_date', '$apply_by', '$stipend', '$duration','$employer_email');";
$result= mysqli_query($con, $query)
        or die(mysqli_error($con));
echo "Sucessfully Posted";

?>