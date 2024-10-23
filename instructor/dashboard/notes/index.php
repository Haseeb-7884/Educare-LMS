<?php 
include("../../../back.php");
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

</head>

<body>

    <div style="background-color:purple;" class="d-flex justify-content-around pb-2 pt-2">
        <h1 class="fw-bold text-light">Notes Section</h1>
        <div class="d-flex align-items-center">
            <a href="../../dashboard/tools.php" class="btn btn-light me-4">previous page</a>
            <a href="../../dashboard/index.php" class="btn btn-dark">Towards Dashboard</a>
        </div>
    </div>

    <div class="container mt-5 p-3 border border-2 border-dark">
        <form action="submit.php" method="POST" enctype="multipart/form-data">
            <div class="mb-3">
                <label style="font-weight:bold;" class="form-label">Give Title<span class="text-danger">*</span></label>
                <input type="text" name="title" class="form-control" required placeholder="Title">
            </div>
            <div class="mb-3">
            <label style="font-weight:bold;" class="form-label">Select Course<span class="text-danger">*</span></label>
      <select class="form-select" id="selected_course" name="selected_course">
      <option value="" required disbaled>Select from the following</option>
      <?php
      $user_id  = $_SESSION['id'];
      $get_courses = new backend();
      $get_data = $get_courses->fetching("instructor","*",null,"registration_id = $user_id");
      if($get_data){

      foreach($get_data as $ins_data){
         $instructor_id = $ins_data['instructor_id'];
        //  echo "Instructor_id".$instructor_id;
         $get_course_data = $get_courses->fetching("cource","*",null,"instructor_id = $instructor_id");
      foreach($get_course_data as $all_data){
        //  echo $all_data['course_title'];
         $course_type = $all_data['course_type'];
    
          ?>
          <option value="<?= $all_data['courses_id'] ?>"><?= $all_data['course_title'] ?></option>
          <?php    
    

      }
    }

  }else{
    echo null;
  }
      ?>
      </select>
            </div>


            <div class="mb-3">
                <label style="font-weight:bold;" class="form-label">Upload File<span class="text-danger">*</span></label>
                <input type="file" name="note_file" class="form-control" required accept=".doc,.docx,.pdf,.txt">
                <div id="" class="form-text">(Only txt, pdf or word file allowed)</div>
            </div>

            <input type="submit" class="btn text-light fw-bold" value="Final Submit" style="background-color: purple;" name="SubmitData">
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>

</body>

</html>