<?php
require 'common.php';
if(isset($_SESSION['id']))
{?>
<html>
    <title>Lifestyle Store</title>
        meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
        <script src="js/jquery.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <body>
<?php
    require 'includes/header.php'; ?>
        
        <div class="row decor_bg">
                <div class="col-md-6 col-md-offset-3">
                    <table class="table table-striped" >
                        <thead>
                            <tr>
                                <th>Item Number</th>
                                <th>Item Name</th>
                                <th>Price</th>
                                <th></th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
        
        
<?php
$sum=0;
$n=0;
$query= "SELECT * FROM user_items INNER JOIN products ON user_items.item_id=products.id WHERE user_id='$_SESSION[id]';";
$query_result= mysqli_query($con, $query);

$row= mysqli_num_rows($query_result);
if($row==0)
{
    echo '<br><h2>Add items to  cart first</h2>';
    header('location:products.php?error=add_item_first');
} 
else {
    while($result_array= mysqli_fetch_array($query_result)){
        $sum=$sum+$result_array['price'];
        $n++;
        $id=array();
       // $id[$j]=$result_array['item_id'];
        array_push($id, $result_array['item_id'] );
?>
                            
                            <tr>
                                <td><?php echo $n; ?></td>
                                <td><?php echo $result_array['name']; ?></td>
                                <td><?php echo $result_array['price']; ?></td>
                                <td><a href="cart-remove.php?id=<?php echo $result_array['item_id']; ?>" class="remove_item_link">Remove</a></td>
                            </tr>
<?php
}} ?>
                            <tr>
                                <td></td><td>Total</td><td>Rs.<?php echo $sum; ?> </td>
                                <td><a href="success.php?id=<?php ?>" class="btn btn-primary">Confirm Order</a></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </body>
    <?php
    
}
 else
{
     echo '<h2>Please login</h2><br><a href="login.php">LOGIN</a>';
}
?>