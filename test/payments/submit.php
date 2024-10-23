<?php
require("config.php");

\Stripe\Stripe::setVerifySslCerts(false);

$token = $_POST['stripeToken'];
$amount_in_pkr = $_POST['amount']; // Get the amount in PKR from the form

// Convert the amount from PKR to USD
$amount_in_usd = $amount_in_pkr / 279; // Assuming 1 USD = 279 PKR

// Convert the amount to the smallest unit (cents)
$amount_in_cents = $amount_in_usd * 100;

$data = \Stripe\Charge::create(array(
    "amount"      => $amount_in_cents,
    "currency"    => "usd", // Charge in USD
    "description" => "Join courses with us",
    "source"      => $token,
));

echo "<pre>";
print_r($data);
?>
