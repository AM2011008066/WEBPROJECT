<?php
include_once('sidebar.php');
?>


<header class="w3-container w3-xlarge">
    <p  style="flex-direction: column;" class="w3-left">
        User Cart
    </p>
</header>

<?php if (isset($_SESSION['cart_show_login_first'])): ?>
    <div style="color:white; background-color: red; margin: 5px; width: 600px; padding: 15px;" role="alert">
        Please log in to see your cart
        <?php /*unset($_SESSION['cart_show_login_first']); */?>
    </div>
<?php endif; ?>


<?php if (isset($_SESSION['user_order_cart'])): ?>
  <?php
        foreach($_SESSION['user_order_cart'] as $item):
    ?>

<div class="w3-row w3-grayscale">
    <div class="w3-col l3 s6">
            <div class="w3-container">
                <div class="w3-display-container">
                    <img src="../media/<?= $item["product_image"] ?>" style="width:100%">
                </div>

                <p>
                    <?= $item['product_name'] ?>
                    <br>
                    <b><?= $item['product_price'] ?></b>
                </p>
                <p>Quantity: <?= $item['order_quantity'] ?></p>
                <p>Total Price: <?= $item['order_quantity'] * $item['product_price'] ?></p>
            </div>
    </div>
</div>
    <?php endforeach;  ?>
<?php endif; ?>

<?php include_once('footer.php') ?>




