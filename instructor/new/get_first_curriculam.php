<?php 
include('../../back.php');

// Check if courses_id, requirments_id, and form submission are set
if($_SERVER['REQUEST_METHOD'] === 'POST') {
    $coruse_id = $_POST['courses_id'];
    $requirments_id = $_POST['requirments_id'];

    // echo $coruse_id;
    // echo $requirments_id;


    $section1 = $_POST['section1'];
    $section2 = $_POST['section2'];
    $section3 = $_POST['section3'];
    $section4 = $_POST['section4'];
    $section5 = $_POST['section5'];

    $section_first = $section1 . $section2;
    $section_second = $section3 . $section4 . $section5;
    $final_sum = $section_first . $section_second . $coruse_id . $requirments_id;

    // echo $final_sum;

//-----------------------------------------------------------------------------------------------------------------------        

$section01 = $_POST['section01'];

$title1A = $_POST['title1A'];
$lecture1A = $_POST['lecture1A'];
$iframe1A = $_POST['iframe1A'];

$title1B = $_POST['title1B'];
$lecture1B = $_POST['lecture1B'];
$iframe1B = $_POST['iframe1B'];

$title1C = $_POST['title1C'];
$lecture1C = $_POST['lecture1C'];
$iframe1C = $_POST['iframe1C'];

$title1D = $_POST['title1D'];
$lecture1D = $_POST['lecture1D'];
$iframe1D = $_POST['iframe1D'];


//-----------------------------------------------------------------------------------------------------------------------

$section02 = $_POST['section02'];

$title2A = $_POST['title2A'];
$lecture2A = $_POST['lecture2A'];
$iframe2A = $_POST['iframe2A'];

$title2B = $_POST['title2B'];
$lecture2B = $_POST['lecture2B'];
$iframe2B = $_POST['iframe2B'];

$title2C = $_POST['title2C'];
$lecture2C = $_POST['lecture2C'];
$iframe2C = $_POST['iframe2C'];

$title2D = $_POST['title2D'];
$lecture2D = $_POST['lecture2D'];
$iframe2D = $_POST['iframe2D'];

//----------------------------------------------------------------------------------------------------------------------------------

$section03 = $_POST['section03'];

$title3A = $_POST['title3A'];
$lecture3A = $_POST['lecture3A'];
$iframe3A = $_POST['iframe3A'];

$title3B = $_POST['title3B'];
$lecture3B = $_POST['lecture3B'];
$iframe3B = $_POST['iframe3B'];

$title3C = $_POST['title3C'];
$lecture3C = $_POST['lecture3C'];
$iframe3C = $_POST['iframe3C'];

$title3D = $_POST['title3D'];
$lecture3D = $_POST['lecture3D'];
$iframe3D = $_POST['iframe3D'];


//----------------------------------------------------------------------------------------------------------------------------------

$section04 = $_POST['section04'];

$title4A = $_POST['title4A'];
$lecture4A = $_POST['lecture4A'];
$iframe4A = $_POST['iframe4A'];

$title4B = $_POST['title4B'];
$lecture4B = $_POST['lecture4B'];
$iframe4B = $_POST['iframe4B'];

$title4C = $_POST['title4C'];
$lecture4C = $_POST['lecture4C'];
$iframe4C = $_POST['iframe4C'];

$title4D = $_POST['title4D'];
$lecture4D = $_POST['lecture4D'];
$iframe4D = $_POST['iframe4D'];


//----------------------------------------------------------------------------------------------------------------------------------

$section05 = $_POST['section05'];

$title5A = $_POST['title5A'];
$lecture5A = $_POST['lecture5A'];
$iframe5A = $_POST['iframe5A'];

$title5B = $_POST['title5B'];
$lecture5B = $_POST['lecture5B'];
$iframe5B = $_POST['iframe5B'];

$title5C = $_POST['title5C'];
$lecture5C = $_POST['lecture5C'];
$iframe5C = $_POST['iframe5C'];

$title5D = $_POST['title5D'];
$lecture5D = $_POST['lecture5D'];
$iframe5D = $_POST['iframe5D'];

//----------------------------------------------------------------------------------------------------------------------------------


$content_one = $section01 . $section02 . $section03 . $section04 . $section05;
$content_two = $title1A . $title1B . $title1C . $title1D . $title2A . $title2B . $title2C . $title2D;
$content_three = $title3A . $title3B . $title3C . $title3D . $title4A . $title4B . $title4C . $title4D . $title5A . $title5B . $title5C .  $title5D;
$content_four = $lecture1A .$lecture1B . $lecture1C . $lecture1D . $lecture2A . $lecture2B . $lecture2C . $lecture2D;
$content_five = $lecture3A . $lecture3B . $lecture3C . $lecture3D . $lecture4A .  $lecture4B . $lecture4C;
$content_six = $iframe1A . $iframe1B . $iframe1C . $iframe1D . $iframe2A . $iframe2B . $iframe2C . $iframe2D . $iframe3A . $iframe3B . $iframe3C . $iframe3D . $iframe4A . $iframe4B . $iframe4C;
$content_ids = $coruse_id . $requirments_id;

$final_content_data = $content_one . $content_two . $content_three . $content_four . $content_five . $content_six . $content_ids;

// echo  $final_content_data;
    $get_data = new backend();

    if($final_sum) {
        $five_Data = $get_data->insertion('course_sections', array(
            'section1' => $section1, 
            'section2' => $section2, 
            'section3' => $section3,
            'section4' => $section4, 
            'section5' => $section5,
            'courses_id' => $coruse_id,
            'requirments_id' => $requirments_id
        ));
        if($five_Data) {
           
            $all_Data = $get_data->fetching('course_sections');
            foreach($all_Data as $main_data){
                $section_id = $main_data['section_id'];
                $courses_id = $main_data['courses_id'];
                $requirments_id = $main_data['requirments_id'];
            }
            echo $section_id;
            echo $courses_id;
            echo $requirments_id;

            $adding_data =  $get_data->insertion('courses_lectures',array(
                'section01'=>$section01,'title1A'=>$title1A,'lecture1A'=>$lecture1A,'A1'=>$iframe1A,
                'title1B'=>$title1B,'lecture1B'=>$lecture1B,'B1'=>$iframe1B,
                'title1C'=>$title1C,'lecture1C'=>$lecture1C,'C1'=>$iframe1C,
                'title1D'=>$title1D,'lecture1D'=>$lecture1D,'D1'=>$iframe1D,

                'section02'=>$section02,'title2A'=>$title2A,'lecture2A'=>$lecture2A,'A2'=>$iframe2A,
                'title2B'=>$title2B,'lecture2B'=>$lecture2B,'B2'=>$iframe2B,
                'title2C'=>$title2C,'lecture2C'=>$lecture2C,'C2'=>$iframe2C,
                'title2D'=>$title2D,'lecture2D'=>$lecture2D,'D2'=>$iframe2D,

                'section03'=>$section03,'title3A'=>$title3A,'lecture3A'=>$lecture3A,'A3'=>$iframe3A,
                'title3B'=>$title3B,'lecture3B'=>$lecture3B,'B3'=>$iframe3B,
                'title3C'=>$title3C,'lecture3C'=>$lecture3C,'C3'=>$iframe3C,
                'title3D'=>$title3D,'lecture3D'=>$lecture3D,'D3'=>$iframe3D,

                'section04'=>$section04,'title4A'=>$title4A,'lecture4A'=>$lecture4A,'A4'=>$iframe4A,
                'title4B'=>$title4B,'lecture4B'=>$lecture4B,'B4'=>$iframe4B,
                'title4C'=>$title4C,'lecture4C'=>$lecture4C,'C4'=>$iframe4C,
                'title4D'=>$title4D,'lecture4D'=>$lecture4D,'D4'=>$iframe4D,

                'section05'=>$section05,'title5A'=>$title5A,'lecture5A'=>$lecture5A,'A5'=>$iframe5A,
                'title5B'=>$title5B,'lecture5B'=>$lecture5B,'B5'=>$iframe5B,
                'title5C'=>$title5C,'lecture5C'=>$lecture5C,'C5'=>$iframe5C,
                'title5D'=>$title5D,'lecture5D'=>$lecture5D,'D5'=>$iframe5D,
               
                'section_id'=>$section_id,
                'courses_id' => $courses_id,
                'requirments_id' => $requirments_id
               ));

               echo "Data inserted successfully."; 

               header("location: quiz_assingment.php?section_id=$section_id&courses_id=$courses_id&requirments_id=$requirments_id");
           
        } else {
            echo "Failed to insert data.";
        }

    }
} 
else {
    echo "courses_id, requirments_id, or form submission not provided or detected.";
}
?>
<!-- <a href="../../back.php"></a> -->
