<?php include("../../back.php"); ?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <title>Hello, world!</title>
    <style>
      .instructor-image{
          height:50px;
          width:100px;
          margin-left:120px;
          margin-bottom:70px;
      }
      .image{
          height:100px;
          width:100px;
          border-radius:50%;
       
      }
      .instructor-text{
        margin-right:40px;
      }
      .container-special{
        margin-top:100px;
        text-align:center;
      }
      /*Media queries*/
      @media screen and (max-width: 768px) {
          .instructor-text{
           margin-top:40px;
          }
        }
    </style>
  </head>
  <body>

  <!-- navbar will be included here along with footer  -->
  

<?php
$instructor_data = new backend();

if (isset($_SESSION['id'])) {
    $login_id = $_SESSION['id'];
    $data = new backend();
    $login_data = $data->fetching('instructor', '*', null, "registration_id = '$login_id'");

    // Check if $login_data is not empty before proceeding
    if (!empty($login_data)) {
        foreach ($login_data as $loginData) {
            $_SESSION['instructor_id'] = $loginData['instructor_id'];
            $instructor_id = $_SESSION['instructor_id'];
?>

<?php 
   include("../../includes/instructor_menubar.php");
?>

            <!-- <div class="container d-flex justify-content-around align-items-center mt-2">
                <a href="edit_profile.php" class="btn btn-info text-light">Edit Profile</a>
                <a href="dash.php?instructor_id=<?= $instructor_id ?>" class="btn btn-primary">
                    Back to Courses
                </a>
            </div> -->

            <div class='bg-primary fw-bold mt-2'>
                <div class='container text-light p-3'>
                    <h1>
                        <?php echo $loginData['fname'] ?> <?php echo $loginData['lname'] ?> <?= $_SESSION['instructor_id'] ?>
                    </h1>
                    <h3>
                        <?php echo $loginData['headline'] ?>
                    </h3>
                </div>
            </div>

            
            <div class='container row d-flex mt-5 justify-content-around align-items-center ms-5'>
    <div class='col-sm-4'>
            <div class='instructor-image'>
             <img src='../../<?= $loginData['instructor_img'] ?>' class='image'>    
            <div class='mt-3 d-flex justify-content-around'>

              <?php 
              if(!empty($loginData['twitter'])){
                $twitter = $loginData['twitter'];
                echo "<a href='$twitter'><i class='fa-brands fa-twitter' style='color: #0011ff;'></i></a>";
              }else{
                echo null;
              }
              ?>

              <?php 
              if(!empty($loginData['facebook'])){
                $facebook = $loginData['facebook'];
                echo " <a href='$facebook'><i class='fa-brands fa-facebook' style='color: #0011ff;'></i></a>";
              }else{
                echo null;
              }
              ?>

              <?php 
              if(!empty($loginData['linkdin'])){
                $linkdin = $loginData['linkdin'];
                echo "<a href='$linkdin'><i class='fa-brands fa-linkedin' style='color: #0011ff;'></i></a>";
              }else{
                echo null;
              }
              ?>

              <?php 
              if(!empty($loginData['youtube'])){
                $youtube = $loginData['youtube'];
                echo "<a href='$youtube'><i class='fa-brands fa-youtube' style='color: #0011ff;'></i></a>";
              }else{
                echo null;
              }
              ?>
                
               
                
                
            </div>
            </div>
    </div>

    <div class='col-sm-8'>
        <p class='instructor-text'>
        <?= $loginData['biography'] ?>
        </p>
    </div>
  </div>; 


<?php
        }
    } else {     
?>
        <div class="bg-primary d-flex justify-content-center align-items-center">
          <h2 class="text-light fw-bold">Intructor Profile</h2>
        </div>
        <!-- <a href="edit_profile.php" class="btn btn-danger">Edit profile</a> -->

        <div class='container mt-4'>
            <div class='alert alert-danger' role='alert'>
                <h4 class='alert-heading'>Please complete your instructor profile!</h4>
                <p>You need to create your instructor profile before creating courses.</p>
                <hr>
                <p class='mb-0'>Click on the 'Edit Profile' button to complete your profile.</p>
                <a href='edit_profile.php' class='btn btn-danger fw-bold mt-3'>Edit Profile</a>
            </div>
        </div>


<?php
    }
}
?>
<!-- 
  <div class="container container-special">
       <h2>Courses you're enrolled in</h2>       
 <div class="container mt-3">
<div class="row row-cols-1 row-cols-md-3 g-4">

<?php 
// $main_id = $_SESSION['id'];
// echo $main_id;
// $CoursesData = $instructor_data->fetching("enrollments","*",null,"registration_id = $main_id");
// if(!empty($CoursesData)){
//   foreach($CoursesData as $instructorCourses){ // outer for loop starts here
//     $main_courses_id = $instructorCourses['courses_id'];
//     $CoursesCurriculam = $instructor_data->fetching("cource","*",null,"courses_id = $main_courses_id");
//     if(!empty($CoursesCurriculam)){
//       foreach($CoursesCurriculam as $CurriculamData){
//         $course_title = $CurriculamData['course_title']; 
//         $course_subtitle = $CurriculamData['course_subtitle']; 
//         $instructor_id = $CurriculamData['instructor_id']; 
//         $course_img = $CurriculamData['course_img']; 
//         $CoursesCurriculamInstructor = $instructor_data->fetching("instructor","*",null,"instructor_id = $instructor_id");
//         if(!empty($CoursesCurriculamInstructor)){
//           foreach($CoursesCurriculamInstructor as $insData){
//             $fname = $insData['fname'];
//             $lname = $insData['lname'];
//         $CoursesCurriculamPrice = $instructor_data->fetching("instructor","*",null,"instructor_id = $instructor_id");
//         if(!empty($CoursesCurriculamInstructor)){
//           foreach($CoursesCurriculamInstructor as $insData){
//             $fname = $insData['fname'];
//             $lname = $insData['lname'];
//           }
//         }      

//   }// geting course instructor loop ends here 
// } // getting course instructor if ends here 
// else{

// }// getting course instructor ifs else ends here

//   }// inner for loop ends here (for courses

// }// inner if ends here (for courses)
// else{
//   echo "No course found for you";
// }// inner ifs else ends here (for courses)

//   }// for loop ends here (outer for loop)
// }else{
//   echo "You don't enrolled any course yet";
// }
?>

 <a href="#" class="text-decoration-none text-dark">
    <div class="col">
      <div class="card h-100">
        <img src="../../assets/images/video.jpg" class="card-img-top p-2" alt="...">
        <div class="card-body">
          <h5 class="card-title">Do Video Editing like a pro</h5>
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
            <div class="d-flex justify-content-around">
              <div><img src="assets/images/play-button.png" alt=""> 2h : 20m</div>
              <div><img src="assets/images/play-button.png"> 2h : 20m</div>
              <div><img src="assets/images/play-button.png" alt=""> 2h : 20m</div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </a>
</div>
</div>
  </div>

-->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  </body>
  <?php   
?>
</html>

