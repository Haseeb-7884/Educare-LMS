<?php
include("../../back.php");
if(isset($_POST['content_submit'])) {

    $courses_id = $_POST['courses_id'];
    $requirments_id = $_POST['requirments_id'];
    $section_id = $_POST['section_id'];

    echo $courses_id;
    echo $requirments_id;
    echo $section_id;

 $quiz_title =  $_POST['quiz_title'];

 $question1 =  $_POST['question1'];
 $A1 =  $_POST['1A'];
 $B1 =  $_POST['1B'];
 $C1 =  $_POST['1C'];
 $D1 =  $_POST['1D'];

 $question2 =  $_POST['question2'];
 $A2 =  $_POST['2A'];
 $B2 =  $_POST['2B'];
 $C2 =  $_POST['2C'];
 $D2 =  $_POST['2D'];

 $question3 =  $_POST['question3'];
 $A3 =  $_POST['3A'];
 $B3 =  $_POST['3B'];
 $C3 =  $_POST['3C'];
 $D3 =  $_POST['3D'];

 $question4 =  $_POST['question4'];
 $A4 =  $_POST['4A'];
 $B4 =  $_POST['4B'];
 $C4 =  $_POST['4C'];
 $D4 =  $_POST['4D'];

 $question5 =  $_POST['question5'];
 $A5 =  $_POST['5A'];
 $B5 =  $_POST['5B'];
 $C5 =  $_POST['5C'];
 $D5 =  $_POST['5D'];

 $question6 =  $_POST['question6'];
 $A6 =  $_POST['6A'];
 $B6 =  $_POST['6B'];
 $C6 =  $_POST['6C'];
 $D6 =  $_POST['6D'];

 $question7 =  $_POST['question7'];
 $A7 =  $_POST['7A'];
 $B7 =  $_POST['7B'];
 $C7 =  $_POST['7C'];
 $D7 =  $_POST['7D'];

 $question8 =  $_POST['question8'];
 $A8 =  $_POST['8A'];
 $B8 =  $_POST['8B'];
 $C8 =  $_POST['8C'];
 $D8 =  $_POST['8D'];

 $question9 =  $_POST['question9'];
 $A9 =  $_POST['9A'];
 $B9 =  $_POST['9B'];
 $C9 =  $_POST['9C'];
 $D9 =  $_POST['9D'];

 $question10 =  $_POST['question10'];
 $A10 =  $_POST['10A'];
 $B10 =  $_POST['10B'];
 $C10 =  $_POST['10C'];
 $D10 =  $_POST['10D'];

 $option1 = $_POST['option1'];
 $option2 = $_POST['option2'];
 $option3 = $_POST['option3'];
 $option4 = $_POST['option4'];
 $option5 = $_POST['option5'];
 $option6 = $_POST['option6'];
 $option7 = $_POST['option7'];
 $option8 = $_POST['option8'];
 $option9 = $_POST['option9'];
 $option10 = $_POST['option10'];

$quiz_section_name = $_POST['quiz_section_name'];

$all_data = new backend();

$add_data = $all_data->insertion("quizzes",array(
     'quiz_section_name'=>$quiz_section_name,
    'quiz_title'=>$quiz_title,
    'question1'=>$question1,'1A'=>$A1, '1B'=>$B1, '1C'=>$C1, '1D'=>$D1,'option1'=>$option1,
    'question2'=>$question2,'2A'=>$A2, '2B'=>$B2, '2C'=>$C2, '2D'=>$D2,'option2'=>$option2,
    'question3'=>$question3,'3A'=>$A3, '3B'=>$B3, '3C'=>$C3, '3D'=>$D3,'option3'=>$option3,
    'question4'=>$question4,'4A'=>$A4, '4B'=>$B4, '4C'=>$C4, '4D'=>$D4,'option4'=>$option4,
    'question5'=>$question5,'5A'=>$A5, '5B'=>$B5, '5C'=>$C5, '5D'=>$D5,'option5'=>$option5,
    'question6'=>$question6,'6A'=>$A6, '6B'=>$B6, '6C'=>$C6, '6D'=>$D6,'option6'=>$option6,
    'question7'=>$question7,'7A'=>$A7, '7B'=>$B7, '7C'=>$C7, '7D'=>$D7,'option7'=>$option7,
    'question8'=>$question8,'8A'=>$A8, '8B'=>$B8, '8C'=>$C8, '8D'=>$D8,'option8'=>$option8,
    'question9'=>$question9,'9A'=>$A9, '9B'=>$B9, '9C'=>$C9, '9D'=>$D9,'option9'=>$option9,
    'question10'=>$question10,'10A'=>$A10, '10B'=>$B10, '10C'=>$C10, '10D'=>$D10,'option10'=>$option10,
    'cources_id '=>$courses_id,'requirments_id'=>$requirments_id,'section_id'=>$section_id
));

foreach($add_data as $getting_id){
   $QA_id = $getting_id['Q$A'];
   echo $QA_id;
}

if($add_data){
    echo "Data Added Successfully";
    header("location: quiz_assingment1.php?section_id=$section_id&courses_id=$courses_id&requirments_id=$requirments_id");
}else{
    echo "Error";
}

}else{
    echo "Error in getting data";
}
?>
