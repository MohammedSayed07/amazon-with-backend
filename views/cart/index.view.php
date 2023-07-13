<!DOCTYPE html>
<html>
  <head>
    <title>Checkout</title>

    <!-- This code is needed for responsive design to work.
      (Responsive design = make the website look good on
      smaller screen sizes like a phone or a tablet). -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Load a font called Roboto from Google Fonts. -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">

    <!-- Here are the CSS files for this page. -->
    <link rel="stylesheet" href="/styles/shared/general.css">
    <link rel="stylesheet" href="/styles/pages/checkout/checkout-header.css">
    <link rel="stylesheet" href="/styles/pages/checkout/checkout.css">
  </head>
  <body>
    <div class="checkout-header">
      <div class="header-content">
        <div class="checkout-header-left-section">
          <a href="../products/index.view.php">
            <img class="amazon-logo" src="/images/amazon-logo.png">
            <img class="amazon-mobile-logo" src="/images/amazon-mobile-logo.png">
          </a>
        </div>

        <div class="checkout-header-middle-section">
          Checkout (<a class="return-to-home-link"
            href="../products/index.view.php"><?= $items_quantity ?> items</a>)
        </div>

        <div class="checkout-header-right-section">
          <img src="/images/icons/checkout-lock-icon.png">
        </div>
      </div>
    </div>

    <div class="main">
      <div class="page-title">Review your order</div>

      <div class="checkout-grid">
        <div class="order-summary">
            <?php foreach($products as $item) : ?>
                <div class="cart-item-container">
                    <div class="cart-item-details-grid">
                      <img class="product-image"
                        src="/images/products/<?= $item['product']['image'] ?>">

                      <div class="cart-item-details">
                        <div class="product-name">
                          <?= $item['product']['name'] ?>
                        </div>
                        <div class="product-price">
                            $<?= ($item['product']['price_cents'] / 100) * $item['quantity'] ?>
                        </div>
                        <div class="product-quantity">
                          <span>
                            Quantity: <span class="quantity-label"><?= $item['quantity'] ?></span>
                          </span>
                          <span class="update-quantity-link link-primary">
                            Update
                          </span>
                          <form method="POST" class="delete-form"">
                          <input type="hidden" name="_method" value="DELETE">
                          <input type="hidden" name="id" value="<?= $item['cart_id'] ?>">
                          <button class="delete-quantity-link link-primary delete-button">
                            Delete
                          </button>
                          </form>
                        </div>
                      </div>

                    </div>
                </div>
            <?php endforeach; ?>
        </div>

        <div class="payment-summary">
          <div class="payment-summary-title">
            Order Summary
          </div>

          <div class="payment-summary-row">
            <div>Items (<?= $items_quantity ?>):</div>
            <div class="payment-summary-money">$<?= $total_price ?></div>
          </div>

          <div class="payment-summary-row">
            <div>Shipping &amp; handling:</div>
            <div class="payment-summary-money">$4.99</div>
          </div>

          <div class="payment-summary-row subtotal-row">
            <div>Total before tax:</div>
            <div class="payment-summary-money">$<?= $total_price + 4.99 ?></div>
          </div>

          <div class="payment-summary-row">
            <div>Estimated tax (10%):</div>
            <div class="payment-summary-money">$<?= ($total_price + 4.99) / 10 ?></div>
          </div>

          <div class="payment-summary-row total-row">
            <div>Order total:</div>
            <div class="payment-summary-money">$<?= $total_price + 4.99 + ($total_price + 4.99) / 10 ?></div>
          </div>

          <button class="place-order-button button-primary">
            Place your order
          </button>
        </div>

      </div>
    </div>
  </body>
  <script src="../../data/cart.js"></script>
  <script src="../scripts/checkout.js"></script>
</html>
