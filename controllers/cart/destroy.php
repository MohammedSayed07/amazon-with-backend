<?php

use Core\Database;

$config = require'config.php';
$db = new Database($config['database']);

$db->query('DELETE FROM cart_item WHERE id = :id', [
   'id' => $_POST['id']
]);

header('location: /checkout');
exit();

