<?php
require_once('./Class/Cart.php');

require_once('./Class/Paypal/Payment.php');
require_once('./Class/Stripe/Payment.php');
require_once('./Class/Users/User.php');

use Class\Users\User;
use \Class\Paypal\Payment as PaypalPayment;
use \Class\Stripe\Payment as StripePayment;

spl_autoload_register(function ($class) {
    var_dump($class);
});

// $cart = new Cart(3, 5);
// $cart->SetTotalPrice(50);
// $cart->discount(10);

$paypalPayment = new PaypalPayment();
$stripePayment = new StripePayment();

$users = new PaypalPayment();


var_dump($users);
