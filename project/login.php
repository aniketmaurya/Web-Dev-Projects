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
                        <h1>LOGIN</h1>
                    </div>
                    <div class="panel-body">
                        <form method="post" action="login_script.php"><br>
                            <div class="form-group"><input class="form-control" name="email" placeholder="Email" type="email" required=""></div>
                            <div class="form-group"><input class="form-control" name="password" placeholder="Password" type="password"></div><br>
                            <div class="form-group"><input class="btn btn-primary" type="Submit" value="Submit"></div>
                          </form>  
                    </div>
                    <div class="panel-footer">
                       
                       <center>© Copyright 2017 Internshala | All rights reserved.</center>
                    </div>
                        
            </div>
            </div>
            </div>

        
        <?php //require 'footer.php'; ?>
    </body>
</html>
