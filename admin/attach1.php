<?php
include("../back.php");

$registration_id = $_GET['registration_id'];

echo $registration_id;

$InstructorObject = new backend();

$DeletingResult = $InstructorObject->deletion('instructor',"registration_id = $registration_id");

if($DeletingResult){
    header("location: http://localhost/PHP-OOP/PROJECT/admin/user_management.php");
}else{
    echo "Record not deleted";
}

?>