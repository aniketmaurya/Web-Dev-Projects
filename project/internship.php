<?php
require 'common.php';
session_start();
if(isset($_SESSION['email']))
{
    if($_SESSION['type']=="Employer")
    {
        header('location:employer.php?err');
    }
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
        <?php require 'header.php'; 
        require 'includes/checkuser.php';
        require 'expire.php';?>
        <div class="container">
            
            <div class="col-sm-8">
                <div class="container">
                    <table class="table table-condensed">
                        <tbody>
<?php
$query= "SELECT * FROM internships";
$result= mysqli_query($con, $query);
while ($row=mysqli_fetch_array($result))
{ if(!expired($row['id'])){ ?>
                            <tr><td>
                                <div><a style="color: skyblue;"><h3><?php echo $row['company'];?></h3></a></div>
                            
                                <div><mark>Location: <?php     echo $row['city']; ?></mark></div>
                                <div class="container" style="padding: 20px 0px 10px 0px;">
                                    <div class="col-sm-3">
                                        Start Date: <?php echo $row["start_date"];?>
                                    </div>
                                    <div class="col-sm-3">
                                        Duration: <?php echo $row['duration'];?>
                                    </div>
                                    <div class="col-sm-3">
                                        Stipend: <?php echo $row['stipend'];?>
                                    </div>
                                    <div class="col-sm-3">
                                        Apply By: <?php echo $row['apply_by'];?>
                                    </div>
                                </div><br>
<?php
if(isset($_SESSION['email'])){
if(!check($row['id'])){ ?>
                                    <div style="float: right;margin-right: 50px;" class="form-group"><a type="button" href="internship_apply.php?id=<?php echo $row['id']; ?>" class="btn btn-primary">Apply Now</a></div>
<?php }?>
<?php
 if(check($row['id'])) {?>
                                    <div style="float: right;margin-right: 50px;" class="form-group"><a type="button" href="internship_apply.php?id=<?php echo $row['id']; ?>" class="btn btn-primary disabled">Already Applied</a></div>

<?php }} 
else{ ?>
                                    <div style="float: right;margin-right: 50px;" class="form-group"><a type="button" href="login.php?loginfirst" class="btn btn-primary">Apply Now</a></div>

<?php }
?>
                            
<?php }

} ?>  
                            
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <?php require 'footer.php';?>
    </body>
</html>