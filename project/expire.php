<?php
function expired($id){
    require 'common.php';
    $today = date("Y-m-d");
    $query= "SELECT * FROM internships WHERE id='$id'";
    $result= mysqli_query($con, $query)
            or die(mysqli_errno($con));
    $row= mysqli_num_rows($result);
    $array= mysqli_fetch_array($result);
    if($today>$array['apply_by']){
        return TRUE;
    }
    else {
    return FALSE;
    }
} 
?>