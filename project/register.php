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
        <?php  require 'header.php'; ?>
        <div class="container" style="margin-top: 70px;">
                <div class="col-sm-8 col-sm-offset-2">
            <div class="panel panel-primary">
                
                    <div class="panel-heading">
                        <h1>REGISTER</h1>
                    </div>
                    <div class="panel-body">
                        <form method="post" action="register_script.php"><br>
                            <div class="form-group"><input class="form-control" name="name" placeholder="Full Name" type="text" required=""></div>
                            <div class="form-group"><input class="form-control" name="email" placeholder="Email" type="email" required=""></div>
                            <div class="form-group"><input class="form-control" name="password" placeholder="Password" type="password"></div>
                            <div class="form-group"><input class="form-control" name="contact" placeholder="10 Digit Contact No. (9999999999)" pattern="\d{2}\d{4}\d{4}" type="tel"></div>
                            <div class="form-group">
                                I'm a/an<br>
                                <select class="btn btn-default btn-toolbar" name="type">
                                    <option>Student</option>
                                    <option>Employer</option>
                                </select>
                            </div>
                            <div class="form-group"><input class="btn btn-primary" type="Submit" value="Submit"></div></form>
                        
                    </div>
                    <div class="panel-footer">
                       
                       <center>© Copyright 2017 Internshala | All rights reserved.</center>
                    </div>
                        
            </div>
            </div>
            </div>
    </body>
</html>
