<?php  include("../../back.php"); $data = new backend(); 
$name = $_GET['name'];
$email = $_GET['email'];
$token = $_GET['token'];
$user_id = $_GET['user_id'];
$courses_id_string = $_GET['courses_id'];
echo $courses_id_string;
echo $user_id;
$status = "Paid";
// $courses_ids = explode(',', $courses_id_string);
// print_r($courses_ids);
$all_ids = '';
// foreach ($courses_ids as $course_id) {
//     // Do something with each course ID
//     echo "Course ID: $course_id<br>";
//     $all_ids .= $course_id . ',';
//     echo $all_ids;

// }
$inserting_data = $data->insertion("payments",array('name'=>$name,'courses_id'=>$courses_id_string,'emaill'=>$email,'stripe_token'=>$token,'registration_id'=>$user_id));

echo $inserting_data;

if($inserting_data){
    echo "Query :" .$inserting_data;
    header("location: showpage.php?courses_id=$courses_id_string&status=$status");
}else{
    echo "Error";
}


?>