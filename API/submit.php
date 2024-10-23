<!-- 
// require("config.php");

// \Stripe\Stripe::setVerifySslCerts(false);

// $token =  $_POST['stripeToken'];

// $data = \Stripe\Charge::create(array(
//     "amount"=>500,
//     "currency"=>"pkr",
//     "description"=>"Join courses with us",
//     "source"=>$token,
// ));
// echo "<pre>";
// print_r($data); -->



<?php
require("config.php");

\Stripe\Stripe::setVerifySslCerts(false);

$token = $_POST['stripeToken'];

// Convert the amount to the smallest unit (cents)
// $amount_in_cents = 500 * 100; // Assuming 1 PKR = 100 cents
$amount_in_pkr = 1500 / 279; // Assuming 1 USD = 279PKR
// $amount_in_usd = round($amount_in_pkr);

$data = \Stripe\Charge::create(array(
    "amount"      => $amount_in_pkr,
    "currency"    => "usd", // Charge in USD or another supported currency
    "description" => "Join courses with us",
    "source"      => $token,
));

echo "<pre>";
print_r($data);
?>
