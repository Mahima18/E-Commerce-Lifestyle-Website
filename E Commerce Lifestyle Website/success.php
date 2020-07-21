<?php
    $con = mysqli_connect("localhost:3308","root","1234","store") 
    or die(mysqli_error($con));
    session_start();
    // if(!isset($_SESSION['email'])){
    //     header('location:home.php');
    // }
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta name="viewport" content="width = device-width, initial-scale = 1">
        <title>Success | Life Style Store</title>
        <link href="css/bootstrap.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">
    </head>
<body style="padding-top: 50px; font-family: Lato,Helvetica Neue,Helvetica,Arial,sans-serif; font-weight: 700;">

<!-- Navbar -->
<div class="navbar navbar-inverse navbar-fixed-top">
	    <div class="container">
		    <div class="navbar-header">
			    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
				    <span class="icon-bar"></span>
				    <span class="icon-bar"></span>
				    <span class="icon-bar"></span>
			    </button>
			    <a class="navbar-brand" href="home.php">Lifestyle Store</a>
		    </div>

		<div class="collapse navbar-collapse" id="myNavbar">
			<ul class="nav navbar-nav navbar-right">
            <?php if(isset($_SESSION['email'])) { ?>
				<li><a href = "cart.php">
                    <span class = "glyphicon glyphicon-shopping-cart"></span> Cart </a>
				</li>
				<li><a href = "settings.php">
					<span class = "glyphicon glyphicon-user"></span> Settings</a>
				</li>
				<li><a href = "logout_script.php">
					<span class = "glyphicon glyphicon-login"></span> Logout</a>
				</li>             
            <?php } else { ?>
                <li><a href="signup.php">
                    <span class="glyphicon glyphicon-user"></span> Sign Up</a>
                </li>
                <li><a href="login.php">
                    <span class="glyphicon glyphicon-log-in"></span> Login</a>
                </li>
            <?php }  ?> 
            </ul>
        </div>
        </div>
</div> 

<!-- Success Message -->
        <div class="container-fluid" style="padding-top:30px; min-height: 600px;">
            <div class="col-md-10 col-md-offset-1">
                <div class="jumbotron">
                    <h3 align="center">Your order is confirmed. Thank you for shopping with us.</h3>
                    <p align="center">Click <a href="products.php">here</a> to purchase any other item.</p>
                </div>
            </div>
        </div>

<!-- Footer -->
        <?php include 'includes/footer.php'?>
    </body>
</html>