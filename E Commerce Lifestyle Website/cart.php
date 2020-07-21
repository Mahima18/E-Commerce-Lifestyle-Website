<?php
   $con = mysqli_connect("localhost:3308","root","1234","store") 
   or die(mysqli_error($con));
   session_start();
   if (!isset($_SESSION['email'])) {
   header('location: home.php');
   }
?>

<!DOCTYPE html>
<html lang="en">
   <head>
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>Cart | Life Style Store</title>
      <link href="css/bootstrap.css" rel="stylesheet">
      <link href="css/style.css" rel="stylesheet">
      <script src="js/jquery.js"></script>
      <script src="js/bootstrap.min.js"></script>
      <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" type="text/css" rel="stylesheet">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.2/css/bootstrap.min.css" integrity="sha384-y3tfxAZXuh4HwSYylfB+J125MxIs6mR5FOHamPBG064zB+AFeWH94NdvaCBm8qnd" crossorigin="anonymous">
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
         <li><a href = "products.php">
				<span class = "glyphicon glyphicon-search"></span> Browse Products</a>
			</li>
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

   <div class="row decor_bg" style="min-height: 600px; padding-top: 80px">
      <div class="col-md-6 col-md-offset-3">
         <table class="table table-striped">
         <!--show table only if there are items added in the cart-->
         <?php
         $sum = 0;
         $id = '';
         $user_id = $_SESSION['user_id'];
         $query = "SELECT items.price AS Price, items.id, items.name AS Name FROM user_items JOIN items ON user_items.item_id = items.id WHERE user_items.user_id='$user_id' and status='Added to cart'";
         $result = mysqli_query($con, $query)or die($mysqli_error($con));
         if (mysqli_num_rows($result) >= 1) {
         ?>
         <thead>
         <tr>
            <th>Item Number</th>
            <th>Item Name</th>
            <th>Price</th>
            <th></th>
            </tr>
         </thead>
         <tbody>
         <?php
            while ($row = mysqli_fetch_array($result)) {
            $sum+= $row['Price'];
            $id .= $row['id'] . ", ";
            echo "<tr><td>" . "#" . $row['id'] . "</td><td>" . $row['Name'] . "</td><td>Rs " . $row['Price'] . "</td><td><a href='cart_remove.php?id={$row['id']}' class='remove_item_link'> Remove</a></td></tr>";
            }
            $id = rtrim($id, ", ");
            echo "<tr><td></td><td>Total</td><td>Rs " . $sum . "</td><td><a href='success.php?itemsid=" . $id . "' class='btn btn-primary'>Confirm Order</a></td></tr>";
            ?>
            </tbody>
            <?php
            } else {
            echo "Add items to the cart first!";
            }
            ?>
            <?php
                     ?>
         </table>
      </div>
   </div>
<!-- footer -->
      <?php include("includes/footer.php"); ?>

   </body>
</html>