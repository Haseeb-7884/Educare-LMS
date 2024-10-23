<?php 
include("../back.php");

$NewObject = new backend();

$logID = $_SESSION['id'];

// $stu_id = $_GET['student_id'];
// echo $stu_id; 
// echo $logID;

if(isset($_POST['studentSubmit'])){

//   function imagehandling($img){
//     $img_name = $img['name'];
//     // $img_name = $_FILES['prd_img']['name'];
//     $img_tmp = $img['tmp_name'];
//     $uploads = "uploads/";
//     $imgPath = $uploads . $img_name ; 
//     move_uploaded_file($img_tmp , $imgPath);
//     return array(
//         'img_tmp' => $img_tmp,
//         'imgPath' => $imgPath,
//         'img_name' => $img_name
//     );
// }

  $fname = $_POST['fname'];
  $lname = $_POST['lname'];
  $email = $_POST['email'];
  $number = $_POST['number'];
  $youtube = $_POST['youtube'];
  $linkedin = $_POST['linkedin'];

  $StudentImage = $_FILES['image'];
// print_r($StudentImage); // Add this line for debugging
$imgArray = imagehandlingStudent($StudentImage);

  $AddingData = $NewObject->insertion("student",array('sfname'=>$fname,
  'slname'=>$lname, 'phone'=>$number, 'student_img'=>$imgArray['imgPath'], 
  'youtube'=>$youtube, 'linkedin'=>$linkedin,'registration_id'=>$logID
));

if($AddingData){
  echo "Added Sucessfully";
}else{
  echo "There error occuring in the record addition";
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
      <form action="student_profile.php" method="post" enctype="multipart/form-data">

        <div class="main_profile p-4">

      <div class="row g-3">

      <?php 
      $fetchStudent =  $NewObject->fetching('student','*',null,"registration_id = $logID");
      if(!empty($fetchStudent)){
        foreach($fetchStudent as $DataStu){
          $sfname = $DataStu['sfname'];
          $slname = $DataStu['slname'];
          $phone = $DataStu['phone'];
          $youtube = $DataStu['youtube'];
          $linkedin = $DataStu['linkedin'];

          if(!empty($sfname)){

?>
     <div class="col-auto">
          <label for="" class="form-label fw-bold">First Name</label>
          <input style="width: 200px;" name="fname" value="<?=$sfname?>" disabled type="text" class="form-control" placeholder="Enter last name">
      </div>
<?php 
          }else{
?>
     <div class="col-auto">
          <label for="" class="form-label fw-bold">First Name</label>
          <input style="width: 200px;" name="fname" type="text" class="form-control" placeholder="Enter last name">
      </div>
<?php 
          }
       
          if(!empty($slname)){
?>
   <div class="col-auto">
          <label class="form-label fw-bold">Last Name</label>
          <input type="text" name="lname" value="<?=$slname?>" disabled class="form-control" placeholder="Enter last name">
        </div>

<?php 
          }else{
?>
   <div class="col-auto">
          <label class="form-label fw-bold">Last Name</label>
          <input type="text" name="lname" class="form-control" placeholder="Enter last name">
        </div>
<?php 
          }

        }
      }else{
        echo null;
      }
      ?>

      </div>


      <?php 
      $fetchingData =  $NewObject->fetching('registration','*',null,"registration_id = $logID");
      if(!empty($fetchingData)){
        foreach($fetchingData as $EmailData){
          $email = $EmailData['email'];
        }
      }

      ?>
        <div class="mb-3 mt-3">
          <label class="form-label fw-bold text-light">Email</label>
          <input style="width: 425px;" name="email" value="<?= $email?>" disabled type="text" class="form-control">
        </div>

<?php 
if(!empty($phone)){
?>
  <div class="mb-3 mt-3">
          <label class="form-label fw-bold text-light">Number</label>
          <input style="width: 425px;" value="<?=$phone?>" disabled name="number" type="tel" class="form-control" placeholder="Enter your number">
        </div>
<?php 
}else{
?>
  <div class="mb-3 mt-3">
          <label class="form-label fw-bold text-light">Number</label>
          <input style="width: 425px;" name="number" type="tel" class="form-control" placeholder="Enter your number">
        </div>
<?php 
}
if(!empty($youtube)){
?>
        <div class="mb-3 mt-3">
          <label class="form-label fw-bold text-light">YouTube</label>
          <input style="width: 425px;" name="youtube" value="youtube" disabled type="text" class="form-control" placeholder="Enter your youtube profile link">
        </div>
<?php 
}else{
?>
        <div class="mb-3 mt-3">
          <label class="form-label fw-bold text-light">YouTube</label>
          <input style="width: 425px;" name="youtube" type="text" class="form-control" placeholder="Enter your youtube profile link">
        </div>
<?php 
}
if(!empty($linkedin)){
?>
        <div class="mb-3 mt-3">
          <label class="form-label fw-bold text-light">Linkedin</label>
          <input style="width: 425px;" name="linkedin" type="text" disabled class="form-control" placeholder="Enter your linkedin profile link">
        </div>
<?php   
}else{
?>
        <div class="mb-3 mt-3">
          <label class="form-label fw-bold text-light">Linkedin</label>
          <input style="width: 425px;" name="linkedin" type="text" class="form-control" placeholder="Enter your linkedin profile link">
        </div>
<?php   
}
?>
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Upload your profile ppic</label>
          <input type="file" name="image" class="form-control">
        </div>

      
        <button type="submit" name="studentSubmit" class="mt-2 btn btn-dark fw-bold">Submit</button>

         </div>
   

      </form>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>
</body>
</html>