
<?php  include("../../back.php");

$logID = $_SESSION['id'];

$mian_id = $_GET['course_id'];

$cources = new backend();
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

  <link rel="stylesheet" href="../../assets/css/freeCourse.css">

  <style>
  body{
    background-color: #DDE1E3;
    padding-top:15%; 
  }
.warning-container{
  margin: 0 auto;
  height: 150px;
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
  color:#C7CE26;
  font-size: 88px;
  width: 12%;
  height:100; 
}
.warning-content > div{
  width: 70%;
  height: 100%;
}
.warning-content > div > p:nth-child(1){
  font-weight: bold;
  color: #8D7A14;
  font-size: 22px;
  margin:0px;
}
.warning-content > div > p:nth-child(2){
  color: black;
  font-size: 15px;
}
.warning-content > section{
  width: 15;
  height: 100%;
  display: flex;
  justify-content:center;
  align-items:center;
}
.login_button{
  background-color:#C7CE26;
  color:white;
  text-decoration:none;
  border-radius: 5px;
  padding: 5px 20px 5px 20px;
}
.login_button:hover{
  color: white;
  background-color:#8D7A14;
}
  </style>
  
</head>

<body>

<?php
$get_enrollments = $cources->fetching('enrollments','*',null,"courses_id = $mian_id AND registration_id = $logID");

