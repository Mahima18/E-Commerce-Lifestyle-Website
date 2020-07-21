<?php 
    $con = mysqli_connect("localhost:3308","root","1234","store") 
    or die(mysqli_error($con));
    session_start();
    
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $regex_email = "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/";
    if (!preg_match($regex_email, $email)) {
        header('location: login.php?email_error=enter correct email');
    }

    $password = mysqli_real_escape_string($con,$_POST['password']);
    if (strlen($password) < 5) {
        header('location: login.php?password_error=enter correct password');
    }

    $query = "SELECT id, email FROM users WHERE email = '$email' && password = '$password'";
    $result = mysqli_query($con, $query) or die(mysqli_error($con));
    $number_of_users = mysqli_num_rows($result); 

    if($number_of_users != 0){
        $row = mysqli_fetch_array($result);
        $_SESSION['email'] = $row[1];
        $_SESSION['user_id'] = $row[0];
        header('location:products.php');
    }
    else{
        $error = "<span class='red'>Invalid Credentials</span>";
        header('location:login.php?message='.$error);
    }
?>

