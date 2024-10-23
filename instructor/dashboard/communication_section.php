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
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
   crossorigin="anonymous" referrerpolicy="no-referrer" />

  <title>Hello, world!</title>

  <link rel="stylesheet" href="../../assets/css/course-page.css">

  <style>
   .message-box {
            text-align: center;
            padding: 20px;
            border: 1px solid #ddd;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            background-color: #f9f9f9;
        }
        .message-box h1 {
            font-size: 24px;
            margin-bottom: 10px;
        }
        .message-box p {
            font-size: 18px;
            color: #555;
        }
  </style>

</head>

<body>


    <ul class="nav nav-pills mb-3 d-flex justify-content-center" id="pills-tab" role="tablist">
      <li class="nav-item" role="presentation">
        <button class="nav-link active fw-bold " id="pills-messages-tab" data-bs-toggle="pill" data-bs-target="#pills-messages"
          type="button" role="tab">Students Messages</button>
      </li>
      <li class="nav-item" role="presentation">
        <button class="nav-link fw-bold" id="pills-Comments-tab" data-bs-toggle="pill" data-bs-target="#pills-Comments"
          type="button" role="tab">Comments & Reviews</button>
      </li>
      <li class="nav-item" role="presentation">
        <button class="nav-link fw-bold" id="pills-announcemnts-tab" data-bs-toggle="pill" data-bs-target="#pills-announcemnts"
          type="button" role="tab">Announcements</button>
      </li>
      
    </ul>
<?php
    
        // echo $main_id;
        ?>

    <div class="tab-content" id="pills-tabContent">
      
      <div class="tab-pane fade show active" id="pills-messages" role="tabpanel" aria-labelledby="pills-home-tab">
        <div class="row">
        <?php 
                        if (isset($_SESSION['id'])) {
                            $login_id = $_SESSION['id'];
                            $loginObject = new backend();
                            $login_data = $loginObject->fetching('student_messages', '*', null, "instructor_id = '$login_id'");
                            if (!empty($login_data)){
                                foreach ($login_data as $final_data) {
                                    $message_title = $final_data['message_title'];
                                    $message_body = $final_data['message_body'];
                                    $message_inquery = $final_data['message_inquery'];
                                    $student_id = $final_data['student_id'];
                                    $login_students = $loginObject->fetching('student', '*', null, "registration_id = '$student_id'");
                                    if(!empty($login_students)){
                                      foreach($login_students as $studentDataGet){
                                        $sfname = $studentDataGet['sfname'];
                                        $slname = $studentDataGet['slname'];
                                        $student_img = $studentDataGet['student_img'];
?>
                            
<div class="d-flex justify-content-around align-items-center ms-3 mt-2" style="width: 80%; height:20vh;">
<div style="width: 10%; height: 100%; bg-danger display:flex; align-items:center; justify-content:center;">
    <div style="height: 80px; width: 80px; border-radius:50% !important; overflow:hidden;">
      <?php 
       // Adjust the image path to the original path format
       if (strpos($student_img, '../uploads') === 0) {
        // If the path starts with '../uploads', add an extra '../'
        $student_img = '../../' . substr($student_img, 3);
        
      } elseif (strpos($student_img, 'uploads') === 0) {
        // If the path starts with 'uploads', add '../../' at the beginning
        $student_img = '../../' . $student_img;
      }
      ?>
      <img src="<?=$student_img?>" style="height: 100%; width: 100%;" alt="">
    </div>
</div>
<div style="width: 90%; height: 100%;">
      <div style="height: 30px; width: 100%; display:flex; flex-direction:row; gap:30px; padding:0px 20px;">
    <h5><?=$sfname.$slname?></h5>  <p class="text-decoration-underline"> <strong style="text-decoration: none !important;">Inquery </strong><?=$message_inquery?></p>
      </div>
      <p style="height: 66%; width: 100%; overflow:hidden; font-size:13px; padding: 0px 0px 5px 8px;">
        <?=$message_body?>
      </p>
</div>
</div>

<?php 
  }// inside for loop ends here
}// inside if condition ends here

  } // outer for loop
}    // outer if end
        else{
?>

<div class="mt-5 d-flex align-items-center justify-content-center">
              <img src="../../assets/images/messaes.png" alt=""> <br>
</div>
            <h3 class="ms-2 text-center">No new messages</h3>

                                <?php 
                                }// else end  
                         } // last session if ends here 
                          ?>

</div>
</div>


      <div class="tab-pane fade" id="pills-Comments" role="tabpanel" aria-labelledby="pills-profile-tab">
      
<?php
$loger_id = $_SESSION['id'];

      $CommentObj = new backend();

