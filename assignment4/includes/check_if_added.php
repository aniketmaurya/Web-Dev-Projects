<?php
    function check_if_added_to_cart($item_id)
    {
        $con= mysqli_connect("localhost", "root", "", "ecommerce")
        or die(mysqli_error($con));
        $user_id= $_SESSION['id'];
        
        $query= "SELECT * FROM user_items WHERE user_id='$user_id' AND item_id='$item_id';";
        $query_result= mysqli_query($con, $query)
                or die(mysqli_error($con));
        $row= mysqli_num_rows($query_result);
        if($row>0) {
            return 1;
        }
         else {
             return 0;
             
         }
    }
    ?>