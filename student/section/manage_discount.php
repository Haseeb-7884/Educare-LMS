<?php 
include("../../back.php");

$discount = new backend();

$get_course_discount = $discount->fetching("coupons","*",null,null);

if(!empty($get_course_discount)){
    foreach($get_course_discount as $new_discount){
        $expiry_date = $new_discount['coupon_expiry'];
        $expiry_course_id = $new_discount['courses_id'];
        // echo $expiry_course_id;
        // Create DateTime objects
        $saved_date = new DateTime($expiry_date);
        $current_date = new DateTime();
        // echo "saved date: " . $saved_date->format('Y-m-d') . "\n";
        // Compare the dates and output the appropriate message
        if ($saved_date == $current_date) {
            echo "Discount not applicable.\n";
            echo $expiry_course_id;
            $del_course_01 = $discount->deletion("coupons","courses_id=$expiry_course_id");
        } else if($saved_date > $current_date){
            echo "Discount applicable.\n";
            echo $expiry_course_id; 
        }
        else {
            echo "dicount not applicable here";
            echo $expiry_course_id; 
            $del_course_02 = $discount->deletion("coupons","courses_id=$expiry_course_id");
        }
        
    }
}



?>