$fetchingData0 = $CommentObj->fetching("instructor",'*',null,"registration_id=$loger_id");
if(!empty($fetchingData0)){
  foreach ($fetchingData0 as $mainData) {
    $main_ins_data = $mainData['instructor_id'];
  }
}else{
  echo "Instructor Not Found";
}

$fetchingData1 = $CommentObj->fetching("comments",'*',null,null);

$count = 0;  // Counter to track the number of student entries

if(!empty($fetchingData1)){

echo "<div class='comment_show'>";

echo  "<div class='comment_show_first'>";

    $firstTwoComments = array_slice($fetchingData1, 0, 2);
    foreach($firstTwoComments as $CommentData){
        $comment = $CommentData['comment'];
        $courses_main_id = $CommentData['courses_id'];
        // echo $courses_main_id;
        $time_elapsed = $CommentData['time_elapsed'];
        $registration_id = $CommentData['registration_id'];

        $fetchingDataStudent1 = $CommentObj->fetching("student","*",null,"registration_id = $registration_id");
        if(!empty($fetchingDataStudent1)){
            foreach($fetchingDataStudent1 as $StudentData){ 
                $sfname = $StudentData['sfname'];
                $slname = $StudentData['slname'];

                $sfnameInitial = substr($sfname, 0, 1);
                $slnameInitial = substr($slname, 0, 1);

                $FullNameStudentContent = $sfname . " " . $slnameInitial . ".";
                $FullNameStudentCircle = $sfnameInitial . $slnameInitial;
            }
            // echo $courses_main_id;
            $fetchingDataInstructor = $CommentObj->fetching("cource","*",null,"courses_id = $courses_main_id");

            if(!empty($fetchingDataInstructor)){
               foreach($fetchingDataInstructor as $dataObtained){
                $instructor_id = $dataObtained['instructor_id'];
                // echo "instructor id inside".$instructor_id;
             
                // echo "instructor id outside".$main_ins_data;
                if($main_ins_data  == $instructor_id){
                  
                  $count++;  // Increment the counter for each student
?>
        <hr>
        <div class="comment_show_first_section">
            <div class="first_section_circle">
               <?=$FullNameStudentCircle?>
            </div>
            <div class="first_section_content">
                <h2 class="fw-bold"><?= $FullNameStudentContent ?></h2>
                <p>
                
                <?php 
                // echo "Time Elapsed from Database: $time_elapsed<br>";
                $commentTimestamp =  strtotime($time_elapsed);

                // echo "Comment Timestamp: $commentTimestamp<br>";

                $currentTimestamp = time(); // Current timestamp
                // echo "Current Timestamp: $currentTimestamp<br>";

                // Calculate the difference in seconds
                $timeDifference = $currentTimestamp - $commentTimestamp;
                // echo "Time Difference: $timeDifference<br>";

                // Calculate the number of days and weeks
                $days = floor($timeDifference / (60 * 60 * 24));
                $weeks = floor($days / 7);
                
                // Determine whether to display days or weeks
                if ($days < 7) {
                    echo "$days days ago";
                } else {
                    echo "$weeks weeks ago";
                }
                
                ?>

                </p>
            </div>
        </div>
        <p class="ms-3 show_first_section_para">
            <?= $comment ?>
            </p>

 
            
<?php 
                }// instructor condition checks if ends 
else{
  echo null;
  // if($count === 0){

  // header("location: message_section.php");

  // <!-- <div class="container">
  //           <div class="message-box">
  //               <h1>No Comments Received</h1>
  //               <p>Sorry, we have not received any comments from the students.</p>
  //           </div>
  //       </div> -->
      
  // } 
}
               }// loop ends for fetching instructor_id from courses
            }// if condition ends for getting instructor
else{

}// intructor else here
        }

    }// first loop ends here 
    ?>

    <?php 
    if($main_ins_data  == $instructor_id){
    ?>
<button type="button" class="btn mt-0 launch_button_comments" data-bs-toggle="modal" data-bs-target="#exampleModalLong">
            Show all reviews
    </button>
    <?php 
    }
    ?>

     

<?php 
// comment_show_first div ends here 
echo '</div>';

}else{
?>
      <div class="container text-center">
          <p>No students yet...</p>
          <p>Once you publish your course, come here to learn about your students.</p>
          <a href="index.php" class="btn text-decoration-none border-1 border-dark border">Go to instructor
            dashboard</a>
        </div>
<?php 
}

