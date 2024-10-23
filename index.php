<?php 
include ("back.php");
$get_data = new backend();
?>
<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
    integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />

    
    <link rel="stylesheet" href="assets/css/home.css">
    <link rel="stylesheet" href="assets/css/responsive.css">
    <link rel="stylesheet" href="assets/css/navbar.css">
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    
    <style>
      .instructor_img{
      margin-top:300px; 
      height: 30px !important;
      width: 30px !important;
      border-radius: 100px !important;
    }
    .swiper-button-prev {
      display: none;
    }
    .swiper-button-next{
      display: block;
    }
    .show_nextbtn_first{
      position: absolute;
      top: 205%;
      right: 10%;
      z-index: 2;
      background-color:purple;
      height: 40px;
      width: 40px;
      overflow: hidden;
      font-size: 10px !important;
      padding: 10px;
      color:white;
      border-radius:50%;
    }
    .show_prevbtn_first{
      position: absolute;
      top: 205%;
      left: 80%;
      z-index: 2;
      background-color:purple;
      height: 40px;
      width: 40px;
      overflow: hidden;
      font-size: 10px !important;
      padding: 10px;
      color:white;
      border-radius:50%;
    }
    </style>

  <title>Website</title>

</head>

<body>

 <?php 
 include("includes/navbar.php");
 include("includes/categories.php");
 ?>

  <div class="hero_section">

    <div class="container">
      <div class="row d-flex align-items-center">
        <div class="col-md-6">

          <p class="text-primary pt-5">
            <strong>Start Your Favourite Course</strong>
          </p>

          <div class="second_portion">
            <div class="first_horizontal">
              <hr>
              <div class="second_horizontal">
                <hr>
                <div class="third_horizontal">
                  <hr>
                </div>
              </div>
            </div>
          </div>
          <div>
            <h1>Now learning </h1>
            <h1> from anywhere, </h1>
            <h1> and Build your
            </h1>
            <h1> <span class="main_font_color fw-bold">bright career.</span> </h1>
          </div>

          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum sed corporis nesciunt hic cum qui,
            consequuntur voluptatibus eveniet cupiditate eum </p>

          <a href="student/index.php" class="btn hero_btn_special pt-2 pb-2 pe-3 ps-3 text-light" style="background-color: #304acf;">Start a Course</a>

        </div>

        <div class="col-md-6 position-relative hero_reponsivenes">

          <img src="assets/images/main-image-2.png" class="hero_reponsivenes" alt="">

          <div class="second_first_icon text-light ps-4" class="hero_reponsivenes">
            <i class="fa-solid fa-book ms-3 mt-2" style="color: #ffffff;"></i>
            <p> <span style="font-size: 20px;" class="fw-bold"> 1,234</span> Courses</p>
          </div>

          <div class="second_second_icon  shadow text-black ps-3" class="hero_reponsivenes">
            <p class="pt-4"><span class="fw-bold" style="color: #304acf;"> 4.5 </span><i class="fa-solid fa-star"
                style="color: #eeff00;"></i>
              <span style="font-size:13px;">Ratings (86x)</span>
            </p>
          </div>

        </div>

      </div>
    </div>

    <div class="second_third_icon rounded-pill">
      <div class="position-relative mt-2 ms-3">

        <img src="assets/images/second-person.jpg"
          class="rounded-circle second_third_icon_img second_third_icon_img_first" alt="">

        <img src="assets/images/first-person.jpg" class="rounded-circle second_third_icon_img " alt="">

        <p class="second_third_icon_decp"> <span class="main_font_color fw-bold"> 1000+ </span> students <br> Learning
          only </p>

      </div>
    </div>

  </div>

  <!-- Courses Section -->

  <div class="container cources_responsive mt-5 d-flex justify-content-between align-items-center">
    <h2> <strong>
        All <span class="main_font_color"> Courses </span> of Educare
      </strong>
    </h2>

    <form class="d-flex mb-3 position-relative">
      <i class="fa-solid fa-magnifying-glass pt-2 pe-3 course_search_icon"></i>
      <input class="form-control me-2 rounded-pill" type="search" placeholder="Search">
    </form>

  </div>

  <div class="container mt-5">
    <div class="row d-flex justify-content-center">
  <?php 
 $get_categories_01 = $get_data->fetching("cources_categories");
 foreach( $get_categories_01 as $get_categories_first){
  $category_name = $get_categories_first['category_name'];
  ?>


      <a href="" class="col-md-4 mb-3 text-decoration-none text-dark cources_responsive_section">
        <div>
          <div class="card">
            <div class="card-body">
              <img src="assets/images/<?= $get_categories_first['cateogry_image'] ?>" class="course_pics" alt="">
              <h5 class="card-title text-center"><?= $category_name ?></h5>
            </div>
          </div>
        </div>
      </a>
      
      <?php
 }
 ?>
 </div>
