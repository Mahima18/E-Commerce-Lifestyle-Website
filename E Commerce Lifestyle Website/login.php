<?php 
    $con = mysqli_connect("localhost:3308","root","1234","store") 
    or die(mysqli_error($con));
    session_start();
    if(isset($_SESSION['email'])){
        header('location:products.php');
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Login Page</title>

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

<!-- Panel for Login -->
<div style="min-height: 600px; padding-top: 80px">
<div class="container-fluid decor_bg">
    <div class="row">
        <div class="col-xs-6 col-xs-offset-3 col-md-4 col-md-offset-4">
            <div class="panel panel-primary">
                <!-- Panel header -->
                <div class="panel-heading">
                    <h4>LOGIN</h4>
                </div>
                <div class="panel-body">
                    <p class="text-warning">Login to make a purchase</p>
                    <form method="post" action="login_submit.php">
                        <div class="form-group">
                            <input type="email" class="form-control"  placeholder="Email" name="email" required = "true">
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" placeholder="Password" name="password" required = "true">
                            <div><?php 
                                  if(isset($_GET['password_error'])){
                                    echo $_GET['password_error'];}
                                 ?>
                            </div>
                        </div>
                        <button type="submit" name="submit" class="btn btn-primary">Login</button><br><br>
                    </form><br/>
                </div>
                <!-- Panel Footer -->
                <div class="panel-footer"><p>Don't have an account? <a href="signup.php">Register</a></p></div>
            </div>
        </div>
    </div>
</div>
</div>
<!-- End of panel -->
<?php include 'includes/footer.php'?>

</body>
</html>