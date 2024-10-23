<?php 
include("../../back.php");
?>
<!DOCTYPE html>
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

    <link rel="stylesheet" href="../../assets/css/home.css">
    <link rel="stylesheet" href="../../assets/css/responsive.css">
    <link rel="stylesheet" href="../../assets/css/testimonial.css">
    <style>
        .course-slider {
            overflow: hidden;
        }

        .courses {
            display: flex;
            flex-wrap: wrap;
            gap: 10px; /* Adjust gap as needed */
        }

        .course {
            width: calc(33.33% - 10px); /* Adjust width as needed */
        }

        .instructor_img_special{
            height: 30px;
            width: 30px;
            border-radius: 100px;
        }
        .course a {
            display: block;
            text-decoration: none;
            color: inherit;
            cursor: pointer;
        }

        .course .card {
            cursor: pointer;
        }

        .prev-btn,
        .next-btn {
            margin-top: 10px; /* Adjust margin as needed */
        }
    </style>

    <title>Website</title>

</head>
<body>

<div class="container mt-5 d-flex justify-content-between align-items-center">
    <h3> <strong>
            Many types of <span class="main_font_color"> Courses </span>
        </strong>
    </h3>

    <nav>
        <ul class="pagination">
            <li class="page-item btn prev-btn page-link me-3 rounded-pill bg-primary" style="display: none;">
                <i class="fa-solid fa-less-than" style="color: #fdfdfd;"></i>
            </li>
            <li class="page-item btn next-btn page-link rounded-pill bg-primary">
                <i class="fa-solid fa-greater-than" style="color: #ffffff;"></i>
            </li>
        </ul>
    </nav>
</div>