</div>

  <!-- <div class="container mt-4">
    <div class="row d-flex justify-content-center">


 

    </div>
  </div> -->


  <div class="container mt-5 d-flex justify-content-between align-items-center">
    <h3> <strong>
        Many types of <span class="main_font_color"> Courses </span>
      </strong>
    </h3>

    <!-- <nav>
      <ul class="pagination">
        <li class="page-item"><a class="page-link me-3 rounded-pill bg-primary" href="courses.php">
            <i class="fa-solid fa-less-than" style="color: #fdfdfd;"></i>
          </a></li>
        <li class="page-item"><a class="page-link  rounded-pill bg-primary" href="courses.php">
            <i class="fa-solid fa-greater-than" style="color: #ffffff;"></i>
          </a></li>
      </ul>
    </nav> -->

  </div>



<div class="container hero_section_courses mt-5 mb-3">
   <div class="swiper newSwiper" style="height: 77vh !important; overflow:hidden!; z-index:1!important;">
    <div class="swiper-wrapper">


    <?php 
$cources = new backend();
$getCourcesStatus = $cources->fetching('courses_status');

$processedCourses = []; // Array to track processed courses

if (!empty($getCourcesStatus)) {
    foreach ($getCourcesStatus as $StatusData) {
        $course_status = $StatusData['course_status'];

        if ($course_status === 'Approved') {
            $Approved_courses_id = $StatusData['courses_id'];

            // Check if this course ID has already been processed
            if (in_array($Approved_courses_id, $processedCourses)) {
                continue; // Skip this course if it has been processed
            }

            $getCources = $cources->fetching("cource", "*", null, "courses_id = $Approved_courses_id");

            foreach ($getCources as $allCources) {
                $courses_id = $allCources['courses_id'];
                $course_type = $allCources['course_type'];
                $Ins_id = $allCources['instructor_id'];
                $course_type_trimed = trim($course_type);

                if ($course_type_trimed !== 'Free') {
                    $getPricedCourses = $cources->fetching('coupons');
                    $isDiscounted = false;

                    if (!empty($getPricedCourses)) {
                        foreach ($getPricedCourses as $DiscountedData) {
                            $Discounted_courses_id = $DiscountedData['courses_id'];
                            if ($Discounted_courses_id === $courses_id) {
                                $isDiscounted = true;
                                break;
                            }
                        }
                    }

                    if (!$isDiscounted) {
                        // Add the course ID to the processed array
                        $processedCourses[] = $Approved_courses_id;

                        // Output the course data as it is not discounted
                        ?>
                        <div class="swiper-slide">
                            <a href="student/course_select.php?course_id=<?= $courses_id ?>" class="text-decoration-none text-dark">
                                <div class="col">
                                    <div class="card h-100">
                                        <img src="instructor/new/<?= $allCources['course_img'] ?>" class="card-img-top p-2" alt="...">
                                        <div class="card-body">
                                            <h5 class="card-title"><?= $allCources['course_title'] ?></h5>
                                            <div style="color:#005eff;" class="d-flex justify-content-between">
                                                <p class="card-text">5.5
                                                    <i class="fa-solid fa-star ms-2" style="color: #ffc800;"></i>
                                                    <i class="fa-solid fa-star" style="color: #ffc800;"></i>
                                                    <i class="fa-solid fa-star" style="color: #ffc800;"></i>
                                                    <i class="fa-solid fa-star" style="color: #ffc800;"></i>
                                                    <i class="fa-solid fa-star" style="color: #ffc800;"></i>
                                                </p>
                                                <?php
                                                if ($course_type === 'Free') {
                                                    ?>
                                                    <span class="badge fw-bold" style="height:23px;display:block;color:white; background-color:red">Free</span>
                                                    <?php
                                                } else {
                                                    $course_price = $cources->fetching('course_prices', '*', null, "courses_id = $courses_id");
                                                    foreach ($course_price as $main_price) {
                                                        $price = $main_price['course_price'];
                                                        $currency = $main_price['currency'];
                                                        $overPrice = $currency . '&nbsp;' . $price;
                                                    }
                                                    ?>
                                                    <p class='fw-bold'><?= $overPrice ?></p>
                                                    <?php
                                                }
                                                ?>
                                            </div>
                                            <div>
                                                <div class="d-flex justify-content-between">
                                                    <div>
                                                        <p class="fw-bold">
                                                            <?php
                                                            $getinstructor = $cources->fetching('instructor', '*', null, "instructor_id = '$Ins_id'");
                                                            foreach ($getinstructor as $InsData) {
                                                                $insImg = $InsData['instructor_img'];
                                                                echo $InsData['fname'] . ' ' . $InsData['lname'];
                                                            }
                                                            ?>
                                                        </p>
                                                    </div>
                                                    <div>
                                                        <h5 class="fw-bold"><span class="badge badge-color">Best Seller</span></h5>
                                                    </div>
                                                </div>
                                                <p><span class="fw-bold">Last updated</span>
                                                    <?php
                                                    $getTime = $cources->fetching('course_requirments', '*', null, "courses_id = '$courses_id'");
                                                    foreach ($getTime as $timeData) {
                                                        echo $timeData['last_updated'];
                                                    }
                                                    ?>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <?php
                    }
                }
            }
        }
    }
} else {
    echo "<h1>No courses found</h1>";
}
?>



