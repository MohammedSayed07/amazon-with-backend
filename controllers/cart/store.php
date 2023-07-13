<?php

use Core\Database;

$config = require "config.php";
$db = new Database($config['database']);

$cart_items = $db->query('SELECT * FROM cart_item')->get();
$isFound = false;

// check if the cart has the product already
foreach($cart_items as $cart_item) {
    if ($cart_item['product_id'] === $_POST['product_id']) {
        $isFound = true;
    }
}

// if it is not found store the product into the database otherwise dd
if (!$isFound) {
    $db->query('INSERT INTO cart_item(product_id, quantity) VALUES (:product_id, :quantity)', [
        'product_id' => $_POST['product_id'],
        'quantity' => $_POST['quantity']
    ]);
} else {
    dd('Already in cart');
}

//get back to the products page.
header('location: /');
exit();

