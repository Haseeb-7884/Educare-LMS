<?php
// This script should handle course creation or update logic

// Assuming you have a form to create/update a course, add the following code to record the time

$courseId = $_POST['course_id']; // Assuming you have a course ID from the form

// Record the creation or update time
$currentTime = date("Y-m-d H:i:s");
// Save $currentTime to your database along with other course details

// Redirect to the product listing page after the course is created or updated
header("Location: product_listing.php");
exit;
?>
