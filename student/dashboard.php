<?php 
include ("../back.php");
if(isset($_SESSION['login'])){
 $login_id = $_SESSION['id'];
//  echo $login_id;
 $enrollments_data = new backend();

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

  <title>Website</title>

  <style>
    .head-color {
      height: 30vh;
    }

    .head-color h2 {
      font-size: 45px;
      padding-top: 60px;
    }

    .navtabs-spacing {
      margin-top: 23px;
    }

    .text {
      color: grey;
      text-decoration: none;
      background-color: black;
      transition: color 0.3s, text-decoration 0.3s;
    }

    .text:hover {
      color: white;
      border-bottom: 5px solid white;
    }

    .wishlist-btn {
      /* margin-top: 120px; */
      margin-left: 400px;
      justify-content: center;
    }

    .card-img-top {
      height: 27vh;
    }

    .profile_container {
      height: 50vh;
      width: 65%;
      /* padding-bottom: 40%; */
      display: flex;
      align-items:center;
      justify-content:space-between;
      gap: 30px;
      border-radius: 10px;
      overflow: hidden;
    }
    .profile_container_first{
      height:100%;
      width: 30%;
      /* background-color:yellow; */
      display: flex;
      justify-content: center;
      align-items:center;
    }
    .profile_container_second{
      height:100%;
      width: 90%;
      display:flex;
      flex-direction: column;
      padding: 40px 20px 0px 20px;
    }
    .profile_container_iamge_section{
      height: 140px;
      width: 140px;
      background-color:blue;
      overflow: hidden;
      border-radius: 50%;
    }
    .profile_container_iamge_section > img{
      height:100%;
      width:!00%;
      overflow:hidden;
    }

    .instructor_messages_main{
      display: flex;
      /* background-color: pink; */
    height: 15vh;
    justify-content: space-between;
    margin-top: 40px;
    align-items:center;
    flex-direction: row;
    gap: 200px;
    width:100%;
    }

 .instructor_messages{
  display: flex;
    /* background-color: orange; */
    height: 100%;
    justify-content: space-around;
    align-items:center;
    flex-direction: row;
    gap: 20px;
    flex: 1;
 }
 .instructor_messages_first{
  height: 100%;
  width: 20%;
  /* background-color: blue; */
 }
 .instructor_messages_first_image{
  height: 80px;
  width: 80px;
  border-radius: 50%;
  display: flex;
  justify-content: center;
  align-items: center;
  margin: 5px 0px 0px 5px;
  background-color: black;
 }
 .instructor_messages_second{
  height: 100%;
  width: 80%;
  /* background-color: yellow; */
  display: flex;
  align-items:center;
  justify-content:left;
  flex-direction: column;
 }
 .instructor_messages_second > p{
  font-size: 13px;
  font-weight: bold;
  margin-top: 5px;
  overflow: hidden;
 }
 .navtabs-spacing {
    margin-top: 43px !important;
}
 .instructor_messages_second > span{
  font-size: 14px;
  font-weight: bold;
  display: flex;
  flex-direction: row;
  gap: 20px;
  justify-content: left;
 }

  </style>

</head>

<body>


  <div class="bg-dark mt-5 head-color">
    <div class="container">
      <h2 class="fw-bold text-light">My Learning</h2>
      <div class="nav nav-pills navtabs-spacing mb-3" id="pills-tab" role="tablist">

        
        <button class="nav-link text fw-bold active" style="background-color: #212529;" id="pills-cources-tab"
        data-bs-toggle="pill" data-bs-target="#pills-cources">All cources</button>
      
        <button class="nav-link text fw-bold" style="background-color: #212529;" id="pills-profile-tab"
            data-bs-toggle="pill" data-bs-target="#pills-profile">Assingments & Quizzes</button>

        <button class="nav-link text fw-bold" style="background-color: #212529;" id="pills-favourite-tab"
            data-bs-toggle="pill" data-bs-target="#pills-favourite">View Profile</button>

        <button class="nav-link text fw-bold" style="background-color: #212529;" id="pills-listCources-tab"
            data-bs-toggle="pill" data-bs-target="#pills-listCources">Manage Assingments</button>
          
        </div>
    </div>
  </div>



  <div class="container" style="">
  
  <div class="tab-content" id="pills-tabContent">
  
<div class="tab-pane fade" id="pills-profile" role="tabpanel">

<?php 
echo  "Heelo there ";
echo  null;
?>

</div>

<div class="tab-pane fade show active" id="pills-cources" role="tabpanel">

<div class="container mt-3">
 
<!-- courses content starts here  -->

        <div class="row gx-3">
<?php 
          $login_id = $_SESSION['id'];
$all_data = $enrollments_data->fetching('enrollments','*',null,"registration_id = $login_id");

if(!empty($all_data)){

foreach($all_data as $enroll_data){
$courses_id = $enroll_data['courses_id'];
// echo $courses_id;
$get_data_compelete = $enrollments_data->fetching('cource','*',null,"courses_id = $courses_id");
foreach($get_data_compelete as $courses_data){
  $courses_id = $courses_data['courses_id'];
  $course_title = $courses_data['course_title'];
  $course_img = $courses_data['course_img'];
  $instructor_id = $courses_data['instructor_id'];

?>
          <a target="_blank" href="video_gallery.php?courses_id=<?=$courses_id?>" class="col-3 text-decoration-none text-dark">
            <div class="col">
              <div class="card h-100">
                <img src="../instructor/new/<?= $course_img?>" class="card-img-top p-2" alt="...">
                <div class="card-body">
                  <h5 class="card-title fw-bold">
                    <?= $course_title ?>
                  </h5>
                  <?php 
                  // echo     $instructor_id;
                    $get_data_instructor = $enrollments_data->fetching('instructor','*',null,"instructor_id = $instructor_id");
                    foreach($get_data_instructor as $instructor_data){
                      $fname = $instructor_data['fname'];
                  ?>
                  <p class="text-secondary" style="font-size:13px;padding-top:5px;">Mr
                    <?= $fname ?>
                  </p>
                  <hr>
                </div>
              </div>
            </div>
          </a>

          <?php 
  } // instructor inner loop


  } //inner for loop

}// last for loop end 

}//  last if ends 
else{
echo "<h1 style='margin-left: 30%'>You Dont have enroll any course yet</h1>";
}
  ?>

        </div>

<!-- courses content ends here  -->

</div>

  </div>

<div class="tab-pane fade" id="pills-favourite" role="tabpanel">

<!-- profile content starts here  -->
<?php 
      
      if(isset($_SESSION['id'])){

      $StudentObject = new backend;

      $id = $_SESSION['id'];

      $fetchData = $StudentObject->fetching('student','*',null,"registration_id = $id");

      if(!empty($fetchData)){
        foreach($fetchData as $studentsData){
          $student_id = $studentsData['student_id'];
          $sfname = $studentsData['sfname'];
          $slname = $studentsData['slname'];
          $phone = $studentsData['phone'];
          $student_img = $studentsData['student_img'];
          $youtube = $studentsData['youtube'];
          $linkedin = $studentsData['linkedin'];
          $registration_id = $studentsData['registration_id'];
          $FullName = $sfname . " ". $slname;

          $fetchDataLast = $StudentObject->fetching('registration','*',null,"registration_id = $registration_id");

          if(!empty($fetchDataLast)){

            foreach($fetchDataLast as $studentEmail){
              $email = $studentEmail['email'];
            }

          }// student email if ends 
          else{
echo "Mail not found";
          }
          ?>

        <div class="profile_container mt-3">
          <div class="profile_container_first">
             <div class="profile_container_iamge_section">
              <?php 
              if (strpos($student_img, "../uploads/") === false && strpos($student_img, "uploads/") !== false) {
                // If it contains "uploads/" but not "../uploads/"
                $student_img = "../" . $student_img;
              } 
              ?>
             <img style="height:100%; width:100%;" src="<?=$student_img?>" alt="">
             </div>
          </div>
          <div class="profile_container_second">
            <h2> <strong style="color:purple;margin-right:10px;">Welcome</strong>  <?= $FullName ?></h2>
            <p class="mt-3"> <strong class="me-2">Phone Number</strong><?= $phone ?></p>
            <p> <strong class="me-2">Email Address</strong><?= $email ?></p>
            <p> <strong class="me-2">Dignity</strong>student</p>
            <p> <strong>Social media</strong>

          <a href="<?= $linkedin ?>" class="text-decoration-none ms-3" style="color:purple;"><i class="fa-brands fa-linkedin"></i></a>
           <a href="<?= $youtube ?>" class="text-decoration-none ms-3" style="color:purple;"><i class="fa-brands fa-facebook"></i></a> 

          </p>

          <a href="helper.php?stu_id=<?=$registration_id?>" class="fw-bold" style="color:purple;">Update Profile</a>

          </div>
        </div>


      </div>

      <?php
        } // student for loop ends
      }// student if condition ends
      else{
        ?>
        <div class="bg-danger p-3 mt-5">
        <div class="message-box">
            <h1 style="font-size:20px;" class="fw-bold text-dark"><i class="fa-solid fa-triangle-exclamation"></i> 
          We found errors in setting your student profile <span style="text-decoration:underline">(Incompelete Information found please try again)</span>
          </h1>
        </div>
    </div>
        <?php 
      }
    }else{
      echo null;
    }
      ?>



  </div>

</div>  

<!-- last container div ends here -->
  </div>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>

</body>

</html>

<?php }
else{
  // echo "<h1 style='margin-left: 30%'>please make your profile first</h1>";
  ?>
  <div class="bg-danger p-3 mt-5">
        <div class="message-box">
            <h1 style="font-size:20px;" class="fw-bold text-dark"><i class="fa-solid fa-triangle-exclamation"></i> 
            Please make your profile first
          </h1>
        </div>
  <?php 
}
?>