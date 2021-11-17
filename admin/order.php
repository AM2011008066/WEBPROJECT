<?php include_once('headerAdmin.php') ?>

<?php
  session_start();
  include('../config/db_peri.php');
  
  //create and execute query
  $sql = "SELECT * FROM orders
  LEFT JOIN product ON orders.product_id = product.product_id 
  LEFT JOIN customer ON orders.cust_id = customer.cust_id";
  $result = $conn->query($sql);


  //check if records were returned
  if ($result->num_rows > 0) {

    echo '<br><br><br><br>';

    echo '<font-family=Arial>';


    //create a table to display the record
    echo '<p><table cellpadding=10 cellspacing=0 border=1 align="center">';
    echo '<tr><td align="center"><b>Order ID</b></td>
    <td align="center"><b>Customer Name</b></td>
    <td align="center"><b>Product Name</b></td>
    <td align="center"><b>Quantity</b></td>
    <td align="center"><b>Status</b></td>
    <td align="center"><b>Update</b></td>
    <td align="center"><b>Delete</b></td>
    </tr>';
    
    // output data of each row
    while($row = $result->fetch_assoc()) {
       echo '<tr>';
       echo '<td align="center">'.$row["order_id"].'</td>';
       echo '<td align="center">'.$row["cust_name"].'</td>';
       echo '<td align="center">'.$row["product_name"].'</td>';
       echo '<td align="center">'.$row["order_quantity"].'</td>';
       echo '<td align="center">'.$row["order_status"].'</td>';
       echo "<td align='center'><a href='editOrder.php?orderID=$row[order_id]'> UPDATE </a></td>";
       echo '<td><a href="deleteOrder.php?orderID='.$row["order_id"].'">DELETE</a></td>';
       
       echo '</tr>';
    }
    echo '</table></p>';
 } 
 else {
   echo '<font color=red>No record found';
 }
 

  //close connection 
  $conn->close();

?>