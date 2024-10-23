
<?php 
include("../../back.php");
if(isset($_SESSION['auth'])){
  $show_course = new backend();
  // $final_price = $_GET['final_price'];
  $final_price = isset($_GET['final_price']) ? $_GET['final_price'] : 0;
  $user_id = $_SESSION['id'];

  $fetch_data = $show_course->fetching('cart_items','*',null,"registration_id = $user_id");
  // $fetch_data = $show_course->fetching('cart_items');
  // echo $user_id;
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- Font awsome CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="../../assets/css/cart.css">
    <!-- <link rel="stylesheet" href="cart.css"> -->

    <style>
      .second_body{
        display:flex;
        justify-content:center;
        align-items:center;
        margin-top: 80px;
      }
      .main_image_placement{
        height: 400px;
        width:450px;
        display:flex;
        justify-content:center;
        align-items:center;
        flex-direction: column;
      }
      .main_image_placement > img{
        padding-bottom:20px;
      }
    </style>

</head>

<body style="overflow-x:hidden;">

<?php 
if(is_null($fetch_data)){
  // echo "No items in your cart";
?>
  <div class="second_body">
  <div class="main_image_placement">
  <img style="" src="../../assets/images/cart-2.PNG" alt="">
  <h5>Your Cart is Empty</h5>
  <p>looks like you have not made your choice yet.</p>
  <a href="../../index.php">Back to home page</a>
  </div>
  </div>
<?php 
}else{
?>
<h1 class="container-text fw-bold text-dark mt-5">Shopping Cart</h1>
<?php 
    $show_data = new backend();


// echo  $user_id;
    $show_course = $show_data->fetching('cart_items','*','cource ON cart_items.courses_id = cource.courses_id',"registration_id = $user_id");

    // print_r($show_course);

    // $show_course = $show_data->fetching("cart_items","*","cource ON cart_items.courses_id = cource.courses_id",null);

    $num_results = count($show_course);
  ?>


<div class="hero-section">
    <div class="hero-section-first ">
        <div class="section-first-container">
            <h6 class="mt-1 text-dark"><?= $num_results ?> Course in cart</h6>
            <div class="section-first-horizontal-row"></div>

<?php 
          
                

                foreach($show_course as $show_course_data){
                  $courses_id = $show_course_data['courses_id'];
                  $courses_name = $show_course_data['course_title'];
                  $course_img = $show_course_data['course_img'];
                  $selecting_level = $show_course_data['selecting_level'];
                  $instructor_id = $show_course_data['instructor_id'];  // get the instructor name
                  $select_category = $show_course_data['select_category'];  // get the category name name
                  ?>

          
            <div class="section-first-content d-flex justify-content-between">
                <div class="section-first-content-first d-flex justify-content-left">
                    <img src="../../instructor/new/<?= $course_img ?>" alt="no image found" class="first-content-first-img">
                    <div class="ms-3 section-first-content-first-desc">
                    <?php
                          $get_category = $show_data->fetching('cources_categories','*',null,"category_id = $select_category");
                          foreach($get_category as $main_category){
                            $selected_category = $main_category['category_name']; } ?>

                        <h6 class="fw-bold text-dark"> <?= $selected_category ?> - <?= $courses_name ?></h6>
                    <?php 
                            $get_instructor = $show_data->fetching('instructor','*',null,"instructor_id = $instructor_id");
                            foreach($get_instructor as $main_instructor){
                                $fname = $main_instructor['fname'];
                                $lname = $main_instructor['lname']; } ?>

                        <p>By Mr. <?= $fname ?>

                        <div class="content-first-desc-content d-flex justify-content-left">
                            <p class="badge badge-color d-block">Best Seller</p>
                            <ul>
                                <li>80 lectures</li>
                            </ul>
                            <ul>
                                <li><?= $selecting_level ?></li>
                            </ul>
                        </div>

                        <div style="color:#005eff;" class="d-flex justify-content-left">
                            <p class="card-text fw-bold" style="font-size: 15px; margin-top: 8px; color: darkred;"> 5.5
                                <i class="fa-solid fa-star ms-2" style="color: #ffc800;"></i>
                                <i class="fa-solid fa-star" style="color: #ffc800;"></i>
                                <i class="fa-solid fa-star" style="color: #ffc800;"></i>
                                <i class="fa-solid fa-star" style="color: #ffc800;"></i>
                                <i class="fa-solid fa-star" style="color: #ffc800;"></i>
                                <span class="text-dark">(ratings)</span>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="section-first-content-second">
                    <div class="section-first-content-second-links d-flex justify-content-between">
                        <div>

                          <a href="del.php?cources_id=<?=$courses_id?>" class="d-block text-decoration-none"
                                style="color:purple; margin-bottom: 7px;">Remove</a>

                            <a href="" class="d-block text-decoration-none"
                                style="color:purple; margin-bottom: 8px;">Save for Later</a>
                            <a href="" class="d-block text-decoration-none" style="color:purple;">Move to Favourits</a>
                        </div>
                        <div class="fw-bold" style="font-size: 18px;">
                            <!-- icon after price  -->
                    <?php 
                    $get_price = $show_data->fetching('course_prices','*',null,"courses_id = $courses_id");
                    foreach( $get_price as $main_price){
                      $price = $main_price['course_price'];
                      $currency = $main_price['currency'];
                      $overPrice = $currency . '&nbsp;' . $price; } ?>
                    <?= $overPrice ?>
                    <i class="fa-solid fa-tag" style="color: purple;"></i>
                            <!-- $84.99 -->
                        </div>
                    </div>
                </div>
            </div>

            <?php
} // loop end
 ?>
            

<div class="">

<h3 class="third-section-heading text-dark fw-bold">You might also like</h3>

<div class="container-fluid cources_section mt-4">

<div class="row cource row-cols-1 row-cols-lg-5 g-3 g-lg-2">
<?php 

// echo $courses_id ;

$show_all_course = new backend();

$get_curses = $show_all_course->fetching('cource');

foreach($get_curses as $all_data_course){
  $courses_id = $all_data_course['courses_id'];
  $courses_name = $all_data_course['course_title'];
  $course_img = $all_data_course['course_img'];
  $selecting_level = $all_data_course['selecting_level'];
  $instructor_id = $all_data_course['instructor_id'];  // get the instructor name
  $select_category = $all_data_course['select_category'];  // get the category name name
?>

      <a href="" class="col text-decoration-none text-dark">
        <div class="card h-100 p-0">
          <img src="../../instructor/new/<?= $course_img  ?>" class="card-img-top p-2" alt="...">
          <div class="card-body">
            <h5 class="card-title">
            <?= $courses_name  ?>
            </h5>
            <div style="color:#005eff;" class="d-flex justify-content-between align-items-center">
              <p class="card-text"> 5.5

            <?php 
              $get_price = $show_all_course->fetching('course_prices','*',null,"courses_id = $courses_id");
              foreach($get_price as $price_data){
                // $instructor_id = $price_data['instructor_id']; 
                $course_price = $price_data['course_price']; 
                $currency = $price_data['currency']; 
                // $instructor_img = $instructor_data['instructor_img']; 
              }
            ?>

                <i class="fa-solid fa-star ms-2" style="color: #ffc800;"></i>
            
              </p>
              <p class="fw-bold">
              <?= $currency ?>
              <?= $course_price ?>
              </p>
            </div>

          <?php 
            $get_instructor = $show_all_course->fetching('instructor','*',null,"instructor_id = $instructor_id");
            foreach($get_instructor as $instructor_data){
              $instructor_id = $instructor_data['instructor_id']; 
              $fname = $instructor_data['fname']; 
              $lname = $instructor_data['lname']; 
              $instructor_img = $instructor_data['instructor_img']; 
            }
          ?>

            <div class="d-flex justify-content-left">
              <div class="Instructor_img">
                <img src="../../<?= $instructor_img ?>" alt="">
              </div>
              <p class="Instructor-text fw-bold">Mr 
                <?=  $fname  ?>
              </p>
            </div>

          </div>
        </div>
      </a>

<?php } ?>

</div>
</div>
</div>


</div>
          
                  
        </div>

    </div>
    <div class="hero-section-second">
        <h5 class="mt-2 ms-3 fw-bold text-secondary">Total</h5>
        <h2 class="fw-bold ms-3 text-dark">
        <?php 
$register_id = $_SESSION['id'];
$courses = new backend();
$course_prices = $courses->fetching('cart_items', '*', null, "registration_id = $register_id");

$total_price = 0;

foreach ($course_prices as $cart_item) {
    $course_id = $cart_item['courses_id'];
    
    // Fetch the main price of the course
    $course_price_info = $courses->fetching('course_prices', '*', null, "courses_id = $course_id");

    if (!empty($course_price_info)) {
        $course_price = $course_price_info[0]['course_price'];
        
        // Add the course price to the total
        $total_price += $course_price;
    }
}

// echo "Total Price: $total_price";
?>

<?php 
if($final_price){
  // echo $final_price;
  echo $final_price . "&nbsp; <span style='color:purple;'>PKR</span> ";
}else{
  // echo $total_price;
  echo $total_price . "&nbsp; <span style='color:purple;'>PKR</span> ";
}
?>

          <!-- $84.99 -->
        </h2>

<?php 
 $show_course_id = $show_data->fetching('cart_items','*','cource ON cart_items.courses_id = cource.courses_id',"registration_id = $user_id");
 $all_ids = '';
 foreach($show_course_id as $final_id){
  // $all_id = $final_id['courses_id'];
  $all_ids .= $final_id['courses_id'] . ',';
  // var_dump($all_id);
  } 
  $all_ids = rtrim($all_ids, ',');
  $link = "<a href='checkout.php?final_price=$final_price&total_price=$total_price&courses_id=$all_ids&user_id=$user_id' class='btn hero-section-second-btn'>Checkout</a>";

  echo $link;
  ?>        
  
 
  
    
        <div class="hero-section-second-row"></div>
    </div>

    <div style="position:absolute; top:300px; left:74%; width:50%; overflow:hidden;">
  <h6>
    <strong>Coupons are applied </strong>
  </h6>

  <?php
  //  $course_id

  $show_course = new backend();

  $couponDataCheck = $show_course->fetching('coupons','*',null,"courses_id = $course_id");

  if(!empty($couponDataCheck)){

    foreach($couponDataCheck as $AvailableData){
      $coupon = $AvailableData['coupon'];
      $coupon_percent = $AvailableData['coupon_percent'];
    }
?>

<p class="text-decoration-underline">Available Coupon <span style="text-decoration:none!important;" class="ms-2 me-2 fw-bold"><?=$coupon?></span> <span style="color:purple; font-weight:bold;text-decoration:none!important;"><?=$coupon_percent?>% off</span></p>

<?php 
  }else{
 ?>
 <p class="text-decoration-underline fw-bold text-danger">No coupon Available for this courses</p>
 <?php
  } // else part ends 
  ?>


  <form action="coupon_data.php" method="post">
   <div class="d-flex justify-content-left">
   <input type="hidden" class="form-control" name="total_price" value="<?= $total_price ?>">
   <input type="text" class="form-control" style="width:234px;" name="coupon_name" placeholder="Enter Coupon">
    <input type="submit" value="Apply" name="coupon_submit" class="btn btn-sm pe-3 ps-3 fw-bold text-light" style="background-color:purple; font-size:18px;">
   </div>
  </form>

</div>


</div>



</div>




<?php 
 } // else part
?>



    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>


</body>

</html>

<?php } ?>