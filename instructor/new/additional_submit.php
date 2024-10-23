<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <title>Document</title>
</head>
<body>





<?php 
include("../../back.php");
if(isset($_POST['info_submit'])){
   $course_prerequsites = $_POST['course_prerequsites'];
   $final_words = $_POST['final_words'];

   $enterd_main = $_POST['enterd_main'];

   $cover_planning = $_POST['cover_planning'];

   $instructor_instructions = $_POST['instructor_instructions'];
   $instructor_planings = $_POST['instructor_planings'];

   $courses_id = $_POST['courses_id'];
   $requirments_id = $_POST['requirments_id'];
   $section_id = $_POST['section_id'];

   $infoData = new backend();

   $AddInfo = $infoData->insertion("course_additional_info",array('course_prerequsites'=>$course_prerequsites,
   'final_words'=>$final_words,'enterd_main'=>$enterd_main,
   'cover_planning'=>$cover_planning,
   'instructor_instructions'=>$instructor_instructions,'instructor_planings'=>$instructor_planings,
   'courses_id'=>$courses_id,
   'requirments_id'=>$requirments_id,'section_id'=>$section_id,
));

if ($AddInfo) {
?>
<script>
  Swal.fire({
  icon: "success",
  title: "Course Submitted!",
  text: "Still Wait for the admin for course Approvel",
  footer: '<a href="http://localhost/PHP-OOP/PROJECT/instructor/dashboard/">Click Here to reach the dashboard</a>'
});
</script>
<?php   
} else {
  echo "Error";
}

}
?>


<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</body>
</html>

