<?php 
include("../back.php");
$RecevierID= $_SESSION['id'];
if(isset($_POST['student_message'])){
    $message_title = $_POST['message_title'];
    $coursess_id = $_POST['coursess_id'];
    $message_body = $_POST['message_body'];
    $message_inquery = $_POST['message_inquery'];
    $instructor_get_id = $_POST['instructor_get_id'];
    
    $AddMesasgeStudent = new backend();

    $AddMessage = $AddMesasgeStudent->insertion("student_messages",
    array('message_title'=>$message_title,
    'message_title'=>$message_title,
    'coursess_id'=>$coursess_id,
    'message_body'=>$message_body,
    'message_inquery'=>$message_inquery,
    'student_id'=>$RecevierID,
    'instructor_id'=>$instructor_get_id,
));

if($AddMessage){
    header("location: http://localhost/PHP-OOP/PROJECT/student/video_gallery.php?courses_id=$coursess_id");
}else{
    echo "Error generating in addition";
}

}

?>