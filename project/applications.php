<?php
require 'common.php';
session_start();
if(isset($_SESSION['id']))
{
    if($_SESSION['type']=="Student")
    {
        header('location:student.php');
    }
}
if(!isset($_SESSION['id']))
{
    header('location:index.php');
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Internship | Summer Internship | Summer Training | Winter Training</title>
        <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
        <script type="text/javascript" src="js/jquery.js"></script>
        <script type="text/javascript" src="js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="css/style.css" type="text/css">
    </head>
    <body>
        <?php        require 'header.php'; ?>
        
        <div style="padding: 50px 0px 70px 0px;"><div class="container">
            
            <div class="col-sm-8">
                <div class="container">
                    <table class="table table-responsive table-striped">
                        <tbody>
                            <tr>
                                <th><h3>S.No</h3></th><th><h3>Email</h3></th><th></th><th></th>
                            </tr>
<?php
$query= "SELECT u.name, u.email, u.contact FROM users u INNER JOIN application a ON u.email=a.email INNER JOIN internships i ON i.id=a.internship_id WHERE i.employer_email='$_SESSION[email]'";
$result= mysqli_query($con, $query);
$i=1;
while ($row=mysqli_fetch_array($result))
{ ?>
                            <tr>
                                <td><?php echo $i;?></td><td><?php echo $row['name'] ;?></td><td><?php echo $row['email'] ;?></td><td><?php echo $row['contact'] ;?></td>
                            </tr>
<?php $i++;
} ?>  
                            
                        </tbody>
                    </table>
                </div>
            </div>
            </div> </div>
                
                
        <?php         require 'footer.php'; ?>
        
    </body>
</html>