<div class="container mt-5">

    <div class="row row-cols-1 row-cols-md-3 g-4 courses">
        <!-- Courses will be dynamically added here -->
        <!-- Course 1 -->

        <?php 
        $getCources = new backend();
        $num = 3;
        $allCources = $getCources->fetching('cource');

        $index = 2;

        if(count($allCources[$index])){

          // var_dump($allCources);
        
        foreach($allCources as $mainCources){
            $courses_id = $mainCources['courses_id'];
            $Ins_id = $mainCources['instructor_id'];
            $course_type = $mainCources['course_type'];
            $course_title = $mainCources['course_title'];
            $course_img = $mainCources['course_img'];
            $course_video = $mainCources['course_video'];
            ?>

<div class="col course active">

      <a href="course_select.php?course_id=<?= $courses_id ?>" class="text-decoration-none text-dark">
        <div class="col">
          <div class="card h-100">
           <img src="../../instructor/new/<?= $mainCources['course_img'] ?>" class="card-img-top p-2" alt="...">
            <div class="card-body">
              <h5 class="card-title">
                <!-- Learn JavaScript Developement From Basic to Advance -->
                <?= $course_title.$courses_id ?>
              </h5>
              <div style="color:#005eff;" class="d-flex justify-content-between">
                <p class="card-text"> 5.5
                  <i class="fa-solid fa-star ms-2" style="color: #ffc800;"></i>
                  <i class="fa-solid fa-star" style="color: #ffc800;"></i>
                  <i class="fa-solid fa-star" style="color: #ffc800;"></i>
                  <i class="fa-solid fa-star" style="color: #ffc800;"></i>
                  <i class="fa-solid fa-star" style="color: #ffc800;"></i>
                </p>
                <?php 
                if($course_type === 'Free'){
                  ?>
                 <span class="badge fw-bold" style="height:23px;display:block;color:white; background-color:red">Free</span>
                  <?php
              
                }else{
      
                  $course_price = $getCources->fetching('course_prices','*',null,"courses_id = $courses_id");
                  foreach($course_price as $main_price){
                    $price = $main_price['course_price'];
                    $currency = $main_price['currency'];
                    $overPrice = $currency . '&nbsp;' . $price;
                } // for end
               ?>
                <p class='fw-bold'>
               <?=  $overPrice ?>
                  <!-- $50.00 -->
                </p>
               <?php
                }// else end
                ?>
               
              </div>
              <div>
                <div class="d-flex justify-content-between">
                  <div>
                    <p class="fw-bold">
                    <?php 
                      $getinstructor = $getCources->fetching('instructor','*',null,"instructor_id = '$Ins_id'");
                      foreach($getinstructor as $InsData){
                      $insImg = $InsData['instructor_img'];  
                      ?>
                   <img class='instructor_img_special' src='../<?= $InsData['instructor_img'] ?>'>
                    <?= $InsData['fname'];?>  <?= $InsData['lname'];?>
                      <?php
                      } ?>  
                  
                  </p>
                  </div>
                  <div>
                    <h5 class="fw-bold"><span class="badge badge-color">Best Seller</span></h5>
                  </div>
                </div>
                <p><span class="fw-bold">last updated</span>
                <?php 
                  $getTime = $getCources->fetching('course_requirments','*',null,"courses_id = '$courses_id'");
                  foreach($getTime as $timeData){
                    echo $timeData['last_updated'];  
                  }
                ?>
                 </p>
                <!-- <p> <span class="fw-bold">Learning level</span> &nbsp; &nbsp; Intermediate </p> -->
              </div>
            </div>
          </div>
        </div>
      </a>

</div>  

<div class="col course active">

      <a href="course_select.php?course_id=<?= $courses_id ?>" class="text-decoration-none text-dark">
        <div class="col">
          <div class="card h-100">
           <img src="../../instructor/new/<?= $mainCources['course_img'] ?>" class="card-img-top p-2" alt="...">
            <div class="card-body">
              <h5 class="card-title">
                <!-- Learn JavaScript Developement From Basic to Advance -->
                <?= $course_title.$courses_id ?>
              </h5>
              <div style="color:#005eff;" class="d-flex justify-content-between">
                <p class="card-text"> 5.5
                  <i class="fa-solid fa-star ms-2" style="color: #ffc800;"></i>
                  <i class="fa-solid fa-star" style="color: #ffc800;"></i>
                  <i class="fa-solid fa-star" style="color: #ffc800;"></i>
                  <i class="fa-solid fa-star" style="color: #ffc800;"></i>
                  <i class="fa-solid fa-star" style="color: #ffc800;"></i>
                </p>
                <?php 
                if($course_type === 'Free'){
                  ?>
                 <span class="badge fw-bold" style="height:23px;display:block;color:white; background-color:red">Free</span>
                  <?php
              
                }else{
      
                  $course_price = $getCources->fetching('course_prices','*',null,"courses_id = $courses_id");
                  foreach($course_price as $main_price){
                    $price = $main_price['course_price'];
                    $currency = $main_price['currency'];
                    $overPrice = $currency . '&nbsp;' . $price;
                } // for end
               ?>
                <p class='fw-bold'>
               <?=  $overPrice ?>
                  <!-- $50.00 -->
                </p>
               <?php
                }// else end
                ?>
               
              </div>
              <div>
                <div class="d-flex justify-content-between">
                  <div>
                    <p class="fw-bold">
                    <?php 
                      $getinstructor = $getCources->fetching('instructor','*',null,"instructor_id = '$Ins_id'");
                      foreach($getinstructor as $InsData){
                      $insImg = $InsData['instructor_img'];  
                      ?>
                   <img class='instructor_img_special' src='../<?= $InsData['instructor_img'] ?>'>
                    <?= $InsData['fname'];?>  <?= $InsData['lname'];?>
                      <?php
                      } ?>  
                  
                  </p>
                  </div>
                  <div>
                    <h5 class="fw-bold"><span class="badge badge-color">Best Seller</span></h5>
                  </div>
                </div>
                <p><span class="fw-bold">last updated</span>
                <?php 
                  $getTime = $getCources->fetching('course_requirments','*',null,"courses_id = '$courses_id'");
                  foreach($getTime as $timeData){
                    echo $timeData['last_updated'];  
                  }
                ?>
                 </p>
                <!-- <p> <span class="fw-bold">Learning level</span> &nbsp; &nbsp; Intermediate </p> -->
              </div>
            </div>
          </div>
        </div>
      </a>

</div> 
        <?php
        } // loop end here
      }else{ // if condition end here
          echo null;
        } 
      ?>







        <!-- Add more course cards here -->

    </div>
    <div class="d-flex justify-content-center mb-5">
        <a href="cources.php" class="btn btn-primary pt-2 pt-2 ps-3 pe-3 mt-5">Other Courses
            <i class="fa-solid fa-arrow-right ms-2" style="color: #ffffff;"></i>
        </a>
    </div>
</div>

<script>
    document.addEventListener("DOMContentLoaded", function () {
        const prevBtn = document.querySelector('.prev-btn');
        const nextBtn = document.querySelector('.next-btn');
        const courses = document.querySelectorAll('.row.courses .col');
        const numCourses = courses.length;
        const coursesToShow = 3; // Number of courses to show at once
        let currentIndex = 0;

        function updateVisibility() {
            courses.forEach(function (course, index) {
                if (index >= currentIndex && index < currentIndex + coursesToShow) {
                    course.style.display = 'block';
                } else {
                    course.style.display = 'none';
                }
            });

            // Update visibility of navigation buttons
            prevBtn.style.display = currentIndex === 0 ? 'none' : 'block';
            nextBtn.style.display = currentIndex >= numCourses - coursesToShow ? 'none' : 'block';
        }

        // Initially show the first three courses
        updateVisibility();

        nextBtn.addEventListener('click', function () {
            if (currentIndex < numCourses - coursesToShow) {
                currentIndex++;
                updateVisibility();
            }
        });

        prevBtn.addEventListener('click', function () {
            if (currentIndex > 0) {
                currentIndex--;
                updateVisibility();
            }
        });
    });
</script>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>

</body>
</html>
