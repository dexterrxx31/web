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
    <link href="root/css/6.css" rel="stylesheet" type="text/css" />
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
                    <li><a href="cart.php"><span class="glyphicon glyphicon-shopping-cart"></span>Cart</a></li>
                    <li><a href="setting.php"><span class="glyphicon glyphicon-user"></span>Setting</a></li>
                    <li><a href="#"><span class="glyphicon glyphicon-log-in"></span>Logout</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="col-xs-4 col-xs-offset-4" style="padding-top: 80px;">
        <h3>Change Password</h3>
        <form class="form-group">
            <input type="text" name="Old Password" placeholder="Old Password" class="form-control"><br>
            <input type="text" name="New Password" placeholder="New Password" class="form-control"><br>
            <input type="text" name="Re-type New Password" placeholder="Re-type New Password" class="form-control">
        </form>
        <button type="button" class="btn btn-primary">Change</button>
    </div>
    <footer>
        <div class="container ">
            <center>
                Copyright © Lifestyle Store. All Rights Reserved” and “Contact Us: +91 90000 00000
            </center>
        </div>
    </footer>
</body>

</html>