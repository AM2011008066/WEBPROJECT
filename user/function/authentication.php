<?php 
session_start();
include('../../config/db_peri.php');
include ('../../config/toJSON.php');

global $conn;

if (isset($_POST['login_customer'])) {

    /*$_SESSION["loggedIn"] = null;*/

    // Variable from html
    $username = $_POST['username_customer'];
    $password = $_POST['password_customer'];

    // access the database
    $sql = "SELECT * FROM customer WHERE cust_username='$username' AND cust_password='$password'";
    $resultArray = toJSON($conn, $sql);

    // if user succesfully logged in
    if (!empty($resultArray)) {
        $_SESSION["loggedIn"] = true;
        $_SESSION["customerID"] = $resultArray[0]["cust_id"];
        unset($_SESSION["cart_show_login_first"]);
        header("Location: ../index.php");
    } else{
        $_SESSION["loggedIn"] = false;
        $_SESSION["loginFailed"] = true;
        header("Location: ../login.php");
    }
}

if (isset($_POST['signup_customer'])) {

    // Variable from html
    $fullname = $_POST['fullname_customer'];
    $email = $_POST['email_customer'];
    $address1 = $_POST['address1_customer'];
    $address2 = $_POST['address2_customer'];
    $postcode = $_POST['postcode_customer'];
    $phone = $_POST['phone_customer'];
    $username = $_POST['username_customer'];
    $password = $_POST['password_customer'];

    // check if username already exist in the database
    $sql = "SELECT cust_username FROM customer WHERE cust_username='$username' OR cust_email_address='$email'";
    $resultArray = toJSON($conn, $sql);

    // if username is new
    if(empty($resultArray)){
        $sql = "INSERT INTO customer (cust_name, cust_email_address, cust_address1, cust_address2, cust_postcode, cust_phone_number, cust_username, cust_password)
                VALUES ('$fullname', '$email', '$address1', '$address2', '$postcode', '$phone', '$username', '$password')";

        if(mysqli_query($conn, $sql)){
            $_SESSION["signup_success"] = true;
            header("Location: ../login.php");
        } else{
            $_SESSION["signup_error"] = true;
            $_SESSION["signup_error_message"] = "Signup error, please double check your details";
            header("Location: ../signup.php");
        }

    // if username or email already exist
    }else{
        $_SESSION["signup_error"] = true;
        $_SESSION["signup_error_message"] = "Username or email already exist, please sign up using a different credentials";
        header("Location: ../signup.php");
    }


}

if (isset($_POST['logout_customer'])){
    /*$_SESSION["loggedIn"] = false;*/
    unset($_SESSION["loggedIn"]);
    unset($_SESSION["customerID"]);

    unset($_SESSION["user_order_cart"]);
    unset($_SESSION["user_order_bought"]);

    $_SESSION["logout_success"] = true;
    header("Location: ../login.php");
}
?>