<?php include_once('headerAdmin.php') ?>

<br><br><br><br>


<?php 

	include('../config/db_peri.php');
	include ('../config/toJSON.php'); 


    $sql= "SELECT * FROM product"; 
	$result = $conn->query($sql);

	
	//check if records were returned
	if ($result->num_rows > 0) {


		//create a table to display the record
		echo '<p><table cellpadding=10 cellspacing=0 border=1 align="center">';
		echo '<tr><td align="center"><b>Product ID</b></td>
		<td align="center"><b>Product Category</b></td>
		<td align="center"><b>Product Name</b></td>
		<td align="center"><b>Product Code</b></td>
		<td align="center"><b>Product Price</b></td>
		<td align="center"><b>Product Image</b></td>
		<td align="center"><b>Update</b></td>
		<td align="center"><b>Delete</b></td>
		</tr>';
		
		// output data of each row
		while($row = $result->fetch_assoc()) {
		   echo '<tr>';
		   echo '<td align="center">'.$row["product_id"].'</td>';
		   echo '<td align="center">'.$row["product_category"].'</td>';
		   echo '<td align="center">'.$row["product_name"].'</td>';
		   echo '<td align="center">'.$row["product_code"].'</td>';
		   echo '<td align="center">'.$row["product_price"].'</td>';
		   echo '<td align="center">'.$row["product_image"].'</td>';
		   echo "<td align='center'><a href='editProduct.php?orderID=$row[product_id]'> UPDATE </a></td>";
		   echo '<td><a href="deleteProduct.php?orderID='.$row["product_id"].'">DELETE</a></td>';
		   
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



	 