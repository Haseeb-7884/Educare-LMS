<?php  
include("../back.php");  
$mian_id = $_GET['course_id'];
// echo $mian_id;
$cources = new backend();
$getdata = $cources->fetching('cource','*',null,"courses_id='$mian_id'");
foreach($getdata as $courseData){ 
    $courses_id = $courseData['courses_id']; 
    $course_type = $courseData['course_type']; 
    echo $courses_id;
    if($course_type === 'Free'){
    header("location: section/freeCourse.php?course_id=$mian_id");
    }else{
    header("location: section/index.php?course_id=$mian_id");
    }
}
 
    ?>