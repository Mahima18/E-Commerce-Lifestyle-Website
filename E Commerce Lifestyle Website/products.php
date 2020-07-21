<?php 
    $con = mysqli_connect("localhost:3308","root","1234","store") 
    or die(mysqli_error($con));
    session_start();
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
    <title>Our Products</title>
</head>

<body style="padding-top: 30px; font-family: Lato,Helvetica Neue,Helvetica,Arial,sans-serif; font-weight: 700;">
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

<?php include 'includes/check_if_added_to_cart.php'  ?>

<div class="container" style="padding-top: 50px;">
    <div class="jumbotron">
        <h1>Welcome to our Lifestyle Store!</h1>
        <p>We have the best cameras, watches and shirts for you. No need to hunt around, we have it all in one place. </p>
    </div>
    <!-- Defining row 1 -->
    <div class="row text-center" id="cameras">
        <!--Column 1-->
        <div class="col-md-3 col-sm-6">
            <div class="thumbnail">
                <img src="Img/5.jpg">
                <div class="caption">
                    <h3>Cannon EOS</h3>
                    <p>Price: Rs. 36000.00</p>
                    <?php if (!isset($_SESSION['email'])) { ?>
                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                    <?php } else {                                                             
                        if (check_if_added_to_cart(1)) {                                     
                            echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';  
                        } else {  ?>
                            <a href="cart-add.php?id=1" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                    <?php }} 
                    ?> 
                </div>
            </div>
        </div>
        <!-- End of col 1 -->

        <!-- Col 2 -->
        <div class="col-md-3 col-sm-6">
            <div class="thumbnail">
                <img src="Img/2.jpg">
                <div class="caption">
                    <h3>Sony DSLR</h3>
                    <p>Price: Rs. 40000.00</p>
                    <?php if (!isset($_SESSION['email'])) { ?>
                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                    <?php } else {                                                             
                        if (check_if_added_to_cart(2)) {                                     
                            echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';  
                        } else {  ?>
                            <a href="cart-add.php?id=2" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                    <?php }} 
                    ?> 
                </div>
            </div>
        </div>
        <!-- End of col 2 -->

        <!-- Col 3 -->
        <div class="col-md-3 col-sm-6">
            <div class="thumbnail">
                <img src="Img/3.jpg">
                <div class="caption">
                    <h3>Sony DSLR</h3>
                    <p>Price: Rs. 50000.00</p>
                    <?php if (!isset($_SESSION['email'])) { ?>
                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                    <?php } else {                                                             
                        if (check_if_added_to_cart(3)) {                                     
                            echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';  
                        } else {  ?>
                            <a href="cart-add.php?id=3" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                    <?php }} 
                    ?> 
                </div>
            </div>
        </div>
        <!-- End of col 3 -->

        <!-- Col 4 -->
        <div class="col-md-3 col-sm-6">
            <div class="thumbnail">
                <img src="Img/4.jpg">
                <div class="caption">
                    <h3>Olympus DSLR</h3>
                    <p>Price: Rs. 80000.00</p>
                    <?php if (!isset($_SESSION['email'])) { ?>
                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                    <?php } else {                                                             
                        if (check_if_added_to_cart(4)) {                                     
                            echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';  
                        } else {  ?>
                            <a href="cart-add.php?id=4" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                    <?php }} 
                    ?> 
                </div>
            </div>
        </div>
        <!-- End of col 4 -->
    </div>
    <!-- End of row 1 -->

    <!-- Defining row 2 -->
    <div class="row text-center" id="watches">
        <!--Column 1-->
        <div class="col-md-3 col-sm-6">
            <div class="thumbnail">
                <img src="Img/9.jpg">
                <div class="caption">
                    <h3>Titan Model #301</h3>
                    <p>Price: Rs. 13000.00</p>
                    <?php if (!isset($_SESSION['email'])) { ?>
                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                    <?php } else {                                                             
                        if (check_if_added_to_cart(5)) {                                     
                            echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';  
                        } else {  ?>
                            <a href="cart-add.php?id=5" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                    <?php }} 
                    ?> 
                </div>
            </div>
        </div>
        <!-- End of col 1 -->

        <!-- Col 2 -->
        <div class="col-md-3 col-sm-6">
            <div class="thumbnail">
                <img src="Img/10.jpg">
                <div class="caption">
                    <h3>Titan Model #301</h3>
                    <p>Price: Rs. 3000.00</p>
                    <?php if (!isset($_SESSION['email'])) { ?>
                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                    <?php } else {                                                             
                        if (check_if_added_to_cart(6)) {                                     
                            echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';  
                        } else {  ?>
                            <a href="cart-add.php?id=6" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                    <?php }} 
                    ?> 
                </div>
            </div>
        </div>
        <!-- End of col 2 -->

        <!-- Col 3 -->
        <div class="col-md-3 col-sm-6">
            <div class="thumbnail" href="#">
                <img src="Img/11.jpg">
                <div class="caption">
                    <h3>HMT Milan</h3>
                    <p>Price: Rs. 8000.00</p>
                    <?php if (!isset($_SESSION['email'])) { ?>
                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                    <?php } else {                                                             
                        if (check_if_added_to_cart(7)) {                                     
                            echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';  
                        } else {  ?>
                            <a href="cart-add.php?id=7" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                    <?php }} 
                    ?> 
                </div>
            </div>
        </div>
        <!-- End of col 3 -->

        <!-- Col 4 -->
        <div class="col-md-3 col-sm-6">
            <div class="thumbnail">
                <img src="Img/12.jpg">
                <div class="caption">
                    <h3>Faber Luba #111</h3>
                    <p>Price: Rs. 18000.00</p>
                    <?php if (!isset($_SESSION['email'])) { ?>
                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                    <?php } else {                                                             
                        if (check_if_added_to_cart(8)) {                                     
                            echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';  
                        } else {  ?>
                            <a href="cart-add.php?id=8" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                    <?php }} 
                    ?> 
                </div>
            </div>
        </div>
        <!-- End of col 4 -->

    </div>
    <!-- End of row 2 -->

    <!-- Defining row 3 -->
    <div class="row text-center" id="shirts">
        <!--Column 1-->
        <div class="col-md-3 col-sm-6">
            <div class="thumbnail">
                <img src="Img/8.jpg">
                <div class="caption">
                    <h3>H&W</h3>
                    <p>Price: Rs. 800.00</p>
                    <?php if (!isset($_SESSION['email'])) { ?>
                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                    <?php } else {                                                             
                        if (check_if_added_to_cart(9)) {                                     
                            echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';  
                        } else {  ?>
                            <a href="cart-add.php?id=9" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                    <?php }} 
                    ?> 
                </div>
            </div>
        </div>
        <!-- End of col 1 -->

        <!-- Col 2 -->
        <div class="col-md-3 col-sm-6">
            <div class="thumbnail">
                <img src="Img/6.jpg">
                <div class="caption">
                    <h3>Luis Phil</h3>
                    <p>Price: Rs. 1000.00</p>
                    <?php if (!isset($_SESSION['email'])) { ?>
                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                    <?php } else {                                                             
                        if (check_if_added_to_cart(10)) {                                     
                            echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';  
                        } else {  ?>
                            <a href="cart-add.php?id=10" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                    <?php }} 
                    ?> 
                </div>
            </div>
        </div>
        <!-- End of col 2 -->

        <!-- Col 3 -->
        <div class="col-md-3 col-sm-6">
            <div class="thumbnail">
                <img src="Img/13.jpg">
                <div class="caption">
                    <h3>John Zok</h3>
                    <p>Price: Rs. 1500.00</p>
                    <?php if (!isset($_SESSION['email'])) { ?>
                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                    <?php } else {                                                             
                        if (check_if_added_to_cart(11)) {                                     
                            echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';  
                        } else {  ?>
                            <a href="cart-add.php?id=11" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                    <?php }} 
                    ?> 
                </div>
            </div>
        </div>
        <!-- End of col 3 -->

        <!-- Col 4 -->
        <div class="col-md-3 col-sm-6">
            <div class="thumbnail">
                <img src="Img/14.jpg">
                <div class="caption">
                    <h3>Jhalsani</h3>
                    <p>Price: Rs. 1300.00</p>
                    <?php if (!isset($_SESSION['email'])) { ?>
                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                    <?php } else {                                                             
                        if (check_if_added_to_cart(12)) {                                     
                            echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';  
                        } else {  ?>
                            <a href="cart-add.php?id=12" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                    <?php }} 
                    ?> 
                </div>
            </div>
        </div>
        <!-- End of col 4 -->
    </div>
    <!-- End of row 3 -->
</div>

<?php include 'includes/footer.php'?>

</body>
</html>