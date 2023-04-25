<?php

// spl_autoload_register(function ($class) {
//     $path = dirname(__DIR__) . '/' . str_replace('\\', '/', $class) . '.php';

//     if (file_exists($path)) {
//         require_once($path);
//     }
// });

require '../vendor/autoload.php';

use \Class\Paypal\Payment as PaypalPayment;
use \Class\Stripe\Payment as StripePayment;

use \Colors\RandomColor;


// Returns a hex code for an attractive color
var_dump(RandomColor::one());

// $cart = new Cart(3, 5);
// $cart->SetTotalPrice(50);
// $cart->discount(10);

$paypalPayment = new PaypalPayment();
$stripePayment = new StripePayment();


// var_dump($paypalPayment, $stripePayment);
