<?php 
    $con = mysqli_connect("localhost:3308","root","1234","store") 
    or die(mysqli_error($con));
    session_start();
    if(!isset($_SESSION['email'])){
        header('location:home.php');
    }

    $newpassword = $_POST['newpassword'];
    $retypedpass = $_POST['new_password'];
    $oldpassword = $_POST['oldpassword'];
    $email = $_SESSION['email'];

    $query = "SELECT password FROM users WHERE email = '$email'";
    $oldpasswordInDb = mysqli_query($con, $query) or die(mysqli_error($con));

    if($oldpassword != $oldpasswordInDb){
        header('location:settings.php');
    }

    if(strcmp($newpassword, $retypedpass) == 0){    
        $query = "UPDATE users SET password = '$newpassword' WHERE email = '$email'";
        $newpassword_in_db = mysqli_query($con, $query) or die(mysqli_error($con)); 
        }
    else{
        header('location:settings.php');
    }

?>