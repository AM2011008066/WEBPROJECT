<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Periwinkle Admin Site</title>
  <!-- <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> -->
    <link rel="stylesheet" href="css/headerAdmin.css">


</head>

<body>

<div class="container">
	<div class="row"> 
		<h2>Periwinkle Store Admin Panel</h2>
	</div>
</div>

<nav>
<ul class="dropdown">

           <li class="drop"><a href="index.php">Dashboard</a>
        		<ul class="sub_menu">
        			<li><a href="#">Manage Sales</a></li>
							<li><a href="#">Manage Supplier</a></li>
        		</ul>
        	</li>
        	<li class="drop"><a href="product.php">Product</a>
        		<ul class="sub_menu">
							<li><a href="#">Manage Product</a></li>
							<li><a href="#">Manage Category</a></li>
							
                </ul>
        	</li>
        	<li class="drop"><a href="order.php">Order</a>
        		<ul class="sub_menu">
        			<li><a href="#">Manage Order</a></li>
							<li><a href="#">Manage Delivey</a></li>		
							
        		</ul>
        	</li>      
        	<li><a href="loginAdmin.php">Logout</a>
        	</li>
        </ul>
	 </nav> 
	 <script src="js/headerAdmin.js"></script>
 
     
</body>
</html>
