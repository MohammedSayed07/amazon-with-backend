<?php

use Core\Database;

$config = require "config.php";
$db = new Database($config['database']);

$products = [];
$total_price = 0;
$items_quantity = 0;

$cart_items = $db->query("SELECT * FROM cart_item")->get();

foreach($cart_items as $cart_item) {
    $items_quantity += $cart_item['quantity'];

    $product = $db->query("SELECT * FROM products WHERE id = :product_id ", [
        'product_id' => $cart_item['product_id']
    ])->findOrFail();

    $total_price += ($product['price_cents'] / 100) * $cart_item['quantity'];

    $products[] = [
        'product' => $product,
        'quantity' => $cart_item['quantity'],
        'cart_id' => $cart_item['id']
    ];
}


require "views/cart/index.view.php";