<?php 
include("../../back.php");
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $main_id = $_SESSION['id'];
   // echo $main_id;

   $coupon = !empty($_POST['coupon'])?$_POST['coupon']:
   header("location: coupons.php?sending=Errors");

   $coupon_percent = !empty($_POST['coupon_percent'])?$_POST['coupon_percent']:
   header("location: coupons.php?sending=Errors");

   $cou_percentage = !empty($_POST['cou_percentage'])?$_POST['cou_percentage']
   :header("location: coupons.php?sending=Errors");  

   $selected_course = $_POST['selected_course'];

   $coupons_quantity = $_POST['coupons_quantity'];

   $coupon_expiry = !empty($_POST['coupon_expiry'])?$_POST['coupon_expiry']:
   header("location: coupons.php?sending=Errors");
   
   $coupons_usage_limit = $_POST['coupons_usage_limit'];

   $adding = new backend();

   $get_id = $adding->fetching('instructor','*',null,"registration_id = $main_id");

   foreach($get_id as $alldata){
     $instructor_id = $alldata['instructor_id'];
   }

   // echo "Instructorr_id"   . $instructor_id;

   $insert_data = $adding->insertion("coupons",array('coupon'=>$coupon,
   'coupon_percent'=>$coupon_percent, 'coupons_quantity'=>$coupons_quantity, 'coupon_expiry'=>$coupon_expiry,
   'coupons_usage_limit'=>$coupons_usage_limit,'cou_percentage'=>$cou_percentage,
   'user_id'=>$main_id,'instructor_id'=>$instructor_id, 'courses_id'=>$selected_course
));

if($insert_data){
   // echo "Data Is successfully addded";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Coupon Submission</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
     crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<style>
  body{
    background-color: #DDE1E3;
    padding-top:15%; 
  }
.warning-container{
  margin: 0 auto;
  height: 60px;
  width: 800px;
}
.warning-content{
  height:100%;
  width: 100%;
  display:flex;
  justify-content: space-around;
  align-items:center;
  padding: 25px 20px 25px 20px;
  border-radius:5px;
  background-color:white;
  overflow:hidden;
}
.warning-content > i{
  color: green;
  font-size: 85px;
  width: 13%;
  /* background-color:orange; */
  height:100; 
}
.warning-content > div{
  width: 72%;
  height: 100%;
  /* background-color: blue; */
}
.warning-content > div > p:nth-child(1){
  font-weight: bold;
  color: darkgreen;
  font-size: 22px;
  margin:0px;
}
.warning-content > div > p:nth-child(2){
  color: black;
  font-size: 15px;
}
.warning-content > section{
  width: 14%;
  height: 100%;
  display: flex;
  justify-content:center;
  align-items:center;
}
.login_button{
  background-color:green;
  color:white;
  text-decoration:none;
  border-radius: 5px;
  padding: 5px 20px 5px 20px;
}
</style>
<body>
    <div class="warning-container">
        <div class="warning-content">

        <i class="fa-solid fa-circle-check"></i>
         
        <div>
        <p>Successfull</p>
        <p>
         Congrats. Your Coupon has been submitted successfully. Go to Dashboard via given Button
        </p>
        </div>

        <section>
          <a class="login_button" href="../dashboard/index.php">
            Return to Dashbaord
          </a>
        </section>

        </div>
    </div>
</body>
</html>
<?php    
}
}
?>