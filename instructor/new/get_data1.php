<?php
include("../../back.php");
if(isset($_POST['Content_Submit'])) {

    $courses_id = $_POST['courses_id'];
    $requirments_id = $_POST['requirments_id'];
    $section_id = $_POST['section_id'];

    echo $courses_id;
    echo $requirments_id;
    echo $section_id;

 $assingment_title1 =  $_POST['assingment_title1'];
//  $assingment_file1 =  $_POST['assingment_file1'];
 $assingment_file1 = assingmenthandling($_FILES['assingment_file1']);
 $assesment1 =  $_POST['assesment1'];
 $assingment_section_name1 =  $_POST['assingment_section_name1'];

 $assingment_title2 =  $_POST['assingment_title2'];
 $assingment_file2 = assingmenthandling($_FILES['assingment_file2']);
 $assesment2 =  $_POST['assesment2'];
 $assingment_section_name2 =  $_POST['assingment_section_name2'];

 $assingment_title3 =  $_POST['assingment_title3'];
 $assingment_file3 = assingmenthandling($_FILES['assingment_file3']);
 $assesment3 =  $_POST['assesment3'];
 $assingment_section_name3 =  $_POST['assingment_section_name3'];

 $assingment_title4 =  $_POST['assingment_title4'];
 $assingment_file4 = assingmenthandling($_FILES['assingment_file4']);
 $assesment4 =  $_POST['assesment4'];
 $assingment_section_name4 =  $_POST['assingment_section_name4'];

 $assingment_title5 =  $_POST['assingment_title5'];
 $assingment_file5 = assingmenthandling($_FILES['assingment_file5']);
 $assesment5 =  $_POST['assesment5'];
 $assingment_section_name5 =  $_POST['assingment_section_name5'];

$assingment_deadline_01 = $_POST['assingment_deadline_01'];
$assingment_deadline_02 = $_POST['assingment_deadline_02'];
$assingment_deadline_03 = $_POST['assingment_deadline_03'];
$assingment_deadline_04 = $_POST['assingment_deadline_04'];
$assingment_deadline_05 = $_POST['assingment_deadline_05'];

$all_data = new backend();

$add_data = $all_data->insertion("assingments",array(
     'assingment_title1'=> $assingment_title1,'assingment_file1'=>$assingment_file1['assingmentPath'],'assesment1'=>$assesment1,'assingment_deadline_01'=>$assingment_deadline_01,'assingment_section_name1'=>$assingment_section_name1,
     'assingment_title2'=> $assingment_title2,'assingment_file2'=>$assingment_file2['assingmentPath'],'assesment2'=>$assesment2,'assingment_deadline_02'=>$assingment_deadline_02,'assingment_section_name2'=>$assingment_section_name2,
     'assingment_title3'=> $assingment_title3,'assingment_file3'=>$assingment_file3['assingmentPath'],'assesment3'=>$assesment3,'assingment_deadline_03'=>$assingment_deadline_03,'assingment_section_name3'=>$assingment_section_name3,
     'assingment_title4'=> $assingment_title4,'assingment_file4'=>$assingment_file4['assingmentPath'],'assesment4'=>$assesment4,'assingment_deadline_04'=>$assingment_deadline_04,'assingment_section_name4'=>$assingment_section_name4,
     'assingment_title5'=> $assingment_title5,'assingment_file5'=>$assingment_file5['assingmentPath'],'assesment5'=>$assesment5,'assingment_deadline_05'=>$assingment_deadline_05,'assingment_section_name5'=>$assingment_section_name5,
    'cources_id'=>$courses_id,'requirments_id'=>$requirments_id,'section_id'=>$section_id
));

foreach($add_data as $getting_id){
   $QA_id = $getting_id['Q$A'];
   echo $QA_id;
}

if($add_data){
    echo "Data Added Successfully";
    header("location: course_price.php?section_id=$section_id&courses_id=$courses_id&requirments_id=$requirments_id");
}else{
    echo "Error";
}

}else{
    echo "Error in getting data";
}
?>
