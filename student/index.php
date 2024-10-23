<?php 
  include("../back.php");
  if(isset($_SESSION['login'])){
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

    <!-- <link rel="stylesheet" href="../assets/css/home.css">
    <link rel="stylesheet" href="../assets/css/responsive.css"> -->

  <title>Website</title>

  
  <style>
    .badge-color {
      background-color: rgb(236, 235, 152);
      color: black;
    }
    .instructor_img{
      height: 30px;
      width: 30px;
      border-radius: 100px;
    }
   .card-img-top{
    height:35vh ;
    }

    .enrollment-section {
      background-color: #007bff; /* Blue Background */
      padding: 20px; /* Further reduced padding */
      text-align: center;
      border-radius: 15px;
      box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.1);
    }
    .enrollment-icon {
      font-size: 72px;
      color: #fff; /* White Icon Color */
      animation: pulse 2s infinite alternate;
    }
    .enrollment-message {
      font-size: 24px;
      margin-top: 15px; /* Reduced margin */
      color: #fff; /* White Text Color */
    }
    .remove_course{
      display:block;
      width:40px;
    }
    @keyframes pulse {
      from {
        transform: scale(1);
      }
      to {
        transform: scale(1.1);
      }
    }
    @media (max-width: 576px) {
      .enrollment-icon {
        font-size: 48px;
      }
      .enrollment-message {
        font-size: 20px;
      }
    }
  </style>


  </style>

</head>

<body>

<div class="container">

<div class="d-flex mt-5 justify-content-between align-items-center">
<h2 class="fw-bold">Lets Start Learning, Name</h2>
<a class="fw-bold" href="dashboard.php">My learning</a>
</div>

<div class="row mt-4 justify-content-around align-items-center">

<?php 
$register_id = $_SESSION['id'];
$all_data = new backend();
$get_register_id = $all_data->fetching('enrollments','*',null,"registration_id = $register_id LIMIT 2");
// echo "Number of records: " . count($get_register_id); 
if(!empty($get_register_id)){
foreach($get_register_id as $first){
  $courses_id = $first['courses_id'];

  // echo $courses_id;
  $get_courses_id = $all_data->fetching('cource','*',null,"courses_id = $courses_id");
  foreach($get_courses_id as $courses_data_all){
   $courses_id = $courses_data_all['courses_id'];
   $course_title = $courses_data_all['course_title'];
   $course_img = $courses_data_all['course_img'];

?>
  <a href="video_gallery.php?course_id=<?=$courses_id?>" class="card mb-3 col-md-3 text-decoration-none text-dark" style="width: 540px;">
  <div class="row g-0">
    <div class="col-md-4">
      <img src="../instructor/new/<?= $course_img ?>" class="img-fluid rounded-start" alt="...">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title"><?= $course_title ?></h5>
       <?php 
      
         $get_first = $all_data->fetching('course_requirments','*',null,"courses_id = $courses_id");
         foreach($get_first as $get_first_all){
          $last_updated = $get_first_all['last_updated']; }
       ?>
       
        <p class="card-text"><small class="text-muted">Last updated <?=  $last_updated ?></small>
      </p>
    
      </div>
    </div>
  </div>
  </a>
<?php
  } // inslide loop

} // first loop

}else{
?>
<div class="container-fluid">
  <div class="row">
    <div class="col-md-12">
      <div class="enrollment-section">
        <i class="enrollment-icon fas fa-graduation-cap"></i>
        <div class="enrollment-message">
          <p>You haven't enrolled in any course yet.</p>
          <p>Start your learning journey now!</p>
        </div>
      </div>
    </div>
  </div>
</div>
<?php
}
?>




</div>

</div>

<h3 class="container mt-4 text-center"> <strong>
        Other Cources from<span class="main_font_color"> Educare </span>
      </strong>
    </h3>


    <div class="container mt-4">
    <div class="row row-cols-1 row-cols-lg-3 g-2 g-lg-3">

    <?php 
    $cources = new backend();

    $getCourcesStatus = $cources->fetching('courses_status','*',null,null);

    if(!empty($getCourcesStatus)){
      
      foreach($getCourcesStatus as $StatusData){
        $course_status = $StatusData['course_status'];
  
    if($course_status == 'Approved'){

      $courses_id = $StatusData['courses_id'];

    $getCources = $cources->fetching('cource','*',null,"courses_id = $courses_id");
    foreach($getCources as $allCources){
    $courses_id = $allCources['courses_id'];
    $course_type = $allCources['course_type'];
    $Ins_id = $allCources['instructor_id']; ?>
 
 <!-- section/index.php -->
      <a href="course_select.php?course_id=<?= $courses_id ?>" class="text-decoration-none text-dark">
        <div class="col">
          <div class="card h-100">
           <img src="../instructor/new/<?= $allCources['course_img'] ?>" class="card-img-top p-2" alt="...">
            <div class="card-body">
              <h5 class="card-title">
                <!-- Learn JavaScript Developement From Basic to Advance -->
                <?= $allCources['course_title'] . $courses_id  ?>
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
      
                  $course_price = $cources->fetching('course_prices','*',null,"courses_id = $courses_id");
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
                      $getinstructor = $cources->fetching('instructor','*',null,"instructor_id = '$Ins_id'");
                      foreach($getinstructor as $InsData){
                      $insImg = $InsData['instructor_img'];  
                      ?>
                   <img class='instructor_img' src='../<?= $InsData['instructor_img'] ?>'>
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
                  $getTime = $cources->fetching('course_requirments','*',null,"courses_id = '$courses_id'");
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

      <?php
    }// outer for loops ends 

  } // if inside loop 
  else{
      // echo "<h1>There not any course approved by the ADMIN</h1>";
      echo null;
  }// else inside loop


      }// inside outer if outer for loops ends


}// outer if ends 
else{
      echo "<h1>No courses found</h1>";
}// outer else ends 

  
    ?>

    </div>
  </div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>

</body>

</html>

<?php
}else{
   include("log1.php");
}
?>
