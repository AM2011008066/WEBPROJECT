<?php
// tekan button -> amik data dari database -> tunjuk data dari database ke html
session_start();
$_SESSION["success"] = "page has succsfully loaded 123";


header("Location: ../product.php");
?>