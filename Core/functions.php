<?php

function dd($value) {

    echo '<pre>';
    var_dump($value);
    echo '</pre>';

    die();
}

function abort($code = 404) {
    http_response_code($code);

    require "views/{$code}.php";

    die();
}

function to_fixed($number, $decimals) {
    return number_format($number, $decimals, '.', '');
}