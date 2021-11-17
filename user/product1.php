<?php include_once('sidebar.php') ?>
  
  <!-- Top header -->
  <header class="w3-container w3-xlarge">
    <p class="w3-left">Welcome to Periwinkle Online Shop!</p>
    <p class="w3-right">
      <i class="fa fa-shopping-cart w3-margin-right" type="button" onclick="location='cart.php'"></i>
      <i class="fa fa-search"></i>
    </p>
  </header>

  <?php if (isset($_SESSION['addToCart_error_notLoggedin'])): ?>
    <div style="color:white; background-color: red; margin: 5px; width: 600px; padding: 15px;" role="alert">
        Please log in to add item into the cart
        <?php unset($_SESSION['addToCart_error_notLoggedin']); ?>
    </div>
<?php endif; ?>

<?php if (isset($_SESSION['addToCart_success'])): ?>
    <div style="color:white; background-color: blue; margin: 5px; width: 600px; padding: 15px;" role="alert">
        Item successfully added into cart
        <?php unset($_SESSION['addToCart_success']); ?>
    </div>
<?php endif; ?>

  <!-- Image header -->
  <div class="w3-display-container w3-container">
    <img src="../media/Untitled design.jpg" alt="Bags" style="width:100%">
    <div class="w3-display-topleft w3-text-white" style="padding:24px 48px">
      <h1 class="w3-jumbo w3-hide-small"></h1>
      <h1 class="w3-hide-large w3-hide-medium"></h1>
      <h1 class="w3-hide-small"></h1>
     
    </div>
  </div>

  <div class="w3-container w3-text-grey" id="jeans">
    <p>7 items</p>
  </div>

  <!-- Product grid -->

  <form action="./function/addToCart.php" method="post">
  <div class="w3-row w3-grayscale">
    <div class="w3-col l3 s6">
      <div class="w3-container">
        <div class="w3-display-container">
        <img src="../media/tote1.jpg" style="width:100%">
        <div class="w3-display-middle w3-display-hover">
        <button name="add_to_cart" value="9" class="w3-button w3-black" type="submit">Add to <i class="fa fa-shopping-cart"></i></button>
        </div>
        </div>
        <p>Irene A<br><b>RM 34.99</b></p>
      </div>
      <div class="w3-container">
        <div class="w3-display-container">
      <img src="../media/tote2.jpg" style="width:100%">
      <div class="w3-display-middle w3-display-hover">
      <button name="add_to_cart" value="13" class="w3-button w3-black" type="submit">Add to <i class="fa fa-shopping-cart"></i></button>
      </div>
      </div>
        <p>Sana B<br><b>RM 20.99</b></p>
      </div>
    </div>

    <div class="w3-col l3 s6">
      <div class="w3-container">
        <div class="w3-display-container">
          <img src="../media/tote3.jpg" style="width:100%">
          <span class="w3-tag w3-display-topleft">New</span>
          <div class="w3-display-middle w3-display-hover">
          <button name="add_to_cart" value="10" class="w3-button w3-black" type="submit">Add to <i class="fa fa-shopping-cart"></i></button>
          </div>
        </div>
        <p>Teddy C<br><b>RM 30.99</b></p>
      </div>
      <div class="w3-container">
        <div class="w3-display-container">
        <img src="../media/tote4.jpg" style="width:100%">
        <div class="w3-display-middle w3-display-hover">
        <button name="add_to_cart" value="14" class="w3-button w3-black" type="submit">Add to <i class="fa fa-shopping-cart"></i></button>
        </div>
      </div>
        <p>White Safarina<br><b>RM 40.99</b></p>
      </div>
    </div>

    <div class="w3-col l3 s6">
      <div class="w3-container">
        <div class="w3-display-container">
        <img src="../media/feature2.jpg" style="width:100%">
        <div class="w3-display-middle w3-display-hover">
        <button name="add_to_cart" value="11" class="w3-button w3-black" type="submit">Add to <i class="fa fa-shopping-cart"></i></button>
        </div>
      </div>
        <p>Mia Bag<br><b>RM 30.50</b></p>
      </div>
      <div class="w3-container">
        <div class="w3-display-container">
          <img src="../media/feature3.jpg" style="width:100%">
          <span class="w3-tag w3-display-topleft">Sale</span>
          <div class="w3-display-middle w3-display-hover">
          <button name="add_to_cart" value="15" class="w3-button w3-black" type="submit">Add to <i class="fa fa-shopping-cart"></i></button>
          </div>
        </div>
        <p>Hana D<br><b class="w3-text-red">RM 30.99</b></p>
      </div>
    </div>

    <div class="w3-col l3 s6">
      <div class="w3-container">
        <div class="w3-display-container">
        <img src="../media/feature4.jpg" style="width:100%">
        <div class="w3-display-middle w3-display-hover">
        <button name="add_to_cart" value="12" class="w3-button w3-black" type="submit">Add to <i class="fa fa-shopping-cart"></i></button>
        </div>
      </div>
        <p>Joy Clutch<br><b>RM 24.99</b></p>
      </div>
    </div>

   
  </div>
</form>

  <p><a href="#jeans" class="w3-button w3-black w3-padding-large w3-large">SHOP NOW</a></p>

  <?php include_once('footer.php') ?>