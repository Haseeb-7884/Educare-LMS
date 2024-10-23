<?php 
include('../../back.php');
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

  <!-- Fontawsome CDN -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
    integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />

  <title>Hello, world!</title>

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
   
  </style>

</head>

<body>

  <div class="container mt-4">
    <div class="row row-cols-1 row-cols-lg-3 g-2 g-lg-3">

    <?php 
    $cources = new backend();
    $getCources = $cources->fetching('cource','*');
    foreach($getCources as $allCources){
    $courses_id = $allCources['courses_id'];
    $Ins_id = $allCources['instructor_id']; ?>
 
      <a href="section/index.php?course_id=<?= $courses_id ?>" class="text-decoration-none text-dark">
        <div class="col">
          <div class="card h-100">
            <img src="../../<?= $allCources['course_img'] ?>" class="card-img-top p-2" alt="...">
            <div class="card-body">
              <h5 class="card-title">
                <!-- Learn JavaScript Developement From Basic to Advance -->
                <?= $allCources['course_title'] ?>
              </h5>
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
                <div class="d-flex justify-content-between">
                  <div>
                    <p class="fw-bold">
                    <?php 
                      $getinstructor = $cources->fetching('instructor','*',null,"instructor_id = '$Ins_id'");
                      foreach($getinstructor as $InsData){
                      $insImg = $InsData['instructor_img'];  
                      echo "<img class='instructor_img' src='../../$insImg'>"; } ?>  
                    <?= $allCources['instructor_name'] ?>
                  </p>
                  </div>
                  <div>
                    <h5 class="fw-bold"><span class="badge badge-color">Best Seller</span></h5>
                  </div>
                </div>
                <p> <span class="fw-bold">last updated</span>
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
    }
    ?>

    </div>
  </div>


  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>


</body>

</html>