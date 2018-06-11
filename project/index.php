<?php

require 'common.php';
session_start();
if(isset($_SESSION['email']))
{
    if($_SESSION['type']=="Student")
    {
        header('location:student.php');
    }
    else if($_SESSION['type']=="Employer")
    {
        header('location:employer.php');
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
        <?php require 'header.php'; ?>
        <div id="content">
            <div id="banner_image">
                <div class="container">
                <center>
                    <div id="banner_content">
                        <span class="h1">Get ahead.</span><span style="font-weight: bold;" class="h1">Get an internship!</span>
                        <div>
                            <form style="padding:20px;" method="get" action="internship.php">
                                <div class="form-group"><input class="form-control" type="search"name="search" placeholder="Search" style="border:0.2px solid; border-radius:0px;height: 45px;max-width:550px;"></div>
                            </form>
                        </div>
                    </div>
                </center>
                </div>
            </div>
        </div>
        
        <?php require 'footer.php'; ?>
    </body>
</html>