<?php
include_once('sidebar.php');
?>

<style>
  header {
    padding-left: 20px;
  }
</style>

  <!-- Top header -->
  <header>
  <p>
      <?php /*if($_SESSION["loggedIn"] == true): */?><!--
        <div>loggedin</div>
      --><?php /*endif; */?>

      <?php if (isset($_SESSION['loginFailed'])): ?>
          <div style="color:white; background-color: red; margin: 5px; width: 600px; padding: 15px;" role="alert">
              Username or Password is incorrect
              <?php unset($_SESSION['loginFailed']); ?>
          </div>
      <?php endif; ?>

      <?php if (isset($_SESSION['logout_success'])): ?>
          <div style="color:white; background-color: blue; margin: 5px; width: 600px; padding: 15px;" role="alert">
              Logged out succesfully
              <?php unset($_SESSION['logout_success']); ?>
          </div>
      <?php endif; ?>

    <h1>Login Page</h1>
    <p>Login or register from here to access.</p>
    <div>
        <form action="function/authentication.php" method="post">
     
            <table align="w3-left">
            <tr>
            <td>Username</td>
            <td>:</td>
            <td><input name="username_customer" type="text" required/></td>
            </tr>
            <tr>
            <td>Password</td>
            <td>:</td>
            <td><input name="password_customer" type="password" required/></td>
            </tr>
            </table>
        
            <div class="button-submit" style="padding-left: 90px; padding-top: 5px;">
            <button type="submit" name="login_customer" class="btnLogin">Login</button>
            
            <p>Don't have an account? <a href="signup.php">click here</a></p>
            </div>

        </form>
           
    </div></p>
  </header>

  
  <?php include_once('footer.php') ?>

















