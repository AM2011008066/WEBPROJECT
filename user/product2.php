<?php include_once('sidebar.php') ?>
  
  <!-- Top header -->
  <header class="w3-container w3-xlarge">
    <p class="w3-left">Welcome to Periwinkle Online Shop!</p>
    <p class="w3-right">
      <i class="fa fa-shopping-cart w3-margin-right" type="button" onclick="location='cart.php'"></i>
      <i class="fa fa-search"></i>
    </p>
  </header>

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
        <img src="../media/shoulder1.jpg" style="width:100%">
        <div class="w3-display-middle w3-display-hover">
          <button name="add_to_cart" value="100" class="w3-button w3-black" type="submit">Add to <i class="fa fa-shopping-cart"></i></button>
        </div>
        </div>
        <p>Mina CC<br><b>RM 20.00</b></p>
      </div>
      <div class="w3-container">
        <div class="w3-display-container">
      <img src="../media/shoulder2.jpg" style="width:100%">
      <div class="w3-display-middle w3-display-hover">
        <button name="item" value="Leona Bag" class="w3-button w3-black" type="button">Add to <i class="fa fa-shopping-cart"></i></button>
      </div>
      </div>
        <p>Sweet Diana<br><b>RM 30.00</b></p>
      </div>
    </div>
    <div class="w3-col l3 s6">
      <div class="w3-container">
        <div class="w3-display-container">
          <img src="../media/shoulder3.jpg" style="width:100%">
          <span class="w3-tag w3-display-topleft">New</span>
          <div class="w3-display-middle w3-display-hover">
            <button name="item" value="Mini Hermica" class="w3-button w3-black" type="button">Add to <i class="fa fa-shopping-cart"></i></button>
          </div>
        </div>
        <p>Nancy P<br><b>RM 39.99</b></p>
      </div>
      <div class="w3-container">
        <div class="w3-display-container">
        <img src="../media/shoulder4.jpg" style="width:100%">
        <div class="w3-display-middle w3-display-hover">
          <button name="item" value="Delirani Chain" class="w3-button w3-black" type="button">Add to <i class="fa fa-shopping-cart"></i></button>
        </div>
      </div>
        <p>Harcy<br><b>RM 20.99</b></p>
      </div>
    </div>

    <div class="w3-col l3 s6">
      <div class="w3-container">
        <div class="w3-display-container">
        <img src="../media/shoulder5.jpg" style="width:100%">
        <div class="w3-display-middle w3-display-hover">
          <button name="item" value="Petti Slingbag" class="w3-button w3-black" type="button">Add to <i class="fa fa-shopping-cart"></i></button>
        </div>
      </div>
        <p>Karina Special<br><b>RM 30.50</b></p>
      </div>
      <div class="w3-container">
        <div class="w3-display-container">
          <img src="../media/shoulder6.jpg" style="width:100%">
          <span class="w3-tag w3-display-topleft">Sale</span>
          <div class="w3-display-middle w3-display-hover">
            <button name="item" value="Lynet pin" class="w3-button w3-black" type="button">Add to <i class="fa fa-shopping-cart"></i></button>
          </div>
        </div>
        <p>Winter Choice<br><b class="w3-text-red">RM 30.99</b></p>
      </div>
    </div>

    <div class="w3-col l3 s6">
      <div class="w3-container">
        <div class="w3-display-container">
        <img src="../media/shoulder7.jpg" style="width:100%">
        <div class="w3-display-middle w3-display-hover">
          <button name="item" value="Christal Kylie" class="w3-button w3-black" type="button">Add to <i class="fa fa-shopping-cart"></i></button>
        </div>
      </div>
        <p>Giselle Pick<br><b>RM 24.99</b></p>
      </div>
      <div class="w3-container">
        <div class="w3-display-container">
        <img src="../media/shoulder8.jpg" style="width:100%">
        <div class="w3-display-middle w3-display-hover">
          <button name="item" value="Mini Trigel" class="w3-button w3-black" type="button">Add to <i class="fa fa-shopping-cart"></i></button>
        </div>
      </div>
        <p>Ningning backpack<br><b>RM 34.99</b></p>
      </div>
    </div>
  </div>
</form>

  <p><a href="#jeans" class="w3-button w3-black w3-padding-large w3-large">SHOP NOW</a></p>

  <?php include_once('footer.php') ?>