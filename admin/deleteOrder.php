<?php

include('../config/db_peri.php');
 
  //get value order by id
   $OrderID=$_REQUEST['orderID'];
  
  // sql to delete a record
  $sql = "DELETE FROM orders WHERE order_id='$OrderID'";

  if ($conn->query($sql) === TRUE) {
    echo "Record deleted successfully";
  } 
  else {
    echo "Error deleting record: " . $conn->error;
  }

  //close connection  
  $conn->close();


  echo '<p><a href="order.php">Back to Order</a></p>';
?>
</body> 
</html>