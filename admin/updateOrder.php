<?php

include('../config/db_peri.php');

  //get value order by id
   $UpdateID= $_POST['orderID'];
   $OrderStatus = $_POST['status'];
    
  // sql to update a record
  $sql = "UPDATE orders SET order_status= '".$OrderStatus."' WHERE order_id='$UpdateID'";

  // Attempt update query execution
  if(mysqli_query($conn, $sql)){
      echo "Records were updated successfully.</br></br>";
  } else {
      echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
  }
   
  // Close connection
  mysqli_close($conn);

  echo '<p><a href="order.php">Back to Order</a></p>';
?>
</body> 
</html>