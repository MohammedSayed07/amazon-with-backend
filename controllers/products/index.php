<?php

use Core\Database;

$config = require "config.php";
$db = new Database($config['database']);

$products = $db->query("SELECT * FROM products")->get();

require "views/products/index.view.php";