<?php
include('../../back.php');
// $section_id = $_GET['section_id'];


$final_data = new backend();

$adding_data = $final_data->insertion('courses_lectures',array(
 'local1'=>$local1,'youtube1'=>$youtube1,'article1'=>$article1,
 'local2'=>$local2 , 'youtube2'=> $youtube2 , 'article2'=>$article2,
 'local3'=>$local3 , 'youtube3'=> $youtube3 , 'article3'=>$article3, 
 'local3'=>$local3 , 'youtube3'=> $youtube3 , 'article3'=>$article3, 
 'local4'=>$local4 , 'youtube4'=> $youtube4 , 'article4'=>$article4, 
 'local5'=>$local4 , 'youtube5'=> $youtube5 , 'article5'=>$article5, 
 'local6'=>$local6 , 'youtube6'=> $youtube6 , 'article6'=>$article6, 
 'local7'=>$local7 , 'youtube7'=> $youtube7 , 'article7'=>$article7, 
 'local8'=>$local8 , 'youtube8'=> $youtube8 , 'article8'=>$article8, 
 'local9'=>$local9 , 'youtube9'=> $youtube9 , 'article9'=>$article9, 
 'local10'=>$local10 , 'youtube10'=> $youtube10 , 'article10'=>$article10, 
 'section_id'=>$section_id
));

IF($adding_data){
    echo "Sucess";
}
else{
    echo "error occur";
}
// header("location: quiz_assingment.php?section_id=$section_id&courses_id=$courses_id&requirments_id=$requirments_id");
    

?>