<?php 
    $con = mysqli_connect("localhost:3308","root","1234","store") 
    or die(mysqli_error($con));
    session_start();

    $item_id = $_GET['id'];
    $user_id = $_SESSION['user_id'];
    echo $user_id."<br>";
    $query = "INSERT INTO user_items(user_id, item_id, status) VALUES('$user_id', '$item_id', 'Added to cart')";
    echo $query;
    $result = mysqli_query($con, $query) or die(mysqli_error($con));
    header('location:products.php');
    
?>
