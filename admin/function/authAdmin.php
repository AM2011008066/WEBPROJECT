<?php 
session_start();
include('../../config/db_peri.php');
include ('../../config/toJSON.php');

global $conn;

// kalau nk tau error kt mana, buang sume code yg x perlu
if (isset($_POST['login_admin'])) 
{
    $username = $_POST['username_admin'];
    $password = $_POST['password_admin'];

    echo $username;
    echo $password;

    $sql = "SELECT *  FROM admin WHERE admin_username='$username' AND admin_password='$password'";
    $resultArray = toJSON($conn, $sql);
    echo json_encode($resultArray);
}


// if result is not null
if (!empty($resultArray)) {
    $_SESSION["loggedIn"] = true;
    header("Location: ../index.php");
} else{
    $_SESSION["loggedIn"] = false;
    $_SESSION["loginFailed"] = true;
    header("Location: ../loginAdmin.php");
}
?>


