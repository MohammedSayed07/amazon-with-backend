<!DOCTYPE html>
<html>
<head>
    <title>Amazon Project</title>


    <meta name="viewport" content="width=device-width, initial-scale=1">


    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="/styles/shared/general.css">
    <link rel="stylesheet" href="/styles/shared/amazon-header.css">
    <link rel="stylesheet" href="/styles/pages/amazon.css">
</head>
<body>
<div class="amazon-header">
    <div class="amazon-header-left-section">
        <a href="amazon.html" class="header-link">
            <img class="amazon-logo"
                 src="/images/amazon-logo-white.png">
            <img class="amazon-mobile-logo"
                 src="/images/amazon-mobile-logo-white.png">
        </a>
    </div>

    <div class="amazon-header-middle-section">
        <input class="search-bar" type="text" placeholder="Search">

        <button class="search-button">
            <img class="search-icon" src="/images/icons/search-icon.png">
        </button>
    </div>

    <div class="amazon-header-right-section">
        <a class="orders-link header-link" href="../orders.view.php">
            <span class="returns-text">Returns</span>
            <span class="orders-text">& Orders</span>
        </a>

        <a class="cart-link header-link" href="checkout">
            <img class="cart-icon" src="/images/icons/cart-icon.png">
            <div class="cart-quantity">0</div>
            <div class="cart-text">Cart</div>
        </a>
    </div>
</div>