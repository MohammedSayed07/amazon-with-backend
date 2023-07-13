<?php

$router->get('/', 'controllers/products/index.php');
$router->get('/checkout', 'controllers/cart/index.php');

$router->post('/', 'controllers/cart/store.php');
$router->delete('/checkout','controllers/cart/destroy.php');