?>
</div>
      </div>

      <div class="tab-pane fade" id="pills-announcemnts" role="tabpanel" aria-labelledby="pills-profile-tab">
        <form action="">

      <div class="ps-3 pe-3 pt-2 pb-3 text-dark">
    <a href="communication_submit.php"></a>
    <form action="communication_submit.php" method="get">
        <div class="mb-3">
            <label for="announcement_title" class="form-label fw-bold">Title</label>
            <input type="text" class="form-control" id="announcement_title" name="announcement_title" placeholder="Add Anoucement Title" required>
        </div>
        <div class="mb-3">
            <label for="announcement_content" class="form-label fw-bold">Content</label>
            <textarea class="form-control" id="announcement_content" name="announcement_content" rows="4" placeholder="Enter Announcement Content" required></textarea>
        </div>

        <div class="mb-3">
        <label for="announcement_content" class="form-label fw-bold">Select course</label>
        <select class="form-select" name="course_selected" id="course_selected">
        <option selected disabled>Select the course given below for Announcements</option>
        <?php 
        $main_id = $_SESSION['id'];
        $AddCourseObj = new backend();
        $fetchInstructor = $AddCourseObj->fetching('instructor','*',null,"registration_id = $main_id");
        if(!empty($fetchInstructor)){
          foreach($fetchInstructor as $main_fetch_id){
            $main_ins_id = $main_fetch_id['instructor_id'];
          }
        }
        echo $main_id;
        $fetchCourses = $AddCourseObj->fetching('cource','*',null,"instructor_id = $main_ins_id");
        if(!empty($fetchCourses)){
          foreach($fetchCourses as $coursesDataGet){
            $courses_id = $coursesDataGet['courses_id'];
            $course_title = $coursesDataGet['course_title'];
            ?>
    <option value="<?=$courses_id?>"><?=$course_title?></option>
            <?php 
          }
        }
        ?>  
        </select>

        </div>

        <div class="mb-3">
            <label for="announcement_date" class="form-label fw-bold">Date</label>
            <input type="date" class="form-control" id="announcement_date" name="announcement_date" required>
        </div>

        <input type="submit" name="submit" class="btn btn-primary" value="Add Announcement">
        <!-- <button type="submit" name="announcement_submit" class="btn btn-primary">Add Announcement</button> -->

    </form>
</div>


        </form>
      </div>



    </div>

  </div>



  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>


    <!-- Modal -->
    <div class="modal fade" style="height:100vh;" id="exampleModalLong" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">

        <div class="comment_show_first">

        <?php 

// echo $courses_id;

$CommentObj = new backend();

$fetchingData1 = $CommentObj->fetching("comments");

if(!empty($fetchingData1)){

    // $firstTwoComments = array_slice($fetchingData1, 0, 3);
    foreach($fetchingData1 as $CommentData){
        $comment = $CommentData['comment'];
        $time_elapsed = $CommentData['time_elapsed'];
        $registration_id = $CommentData['registration_id'];
        $fetchingDataStudent1 = $CommentObj->fetching("student","*",null,"registration_id = $registration_id");
        if(!empty($fetchingDataStudent1)){
            foreach($fetchingDataStudent1 as $StudentData){
                $sfname = $StudentData['sfname'];
                $slname = $StudentData['slname'];

                $sfnameInitial = substr($sfname, 0, 1);
                $slnameInitial = substr($slname, 0, 1);

                $FullNameStudentContent = $sfname . " " . $slnameInitial . ".";
                $FullNameStudentCircle = $sfnameInitial . " " . $slnameInitial;
            }




 ?>

<div class="comment_show_first_section">
            <div class="first_section_circle">
               <?=$FullNameStudentCircle?>
            </div>
            <div class="first_section_content">
                <h2 class="fw-bold"><?= $FullNameStudentContent ?></h2>
                <p>
                
                <?php 
                // echo "Time Elapsed from Database: $time_elapsed<br>";
                $commentTimestamp =  strtotime($time_elapsed);

                // echo "Comment Timestamp: $commentTimestamp<br>";

                $currentTimestamp = time(); // Current timestamp
                // echo "Current Timestamp: $currentTimestamp<br>";

                // Calculate the difference in seconds
                $timeDifference = $currentTimestamp - $commentTimestamp;
                // echo "Time Difference: $timeDifference<br>";

                // Calculate the number of days and weeks
                $days = floor($timeDifference / (60 * 60 * 24));
                $weeks = floor($days / 7);
                
                // Determine whether to display days or weeks
                if ($days < 7) {
                    echo "$days days ago";
                } else {
                    echo "$weeks weeks ago";
                }
                
                ?>

                </p>
            </div>
        </div>
        <p class="ms-3 show_first_section_para">
            <?= $comment ?>
            </p>
            <hr>
<?php 

        }

    }
}

?>
            <hr>
    </div>
            </div>
               
            </div>
        </div>
    </div>

</body>

</html>