</div>


    <div class="d-flex justify-content-center mb-5">
      <a href="cources.php" class="btn btn-primary pt-2 pt-2 ps-3 pe-3 mt-5">Other Courses
        <i class="fa-solid fa-arrow-right ms-2" style="color: #ffffff;"></i>
      </a>
    </div>



  </div>
  <div class="swiper-button-next show_nextbtn_first"></div>
    <div class="swiper-button-prev show_prevbtn_first"></div>
    <div class="swiper-pagination"></div>
</div>

  <!-- instructor section starts -->
  <div class="instructor_bg mt-5 position-relative">

    <div class="container pt-5 d-flex justify-content-between">

      <div class="pt-4 ps-3">
        Become an instructor
        <h2 class="fw-bold">You can join with
        </h2>
        <h2 class="fw-bold"> <span class="main_font_color"> EduCare </span> as a Instructor</h2>
        <img src="assets/images/arrow-2-removebg-preview.png" class="instructor_img_main" alt="">
      </div>

      <div>
        <?php 
        // $LogID = $_SESSION['id'];
        ?>
        <a href="instructor/dashboard/linker.php" class="btn btn-primary mt-5 me-5">Become an instructor</a>
      </div>
    </div>
  </div>
  <!-- instructor sestion ends -->

   <div class="container mt-5 d-flex justify-content-between align-items-center">
    <h3> <strong>
        Our Discount <span class="main_font_color"> Courses </span>
      </strong>
    </h3>



  </div>



  <!-- Slider main container -->
  
  <div class="container mt-4">

  <div class="swiper mySwiper">
    <div class="swiper-wrapper">
      <?php 
      $GetOnject = new backend();
      $fetchData = $GetOnject->fetching("coupons","*",null,null);
      if(!empty($fetchData)){

        foreach($fetchData as $IdData){
          $courses_id = $IdData['courses_id'];
          $discountPercent = $IdData['coupon_percent'];

          // echo $courses_id ;

          $fetchCourses = $GetOnject->fetching("cource","*",null,"courses_id = $courses_id");

          if(!empty($fetchCourses)){

            foreach($fetchCourses as $coursesData){
              $courses_id = $coursesData['courses_id'];
              $course_title = $coursesData['course_title'];
              $courses_img = $coursesData['course_img'];
              $instructor_id = $coursesData['instructor_id'];

              // echo  $course_title . $instructor_id;

              $fetchInstructor = $GetOnject->fetching("instructor","*",null,"instructor_id = $instructor_id");

              if(!empty($fetchInstructor)){

                foreach($fetchInstructor as $insData){
                  $fname = $insData['fname'];
                }// instructor loop ends 

              }else{
                echo "Instructor not found";
              }

              $fetchupdate = $GetOnject->fetching("course_requirments","*",null,"courses_id = $courses_id");

              if(!empty($fetchupdate)){

                foreach($fetchupdate as $LatestUpdate){
                  $last_updated = $LatestUpdate['last_updated'];
                }

              }else{
                echo "Update Not Found";
              }

              $fetchPrice = $GetOnject->fetching('course_prices','*',null,"courses_id = $courses_id");

              if(!empty($fetchPrice)){

                foreach($fetchPrice as $CommonPrice){
                  $Course_price =  $CommonPrice['course_price'];
                  
                } // price loops ends

              }else{
                  echo "Price not found";
              }              

              ?>

              <div class="swiper-slide">
              <a href="http://localhost/PHP-OOP/PROJECT/student/section/index.php?course_id=<?=$courses_id?>" class="col text-decoration-none text-dark">
                      <div class="card h-100">
                        <img src="instructor/new/<?= $courses_img?>" class="card-img-top p-2" alt="...">
                        <div class="card-body">
                          <h5 class="card-title fw-bold p-0" style="font-size:16px; h5:hover{color:blue;}"><?= $course_title?></h5>
                          
                          <div style="color:#005eff;" class="d-flex justify-content-between">
                            <!-- <p class="card-text"> 5.5
                              <i class="fa-solid fa-star ms-2" style="color: #ffc800;"></i>
                              <i class="fa-solid fa-star" style="color: #ffc800;"></i>
                            </p>  -->
                            <?php
                    
                              $discount_percentage = $discountPercent / 100;
                              $discount_amount = $discount_percentage * $Course_price;
                              $final_price = $Course_price - $discount_amount;
                          
                              
?>             
                           <p class="text-dark fw-bold">
                            <strike class="text-secondary"><?=$Course_price?></strike>
                            <span class="text-dark ms-3 fw-bold"><?=$final_price?> <i class="fa-solid fa-tags"></i> </span>
                            <span class="text-primary ms-4 fw-bold">
                            <?=$discountPercent."%";?>
                            </span>
                            off
                           </p>
                         
                            
                          </div>
                          <div>
                            <p style="font-size: 14px;">Mr <?= $fname?></p>
                            <p class="mt-2"><span class="fw-bold">last updated </span> <?=$last_updated?> </p>
                          </div>
                        </div>
                      </div>
                    </a>
              </div>
              
              <?php 

            } // courses loop ends 

          }else{
            echo "courses not get";
          }

        }// first for loop 
      }else{
        echo "courses not aceesible";
      }// outer loop ends 
      ?>

    </div>
    <div class="swiper-pagination mt-5"></div>
  </div>

  
