<?php
include("../../back.php");

if(isset($_POST['coupon_submit'])){
    $coupon_name = $_POST['coupon_name'];
    $total_price = $_POST['total_price'];

    $get_coupon_data = new backend();
    $get_data = $get_coupon_data->fetching('coupons');

    $coupon_found = false; // Initialize a flag to track if the coupon is found

    foreach($get_data as $main_data){
        $name = $main_data['coupon'];

        if($coupon_name === $name){
            // If there's a match, set the flag to true
            $coupon_found = true;

            // Get other coupon details
            $coupon_percent = $main_data['coupon_percent'];
            $coupons_quantity = $main_data['coupons_quantity'];
            $coupon_expiry = $main_data['coupon_expiry'];
            $cou_percentage = $main_data['cou_percentage'];
            $coupons_usage_limit = $main_data['coupons_usage_limit']; 

            // Calculate discount
            $discount_percentage = $coupon_percent / 100;
            $discount_amount = $discount_percentage * $total_price;
            $final_price = $total_price - $discount_amount;

            // Update coupon quantity in the database
            if($coupons_quantity > 0) {
                $new_quantity = $coupons_quantity - 1; // Decrement coupons quantity by 1

                // Update coupon quantity in the database
                $update_param = array('coupons_quantity' => $new_quantity);
                $update_where = "coupon = '$coupon_name'";
                $update_result = $get_coupon_data->update('coupons', $update_param, $update_where);
                if($update_result) {
                    echo "Coupon quantity updated successfully.";
                } else {
                    echo "Failed to update coupon quantity.";
                }
            }

            // Redirect to cart page with updated total price
            header("Location: cart.php?final_price=$final_price");
            exit(); // Terminate further execution
        }
    }

    if(!$coupon_found){
        echo "Your Coupon is not Applicable"; // Coupon not found
    }
} else {
    echo "Not found"; // Coupon form not submitted
}
?>
