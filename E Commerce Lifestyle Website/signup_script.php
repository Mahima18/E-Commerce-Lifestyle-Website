<?php
    $con = mysqli_connect("localhost:3308","root","1234","store") 
    or die(mysqli_error($con));
    session_start();

    $name = mysqli_real_escape_string($con, $_POST['name']);
    $regex_name = "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/";
    if (!preg_match($regex_name, $name)) {
        header('location: signup.php?name_error=enter correct name');
    }

    $email = mysqli_real_escape_string($con, $_POST['email']);
    $regex_email = "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/";
    if (!preg_match($regex_email, $email)) {
        header('location: signup.php?email_error=enter correct email');
    }

    $password = mysqli_real_escape_string($con, $_POST['password']);
    if (strlen($password) < 5) {
        header('location: signup.php?password_error=enter correct password');
    }
    $contact = $_POST['contact'];
    $city = mysqli_real_escape_string($con, $_POST['city']);
    $address = mysqli_real_escape_string($con, $_POST['address']);

    $query = "SELECT id FROM users WHERE email = '$email'";
    $result = mysqli_query($con, $query) or die(mysqli_error($con));
    $number_of_users = mysqli_num_rows($result); 

    if($number_of_users > 0){
        $error = "<span class='red'>Email Already Exists. Please login to continue. </span>"
        header('location:signup.php?message='.$error);
    }
    else{
        $query = "INSERT into users(name, email, password, contact, city, address) values ('$name','$email','$password','$contact','$city','$address')";
        $result = mysqli_query($con, $query) or die(mysqli_error($con));
        $pid = mysqli_insert_id($con);
        $_SESSION['email'] = $email;
        $_SESSION['user_id'] = $pid;
        header('location:products.php');
    }

?>