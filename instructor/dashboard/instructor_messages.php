<?php
include("../../back.php");
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

  <title></title>

  <style>
.comment_setion{
    height: 35vh;
    width: 100%;
    background-color: lightgray;
    border: 2px solid gray;
    border-radius: 10px;
}
.btn_color{
    background-color: purple;
    border-radius: 5px;
}
.btn_color:hover{
    background-color: black;
}

.main_container{
    width: 100%;
    
}	
  </style>

</head>

<body>

<div class="main_container">
                <form action="instructor_receive_messages.php" method="post" enctype="multipart/form-data" class="p-4">
                    <!-- <h2 class="mb-4">Send message to instructor</h2> -->

                    <h5 class="fw-bold">Message Title</h4>
                    <input type="text" name="message_title" class="form-control" placeholder="Enter Message Title">

                    <h5 class="mt-4 fw-bold">Message Body:</h5>
                    <div class="form-floating">
                    <textarea class="form-control" name="message_body" placeholder="Enter Description" style="height: 100px"></textarea>
                    <label>Comments</label>
                    </div>

                    <?php 
                    $login_id = $_SESSION['id'];

                    $getCources = new backend();

                    // echo $courses_id;

                    $getInstructor = $getCources->fetching("instructor","*",null,"instructor_id = $login_id");

                    if(!empty($getInstructor)){
                        foreach($getInstructor as $InstructorIDdata){
                            $instructor_get_id = $InstructorIDdata['instructor_id'];

                        }
                    }else{
                        echo "Instructor ID not found";
                    }

                    ?>

                    <input type="hidden" name="instructor_get_id" value="<?= $instructor_get_id?>">

                    <h5 class="mt-4 fw-bold">Select Inquiry:</h5>
                    <select class="form-select" name="message_inquery"  id="message_inquery">
                                <option value="" selected disabled>Select inquiry</option>
                                <option value="Course Announcements">Course Announcements</option>
                                <option value="Clarifications and Guidance">Clarifications and Guidance</option>
                    </select>

                    <h5 class="mt-4 fw-bold">Select Student you have to Message</h5> 
                    <select class="form-select" name="register_id"  id="register_id">
                     <option value="" selected disabled>Select Student</option>
                        <?php 
                          $getRegistration = $getCources->fetching("registration","*",null,null);

                          if(!empty($getRegistration)){
                              foreach($getRegistration as $RegistrationData){
                                  $registrar_id = $RegistrationData['registration_id'];
                                  $email = $RegistrationData['email'];
      
                                  $getStudent = $getCources->fetching("student","*",null,"registration_id = $registrar_id");

                                  if(!empty($getStudent)){

                                    foreach($getStudent as $getStudentData){
                                        $sfname = $getStudentData['sfname'];
                                        $slname = $getStudentData['slname'];
                                        $registration_get_id = $getStudentData['registration_id'];
                                        $studentFullName = $sfname." ".$slname;

?>
                                <option value="<?=$registration_get_id?>"><?=$studentFullName?></option>

<?php 

                                    }
                                    
                                  }else{
                                    echo "Student Profile not compeleted";
                                  }

                              }
                          }else{
                              echo "Instructor ID not found";
                          }
                        ?>
                               
                            
                    </select>

                    <input type="submit" class="mt-4 btn text-light fw-bold"
                     style="background-color:purple;border-radius: 0%;input:hover{background-color:black;}"
                      value="Send Message" name="instructor_message">

                </form>
            </div>


</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>

</body>

</html>
