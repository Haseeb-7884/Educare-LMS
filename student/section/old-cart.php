<?php 
include("../../back.php");
if(isset($_SESSION['auth'])){
  $show_course = new backend();
  $user_id = $_SESSION['id'];
  $fetch_data = $show_course->fetching('cart_items','*',null,"registration_id = $user_id");
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

    <!-- <link rel="stylesheet" href="../../assets/css/cart.css"> -->
    <link rel="stylesheet" href="cart.css">

</head>

<h1 class="container-text fw-bold text-dark mt-5">Shopping Cart</h1>

<?php 
if(is_null($fetch_data)){
  echo "No items in your cart";
}else{
  ?>

<?php 
            for($i = 0; $i < count($fetch_data); $i++){
              $courses_id = $fetch_data[$i]['courses_id'];

              $number = $i + 1;

              $show_data = new backend();

              $show_course_data = $show_data->fetching('cart_items','*','cource ON cart_items.courses_id = cource.courses_id',null);

              $courses_id = $show_course_data[$i]['courses_id'];
              $courses_name = $show_course_data[$i]['course_title'];
              $course_img = $show_course_data[$i]['course_img'];
              $selecting_level = $show_course_data[$i]['selecting_level'];
              $instructor_id = $show_course_data[$i]['instructor_id'];  // get the instructor name
              $select_category = $show_course_data[$i]['select_category'];  // get the category name name
              // also have to get prie

            ?>
<div class="hero-section">
    <div class="hero-section-first">
        <div class="section-first-container">
            <h6 class="mt-1 text-dark"><?= $number ?> Course in cart</h6>
            <div class="section-first-horizontal-row"></div>
            <div class="section-first-content d-flex justify-content-between">
                <div class="section-first-content-first d-flex justify-content-left">
                    <img src="../../instructor/new/<?= $course_img ?>" alt="no image found" class="first-content-first-img">
                    <div class="ms-3 section-first-content-first-desc">
                        <h6 class="fw-bold text-dark">
                          <?php
                          $get_category = $show_data->fetching('cources_categories','*',null,"category_id = $select_category");
                          foreach($get_category as $main_category){
                            $selected_category = $main_category['category_name']; } ?>

                        <?= $selected_category ?> - <?= $courses_name ?>
                        <!-- Development - Learn Javascript Development with us -->
                      </h6>
                      <?php 
                      $get_instructor = $show_data->fetching('instructor','*',null,"instructor_id = $instructor_id");
                      foreach($get_instructor as $main_instructor){
                        $fname = $main_instructor['fname'];
                        $lname = $main_instructor['lname']; }  
                      ?>
                        <p>By Mr. <?= $fname ?>
                          <!-- Mr Instructor -->
                        </p>
                        <div class="content-first-desc-content d-flex justify-content-left">
                            <p class="badge badge-color d-block">Best Seller</p>
                            <ul>
                                <li>80 lectures</li>
                            </ul>
                            <ul>
                                <li>
                                  <?= $selecting_level ?>
                                  <!-- Beginner -->
                                </li>
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
                        <div><a href="" class="d-block text-decoration-none"
                                style="color:purple; margin-bottom: 7px;">Remove</a>
                            <a href="" class="d-block text-decoration-none"
                                style="color:purple; margin-bottom: 8px;">Save for Later</a>
                            <a href="" class="d-block text-decoration-none" style="color:purple;">Move to Wishlist</a>
                        </div>
                        <div class="fw-bold" style="font-size: 18px;">
                            <!-- icon after price  -->
                            $84.99
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="hero-section-second">
        <h5 class="mt-2 ms-3 fw-bold text-secondary">Total</h5>
        <h2 class="fw-bold ms-3 text-dark">$84.99</h2>
        <a href="" class="btn hero-section-second-btn">Checkout</a>
        <div class="hero-section-second-row"></div>
    </div>
</div>

<?php
} // for loop part compeleted
} // else part compeleted
?>

<!-- work is ending here  -->

<h3 class="third-section-heading text-dark fw-bold">You might also like</h3>

<div class="container-fluid cources_section mt-4">
    <div class="row cource row-cols-1 row-cols-lg-5 g-3 g-lg-3">

      <a href="" class="col text-decoration-none text-dark ">
        <div class="card h-100 p-0">
          <img src="../../assets/images/web-development.jpg" class="card-img-top p-2" alt="...">
          <div class="card-body">
            <h5 class="card-title">Web Development to Advance</h5>
            <div style="color:#005eff;" class="d-flex justify-content-between align-items-center">
              <p class="card-text"> 5.5
                <i class="fa-solid fa-star ms-2" style="color: #ffc800;"></i>
                <i class="fa-solid fa-star" style="color: #ffc800;"></i>
                <i class="fa-solid fa-star" style="color: #ffc800;"></i>
                <i class="fa-solid fa-star" style="color: #ffc800;"></i>
                <i class="fa-solid fa-star" style="color: #ffc800;"></i>
              </p>
              <p class="fw-bold">$50.00</p>
            </div>
            <div class="d-flex justify-content-left">
              <div class="Instructor_img">
                <img src="../../assets/images/second-person.jpg" alt="">
              </div>
              <p class="Instructor-text fw-bold">Mr Instructor</p>
            </div>
          </div>
        </div>
      </a>
      <a href="" class="col text-decoration-none text-dark">
        <div class="card">
          <img src="../../assets/images/web-development.jpg" class="card-img-top p-2" alt="...">
          <div class="card-body">
            <h5 class="card-title">Web Development to Advance</h5>
            <div style="color:#005eff;" class="d-flex justify-content-between">
              <p class="card-text"> 5.5
                <i class="fa-solid fa-star ms-2" style="color: #ffc800;"></i>
                <i class="fa-solid fa-star" style="color: #ffc800;"></i>
                <i class="fa-solid fa-star" style="color: #ffc800;"></i>
                <i class="fa-solid fa-star" style="color: #ffc800;"></i>
                <i class="fa-solid fa-star" style="color: #ffc800;"></i>
              </p>
              <p class="fw-bold">$50.00</p>
            </div>
            <div class="d-flex justify-content-left">
              <div class="Instructor_img">
                <img src="../../assets/images/login.png" alt="">
              </div>
              <p class="Instructor-text fw-bold">Mr Instructor</p>
            </div>
            <p class="badge badge-color">Best Seller</p>
          </div>
        </div>
      </a>
      <a href="" class="col text-decoration-none text-dark">
        <div class="card h-100">
          <img src="../../assets/images/web-development.jpg" class="card-img-top p-2" alt="...">
          <div class="card-body">
            <h5 class="card-title">Web Development to Advance</h5>
            <div style="color:#005eff;" class="d-flex justify-content-between">
              <p class="card-text"> 5.5
                <i class="fa-solid fa-star ms-2" style="color: #ffc800;"></i>
                <i class="fa-solid fa-star" style="color: #ffc800;"></i>
                <i class="fa-solid fa-star" style="color: #ffc800;"></i>
                <i class="fa-solid fa-star" style="color: #ffc800;"></i>
                <i class="fa-solid fa-star" style="color: #ffc800;"></i>
              </p>
              <p class="fw-bold">$50.00</p>
            </div>
            <div class="d-flex justify-content-left">
              <div class="Instructor_img">
                <img src="../../assets/images/first-person.jpg" alt="">
              </div>
              <p class="Instructor-text fw-bold">Mr Instructor</p>
            </div>
          </div>
        </div>
      </a>
      <a href="" class="col text-decoration-none text-dark">
        <div class="card h-100">
          <img src="../../assets/images/web-development.jpg" class="card-img-top p-2" alt="...">
          <div class="card-body">
            <h5 class="card-title">Web Development to Advance</h5>
            <div style="color:#005eff;" class="d-flex justify-content-between">
              <p class="card-text"> 5.5
                <i class="fa-solid fa-star ms-2" style="color: #ffc800;"></i>
                <i class="fa-solid fa-star" style="color: #ffc800;"></i>
                <i class="fa-solid fa-star" style="color: #ffc800;"></i>
                <i class="fa-solid fa-star" style="color: #ffc800;"></i>
                <i class="fa-solid fa-star" style="color: #ffc800;"></i>
              </p>
              <p class="fw-bold">$50.00</p>
            </div>
            <div class="d-flex justify-content-left">
              <div class="Instructor_img">
                <img src="../../assets/images/first-person.jpg" alt="">
              </div>
              <p class="Instructor-text fw-bold">Mr Instructor</p>
            </div>
          </div>
        </div>
      </a>
      <a href="" class="col text-decoration-none text-dark">
        <div class="card h-100">
          <img src="../../assets/images/web-development.jpg" class="card-img-top p-2" alt="...">
          <div class="card-body">
            <h5 class="card-title">Web Development to Advance</h5>
            <div style="color:#005eff;" class="d-flex justify-content-between">
              <p class="card-text"> 5.5
                <i class="fa-solid fa-star ms-2" style="color: #ffc800;"></i>
                <i class="fa-solid fa-star" style="color: #ffc800;"></i>
                <i class="fa-solid fa-star" style="color: #ffc800;"></i>
                <i class="fa-solid fa-star" style="color: #ffc800;"></i>
                <i class="fa-solid fa-star" style="color: #ffc800;"></i>
              </p>
              <p class="fw-bold">$50.00</p>
            </div>
            <div class="d-flex justify-content-left">
              <div class="Instructor_img">
                <img src="../../assets/images/first-person.jpg" alt="">
              </div>
              <p class="Instructor-text fw-bold">Mr Instructor</p>
            </div>
          <!-- best seller gos here  -->
          </div>
        </div>
      </a>

    </div>
  </div>


    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>

    </div>

</body>

</html>

<?php } ?>