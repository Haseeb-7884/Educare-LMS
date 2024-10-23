<?php 
include("../../back.php");
$courses_id = $_GET['courses_id'];
$status = $_GET['status'];
$register_id = $_SESSION['id'];
// echo $courses_id;
// echo $register_id;
$get_data = new backend();
$enrollments = $get_data->insertion('enrollments',array('status'=>$status,'courses_id'=>$courses_id,'registration_id'=>$register_id));
$cources_data = $get_data->fetching('cource','*',null,"courses_id = $courses_id");
foreach($cources_data as $main_data){
  $course_title = $main_data['course_title'];
  $select_category = $main_data['select_category'];
  $instructor_id = $main_data['instructor_id'];
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

  <!-- <link rel="stylesheet" href="../../assets/css/freeCourse.css"> -->
  <link rel="stylesheet" href="../../assets/css/showpage.css">
</head>

<body>

  <div class="container-fluid hero-section mt-5 pt-4">
    <div class="hero-section-content">
      <i class="fa-solid fa-circle-check"></i>
      <h6 class="fw-bold">Great Choice, Muhammad</h6>
    </div>
    <a href="" class="btn hero-section-btn">Share this course</a>
  </div>

  <h4 class="fw-bold text-dark second-section-heading">Jump right in</h4>
  <div class="second-section bg-dark text-light">
    <div class="second-section-first">
      <div class="second-section-first-img">
        <img src="../../assets/images/2 image.jpg" alt="">
      </div>
    </div>
    <div class="second-section-second">
      <?php 
      $category_data = $get_data->fetching('cources_categories','*',null,"category_id = $select_category"); 
      foreach($category_data as $cat_data){
        $category_name = $cat_data['category_name'];
      }
      ?>
      <h4 class="fw-bold">
        <!-- JavaSript development - learn javascript development with us -->
        <?= $category_name ?> - <?= $course_title ?>
      </h4>
      <?php 
      $instructor_data = $get_data->fetching('instructor','*',null,"instructor_id = $instructor_id"); 
      foreach($instructor_data as $ins_data){
        $name = $ins_data['fname'];
      }
      ?>
      <p>By
        <?= "<strong>Mr " . $name . "</strong>"?>
        <!-- Mr Instructor -->
      </p>
      <h5>Let's Start the Course and Enhance your learning journey</h5>
      <a href="../video_gallery.php?courses_id=<?=$courses_id?>" class="btn second-section-second-btn">Start course</a>
    </div>
  </div>

  <h3 class="fw-bold text-dark third-section-heading">Other cources by <span>Educare</span></h3>

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
                <img src="../../assets/images/login.png" alt="">
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

    </div>
  </div>


  <h3 class="fw-bold text-dark fourth-section-heading">Top cources by <a href="">Best Sellers</a></h3>

  <div class="container-fluid cources_section mt-4">
    <div class="row cource row-cols-1 row-cols-lg-5 g-3 g-lg-3">

      <a href="" class="col text-decoration-none text-dark ">
        <div class="card h-100 p-0">
          <img src="../../assets/images/web-development.jpg" class="card-img-top p-2" alt="...">
          <div class="card-body">
            <h5 class="card-title">
              Learn Javascript developemt with us
            </h5>
            <div style="color:#005eff;" class="d-flex justify-content-between">
              <p class="card-text"> 5.5
                <i class="fa-solid fa-star ms-2" style="color: #ffc800;"></i>
                <!-- (ratings) -->
                <i class="fa-solid fa-star" style="color: #ffc800;"></i>
                <i class="fa-solid fa-star" style="color: #ffc800;"></i>
                <i class="fa-solid fa-star" style="color: #ffc800;"></i>
                <i class="fa-solid fa-star" style="color: #ffc800;"></i>
              </p>
              <p class="fw-bold">$50.00</p>
            </div>
            <div class="d-flex justify-content-between align-items-center">
              <p>Mr Instructor</p>
              <p class="badge badge-color d-block">Best Seller</p>
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
            <div class="d-flex justify-content-between align-items-center">
              <p>Mr Instructor</p>
              <p class="badge badge-color d-block">Best Seller</p>
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
            <div class="d-flex justify-content-between align-items-center">
              <p>Mr Instructor</p>
              <p class="badge badge-color d-block">Best Seller</p>
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
            <div class="d-flex justify-content-between align-items-center">
              <p>Mr Instructor</p>
              <p class="badge badge-color d-block">Best Seller</p>
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
            <div class="d-flex justify-content-between align-items-center">
              <p>Mr Instructor</p>
              <p class="badge badge-color d-block">Best Seller</p>
            </div>
          </div>
        </div>
      </a>

    </div>
  </div>


  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>

</body>

</html>

<?php } ?>