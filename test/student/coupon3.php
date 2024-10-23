<?php 
$price = 500;
$code = 'DISCOUNT123';

$origional_price = $price;

function applycoupon($price , $discountCode){
    $discountPrice = 10;
    $discountAmountOne = $discountPrice / 100;
    $discountAmountTwo = $price * $discountAmountOne;
    $discountAmount = $price -  $discountAmountTwo;
    return $discountAmount;
}
?>