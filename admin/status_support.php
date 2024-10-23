 <?php
include("../back.php");

$newObject = new backend();


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

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>    

    <title>Admin pannel</title>

    <link rel="stylesheet" href="css/status_support.css">

</head>

<body>

<?php 

if(isset($_POST['status_submit'])){
  $status = $_POST['status'];
  $courses_id = $_POST['courses_id'];
  // echo $status;
  // echo $courses_id;

  $enterData = $newObject->insertion("courses_status", array("course_status"=>$status,
   "courses_id"=>$courses_id));

   if(true){
    ?>
     <script>
  Swal.fire({
  icon: "success",
  title: "Response Submitted!",
  text: "Thanks for your kind response. Click the link below to return to the page.",
  footer: '<a href="http://localhost/PHP-OOP/PROJECT/admin/course_status.php">Return Back</a>',
  showConfirmButton: false // This line removes the "OK" button
});
</script>
    <?php 
   }


   
    }// if conditions ends 
    else{
      echo null;
    }
?>

    <div class="container bg-light mx-auto hero_section">

    <?php 
    $gettedCourseId = $_GET['courses_id'];
    if(!empty($gettedCourseId)){
      $get_data = $newObject->fetching("cource","*",null,"courses_id = $gettedCourseId");
      if(!empty($get_data)){
        foreach($get_data as $allData){
          $courses_id = $allData['courses_id'];
          $course_title = $allData['course_title'];
          $course_subtitle = $allData['course_subtitle'];
          $primary_taught = $allData['primary_taught'];
          $select_category = $allData['select_category'];
          $instructor_id = $allData['instructor_id'];

          $get_instructor = $newObject->fetching("instructor","*",null,"instructor_id = $instructor_id");
          if(!empty($get_instructor)){
            foreach($get_instructor as $InstructorName){
              $fname = $InstructorName['fname'];
              $lname = $InstructorName['lname'];
              $fullName = $fname . " " . $lname;
            }
          }else{
            echo null;
          }

          $get_category = $newObject->fetching("cources_categories","*",null,"category_id = $select_category");
          if(!empty($get_category)){
            foreach($get_category as $CategoryName){
              $category_name = $CategoryName['category_name'];
            }
          }else{
            echo null;
          }

          $get_short_desc = $newObject->fetching("course_requirments","*",null,"courses_id = $courses_id");
          if(!empty($get_short_desc)){
            foreach($get_short_desc as $ShortDescName){
              $short_description = $ShortDescName['short_description'];
            }
          }else{
            echo null;
          }

          $get_price = $newObject->fetching("course_prices","*",null,"courses_id = $courses_id");
          if(!empty($get_price)){
            $freePrice = 'Free';
            foreach($get_price as $PriceName){
              $price = $PriceName['course_price'];
            }
          }else{
            echo null;
          }
          ?>
          
          <?php 
        } // first loop ends here 
      }else{
        echo "Nothing";
      }
    }else{
      echo "<h1>Echo not found</h1>";
    }


    ?>

        <h4>Course Title:</h4>
        <input class="form-control main_color" type="text" value="<?= $course_title; ?>" readonly>

        <h4 class="mt-3">Course Subtitles</h4>
        <input class="form-control main_color" type="text" value="<?= $course_subtitle; ?>" readonly>

        <h4 class="mt-3">Course Short Description</h4>
        <textarea class="form-control main_color" style="height: 120px;padding: 0px;" id="floatingTextarea" readonly>
        <?= $short_description; ?>  
        </textarea>

        <div class="mt-3 hero_section_container">
            <div class="section_container_first">
                <h4>Course Category</h4>
                <p><?= $category_name; ?></p>
                <!-- <input class="form-control main_color"  type="text" value="" readonly> -->
            </div>
            <div class="section_container_second">
                <h4>Course SubCategory</h4>
                <p><?= $primary_taught; ?></p>
            </div>
            <div class="section_container_third">
                <h4>Course Price</h4>
                <p><?php 
                if($price !== 'Free'){
                  echo $price . "pkr";
                }else{
                  echo "Free";
                }
                ?></p>
            </div>
        </div>

        <div class="last_container">  
            <h4 class="">Instructor Name</h4>
            <a href="" class="fw-bold"><?= $fullName; ?></a>
        </div>

        <form action="status_support.php" method="POST" class="form_last">



          
          <div class="form_last_first">
            <h4>Change status</h4>
            <input type="hidden" name="courses_id" value="<?=$courses_id?>" placeholder="<?=$courses_id?>">        

                <div class="form-check flex-1">
                    <input class="form-check-input" type="radio" value="Approved" name="status" id="status" checked>
                    <label class="form-check-label" for="status">
                      Approved
                    </label>
                  </div>

                <div class="form-check flex-1">
                    <input class="form-check-input" type="radio" value="Revision" name="status" id="status" checked>
                    <label class="form-check-label" for="status">
                      Revision
                    </label>
                  </div>

                  <div class="form-check flex-1">
                    <input class="form-check-input" type="radio" value="Declined" name="status" id="status" checked>
                    <label class="form-check-label" for="status">
                      Declined
                    </label>
                  </div>
                  <div class="form-check flex-1">
                    <input class="form-check-input" type="radio" value="Pending" name="status" id="status" checked>
                    <label class="form-check-label" for="status">
                      Pending
                    </label>
                  </div>
                
            </div>
            <div class="form_last_second">
                <input type="submit" name="status_submit" class="btn submit_button" value="Submit Responce">
            </div>
        </form>


    </div>


    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>

</body>

</html>