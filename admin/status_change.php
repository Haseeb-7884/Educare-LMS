 <?php 
include ("../back.php");
$course_id = $_GET['course_id'];
?>
 <?php 

  //  echo $course_id;

   if(isset($_POST['dataSubmit'])){
    
   $status = $_POST['status'];

   $courses_id = $_POST['courses_id'];

   echo $courses_id;
   echo $status;
   
  //  $AllCourses = new backend();

    // $getCourses = $AllCourses->update("courses_status", array("course_status" => $status), "courses_id = $course_id", null);

    // echo $getCourses;

  // if($getCourses){
  //   echo "Status Updates";
  // }else{
  //   echo "Status not Updated";
  // }

}


?> 

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>


       <form action="status_change.php" method="post" class="container mx-auto d-flex justify-content-center align-items-center">
        <div class="form-check">
            <input class="form-check-input" value="Declined" type="radio" name="status" id="status">
            <label class="form-check-label" for="Declined">
              Declined
            </label>
        </div>

        
        <input type="text" placeholder="<?= $course_id ?>" value="<?= $course_id ?>" name="courses_id">

        <div class="form-check">
            <input class="form-check-input" value="Approved" type="radio" name="status" id="status">
            <label class="form-check-label" for="Approved">
             Approved
            </label>
        </div>

        <input type="submit" name="dataSubmit" value="Submit">

       </form>
    

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


  </body>
</html>