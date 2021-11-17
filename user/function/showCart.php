<?php
session_start();
include('../../config/db_peri.php');
include ('../../config/toJSON.php');


if(isset($_SESSION["customerID"])){
    $customerID = $_SESSION["customerID"];

    // get all cart data from the database
    // item in cart
    $sql = "SELECT * FROM orders
            LEFT JOIN product ON orders.product_id = product.product_id
            WHERE orders.cust_id='$customerID' AND orders.order_status='cart'";
    $userCart = toJSON($conn, $sql);

    $_SESSION['user_order_cart'] = $userCart;
    

    /*echo json_encode($userCart);*/
}else{
    $_SESSION["cart_show_login_first"] = true;
}


header("Location: ../cart.php");
?>