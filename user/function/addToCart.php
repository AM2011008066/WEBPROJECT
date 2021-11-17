<?php
session_start();
include('../../config/db_peri.php');
include ('../../config/toJSON.php');

global $conn;

if(isset($_POST['add_to_cart'])) {

    // product id
    $productID = $_POST['add_to_cart'];

    $customerID = 0;
    if(isset($_SESSION["customerID"])){
        $customerID = $_SESSION["customerID"];
    }
   
    $orderStatus = 'cart';

    // Search for the database,
    // in the [ order ] table, whether the item is in the user cart
    $sql = "SELECT * FROM orders WHERE product_id='$productID' AND cust_id = '$customerID' AND order_status='$orderStatus'";
    $productArray = toJSON($conn, $sql);

  

    if($customerID != 0){
        // if item already exist in cart and not bought yet
        if (!empty($productArray)) {

            $orderID = $productArray[0]["order_id"];
            $orderQuantity = $productArray[0]["order_quantity"] +1;

            $sql = "UPDATE orders SET order_quantity='$orderQuantity' WHERE order_id ='$orderID'";

            if(mysqli_query($conn, $sql)){
                $_SESSION["addToCart_success"] = true;
                header("Location: ../index.php");
            }

        // if the selected item is not in cart
        }else{
            $sql = "INSERT INTO orders (cust_id, product_id, order_quantity, order_status)
                    VALUES ('$customerID', '$productID', 1, '$orderStatus')";

            if(mysqli_query($conn, $sql)){
                $_SESSION["addToCart_success"] = true;
                header("Location: ../index.php");
            } else{
                // fail
                $_SESSION["addToCart_error"] = true;
                header("Location: ../index.php");
            }
        }
    }
    // if user has not logged in yet
    else{
        $_SESSION["addToCart_error_notLoggedin"] = true;
        header("Location: ../index.php");
    }
}
?>