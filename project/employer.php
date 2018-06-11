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
        <?php require 'header.php'; ?>
        <div style="margin-top: 20px;padding:1%;">
            <div class="container">
                <form method="get" action="create_internship_script.php">
                    <div class="col-xs-8 col-md-3 ">
                        <div class="panel panel-default">
                            <div class="panel-heading"><h4>City</h4></div>
                            <div class="panel-body">
                                <div class="form-group-sm"><input type="radio" name="city" value="Delhi" checked> <label>Delhi</label> </div>
                                <div class="form-group-sm"> <input type="radio" name="city" value="Bangalore"> <label> Bangalore </label> </div>
                                <div class="form-group-sm"> <input type="radio" name="city" value="Hyderabad"> <label> Hyderabad </label> </div>
                                <div class="form-group-sm"> <input type="radio" name="city" value="Mumbai"> <label> Mumbai </label> </div>
                                <div class="form-group-sm"> <input type="radio" name="city" value="Chennai"> <label> Chennai </label> </div>
                                <div class="form-group-sm"> <input type="radio" name="city" value="Kolkata"> <label> Kolkata </label> </div>
                                <div class="form-group-sm"> <input type="radio" name="city" value="Virtual"> <label> Work from home </label> </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-offset-1 col-md-8 col-xs-12">
                        <div class="panel panel-primary">
                            <div class="panel-heading"><h2><center>Hire Now!</center></h2></div>
                            <div class="panel-body">
                                <div class="form-group">
                                    <input class="form-control" type="text" name="company" placeholder="Company Name">
                                </div>
                                <div class="form-group">
                                    <textarea name="description" maxlength="250" class="form-control" rows="8" cols="50" placeholder="Description..."></textarea>
                                </div>
                                <div class="row">
                                    <div class="col-sm-4 form-group"><h5>Stipend</h5><input name="stipend" class="form-control"type="text" placeholder="Ex. 5000 RS"></div>
                                    <div class="col-sm-4 form-group"><h5>Duration</h5><input name="duration" class="form-control"type="text" placeholder="Ex. 6 months"></div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-4 form-group"><h5>Start date</h5><input class="form-control" required name="start_date" type="date"> </div>
                                    <div class="col-sm-4 form-group"> <h5>Apply By</h5><input class="form-control" required name="apply_by" type="date"></div>
                                </div>
                                <div>
                                    <input type="submit" value="Hire" class="h3 btn btn-primary">
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div><hr>
        <?php         require 'footer.php'; ?>
        
    </body>
</html>