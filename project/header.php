<header>
    <nav class="navbar-default" style="height: 80px;padding: 0px 0px 100px 0px; color: gainsboro;">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>                        
                    </button>
                    <a class="navbar-brand" href="index.php"><img id="logo" class="img-responsive" src="img/logo.png"></a>
                </div>
                <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="nav navbar-nav navbar-right " style="margin-top: 25px;">
                <?php
                    if(isset($_SESSION['email']))
                    {
                        if($_SESSION['type']=="Employer")
                        {
                       
                    ?>
                    <li><a href="applications.php"> Applications</a></li>
                    <li><a href="settings.php"><span class="glyphicon glyphicon-wrench"></span>  Settings</a></li>
                    <li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span>  Logout</a></li>
                    <?php }
                    else if($_SESSION['type']=="Student")
                    { ?>
                    <li><a href="internship.php">  Internships</a></li>
                    <li><a href="student.php">  Dashboard</a></li>
                    <li><a href="settings.php"><span class="glyphicon glyphicon-wrench"></span>  Settings</a></li>
                    <li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span>  Logout</a></li>
                    <?php
                    }}
                     else
                    { ?>
                    <li><a href="internship.php">  INTERNSHIPS </a></li>
                    <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login </a></li>
                    <li><a href="register.php"><span class="glyphicon glyphicon-user"></span> Sign Up </a></li>
                    <?php }?>
                </ul>
            </div>
        </div>
    </nav>
</header>