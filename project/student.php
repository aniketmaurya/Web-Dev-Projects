<?php
require 'common.php';
session_start();
if(isset($_SESSION['id']))
{
    if($_SESSION['type']=="Employer")
    {
        header('location:employer.php');
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
        <?php require 'header.php'; ?>
        <div style="padding: 50px 0px 70px 0px;"><div class="container">
            
            <div class="col-sm-8">
                <div class="container">
                    <table class="table table-responsive table-striped">
                        <tbody>
                            <tr>
                                <th><h3>S.No</h3></th><th><h3>Company</h3></th><th><h3>Stipend</h3></th><th><h3>Duration</h3></th>
                            </tr>
<?php
$query= "SELECT email, stipend, duration, company FROM internships i INNER JOIN application a ON i.id=a.internship_id  WHERE a.email='$_SESSION[email]'";
$result= mysqli_query($con, $query);
$i=1;
while ($row=mysqli_fetch_array($result))
{ ?>
                            <tr>
                                <td><?php echo $i;?></td><td><?php echo $row['company'] ;?></td><td><?php echo $row['stipend'] ;?></td><td><?php echo $row['duration'] ;?></td>
                            </tr>
<?php $i++;
} ?>  
                            
                        </tbody>
                    </table>
                </div>
            </div>
            </div> </div><?php         require 'footer.php'; ?>
    </body>
</html>