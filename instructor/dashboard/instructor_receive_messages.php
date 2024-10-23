<?php 
include("../../back.php");
if(isset($_POST['instructor_message'])){
    $message_title = $_POST['message_title'];
    $message_body = $_POST['message_body'];
    $instructor_get_id = $_POST['instructor_get_id'];
    $message_inquery = $_POST['message_inquery'];
    $register_id = $_POST['register_id'];

$InstructorObject = new backend();

$AddInstructor = $InstructorObject->insertion("instructor_messages",array(
    'message_title'=>$message_title,'message_body'=>$message_body,
    'message_inquery'=>$message_inquery,'registration_id'=>$register_id,
    'instructor_id'=>$instructor_get_id
)
);

if($AddInstructor){
    header("location: http://localhost/PHP-OOP/PROJECT/instructor/dashboard/tools.php");
}else{
    echo "There is error in adding the data";
}

}else{
    echo "Data not getted";
}


?>