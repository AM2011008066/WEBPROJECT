<?php
session_start();
include('../../config/db_peri.php');
include ('../../config/toJSON.php');



global $conn;

if(isset($_POST['order_checkout'])) {

    $order

    $sql = "UPDATE orders SET order_status='$order' WHERE order_id ='$orderID'";

}

?>