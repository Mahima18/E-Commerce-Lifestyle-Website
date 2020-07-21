<? php 
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
    <title>Lifestyle Store</title>
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
                    <span class = "glyphicon glyphicon-shopping-cart"></span> Cart</a>
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

    <div class="content">
    <!-- Banner Image and Content -->
        <div class="banner_image">
            <div class="container">
              <center>
                <div class="banner_content" style="position: relative; padding-top: 6%; padding-bottom: 6%; margin-top: 12%; margin-bottom: 12%; ">
                    <h1>We sell lifestyle.</h1>
                    <p>Flat 40% off on premium brands</p><br>
                    <a href="products.php" class="btn btn-danger btn-lg active">Shop Now</a>
                </div>
              </center>
            </div>
        </div>
            <!--Item categories listing-->
            <div class="container">
                <div class="row text-center" style="padding-top: 50px;">
                    <div class="col-sm-4">
                        <a href="products.php#cameras" >
                            <div class="thumbnail">
                                <img src="img/1.jpg" alt="">
                                <div class="caption">
                                    <h3>Cameras</h3>
                                    <p>Choose among the best available in the world.</p>
                                </div>
                            </div> 
                        </a>
                    </div>

                    <div class="col-sm-4">
                        <a href="products.php#watches" >
                            <div class="thumbnail">
                                <img src="img/7.jpg" alt="">
                                <div class="caption">
                                    <h3>Watches</h3>
                                    <p>Original watches from the best brands.</p>
                                </div>
                            </div> 
                        </a>
                    </div>

                    <div class="col-sm-4">
                        <a href="products.php#shirts" >
                            <div class="thumbnail">
                                <img src="img/8.jpg" alt="">
                                <div class="caption">
                                    <h3>Shirts</h3>
                                    <p>Our exquisite collection of shirts.</p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <!--Item categories listing end-->
        </div>
<!-- Footer -->
    <?php include 'includes/footer.php'?>

</body>
</html>