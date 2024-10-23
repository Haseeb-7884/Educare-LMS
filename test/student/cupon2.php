<?php 
$productPrice = 100;
$couponCode = 'ABCD12345';
$originalPrice = $productPrice;
function couponDiscout($price , $couponCode){
    // $isValidcoupon = isValidcoupon($couponCode); // validating the generated coupon
    if($couponCode){
        $discountPercentage = 10;
        $discountAmount = ($discountPercentage / 100) * $price;
        $discountPrice = $price - $discountAmount;
        return $discountPrice;
    }else{
        return $price;
    }

}
$discountPrice = couponDiscout($productPrice , $couponCode);
echo "Origional Product Price" . $productPrice . "<br>";
echo "coupon code" . $couponCode . "<br>";
echo "Discounted Product Price" . $discountPrice ;
?>