
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin Login</title>

 <!--- <link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
  <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
  <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet"> -->
  <link rel="stylesheet" href="../../css/admin.css">
  <style>
  @import url(http://fonts.googleapis.com/css?family=Roboto:400);
   body {
  background-color: white;
  -webkit-font-smoothing: antialiased;
  font: normal 14px Roboto,arial,sans-serif;
   }

  .container {
    padding: 25px;
    position: fixed;
   }

  .form-login {
    background-color: #b88cd2;
    padding-top: 10px;
    padding-bottom: 20px;
    padding-left: 20px;
    padding-right: 20px;
    border-radius: 15px;
    border-color:#d2d2d2;
    border-width: 5px;
    box-shadow:0 1px 0 #cfcfcf;
    }

   h4 { 
   border:0 solid #fff; 
   border-bottom-width:1px;
   padding-bottom:10px;
   text-align: center;
   }

  .form-control {
    border-radius: 10px;
   }

  .wrapper {
    text-align: center;
  }

  </style>

</head>
    

<body>

<?php /*if($_SESSION["loggedIn"] == true): */?><!--
        <div>loggedin</div>
      --><?php /*endif; */?>

      <?php if (isset($_SESSION['login_failed'])): ?>
          <div style="color:white; background-color: red; margin: 5px; width: 600px; padding: 15px;" role="alert">
              Username or Password is incorrect
              <?php unset($_SESSION['login_failed']); ?>
          </div>
      <?php endif; ?>


<body>

<form action="function/authAdmin.php" method="post">
<div class="container">
    <div class="row">
        <div class="col-md-offset-5 col-md-3">
            <div class="form-login">
            <h4>Admin Panel</h4>
            <input type="text" id="userName" name="username_admin" class="form-control input-sm chat-input" placeholder="username" />
            </br>
            <input type="password" id="userPassword" name="password_admin" class="form-control input-sm chat-input" placeholder="password" />
            </br>
            <div class="wrapper">
            <span class="group-btn"> 
				<button type="submit" name="login_admin" class="btn btn-primary btn-md">login</button>    
            </span>
            </div>
            </div>
        
        </div>
    </div>
</div>
</form>

  
</body>
</html>



















