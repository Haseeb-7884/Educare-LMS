<?php
include("../../back.php");
$_SESSION['fname'];
$_SESSION['lname'];
$instructor_id = $_GET['instructor_id'];
header("location: ../new/index.php?instructor_id=$instructor_id");
?>
