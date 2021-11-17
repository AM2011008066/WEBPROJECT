<?php

include('../config/db_peri.php');


$EditID =$_REQUEST['orderID'];

$query = "SELECT * from orders where order_id='".$EditID."'"; 
$result = mysqli_query($conn, $query) or die ( mysqli_error());
$row = mysqli_fetch_assoc($result);
?>


<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Update Record</title>
<link rel="stylesheet" href="css/style.css" />
</head>
<body>
<div class="form">

<h1>Update Order Status</h1>

<div>
<form name="form" method="post" action="updateOrder.php"> 
<input  name="orderID" value="<?php echo $row['order_id']; ?>" />
<p><input type="text" name="status" value="<?php echo $row['order_status'];?>" /></p>
<p><input name="submit" type="submit" value="Update" /></p>
</form>

</div>
</div>
</body>
</html>