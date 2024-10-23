<?php 
include("../../back.php");
if(isset($_POST['price_submit'])){
   $courses_id = $_POST['courses_id'];
   $requirments_id = $_POST['requirments_id'];
   $section_id = $_POST['section_id'];
   $course_price = $_POST['course_price'];
   $currency = $_POST['currency'];

   $getPrice = new backend();
   $insering_data = $getPrice->insertion('course_prices', array('courses_id'=>$courses_id,'requirments_id'=>$requirments_id,
   'section_id'=>$section_id, 'course_price'=>$course_price, 'currency'=>$currency));

   if($getPrice){
    echo header("location: additional_info.php?courses_id=$courses_id&section_id=$section_id&requirments_id=$requirments_id");
   }else{
    echo "Error";
   }
}
?>