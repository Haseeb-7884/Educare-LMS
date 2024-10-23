<?php
include("../back.php");

$registration_id = $_GET['registration_id'];

echo $registration_id;

$StudentObject = new backend();

$StudentResult = $StudentObject->deletion('student',"registration_id = $registration_id");

if($StudentResult){
    header("location: http://localhost/PHP-OOP/PROJECT/admin/user_management.php");
}else{
    echo "Record not deleted";
}

?>