<?php
require("config.php");

\Stripe\Stripe::setVerifySslCerts(false);

$token = $_POST['stripeToken'];
$name = $_POST['name'];
$user_id = $_POST['id'];
$email = $_POST['useremail'];
$amount_in_pkr = $_POST['amount']; // Get the amount in PKR from the form
$courses_id_string = $_POST['courses_id'];
echo $user_id;
$courses_ids = explode(',', $courses_id_string);
$all_ids = '';
foreach ($courses_ids as $course_id) {
    // Do something with each course ID
    echo "Course ID: $course_id<br>";
    $all_ids .= $course_id . ',';
}

// Convert the amount from PKR to USD
$amount_in_usd = $amount_in_pkr / 279; // Assuming 1 USD = 279 PKR

// Convert the amount to the smallest unit (cents)
$amount_in_cents = round($amount_in_usd * 100);

$data = \Stripe\Charge::create(array(
    "amount"      => $amount_in_cents,
    "currency"    => "usd", // Charge in USD
    "description" => "Join courses with us",
    "source"      => $token,
));

$all_ids = rtrim($all_ids, ',');
// echo $user_id;
$link = header("location: i.php?name=$name&email=$email&token=$token&user_id=$user_id&courses_id=$all_ids");

echo $link;

// header("location: i.php?name=$name&email=$email&token=$token&user_id=$user_id");

?>
