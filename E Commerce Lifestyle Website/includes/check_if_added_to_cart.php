<?php 
    function check_if_added_to_cart($item_id){
        $con = mysqli_connect("localhost:3308","root","1234","store") 
        or die(mysqli_error($con));

        $user_id = $_SESSION['user_id'];

        $query = "SELECT * FROM user_items WHERE item_id='$item_id' && user_id ='$user_id' && status='Added to cart'";
        $result = mysqli_query($con, $query) or die(mysqli_error($con));
        $number_of_products_added = mysqli_num_rows($result);

        if($number_of_products_added >= 1)
        return 1;
        else 
        return 0;
    }
?>