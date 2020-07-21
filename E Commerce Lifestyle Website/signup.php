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
    <title>Sign Up Page</title>

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
					<span class = "glyphicon glyphicon-log-in"></span> Logout</a>
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

<!-- Panel for SignUp -->
<div style="min-height: 600px;">
<div class="container">
    <div class="row">
        <div class="col-xs-6 col-xs-offset-3">
            <div class="panel" >
                <div class="panel-body">
                    <h3><b>SIGN UP</b></h3>
                    <form method="post" action="signup_script.php">
                        <div class="form-group">
                            <input type="text" class="form-control"  placeholder="Name" name="name" required = "true">
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control"  placeholder="Email" name="email" required = "true" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$">
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" placeholder="Password" name="password" required = "true" pattern=".{5,}">
                        </div>
                        <div class="form-group">
                            <input type="number" class="form-control"  placeholder="Contact" name="contact" required = "true">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control"  placeholder="City" name="city" required = "true">
                        </div>
                        <div class="form-group">
                            <input type="Address" class="form-control"  placeholder="Address" name="address" required = "true">
                        </div>
                        <button type="submit" name="submit" class="btn btn-primary">Sign Up</button><br><br>
                    </form><br/>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<!-- End of panel -->
<?php include 'includes/footer.php'?>

</body>
</html>

