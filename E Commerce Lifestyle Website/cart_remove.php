<?php
    $con = mysqli_connect("localhost:3308","root","1234","store") 
    or die(mysqli_error($con));
    session_start();

    $user_id = $_SESSION['user_id'];
    $item_id = $_GET['id'];

    $query = "DELETE FROM user_items WHERE user_id = '$user_id' && item_id = '$item_id'";
    $result = mysqli_query($con, $query) or die(mysqli_error($con));
    header('location: cart.php');
?>