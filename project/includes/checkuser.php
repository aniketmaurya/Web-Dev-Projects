<?php
//returns true is already added
function check($id){
    require 'common.php';
    $query= "SELECT * FROM application WHERE internship_id='$id' AND email='$_SESSION[email]';";
    $result= mysqli_query($con, $query)
            or die(mysqli_error($con));
    $num_rows= mysqli_num_rows($result);
    if($num_rows>0) {
        return 1;       
    }
    else {
        return 0;          
    }
}
?>