</div>
  <!-- <a href="test/slider/index2.php"></a> -->



<!-- testimonials section starts  -->

<div class="container-fluid mx-auto testimonial_section">


      <div class="textimonial_section_content">
        <div class="testimonial_section_content_first">

            <i class="fa-solid fa-quote-left"></i>
            <p>Thanks to udemy busniess, Booz Allen has armed our workforce, specifically
              its data scientists, with highly relevant and in demand tech skills that are 
              enabling consultants to stay ahead of big data trends and raise the bar on proficiency,
              skills and competencies to meet client demand.
            </p>

            <a href="" class="d-block"><strong>Read full story</strong></a>

        </div>
        <div class="testimonial_section_content_second">
                <section><img src="assets/images/first-person.jpg" alt=""></section>
                <h2>Mr Jhon Doe</h2>
                <span>principle</span>

                <p>City ABC123 street</p>

        </div>
      </div>

</div>

<!-- footer section  -->
<?php include("includes/footer.php") ?>

<!-- </div> -->

<!-- testimonials section ends  -->

<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

  <!-- Initialize Swiper -->
  <script>
    var swiper = new Swiper(".mySwiper", {
      slidesPerView: 1,
      spaceBetween: 10,
      pagination: {
        el: ".swiper-pagination",
        clickable: true,
      },
      breakpoints: {
        640: {
          slidesPerView: 2,
          spaceBetween: 20,
        },
        768: {
          slidesPerView: 4,
          spaceBetween: 40,
        },
        1024: {
          slidesPerView: 4,
          spaceBetween: 10,
        },
      },
    });

    var swiper2 = new Swiper(".newSwiper", {
      slidesPerView: 1,
      spaceBetween: 10,
      pagination: {
        el: ".swiper-pagination",
        clickable: true,
      },
      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },

     
      breakpoints: {
        640: {
          slidesPerView: 1,
          spaceBetween: 20,
        },
        768: {
          slidesPerView: 4,
          spaceBetween: 40,
        },
        1024: {
          slidesPerView: 3,
          spaceBetween: 10,
        },
      },

      on: {
        reachEnd: function () {
          // Hide next button when reaching the end
          document.querySelector('.swiper-button-next').style.display = 'none';
          document.querySelector('.swiper-button-prev').style.display = 'block';
        },
        fromEdge: function () {
          // Show next button when not at the end
          document.querySelector('.swiper-button-next').style.display = 'block';
          // document.querySelector('.swiper-button-prev').style.display = 'none';

           // Check if it's the first slide, then hide the previous button
      if (swiper2.activeIndex === 0) {
        document.querySelector('.swiper-button-prev').style.display = 'none';
      } else {
        document.querySelector('.swiper-button-prev').style.display = 'block';
      }

        }
      }

    });

  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>

</body>

</html>

