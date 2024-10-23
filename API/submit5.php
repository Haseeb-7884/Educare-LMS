<?php
require 'vendor/autoload.php';

\Stripe\Stripe::setApiKey('pk_test_51OrNTiKE6ut2K9RwR7w7E1PeTVS7Lz7IDiYdZSUbfKbUq233flqvB8dQogGWRwyyygZ3CBY5bjTO0WYbl2jtg9Qj009UGJ3oKC');

$token = $_POST['stripeToken'];
$amount = $_POST['amount'];

try {
    // Create a PaymentIntent
    $intent = \Stripe\PaymentIntent::create([
        'amount' => $amount,
        'currency' => 'usd', // Change to your currency code
        'payment_method' => $token,
        'confirmation_method' => 'manual',
        'confirm' => true,
    ]);

    // If the PaymentIntent is successful, return a success response
    echo json_encode(['success' => true]);
} catch (\Stripe\Exception\CardException $e) {
    // Handle card errors
    $body = $e->getJsonBody();
    echo json_encode(['error' => $body['error']['message']]);
} catch (\Stripe\Exception\InvalidRequestException $e) {
    // Invalid parameters were supplied to Stripe's API
    echo json_encode(['error' => $e->getMessage()]);
} catch (\Stripe\Exception\AuthenticationException $e) {
    // Authentication with Stripe's API failed
    echo json_encode(['error' => $e->getMessage()]);
} catch (\Stripe\Exception\ApiConnectionException $e) {
    // Network communication with Stripe failed
    echo json_encode(['error' => $e->getMessage()]);
} catch (\Stripe\Exception\ApiErrorException $e) {
    // Generic error
    echo json_encode(['error' => $e->getMessage()]);
}
?>