if($get_enrollments){
  ?>
    <div class="warning-container">
        <div class="warning-content">
        <i class="fa-solid fa-triangle-exclamation"></i>      
        <div>
        <p>Alert</p>
        <p>
        It Seems like you already enrolled in this course. 
        You are not allowed to enroll <br> in the same course again
        </p>
        </div>
        <section>
          <a class="login_button" href="../index.php">
                Return Back
          </a>
        </section>

        </div>
    </div>
<?php
}else{

// print_r($get_enrollments);

$getdata = $cources->fetching('cource','*',null,"courses_id='$mian_id'");
foreach($getdata as $courseData){ 
    $courses_id = $courseData['courses_id'];
    $instructor_id = $courseData['instructor_id']; ?>


  <div class="container-fluid ms-9 mt-5">
    <!-- breadcrumb start -->
    <div class=" fw-bold">
      <nav aria-label="breadcrumb" style="--bs-breadcrumb-divider: '>';">
        <ol class="breadcrumb pt-3">
          <li class="breadcrumb-item"><a href="#" class="text-decoration-none breadcrumb-color">Graphics &
          <?php 
                    $category_id = $courseData['select_category'];
                    // echo $category_id ;
                    $getdata = $cources->fetching('cources_categories','*',null,"category_id='$category_id'");
                    foreach($getdata as $mainCategory){
                        $category = $mainCategory['category_name'];
                        echo $category; } ?>      
        </a></li>
          <li class="breadcrumb-item active" aria-current="page" class="text-decoration-none breadcrumb-color">Graphic
          <?= $courseData['primary_taught'] ?>
        </li>
        </ol>
      </nav>
      <!-- breadcrumb end -->
    </div>

    <div class="hero-section">
      <div class="hero-section-first position-relative">

        <img src="../../instructor/new/<?= $courseData['course_img'] ?>" class="hero-section-first-image" alt="">

        <div class="background-color fw-bold text-light text-center">
          preview this course
        </div>

        <div class="play-button" data-bs-toggle="modal" data-bs-target="#exampleModal">
          <i class="fas fa-play button-icon"></i>
        </div>

      </div>
      <div class="hero-section-second">
        <h1 class="fw-bold">
          <!-- Full Stack Website Development with us -->
          <?= $courseData['course_title'] ?>
        </h1>
        <p class="hero-section-second-para">
          <!-- An intoduction for the development stack, learn about the technologies with a short demo to get started -->
          
          <?= $courseData['course_subtitle'] ?>
        </p>
        <div class="">
          <span class="badge badge-color">
            Free Tutorials
          </span>
          <span class="fw-bold text-dark ms-4 pt-3" style="font-size: 21px;">4.6 <i class="fa-solid fa-star"
              style="color:yellow; font-size: 15px;"></i></span>
          <span class="fw-bold">
            &nbsp; &nbsp; &nbsp; &nbsp;
            <i class="fa-solid fa-clock" style="color: #000000;"></i>
            <?php 
                  $getTime = $cources->fetching('course_requirments','*',null,"courses_id = '$mian_id'");
                  foreach($getTime as $timeData){
                    $time_data = $timeData['last_updated'];  
                  }
                ?>
            <u>last updated</u> </span> 
            <!-- 2021-04-21 --> <?= $time_data ?>
          &nbsp; &nbsp; &nbsp; &nbsp;
          <i class="fa-solid fa-globe" style="color: #000000;"></i>
          <strong>
            <!-- English -->
            <?= $courseData['select_language'] ?> 
          </strong>
        </div>
        <p class="mt-3 fw-bold p-0 section-second-para-two">Created by:&nbsp;&nbsp;<a href="">
          <!-- Mr Instructor -->
          <?php 
          $get_instructor_data = $cources->fetching('instructor','*',null,"instructor_id = $instructor_id");
          foreach($get_instructor_data as $ins_data){
            $fname = $ins_data['fname'];
          }
          ?>
          <?= "Mr. ".$fname ?>
        </a></p>
        <p class="fw-bold mb-2 mt-1 fs-4 d-block">Free</p>
        <div class="pe-3">
          <form action="enrolled_students.php" method="post" enctype="multipart/form-data">
            <input type="hidden" name="courses_id" value="<?= $courses_id ?>" >
            <input type="hidden" name="status" value="Free" >
            <input type="submit" name="enroll_submit" style="width:100%;" class="d-block bg-dark text-center pt-2 pb-2 text-decoration-none fw-bold text-light" value="Enroll Now" >
          </form>
          <!-- <a href="" class="d-block bg-dark text-center pt-2 pb-2 text-decoration-none fw-bold text-light">Enroll Now</a> -->
        </div>
      </div>
    </div>

    <div class="second-section">

      <div class="second-section-first nav-tabs-responsiveness">

        <ul class="nav nav-tabs mb-3 mt-3 nav-tab-one" id="pills-tab">
          <li class="vav-1" role="presentation">
            <button class="btn btn-color fw-bold shadow-none active" id="pills-home-tab" data-bs-toggle="pill"
              data-bs-target="#pills-home">
              What will you'll learn
            </button>
          </li>
          <li class="vav-2" role="presentation">
            <button class="btn btn-color fw-bold shadow-none ms-4" id="pills-profile-tab" data-bs-toggle="pill"
              data-bs-target="#pills-profile">
              Course content
            </button>
          </li>
          <li class="vav-3" role="presentation">
            <button class="btn btn-color fw-bold shadow-none ms-4" id="pills-contact-tab" data-bs-toggle="pill"
              data-bs-target="#pills-contact">
              Instructor
            </button>
          </li>
          <li class="vav-3" role="presentation">
            <button class="btn btn-color fw-bold shadow-none ms-4" id="pills-reviews-tab" data-bs-toggle="pill"
              data-bs-target="#pills-reviews">
              Reviews 
            </button>
          </li>
        </ul>

        <div class="tab-content tab-content-responsiveness" id="pills-tabContent">
          <div class="tab-pane fade show active" id="pills-home">
            <ul class="list_style">
              <?php 
              $get_requirements_data = $cources->fetching('course_requirments','*',null,"courses_id = $courses_id");
              foreach($get_requirements_data as $req_data){
                $short_description = $req_data['short_description'];
                echo $short_description;
              }
              ?>
              
            </ul>
          </div>

          <div class="tab-pane fade" id="pills-profile">
            profile here
          </div>

          <div class="tab-pane fade" id="pills-contact">
            contact here
          </div>

<div class="tab-pane fade" id="pills-reviews">

<h2 class="fw-bold mb-3">Top Rated Review</h2>

<div class="comment_container">
  <div class="comment_container_first">
      <div class="container_first_container">
        <img src="../../assets/images/first-person.jpg" alt="">
      </div>
  </div>
  <div class="comment_container_second">
     <p class="fw-bold" style="font-size: 20px; padding: 0px; margin: 0px;">Javier R.</p>
     <p style="font-size: 13px; padding: 0px; margin: 0px;">47 courses <br> 17 reviews</p>
    
  </div>
</div>

<p class="comment_para">I have done HTML and CSS, so I'm using the begging as as refresher but I really like how the instructor explains everything. Taken many courses and some have been dry or not explaining things very well, this instructor is very good.</p>


        </div>
       



</div>  


          </div>

        </div>
      </div>

      <div class="second-section-second">

        <div class="section-second-first" >
          <h5 class="fw-bold mt-4 ms-3 mb-4">Try free cources or enroll in paid course</h5>
          <div class="section-second-first-container bg-light">
            <i class="fa-solid fa-circle-exclamation" style="color: #000000; font-size: 30px; margin-left: 7px;"></i>
            <h6 class="ms-4 mt-1">Not sure? All cources have a 30-days money-back garuntee</h6>
          </div>
          <div class="section-second-second-container mt-4">
            <a href="" class="d-block text-decoration-none text-dark">
            <h6 class="ms-4 fw-bold mt-1">View paid Full Stack Development cource</h6>
          </a>
          </div>
        </div>

        <div class="section-second-second">
          <h5 class="fw-bold mt-4 ms-5">Free Cources</h5>
          <div class="section-second-second-para">
            <p>
            <i class="fa-solid fa-check" style="color: rgba(10, 146, 10, 0.888); margin-right: 10px;"></i>Online Video Content   <br>
            <i class="fa-solid fa-xmark" style="color: #ff0000; margin-right: 10px;"></i>Certficate of Compeletion  <br>
            <i class="fa-solid fa-xmark" style="color: #ff0000; margin-right: 10px;"></i>Instructor Q&A <br>
            <i class="fa-solid fa-xmark" style="color: #ff0000; margin-right: 10px;"></i>Instructor direct message  <br>
          </p>
          </div>
        </div>
        <div class="section-second-third">
          <h5 class="fw-bold mt-4 ms-5">Paid Cources</h5>
          <div class="section-second-second-para">
            <p>
            <i class="fa-solid fa-check" style="color: rgba(10, 146, 10, 0.888); margin-right: 10px;"></i>Online Video Content   <br>
            <i class="fa-solid fa-check" style="color: rgba(10, 146, 10, 0.888); margin-right: 10px;"></i>Certficate of Compeletion  <br>
            <i class="fa-solid fa-check" style="color: rgba(10, 146, 10, 0.888); margin-right: 10px;"></i>Instructor Q&A <br>
            <i class="fa-solid fa-check" style="color: rgba(10, 146, 10, 0.888); margin-right: 10px;"></i>Instructor direct message  <br>
          </p>
          </div>
        </div>
      </div>

    </div>

    <!-- <div class="container-fluid cources_responsivness mt-4">
      <div class="row cource row-cols-1 row-cols-lg-5 g-3 g-lg-3">
  
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
              <div>
                <p>Mr Instructor</p>
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
              <div>
                <p>Mr Instructor</p>
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
              <div>
                <p>Mr Instructor</p>
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
              <div>
                <p>Mr Instructor</p>
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
              <div>
                <p>Mr Instructor</p>
              </div>
            </div>
          </div>
        </a>
  
      </div>
    </div> -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
      crossorigin="anonymous"></script>

    <!-- Modal -->
    <div class="modal fade" style="margin-top: 120px;" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <?php 
            // echo $courses_id
            ?>
            <h5 class="modal-title" id="exampleModalLabel">Course Preview Video</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
       
          <?php 
         
          $video_data = $cources->fetching("cource","*",null,"courses_id = $courses_id");
          if(!empty($video_data)){
            foreach($video_data as $data_for_video){
              $course_video_remains = $data_for_video['course_video'];
              if(strpos($course_video_remains, ' ') !== false){
                $course_video = str_replace(' ', '', $course_video_remains);
              }else{
                $course_video =$course_video_remains;
              }
              // echo $course_video ;
              echo "<video style='height: 100%; width:100%;' controls>
    <source src='../../instructor/new/$course_video'></video>";           
}// loop ends here 
    }
  else{
      echo "Video May be Not uploaded by Instructor";
  }
?>
 <!-- <a href="../../uploads/"></a> -->
  <!-- <a href="../../instructor/new/uploads/"></a> -->

  </div>        
          </div>
      </div>
    </div>

</body>

</html>
<?php
}// inner loop end (cources)
  
} // condition end 
?>