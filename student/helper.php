<?php
include("../back.php");

// $studentID = $_GET['stu_id'];
$studentID = $_SESSION['id'];

$UpdateObject = new backend();

if(isset($_POST['studentUpdate'])){

    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $number = $_POST['number'];
    $youtube = $_POST['youtube'];
    $linkedin = $_POST['linkedin'];
  
    $StudentImage = $_FILES['image'];
  // print_r($StudentImage); // Add this line for debugging
  $imgArray = imagehandlingStudent($StudentImage);
  
   $UpdateStudent = $UpdateObject->update('student',array('sfname'=>$fname,
    'slname'=>$lname, 'phone'=>$number, 'student_img'=>$imgArray['imgPath'], 
    'youtube'=>$youtube, 'linkedin'=>$linkedin,'registration_id'=>$studentID 
  ), "registration_id = $studentID");

  if($UpdateStudent){
    echo "Data Added Successfully";
  }else{
    echo "Data is not added";
  }

    
}

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
      
        <title>Website</title>
      
        <link rel="stylesheet" href="../assets/css/student_profile.css">

</head>
<body>
    

    <div class="container profile_container">
      <form action="helper.php" method="post" enctype="multipart/form-data">

      <?php 

      $fetchStudent = $UpdateObject->fetching("student","*",null,"registration_id = $studentID");

      if(!empty($fetchStudent)){

        foreach($fetchStudent as $StuData){
           $sfname = $StuData['sfname'];
           $slname = $StuData['slname'];
           $phone = $StuData['phone'];
           $student_img = $StuData['student_img'];
           $youtube = $StuData['youtube'];
           $linkedin = $StuData['linkedin'];
           $registration_id = $StuData['registration_id'];

           ?>

 

        <div class="main_profile p-4">

      <div class="row g-3">

        <div class="col-auto">
          <label for="" class="form-label fw-bold">First Name</label>
          <input style="width: 200px;" name="fname" type="text" class="form-control" placeholder="<?=$sfname?>">

        </div>

        <div class="col-auto">
          <label class="form-label fw-bold">Last Name</label>
          <input type="text" name="lname" class="form-control" placeholder="<?=$slname?>">
        </div>

      </div>


      <?php 
      $fetchingData = $UpdateObject->fetching('registration','*',null,"registration_id = $registration_id");
      if(!empty($fetchingData)){
        foreach($fetchingData as $EmailData){
          $email = $EmailData['email'];
          ?>
                  <div class="mb-3 mt-3">
                     <label class="form-label fw-bold text-light">Email</label>
                     <input style="width: 425px;" value="<?= $email?>" disabled type="text" class="form-control">
                   </div>
          <?php 
        }
      }
      ?>
      


        <div class="mb-3 mt-3">
          <label class="form-label fw-bold text-light">Number</label>
          <input style="width: 425px;" name="number" type="tel" class="form-control" placeholder="<?= $phone?>">
        </div>

        <div class="mb-3 mt-3">
          <label class="form-label fw-bold text-light">Youtube</label>
          <input style="width: 425px;" name="youtube" type="text" class="form-control" placeholder="<?= $youtube?>">
        </div>

        <div class="mb-3 mt-3">
          <label class="form-label fw-bold text-light">Linkedin</label>
          <input style="width: 425px;" name="linkedin" type="text" class="form-control" placeholder="<?=$linkedin?>">
        </div>


        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Upload your profile ppic</label>
          <input type="file" name="image" value="<?= $student_img ?>" class="form-control">
        </div>

      
        <button type="submit" name="studentUpdate" class="mt-2 btn btn-dark fw-bold">Submit</button>

         </div>
         <?php 
        }// outer for loops ends 

      }// outer if condiiton ends 

      ?>   

      </form>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>
</body>
</html>