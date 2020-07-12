<!DOCTYPE html>
<!--Bootstrap-->
<html>

<head>
    <title>###</title>
    <!-- Latest compiled and minified CSS -->

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link href="root/css/2.css" rel="stylesheet" type="text/css" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
    <nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
            </button>

                <a href="index.php" class="navbar-brand"><b>Lifestyle Store</b></a>
            </div>
            <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="signup.php"><span class="glyphicon glyphicon-user"></span>SignUp</a></li>
                    <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span>Login</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container">
        <div class="row row_style">
            <div class="col-xs-6 col-xs-offset-3">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h4>Login</h4>
                    </div>
                    <div class="panel-body">
                        <p class="text-warning"><em><strong>Login to make a purchase</strong></em></p>
                        <form class="form-group">
                            <input type="text" name="Email" placeholder="Email" class="form-control"><br>
                            <input type="text" name="Password" placeholder="Password" class="form-control"><br>
                            <a href="#"><button class=" btn btn-primary active">Login</button></a>
                        </form>

                    </div>
                    <div class="panel-footer">
                        <p>Don't have an account? <a href="signup.php" id="Register1">Register</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <footer>
        <div class="container">
            <center>
                Copyright © Lifestyle Store. All Rights Reserved” and “Contact Us: +91 90000 00000
            </center>
        </div>
    </footer>
</body>

</html>