<?php include_once('sidebar.php') ?>
  
  <!-- Top header -->
  <header class="w3-container w3-xlarge">
    <p  style="flex-direction: column;" class="w3-left">
        Welcome to Periwinkle Online Shop!
    </p>
    <p class="w3-right">
      <i class="fa fa-shopping-cart w3-margin-right" method="post" onclick="location='function/showCart.php'"></i>
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
        Item sucessfully added into cart
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
    <p>8 items</p>
  </div>

  <!-- Product grid -->

  <form action="./function/addToCart.php" method="post">
  <div class="w3-row w3-grayscale">
    <div class="w3-col l3 s6">

      <div class="w3-container">
        <div class="w3-display-container">
        <img src="../media/slingbag 8.jpg" style="width:100%">
        <div class="w3-display-middle w3-display-hover">
          <button name="add_to_cart" value="1" class="w3-button w3-black" type="submit">Add to <i class="fa fa-shopping-cart"></i></button>
        </div>
        </div>
        <p>W Chain<br><b>RM 24.99</b></p>
      </div>

      <div class="w3-container">
        <div class="w3-display-container">
      <img src="../media/leona slingbag 3.jpg" style="width:100%">
      <div class="w3-display-middle w3-display-hover">
        <button name="add_to_cart" value="5"  class="w3-button w3-black" type="submit">Add to <i class="fa fa-shopping-cart"></i></button>
      </div>
      </div>
        <p>Leona Bag<br><b>RM 19.99</b></p>
      </div>
    </div>

    <div class="w3-col l3 s6">

      <div class="w3-container">
        <div class="w3-display-container">
          <img src="../media/slingbag 5.jpg" style="width:100%">
          <span class="w3-tag w3-display-topleft">New</span>
          <div class="w3-display-middle w3-display-hover">
            <button name="add_to_cart" value="2" class="w3-button w3-black" type="submit">Add to <i class="fa fa-shopping-cart"></i></button>
          </div>
        </div>
        <p>Mini Hermica<br><b>RM 19.99</b></p>
      </div>

      <div class="w3-container">
        <div class="w3-display-container">
        <img src="../media/chain slingbag 2.jpg" style="width:100%">
        <div class="w3-display-middle w3-display-hover">
          <button name="add_to_cart" value="6" class="w3-button w3-black" type="submit">Add to <i class="fa fa-shopping-cart"></i></button>
        </div>
      </div>
        <p>Delirani Chain<br><b>RM 20.99</b></p>
      </div>

    </div>

    <div class="w3-col l3 s6">
      <div class="w3-container">
        <div class="w3-display-container">
        <img src="../media/slingbag 1.jpg" style="width:100%">
        <div class="w3-display-middle w3-display-hover">
          <button name="add_to_cart" value="3" class="w3-button w3-black" type="submit">Add to <i class="fa fa-shopping-cart"></i></button>
        </div>
      </div>
        <p>Petti Slingbag<br><b>RM 20.50</b></p>
      </div>
      <div class="w3-container">
        <div class="w3-display-container">
          <img src="../media/slingbag 6.jpg" style="width:100%">
          <span class="w3-tag w3-display-topleft">Sale</span>
          <div class="w3-display-middle w3-display-hover">
            <button name="add_to_cart" value="7" class="w3-button w3-black" type="submit">Add to <i class="fa fa-shopping-cart"></i></button>
          </div>
        </div>
        <p>Lynet pin<br><b class="w3-text-red">RM 14.99</b></p>
      </div>
    </div>

    <div class="w3-col l3 s6">
      <div class="w3-container">
        <div class="w3-display-container">
        <img src="../media/slingbag 4.jpg" style="width:100%">
        <div class="w3-display-middle w3-display-hover">
          <button name="add_to_cart" value="4" class="w3-button w3-black" type="submit">Add to <i class="fa fa-shopping-cart"></i></button>
        </div>
      </div>
        <p>Christal Kylie<br><b>RM 14.99</b></p>
      </div>
      <div class="w3-container">
        <div class="w3-display-container">
        <img src="../media/slingbag 7.jpg" style="width:100%">
        <div class="w3-display-middle w3-display-hover">
          <button name="add_to_cart" value="8" class="w3-button w3-black" type="submit">Add to <i class="fa fa-shopping-cart"></i></button>
        </div>
      </div>
        <p>Mini Trigel<br><b>RM 24.99</b></p>
      </div>
    </div>
  </div>
</form>

  <p><a href="#jeans" class="w3-button w3-black w3-padding-large w3-large">SHOP NOW</a></p>

  <?php include_once('footer.php') ?>