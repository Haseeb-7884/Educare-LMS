<?php 
include("../../back.php");
if(isset($_POST['enroll_submit'])){
    $courses_id = $_POST['courses_id'];
    $status = $_POST['status'];
    echo $courses_id;
    header("location:showpage.php?courses_id=$courses_id&status=$status");
}
?>