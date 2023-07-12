<?php require "views/partials/head.php" ?>
    <div class="main">

        <div class="products-grid">
            <?php foreach($products as $product) : ?>
            <div class="product-container">

              <div class="product-image-container">
                <img class="product-image"
                  src= "/images/products/<?=$product['image']?>">
              </div>

              <div class="product-name limit-text-to-2-lines">
                <?= $product['name'] ?>
              </div>

              <div class="product-rating-container">
                <img class="product-rating-stars"

                  src="/images/ratings/rating-<?=$product['stars'] * 10?>.png"">
                <div class="product-rating-count link-primary">
                    <?= $product['count'] ?>
                </div>
              </div>

              <div class="product-price">
                  <?= to_fixed($product['price_cents'] / 100, 2) ?>
              </div>

              <div class="product-quantity-container">
                <select>
                  <option selected value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                  <option value="5">5</option>
                  <option value="6">6</option>
                  <option value="7">7</option>
                  <option value="8">8</option>
                  <option value="9">9</option>
                  <option value="10">10</option>
                </select>
              </div>

              <div class="product-spacer"></div>

              <div class="added-to-cart"
                <img src="/images/icons/checkmark.png">
                Added
              </div>
              <a>
              <button class="add-to-cart-button button-primary">
                Add to Cart
              </button>
              </a>
            </div>
            <?php endforeach; ?>
        </div>

    </div>

    <script src="../../data/cart.js"></script>
    <script src="../../data/products.js"></script>
    <script src="../../scripts/amazon.js"></script>
  </body>
</html>