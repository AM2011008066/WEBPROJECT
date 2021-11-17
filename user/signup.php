<?php include_once('sidebar.php') ?>

<?php if (isset($_SESSION['signup_error_message'])): ?>
    <div style="color:white; background-color: red; margin: 5px; width: 600px; padding: 15px;" role="alert">
        <?php
        echo $_SESSION['signup_error_message'];
        unset($_SESSION['signup_error_message']);
        ?>
    </div>
<?php endif; ?>

<style>
  header {
    padding-left: 20px;
  }
</style>

  <header>
  <p>
      <form action="function/authentication.php" method="post">
    <h1>Sign Up Page</h1>
    <div>

        <table>
            <td>Full Name :</td>
            <td>
                <input name="fullname_customer" type="text" required/>
              <!--  <span style="color: red; margin-left: 15px;">
                    <?php /*echo "error";*/?>
                </span>-->
            </td></tr>

            <td>E-mail :</td>
            <td>
                <input name="email_customer" type="email" required/>
            </td></tr>

            <td>Address 1 :</td>
            <td>
                <input name="address1_customer" type="text" required/>
            </td></tr>

            <td>Address 2 :</td>
            <td><input name="address2_customer" type="text" required/></td>
            </tr>

            <td>Postcode :</td>
            <td>
                <input name="postcode_customer" type="number" required/>
            </td></tr>

            <td>Phone Number: </td>
            <td><input name="phone_customer" type="tel" required/>
            </td></tr>

            <td>Username: </td>
            <td>
                <input name="username_customer" type="text" required/>
            </td></tr>

            <tr>
            <td>Password: </td>
            <td>
                <input name="password_customer" type="password" required/>
            </td></tr>

            </table>

            <div style="padding-left: 130px; padding-top: 5px; padding-bottom: 15px;">
                <button type="submit" name="signup_customer" class="btnLogin">Sign Up</button>
              <button type="reset" class="btnClear">Clear</button>
            </div>
    </div>
      </form>
</header>


<?php include_once('footer.php') ?>
































