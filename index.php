<?php

require_once('./Class/Cart.php');

$cart = new Cart(3, 5);
$cart->SetTotalPrice(50);
$cart->discount(10);


var_dump($cart->getTotalPrice());
