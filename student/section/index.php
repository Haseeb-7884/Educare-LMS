<?php  include("../../back.php");  ?>
<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <title>Hello, world!</title>
    <link rel="stylesheet" href="../../assets/css/course-page.css">

    <style>
    </style>

</head>

<body>

<?php 
$mian_id = $_GET['course_id'];

// $logID = $_SESSION['id'];

// echo $mian_id;
$cources = new backend();
$getdata = $cources->fetching('cource','*',null,"courses_id='$mian_id'");

foreach($getdata as $courseData){ 
    $courses_id = $courseData['courses_id']; 
    
?>
    <div class="container-fluid bg-dark mt-5 content-height">
        <!-- breadcrumb start -->
        <div class="container fw-bold">
            <nav aria-label="breadcrumb" style="--bs-breadcrumb-divider: '>';">
                <ol class="breadcrumb pt-3">
                   <li class="breadcrumb-item"><a href="#" class="text-decoration-none breadcrumb-color">
                    <?php 
                    $category_id = $courseData['select_category'];
                    // echo $category_id ;
                    $getdata = $cources->fetching('cources_categories','*',null,"category_id='$category_id'");
                    foreach($getdata as $mainCategory){
                        $category = $mainCategory['category_name'];
                        echo $category; } ?>
                   </a></li>
                    <li class="breadcrumb-item active" aria-current="page"
                        class="text-decoration-none breadcrumb-color"><?= $courseData['primary_taught'] ?></li>
                </ol>
            </nav>
            <!-- breadcrumb end -->

            <h1 class="content-heading fw-bold text-light">
                <?= $courseData['course_title'] ?>
            </h1>

            <p class="content-para text-light pt-2">
                <!-- Lean Javascript Development, Javascript Development, JS Development, Javascript Development Adavnce,
                Learn Each Module of JavaScript & More! -->
                <?= $courseData['course_subtitle'] ?>
            </p>

            <div class="mt-3">
                <h5 class="text-light"><span class="badge badge-color">Best Seller</span> &nbsp; 4.6 rating </h5>
                <p class="content-description">
                    Created and Desinged by &nbsp; <a href="" style="color: rgb(156, 164, 229);">
                        <!-- Mr Instructor (visit Profile) -->
                        <?= $courseData['instructor_name'] ?> (visit Profile)
                    </a>
                </p>
            </div>

            <div class="text-light">
                <p class="pb-3">
                    <i class="fa-solid fa-clock" style="color: #ffffff;"></i>
                    last updated
                     <!-- 4/2023 -->
                     <?php 
                  $getTime = $cources->fetching('course_requirments','*',null,"courses_id = '$mian_id'");
                  foreach($getTime as $timeData){
                    echo $timeData['last_updated'];  
                  }
                ?>
                     &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                    <i class="fa-solid fa-globe" style="color: #ffffff;"></i>
                    <?= $courseData['select_language'] ?>   
                    <!-- English -->
                    &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                    <span class="badge badge-color  badge-color-special">
                    <?= $courseData['selecting_level'] ?>   
                        <!-- Advance Level -->
                    </span>
                </p>
            </div>
        </div>

    </div>

    <div class="container mt-4 mb-0 description-section ">
        <div class="border border-2 p-4 border-secondary description-section-left">
            <h1 class="mb-3 fw-bold">What you'll learn</h1>
            <div class="d-flex justify-content-center inner-description">
                <div class="inner-description-first">
                    <ol class="list_style">
                            <?php 
                                  $getLearners = $cources->fetching('course_requirments','*',null,"courses_id='$mian_id'");
                                  foreach($getLearners as $LearnersData){
                                    echo $LearnersData['course_outcome'];   
                                  }
                            ?>
                    </ol>
                </div>
             
            </div>
        </div>

        <div class="position-relative description-section-right d-sm-none d-md-block d-none">

            <img src="../../instructor/new/<?= $courseData['course_img'] ?>" class="course-image" alt="">

            <div class="background-color fw-bold text-light text-center">preview this course</div>

            <div class="play-button" data-bs-toggle="modal" data-bs-target="#exampleModal">
                <i class="fas fa-play button-icon"></i>
            </div>

            <div class="bg-color-course position-relative">
            <?php 
                $course_price = $cources->fetching('course_prices','*',null,"courses_id =  $courses_id");
                foreach($course_price as $main_price){
                  $price = $main_price['course_price'];
                  $currency = $main_price['currency'];
                  $overPrice = $currency . '&nbsp;' . $price;
                  $ToShow = $currency . '&nbsp;';
                  $ToShowMessage = '<p style="font-size:13px; color:green;">Discounted <span class="text-danger text-decoration-underline">Original('.$overPrice.')</span></p>';
                //   $ToShowSecond = '<p style="font-size:13px; color:red;">Original</p>';
                //   $ToShow = 'PKR';
                }
                ?>
                <!-- courses price dicount here  -->

               
<?php 

$courses_id = $_GET['course_id'];

$checkDiscount = $cources->fetching("coupons","*",null,"courses_id = $courses_id");

if(!empty($checkDiscount)){

    foreach($checkDiscount as $AvailableDiscount){
        $discountPercent = $AvailableDiscount['coupon_percent'];
        $coupon_expiry_string = $AvailableDiscount['coupon_expiry'];
        $courses_id = $AvailableDiscount['courses_id'];
   
    
    $CoursePrice = $cources->fetching("course_prices","*",null,"courses_id = $courses_id");

    if(!empty($CoursePrice)){

        foreach($CoursePrice as $CourseDiscountedPrice){
            $Course_price = $CourseDiscountedPrice['course_price'];
        }

    }else{
        echo "Price not found";
    }

}// for loop ends here

    $discount_percentage = $discountPercent / 100;
    $discount_amount = $discount_percentage * $Course_price;
    $final_price = $Course_price - $discount_amount;

    $localTimeZone = new DateTimeZone('Asia/Karachi');
    $currentDate = new DateTime('now', $localTimeZone);

    $coupon_expiry = new DateTime($coupon_expiry_string, $localTimeZone);

    $interval = $currentDate->diff($coupon_expiry);

    $totalHours = ($interval->days * 24) + $interval->h + ($interval->i / 60); // Including minutes for more precision

    // If the expiry date is in the past, $interval->invert will be 1
    if ($interval->invert) {
        $totalHours = 0; // Display 0 if the expiry date is in the past
    }

    $totalHoursFormatted = number_format($totalHours, 2);

    // print_r($currentDate);

?> 

 <!-- <h2 class="fw-bold fs-2">
     $ToShow. $final_price;
</h2> -->

<span><?php 
// echo $totalHours ;
if($totalHoursFormatted == 0){
?>

<div class="text-dark mobile-responsiveness-price pt-2 d-flex justify-content-evenly align-items-center">

<h2 class='fw-bold fs-2'>
    <?= $overPrice ?>
</h2>
<span class='text-danger d-block fw-bold'>No Discount</span>

</div> 

<?php 
}else{
?>   

<div class="text-dark mobile-responsiveness-price pt-2 d-flex justify-content-evenly align-items-center">

<h2 class="fw-bold">
   <?= $ToShow. $final_price .$ToShowMessage?>
</h2> 
    <span><?=$discountPercent."% off"?></span>

</div>    

    <?php 
} // else part ends here

?></span>

<?php 
}else{
?>

<div class="text-dark mobile-responsiveness-price pt-2 d-flex justify-content-evenly align-items-center">
                    <h2 class='fw-bold fs-2'>
                        <?= $overPrice ?>
                    </h2>

<span class='text-danger fw-bold'>No Discount</span>

</div>

<?php 
} // else part 
?>
                    
              

                <?php 
                if(!empty($coupon_expiry)){
?>
 <p class="course_small_desc">
                    <span class="course_small_desc fw-bold"> <i class="fa-solid fa-clock-rotate-left me-1"
                            style="color: #ff0000;"></i><?=$totalHoursFormatted?> hour</span> &nbsp; left at this price!
 </p>
<?php 
                }else{
?>
 <p class="course_small_desc">
                    <span class="course_small_desc fw-bold"> <i class="fa-solid fa-clock-rotate-left me-1"
                            style="color: #ff0000;"></i>0 hour</span> &nbsp; left at this price!
 </p>
<?php 
                }
                ?>
               

                <div class="cart-section position-relative">
                
                
                <form action="cart_data.php" style="display:inline-block;" method='post' enctype='multipart/form-data'>
                    <input type="hidden" name="courses_id" value="<?= $courseData['courses_id'] ?>">
                    <input type="submit" name="cartCourse" class="btn btn-primary cart_btn btn-lg me-1" value="Add to Cart"> 
                </form>	
                
                    <!-- <a href="" class="btn btn-primary cart_btn btn-lg me-1">
                        Add to Cart
                    </a> -->

                    <a href="" class="btn border border-2 favourite_btn border-dark btn-lg">
                        <i class="fa-regular fa-heart" style="color: #000000;font-size:25px;"></i>
                    </a>
                </div>

                <!-- <form action="purchase.php" style="display:inline-block;" method='post' enctype='multipart/form-data'>
                    <input type="hidden" name="cources_id" value="<?php $courseData['courses_id'] ?>">
                    <input type="submit" name="buy_course" class="btn border border-2 border-dark mt-2 buy_btn btn-lg position-relaive" value="Buy now"> 
                </form>	 -->
<?php 
if(isset($_SESSION['id'])){
    $reg_id = $_SESSION['id'];
?>    
    <a href="purchase.php?cources_id=<?= $courseData['courses_id'] ?>&Log_id=<?= $reg_id ?>" class="btn border border-2 border-dark mt-2 buy_btn btn-lg position-relaive">Buy now</a>
<?php
}else{
?>
    <a href="purchase.php?cources_id=<?= $courseData['courses_id'] ?>&Log_id=0" class="btn border border-2 border-dark mt-2 buy_btn btn-lg position-relaive">Buy now</a>
<?php 
}
?>


                <p class="text-center mt-2">30-days Money-Back Garuntee</p>

                <div class="course_includes">
                    <h5 class="fw-bold mb-3">This course includes:</h5>
                    
                    <div>
                    <?php 
                    $getIncludes = $cources->fetching('course_requirments','*',null,"courses_id='$mian_id'");
                    if(!empty($getIncludes)){
                        foreach($getIncludes as $includesData){
                            $IncData = $includesData['course_includes'];
                    ?>
                        <ol class="includes-desc ps-1">
                        <?=  $IncData ?>         
                        </ol>  
                    <?php         
                        }  
                    }else{
                        echo null;
                    } ?>
                        
                </div>
                </div>

                <div class="d-flex justify-content-evenly fw-bold">
                    <a href="">Share</a>
                    <a href="">Apply Coupon</a>
                </div>

            </div>
        </div>


    </div>

    

    <?php 
    $get_all_content = $cources->fetching('course_sections','*',null,"courses_id = $courses_id");
    if(!empty($get_all_content)){

        echo "<h1 class='container fw-bold' style='font-size: 30px;'>Course Content</h1>";

    foreach($get_all_content as $content_data_headings){
        $section_id = $content_data_headings['section_id'];
        $section1 = $content_data_headings['section1'];
        $section2 = $content_data_headings['section2'];
        $section3 = $content_data_headings['section3'];
        $section4 = $content_data_headings['section4'];
        $section5 = $content_data_headings['section5'];
        $section6 = $content_data_headings['section6'];
        $section7 = $content_data_headings['section7'];
        $section8 = $content_data_headings['section8']; ?>

    <div class="course-content">

        <div class="accordion mt-4" id="accordionPanelsStayOpenExample">
<!-- 1st course section start -->
<?php 
 if(!empty($section1)){
?>
            <div class="accordion-item">
                <h2 class="accordion-header" id="panelsStayOpen-headingOne">
                    <button class="accordion-button fw-bold text-dark" style="text-transform: capitalize;" type="button" data-bs-toggle="collapse"
                        data-bs-target="#panelsStayOpen-collapseOne">
                       <?= $section1 ?>
                         &nbsp; &nbsp; &nbsp; 
                    </button>
                </h2>
                <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show text-dark">
                <div class="accordion-body">
                        <ul class="course_content_style">
                <?php 
                // for quizzes 
                    $get_all_content_data = $cources->fetching('quizzes','*',null,"section_id = $section_id");
                    if(!empty($get_all_content_data)){

                    foreach($get_all_content_data as $quiz_data){
                        $quiz_section_name = $quiz_data['quiz_section_name'];
                        $quiz_title = $quiz_data['quiz_title'];

                    
                            $quiz_section_name1_lower = strtolower($quiz_section_name);
                            $section1_lower = strtolower($section1);

                                $section_text1 = preg_split('/\s+/', $quiz_section_name1_lower, -1, PREG_SPLIT_NO_EMPTY);
                                $quiz_text1 = preg_split('/\s+/', $section1_lower, -1, PREG_SPLIT_NO_EMPTY);

                                if($section_text1 === $quiz_text1){
                                    echo  "<li>"  . $quiz_title . "</li>";
                                }else{
                                    echo null;
                                }
                    }// for loop end here 

                    } // if end here 
                    else{ echo null; } 

                // for Assingments 
                    $get_all_content_data2 = $cources->fetching('assingments','*',null,"section_id = $section_id");
                    if(!empty($get_all_content_data2)){

                    foreach($get_all_content_data2 as $assingment_data){
                        $assingment_section_name1 = $assingment_data['assingment_section_name1'];
                        $assingment_section_name2 = $assingment_data['assingment_section_name2'];
                        $assingment_section_name3 = $assingment_data['assingment_section_name3'];
                        $assingment_section_name4 = $assingment_data['assingment_section_name4'];
                        $assingment_section_name5 = $assingment_data['assingment_section_name5'];
                        
                        $assingment_title1 = $assingment_data['assingment_title1'];
                        $assingment_title2 = $assingment_data['assingment_title2'];
                        $assingment_title3 = $assingment_data['assingment_title3'];
                        $assingment_title4 = $assingment_data['assingment_title4'];
                        $assingment_title5 = $assingment_data['assingment_title5'];

                        $assingment_section_name1_lower = strtolower($assingment_section_name1);
                        $assingment_section_name2_lower = strtolower($assingment_section_name2);
                        $assingment_section_name3_lower = strtolower($assingment_section_name3);
                        $assingment_section_name4_lower = strtolower($assingment_section_name4);
                        $assingment_section_name5_lower = strtolower($assingment_section_name5);
                        
                        $section1_lower = strtolower($section1);
                 
                        if(!empty($assingment_section_name1)){
                            if($assingment_section_name1_lower === $section1_lower){
                                echo "<li>". $assingment_title1."</li>";
                            }else{
                                echo null;
                            }
                        }
                        if(!empty($assingment_section_name2)){
                            if($assingment_section_name2_lower === $section1_lower){
                                echo "<li>". $assingment_title2."</li>";
                            }else{
                                echo null;
                            }
                        }
                        if(!empty($assingment_section_name3)){
                            if($assingment_section_name3_lower === $section1_lower){
                                echo "<li>". $assingment_title3."</li>";
                            }else{
                                echo null;
                            }
                        }
                        if(!empty($assingment_section_name4)){
                            if($assingment_section_name4_lower === $section1_lower){
                                echo "<li>". $assingment_title4."</li>";
                            }else{
                                echo null;
                            }
                        }

                        if(!empty($assingment_section_name5)){
                            if($assingment_section_name5_lower === $section1_lower){
                                echo "<li>". $assingment_title5."</li>";
                            }else{
                                echo null;
                            }
                        }

                    }// for loop end here 

                    } // if end here 

                    else{ echo null; } 
                    

                    // for lectures 
                    $get_all_content_data3 = $cources->fetching('courses_lectures','*',null,"section_id = $section_id");
                    if(!empty($get_all_content_data3)){

                        foreach($get_all_content_data3 as $lectures_data){
                           $section01 = $lectures_data['section01'];
                           $section02 = $lectures_data['section02'];
                           $section03 = $lectures_data['section03'];
                           $section04 = $lectures_data['section04']; 
                           
                           $title1A = $lectures_data['title1A']; 
                           $title1B = $lectures_data['title1B']; 
                           $title1C = $lectures_data['title1C']; 
                           $title1D = $lectures_data['title1D']; 

                           $title2A = $lectures_data['title2A']; 
                           $title2B = $lectures_data['title2B']; 
                           $title2C = $lectures_data['title2C']; 
                           $title2D = $lectures_data['title2D'];

                           $title3A = $lectures_data['title3A']; 
                           $title3B = $lectures_data['title3B']; 
                           $title3C = $lectures_data['title3C']; 
                           $title3D = $lectures_data['title3D'];

                           $title4A = $lectures_data['title4A']; 
                           $title4B = $lectures_data['title4B']; 
                           $title4C = $lectures_data['title4C']; 
                        
                            
                           $section01_lower = strtolower($section01);
                           $section02_lower = strtolower($section02);
                           $section03_lower = strtolower($section03);
                           $section04_lower = strtolower($section04);
                
                           $section1_lower = strtolower($section1);

                           if($section01_lower === $section1_lower){
                              if(!empty($title1A)){
                                echo "<li>".$title1A."</li>";
                              }
                              if(!empty($title1B)){
                                echo "<li>".$title1B."</li>";
                              }
                              if(!empty($title1C)){
                                echo "<li>".$title1C."</li>";
                              }
                              if(!empty($title1D)){
                                echo "<li>".$title1D."</li>";
                              }
                           }
                           if($section02_lower === $section1_lower){
                                if(!empty($title2A)){
                                    echo "<li>".$title2A."</li>";
                                }
                                if(!empty($title2B)){
                                    echo "<li>".$title2B."</li>";
                                }
                                if(!empty($title2C)){
                                    echo "<li>".$title2C."</li>";
                                }
                                if(!empty($title2D)){
                                    echo "<li>".$title2D."</li>";
                                }
                           }
                           if($section03_lower === $section1_lower){
                                if(!empty($title3A)){
                                    echo "<li>".$title3A."</li>";
                                }
                                if(!empty($title3B)){
                                    echo "<li>".$title3B."</li>";
                                }
                                if(!empty($title3C)){
                                    echo "<li>".$title3C."</li>";
                                }
                                if(!empty($title3D)){
                                    echo "<li>".$title3D."</li>";
                                }
                           }
                           if($section04_lower === $section1_lower){
                                if(!empty($title4A)){
                                    echo "<li>".$title4A."</li>";
                                }
                                if(!empty($title4B)){
                                    echo "<li>".$title4B."</li>";
                                }
                                if(!empty($title4C)){
                                    echo "<li>".$title4C."</li>";
                                }
                                if(!empty($title4D)){
                                    echo "<li>".$title4D."</li>";
                                }
                           } else{
                            echo null;
                           }

                        }// for loop end here 
    
                        } // if end here 
                        else{
                            echo null;
                        }
                    
                    ?>  
                    
                        </ul>
                    </div>

                    
                </div>
            </div>
<?php 
} // if end here 
else{
    echo null;
}
?>
<!-- 1st course section end -->
<!-- 2nd course section start -->
<?php 
 if(!empty($section2)){
?>
            <div class="accordion-item">
                <h2 class="accordion-header" id="panelsStayOpen-headingOne">
                    <button class="accordion-button fw-bold text-dark" type="button" data-bs-toggle="collapse"
                        data-bs-target="#panelsStayOpen-collapseOne">
                       <?= $section2 ?>
                         <!-- &nbsp; &nbsp; &nbsp; 20:12:20 -->
                    </button>
                </h2>
                <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show text-dark">
                    <div class="accordion-body">
                    <ul>
                        <?php 
                        
                         // for quizzes 
                    $get_all_content_data = $cources->fetching('quizzes','*',null,"section_id = $section_id");
                    if(!empty($get_all_content_data)){

                    foreach($get_all_content_data as $quiz_data){
                        $quiz_section_name = $quiz_data['quiz_section_name'];
                        $quiz_title = $quiz_data['quiz_title'];

                    
                            $quiz_section_name1_lower = strtolower($quiz_section_name);
                            $section2_lower = strtolower($section2);

                                $section_text1 = preg_split('/\s+/', $quiz_section_name1_lower, -1, PREG_SPLIT_NO_EMPTY);
                                $quiz_text1 = preg_split('/\s+/', $section2_lower, -1, PREG_SPLIT_NO_EMPTY);

                                if($section_text1 === $quiz_text1){
                                    echo  "<li>" . $quiz_title . "</li>";
                                }else{
                                    echo null;
                                }
                    }// for loop end here 

                    } // if end here 
                    else{ echo null; } 

                        // for Assingments 
                    $get_all_content_data2 = $cources->fetching('assingments','*',null,"section_id = $section_id");
                    if(!empty($get_all_content_data2)){

                    foreach($get_all_content_data2 as $assingment_data){
                        $assingment_section_name1 = $assingment_data['assingment_section_name1'];
                        $assingment_section_name2 = $assingment_data['assingment_section_name2'];
                        $assingment_section_name3 = $assingment_data['assingment_section_name3'];
                        $assingment_section_name4 = $assingment_data['assingment_section_name4'];
                        $assingment_section_name5 = $assingment_data['assingment_section_name5'];

                        $assingment_section_name1_lower = strtolower($assingment_section_name1);
                        $assingment_section_name2_lower = strtolower($assingment_section_name2);
                        $assingment_section_name3_lower = strtolower($assingment_section_name3);
                        $assingment_section_name4_lower = strtolower($assingment_section_name4);
                        $assingment_section_name5_lower = strtolower($assingment_section_name5);
                        
                        $assingment_title1 = $assingment_data['assingment_title1'];
                        $assingment_title2 = $assingment_data['assingment_title2'];
                        $assingment_title3 = $assingment_data['assingment_title3'];
                        $assingment_title4 = $assingment_data['assingment_title4'];
                        $assingment_title5 = $assingment_data['assingment_title5'];

                        
                        $section2_lower = strtolower($section2);
                 
                        if(!empty($assingment_section_name1_lower)){
                            if($assingment_section_name1_lower == $section2_lower){
                                echo "<li>". $assingment_title1."</li>";
                            }else{
                                echo null;
                            }
                        }
                        if(!empty($assingment_section_name2_lower)){
                            if($assingment_section_name2_lower == $section2_lower){
                                echo "<li>". $assingment_title2."</li>";
                            }else{
                                echo "Not found";
                            }
                        }
                        if(!empty($assingment_section_name3_lower)){
                            if($assingment_section_name3_lower === $section2_lower){
                                echo "<li>". $assingment_title3."</li>";
                            }else{
                                echo null;
                            }
                        }
                        if(!empty($assingment_section_name4_lower)){
                            if($assingment_section_name4_lower === $section2_lower){
                                echo "<li>". $assingment_title4."</li>";
                            }else{
                                echo null;
                            }
                        }

                        if(!empty($assingment_section_name5_lower)){
                            if($assingment_section_name5_lower === $section2_lower){
                                echo "<li>". $assingment_title5."</li>";
                            }else{
                                echo null;
                            }
                        }

                    }// for loop end here 

                    } // if end here 

                    else{ echo null; } 


                     // for lectures 
                     $get_all_content_data3 = $cources->fetching('courses_lectures','*',null,"section_id = $section_id");
                     if(!empty($get_all_content_data3)){
 
                         foreach($get_all_content_data3 as $lectures_data){
                            $section01 = $lectures_data['section01'];
                            $section02 = $lectures_data['section02'];
                            $section03 = $lectures_data['section03'];
                            $section04 = $lectures_data['section04']; 
                            
                            $title1A = $lectures_data['title1A']; 
                            $title1B = $lectures_data['title1B']; 
                            $title1C = $lectures_data['title1C']; 
                            $title1D = $lectures_data['title1D']; 
 
                            $title2A = $lectures_data['title2A']; 
                            $title2B = $lectures_data['title2B']; 
                            $title2C = $lectures_data['title2C']; 
                            $title2D = $lectures_data['title2D'];
 
                            $title3A = $lectures_data['title3A']; 
                            $title3B = $lectures_data['title3B']; 
                            $title3C = $lectures_data['title3C']; 
                            $title3D = $lectures_data['title3D'];
 
                            $title4A = $lectures_data['title4A']; 
                            $title4B = $lectures_data['title4B']; 
                            $title4C = $lectures_data['title4C']; 
                         
                             
                            $section01_lower = strtolower($section01);
                            $section02_lower = strtolower($section02);
                            $section03_lower = strtolower($section03);
                            $section04_lower = strtolower($section04);
                 
                            $section2_lower = strtolower($section2);
 
                            if($section01_lower === $section2_lower){
                               if(!empty($title1A)){
                                 echo "<li>".$title1A."</li>";
                               }
                               if(!empty($title1B)){
                                 echo "<li>".$title1B."</li>";
                               }
                               if(!empty($title1C)){
                                 echo "<li>".$title1C."</li>";
                               }
                               if(!empty($title1D)){
                                 echo "<li>".$title1D."</li>";
                               }
                            }
                            if($section02_lower === $section2_lower){
                                 if(!empty($title2A)){
                                     echo "<li>".$title2A."</li>";
                                 }
                                 if(!empty($title2B)){
                                     echo "<li>".$title2B."</li>";
                                 }
                                 if(!empty($title2C)){
                                     echo "<li>".$title2C."</li>";
                                 }
                                 if(!empty($title2D)){
                                     echo "<li>".$title2D."</li>";
                                 }
                            }
                            if($section03_lower === $section2_lower){
                                 if(!empty($title3A)){
                                     echo "<li>".$title3A."</li>";
                                 }
                                 if(!empty($title3B)){
                                     echo "<li>".$title3B."</li>";
                                 }
                                 if(!empty($title3C)){
                                     echo "<li>".$title3C."</li>";
                                 }
                                 if(!empty($title3D)){
                                     echo "<li>".$title3D."</li>";
                                 }
                            }
                            if($section04_lower === $section2_lower){
                                 if(!empty($title4A)){
                                     echo "<li>".$title4A."</li>";
                                 }
                                 if(!empty($title4B)){
                                     echo "<li>".$title4B."</li>";
                                 }
                                 if(!empty($title4C)){
                                     echo "<li>".$title4C."</li>";
                                 }
                            } else{
                             echo null;
                            }
 
                         }// for loop end here 
     
                         } // if end here 
                         else{
                             echo null;
                         }

                        ?>
                    </ul>
                    </div>
                </div>
            </div>
<?php 
} // if end here 
else{
    echo null;
}
?>
<!-- 2nd course section end -->
<!-- 3rd course section start -->
<?php 
 if(!empty($section3)){
?>
            <div class="accordion-item">
                <h2 class="accordion-header" id="panelsStayOpen-headingOne">
                    <button class="accordion-button fw-bold text-dark" type="button" data-bs-toggle="collapse"
                        data-bs-target="#panelsStayOpen-collapseOne">
                       <?= $section3 ?>
                         <!-- &nbsp; &nbsp; &nbsp; 20:12:20 -->
                    </button>
                </h2>
                <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show text-dark">
                    <div class="accordion-body">
                      <ul>
                         <?php 
                         
                    // for quizzes 
                    $get_all_content_data = $cources->fetching('quizzes','*',null,"section_id = $section_id");
                    if(!empty($get_all_content_data)){

                    foreach($get_all_content_data as $quiz_data){
                        $quiz_section_name = $quiz_data['quiz_section_name'];
                        $quiz_title = $quiz_data['quiz_title'];

                    
                            $quiz_section_name1_lower = strtolower($quiz_section_name);
                            $section3_lower = strtolower($section3);

                                $section_text1 = preg_split('/\s+/', $quiz_section_name1_lower, -1, PREG_SPLIT_NO_EMPTY);
                                $quiz_text1 = preg_split('/\s+/', $section3_lower, -1, PREG_SPLIT_NO_EMPTY);

                                if($section_text1 === $quiz_text1){
                                    echo  "<li>" . $quiz_title . "</li>";
                                }else{
                                    echo null;
                                }
                    }// for loop end here 

                    } // if end here 
                    else{ echo null; } 


                    // for Assingments 
                    $get_all_content_data2 = $cources->fetching('assingments','*',null,"section_id = $section_id");
                    if(!empty($get_all_content_data2)){

                    foreach($get_all_content_data2 as $assingment_data){
                        $assingment_section_name1 = $assingment_data['assingment_section_name1'];
                        $assingment_section_name2 = $assingment_data['assingment_section_name2'];
                        $assingment_section_name3 = $assingment_data['assingment_section_name3'];
                        $assingment_section_name4 = $assingment_data['assingment_section_name4'];
                        $assingment_section_name5 = $assingment_data['assingment_section_name5'];
                        
                        $assingment_title1 = $assingment_data['assingment_title1'];
                        $assingment_title2 = $assingment_data['assingment_title2'];
                        $assingment_title3 = $assingment_data['assingment_title3'];
                        $assingment_title4 = $assingment_data['assingment_title4'];
                        $assingment_title5 = $assingment_data['assingment_title5'];

                        $assingment_section_name1_lower = strtolower($assingment_section_name1);
                        $assingment_section_name2_lower = strtolower($assingment_section_name2);
                        $assingment_section_name3_lower = strtolower($assingment_section_name3);
                        $assingment_section_name4_lower = strtolower($assingment_section_name4);
                        $assingment_section_name5_lower = strtolower($assingment_section_name5);
                        
                        $section3_lower = strtolower($section3);
                 
                        if(!empty($assingment_section_name1_lower)){
                            if($assingment_section_name1_lower === $section3_lower){
                                echo "<li>". $assingment_title1."</li>";
                            }else{
                                echo null;
                            }
                        }
                        if(!empty($assingment_section_name2_lower)){
                            if($assingment_section_name2_lower === $section3_lower){
                                echo "<li>". $assingment_title2."</li>";
                            }else{
                                echo null;
                            }
                        }
                        if(!empty($assingment_section_name3_lower)){
                            if($assingment_section_name3_lower === $section3_lower){
                                echo "<li>". $assingment_title3."</li>";
                            }else{
                                echo null;
                            }
                        }
                        if(!empty($assingment_section_name4_lower)){
                            if($assingment_section_name4_lower === $section3_lower){
                                echo "<li>". $assingment_title4."</li>";
                            }else{
                                echo null;
                            }
                        }

                        if(!empty($assingment_section_name5_lower)){
                            if($assingment_section_name5_lower === $section3_lower){
                                echo "<li>". $assingment_title5."</li>";
                            }else{
                                echo null;
                            }
                        }

                    }// for loop end here 

                    } // if end here 

                    else{ echo null; } 
                    
                    
                     // for lectures 
                     $get_all_content_data3 = $cources->fetching('courses_lectures','*',null,"section_id = $section_id");
                     if(!empty($get_all_content_data3)){
 
                         foreach($get_all_content_data3 as $lectures_data){
                            $section01 = $lectures_data['section01'];
                            $section02 = $lectures_data['section02'];
                            $section03 = $lectures_data['section03'];
                            $section04 = $lectures_data['section04']; 
                            
                            $title1A = $lectures_data['title1A']; 
                            $title1B = $lectures_data['title1B']; 
                            $title1C = $lectures_data['title1C']; 
                            $title1D = $lectures_data['title1D']; 
 
                            $title2A = $lectures_data['title2A']; 
                            $title2B = $lectures_data['title2B']; 
                            $title2C = $lectures_data['title2C']; 
                            $title2D = $lectures_data['title2D'];
 
                            $title3A = $lectures_data['title3A']; 
                            $title3B = $lectures_data['title3B']; 
                            $title3C = $lectures_data['title3C']; 
                            $title3D = $lectures_data['title3D'];
 
                            $title4A = $lectures_data['title4A']; 
                            $title4B = $lectures_data['title4B']; 
                            $title4C = $lectures_data['title4C']; 
                         
                             
                            $section01_lower = strtolower($section01);
                            $section02_lower = strtolower($section02);
                            $section03_lower = strtolower($section03);
                            $section04_lower = strtolower($section04);
                 
                            $section3_lower = strtolower($section3);
 
                            if($section01_lower === $section3_lower){
                               if(!empty($title1A)){
                                 echo "<li>".$title1A."</li>";
                               }
                               if(!empty($title1B)){
                                 echo "<li>".$title1B."</li>";
                               }
                               if(!empty($title1C)){
                                 echo "<li>".$title1C."</li>";
                               }
                               if(!empty($title1D)){
                                 echo "<li>".$title1D."</li>";
                               }
                            }
                            if($section02_lower === $section3_lower){
                                 if(!empty($title2A)){
                                     echo "<li>".$title2A."</li>";
                                 }
                                 if(!empty($title2B)){
                                     echo "<li>".$title2B."</li>";
                                 }
                                 if(!empty($title2C)){
                                     echo "<li>".$title2C."</li>";
                                 }
                                 if(!empty($title2D)){
                                     echo "<li>".$title2D."</li>";
                                 }
                            }
                            if($section03_lower === $section3_lower){
                                 if(!empty($title3A)){
                                     echo "<li>".$title3A."</li>";
                                 }
                                 if(!empty($title3B)){
                                     echo "<li>".$title3B."</li>";
                                 }
                                 if(!empty($title3C)){
                                     echo "<li>".$title3C."</li>";
                                 }
                                 if(!empty($title3D)){
                                     echo "<li>".$title3D."</li>";
                                 }
                            }
                            if($section04_lower === $section3_lower){
                                 if(!empty($title4A)){
                                     echo "<li>".$title4A."</li>";
                                 }
                                 if(!empty($title4B)){
                                     echo "<li>".$title4B."</li>";
                                 }
                                 if(!empty($title4C)){
                                     echo "<li>".$title4C."</li>";
                                 }
                            } else{
                             echo null;
                            }
 
                         }// for loop end here 
     
                         } // if end here 
                         else{
                             echo null;
                         }
                    
                         ?>
                      </ul>
                    </div>
                </div>
            </div>
<?php 
} // if end here 
else{
    echo null;
}
?>
<!-- 3rd course section end -->
<!-- 4rth course section start -->            
<?php 
 if(!empty($section4)){
?>
            <div class="accordion-item">
                <h2 class="accordion-header" id="panelsStayOpen-headingOne">
                    <button class="accordion-button fw-bold text-dark" type="button" data-bs-toggle="collapse"
                        data-bs-target="#panelsStayOpen-collapseOne">
                       <?= $section4 ?>
                         <!-- &nbsp; &nbsp; &nbsp; 20:12:20 -->
                    </button>
                </h2>
                <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show dark">
                  
                  <div class="accordion-body">
                    <ul>
                    <?php 
                         
                         // for quizzes 
                         $get_all_content_data = $cources->fetching('quizzes','*',null,"section_id = $section_id");
                         if(!empty($get_all_content_data)){
     
                         foreach($get_all_content_data as $quiz_data){
                             $quiz_section_name = $quiz_data['quiz_section_name'];
                             $quiz_title = $quiz_data['quiz_title'];
     
                         
                                 $quiz_section_name1_lower = strtolower($quiz_section_name);
                                 $section4_lower = strtolower($section4);
     
                                     $section_text1 = preg_split('/\s+/', $quiz_section_name1_lower, -1, PREG_SPLIT_NO_EMPTY);
                                     $quiz_text1 = preg_split('/\s+/', $section4_lower, -1, PREG_SPLIT_NO_EMPTY);
     
                                     if($section_text1 === $quiz_text1){
                                         echo  "<li>" . $quiz_title . "</li>";
                                     }else{
                                         echo null;
                                     }
                         }// for loop end here 
     
                         } // if end here 
                         else{ echo null; } 
                    
                         
                    // for Assingments 
                    $get_all_content_data2 = $cources->fetching('assingments','*',null,"section_id = $section_id");
                    if(!empty($get_all_content_data2)){

                    foreach($get_all_content_data2 as $assingment_data){
                        $assingment_section_name1 = $assingment_data['assingment_section_name1'];
                        $assingment_section_name2 = $assingment_data['assingment_section_name2'];
                        $assingment_section_name3 = $assingment_data['assingment_section_name3'];
                        $assingment_section_name4 = $assingment_data['assingment_section_name4'];
                        $assingment_section_name5 = $assingment_data['assingment_section_name5'];
                        
                        $assingment_title1 = $assingment_data['assingment_title1'];
                        $assingment_title2 = $assingment_data['assingment_title2'];
                        $assingment_title3 = $assingment_data['assingment_title3'];
                        $assingment_title4 = $assingment_data['assingment_title4'];
                        $assingment_title5 = $assingment_data['assingment_title5'];

                        $assingment_section_name1_lower = strtolower($assingment_section_name1);
                        $assingment_section_name2_lower = strtolower($assingment_section_name2);
                        $assingment_section_name3_lower = strtolower($assingment_section_name3);
                        $assingment_section_name4_lower = strtolower($assingment_section_name4);
                        $assingment_section_name5_lower = strtolower($assingment_section_name5);
                        
                        $section4_lower = strtolower($section4);
                 
                        if(!empty($assingment_section_name1_lower)){
                            if($assingment_section_name1_lower === $section4_lower){
                                echo "<li>". $assingment_title1."</li>";
                            }else{
                                echo null;
                            }
                        }
                        if(!empty($assingment_section_name2_lower)){
                            if($assingment_section_name2_lower === $section4_lower){
                                echo "<li>". $assingment_title2."</li>";
                            }else{
                                echo null;
                            }
                        }
                        if(!empty($assingment_section_name3_lower)){
                            if($assingment_section_name3_lower === $section4_lower){
                                echo "<li>". $assingment_title3."</li>";
                            }else{
                                echo null;
                            }
                        }
                        if(!empty($assingment_section_name4_lower)){
                            if($assingment_section_name4_lower === $section4_lower){
                                echo "<li>". $assingment_title4."</li>";
                            }else{
                                echo null;
                            }
                        }

                        if(!empty($assingment_section_name5_lower)){
                            if($assingment_section_name5_lower === $section4_lower){
                                echo "<li>". $assingment_title5."</li>";
                            }else{
                                echo null;
                            }
                        }

                    }// for loop end here 

                    } // if end here 

                    else{ echo null; } 


                     // for lectures 
                     $get_all_content_data3 = $cources->fetching('courses_lectures','*',null,"section_id = $section_id");
                     if(!empty($get_all_content_data3)){
 
                         foreach($get_all_content_data3 as $lectures_data){
                            $section01 = $lectures_data['section01'];
                            $section02 = $lectures_data['section02'];
                            $section03 = $lectures_data['section03'];
                            $section04 = $lectures_data['section04']; 
                            
                            $title1A = $lectures_data['title1A']; 
                            $title1B = $lectures_data['title1B']; 
                            $title1C = $lectures_data['title1C']; 
                            $title1D = $lectures_data['title1D']; 
 
                            $title2A = $lectures_data['title2A']; 
                            $title2B = $lectures_data['title2B']; 
                            $title2C = $lectures_data['title2C']; 
                            $title2D = $lectures_data['title2D'];
 
                            $title3A = $lectures_data['title3A']; 
                            $title3B = $lectures_data['title3B']; 
                            $title3C = $lectures_data['title3C']; 
                            $title3D = $lectures_data['title3D'];
 
                            $title4A = $lectures_data['title4A']; 
                            $title4B = $lectures_data['title4B']; 
                            $title4C = $lectures_data['title4C']; 
                         
                             
                            $section01_lower = strtolower($section01);
                            $section02_lower = strtolower($section02);
                            $section03_lower = strtolower($section03);
                            $section04_lower = strtolower($section04);
                 
                            $section4_lower = strtolower($section4);
 
                            if($section01_lower === $section4_lower){
                               if(!empty($title1A)){
                                 echo "<li>".$title1A."</li>";
                               }
                               if(!empty($title1B)){
                                 echo "<li>".$title1B."</li>";
                               }
                               if(!empty($title1C)){
                                 echo "<li>".$title1C."</li>";
                               }
                               if(!empty($title1D)){
                                 echo "<li>".$title1D."</li>";
                               }
                            }
                            if($section02_lower === $section4_lower){
                                 if(!empty($title2A)){
                                     echo "<li>".$title2A."</li>";
                                 }
                                 if(!empty($title2B)){
                                     echo "<li>".$title2B."</li>";
                                 }
                                 if(!empty($title2C)){
                                     echo "<li>".$title2C."</li>";
                                 }
                                 if(!empty($title2D)){
                                     echo "<li>".$title2D."</li>";
                                 }
                            }
                            if($section03_lower === $section4_lower){
                                 if(!empty($title3A)){
                                     echo "<li>".$title3A."</li>";
                                 }
                                 if(!empty($title3B)){
                                     echo "<li>".$title3B."</li>";
                                 }
                                 if(!empty($title3C)){
                                     echo "<li>".$title3C."</li>";
                                 }
                                 if(!empty($title3D)){
                                     echo "<li>".$title3D."</li>";
                                 }
                            }
                            if($section04_lower === $section4_lower){
                                 if(!empty($title4A)){
                                     echo "<li>".$title4A."</li>";
                                 }
                                 if(!empty($title4B)){
                                     echo "<li>".$title4B."</li>";
                                 }
                                 if(!empty($title4C)){
                                     echo "<li>".$title4C."</li>";
                                 }
                            } else{
                             echo null;
                            }
 
                         }// for loop end here 
     
                         } // if end here 
                         else{
                             echo null;
                         }

                              ?>
                    </ul>
                    </div>
                </div>
            </div>
<?php 
} // if end here 
else{
    echo null;
}
?>
<!-- 4rth course section end -->
<!-- 5th course section start -->  
<?php 
 if(!empty($section5)){
?>
            <div class="accordion-item">
                <h2 class="accordion-header" id="panelsStayOpen-headingOne">
                    <button class="accordion-button fw-bold text-dark" type="button" data-bs-toggle="collapse"
                        data-bs-target="#panelsStayOpen-collapseOne">
                       <?= $section5 ?>
                         <!-- &nbsp; &nbsp; &nbsp; 20:12:20 -->
                    </button>
                </h2>
                <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show text-dark">
                    <div class="accordion-body">
                    <ul>
                    <?php 
                         
                         // for quizzes 
                         $get_all_content_data = $cources->fetching('quizzes','*',null,"section_id = $section_id");
                         if(!empty($get_all_content_data)){
     
                         foreach($get_all_content_data as $quiz_data){
                             $quiz_section_name = $quiz_data['quiz_section_name'];
                             $quiz_title = $quiz_data['quiz_title'];
     
                         
                                 $quiz_section_name1_lower = strtolower($quiz_section_name);
                                 $section5_lower = strtolower($section5);
     
                                     $section_text1 = preg_split('/\s+/', $quiz_section_name1_lower, -1, PREG_SPLIT_NO_EMPTY);
                                     $quiz_text1 = preg_split('/\s+/', $section5_lower, -1, PREG_SPLIT_NO_EMPTY);
     
                                     if($section_text1 === $quiz_text1){
                                         echo  "<li>" . $quiz_title . "</li>";
                                     }else{
                                         echo null;
                                     }
                         }// for loop end here 
     
                         } // if end here 
                         else{ echo null; } 
                         

                    // for Assingments 
                    $get_all_content_data2 = $cources->fetching('assingments','*',null,"section_id = $section_id");
                    if(!empty($get_all_content_data2)){

                    foreach($get_all_content_data2 as $assingment_data){
                        $assingment_section_name1 = $assingment_data['assingment_section_name1'];
                        $assingment_section_name2 = $assingment_data['assingment_section_name2'];
                        $assingment_section_name3 = $assingment_data['assingment_section_name3'];
                        $assingment_section_name4 = $assingment_data['assingment_section_name4'];
                        $assingment_section_name5 = $assingment_data['assingment_section_name5'];
                        
                        $assingment_title1 = $assingment_data['assingment_title1'];
                        $assingment_title2 = $assingment_data['assingment_title2'];
                        $assingment_title3 = $assingment_data['assingment_title3'];
                        $assingment_title4 = $assingment_data['assingment_title4'];
                        $assingment_title5 = $assingment_data['assingment_title5'];

                        $assingment_section_name1_lower = strtolower($assingment_section_name1);
                        $assingment_section_name2_lower = strtolower($assingment_section_name2);
                        $assingment_section_name3_lower = strtolower($assingment_section_name3);
                        $assingment_section_name4_lower = strtolower($assingment_section_name4);
                        $assingment_section_name5_lower = strtolower($assingment_section_name5);
                        
                        $section5_lower = strtolower($section5);
                 
                        if(!empty($assingment_section_name1_lower)){
                            if($assingment_section_name1_lower == $section5_lower){
                                echo "<li>". $assingment_title1."</li>";
                            }else{
                                echo null;
                            }
                        }
                        if(!empty($assingment_section_name2_lower)){
                            if($assingment_section_name2_lower == $section5_lower){
                                echo "<li>". $assingment_title2."</li>";
                            }else{
                                echo null;
                            }
                        }
                        if(!empty($assingment_section_name3_lower)){
                            if($assingment_section_name3_lower == $section5_lower){
                                echo "<li>". $assingment_title3."</li>";
                            }else{
                                echo null;
                            }
                        }
                        if(!empty($assingment_section_name4_lower)){
                            if($assingment_section_name4_lower == $section5_lower){
                                echo "<li>". $assingment_title4."</li>";
                            }else{
                                echo null;
                            }
                        }

                        if(!empty($assingment_section_name5_lower)){
                            if($assingment_section_name5_lower == $section5_lower){
                                echo "<li>". $assingment_title5."</li>";
                            }else{
                                echo null;
                            }
                        }

                    }// for loop end here 

                    } // if end here 

                    else{ echo "Assingment not found"; } 
                         

                     // for lectures 
                     $get_all_content_data3 = $cources->fetching('courses_lectures','*',null,"section_id = $section_id");
                     if(!empty($get_all_content_data3)){
 
                         foreach($get_all_content_data3 as $lectures_data){
                            $section01 = $lectures_data['section01'];
                            $section02 = $lectures_data['section02'];
                            $section03 = $lectures_data['section03'];
                            $section04 = $lectures_data['section04']; 
                            
                            $title1A = $lectures_data['title1A']; 
                            $title1B = $lectures_data['title1B']; 
                            $title1C = $lectures_data['title1C']; 
                            $title1D = $lectures_data['title1D']; 
 
                            $title2A = $lectures_data['title2A']; 
                            $title2B = $lectures_data['title2B']; 
                            $title2C = $lectures_data['title2C']; 
                            $title2D = $lectures_data['title2D'];
 
                            $title3A = $lectures_data['title3A']; 
                            $title3B = $lectures_data['title3B']; 
                            $title3C = $lectures_data['title3C']; 
                            $title3D = $lectures_data['title3D'];
 
                            $title4A = $lectures_data['title4A']; 
                            $title4B = $lectures_data['title4B']; 
                            $title4C = $lectures_data['title4C']; 
                         
                             
                            $section01_lower = strtolower($section01);
                            $section02_lower = strtolower($section02);
                            $section03_lower = strtolower($section03);
                            $section04_lower = strtolower($section04);
                 
                            $section5_lower = strtolower($section5);
 
                            if($section01_lower === $section5_lower){
                               if(!empty($title1A)){
                                 echo "<li>".$title1A."</li>";
                               }
                               if(!empty($title1B)){
                                 echo "<li>".$title1B."</li>";
                               }
                               if(!empty($title1C)){
                                 echo "<li>".$title1C."</li>";
                               }
                               if(!empty($title1D)){
                                 echo "<li>".$title1D."</li>";
                               }
                            }
                            if($section02_lower === $section5_lower){
                                 if(!empty($title2A)){
                                     echo "<li>".$title2A."</li>";
                                 }
                                 if(!empty($title2B)){
                                     echo "<li>".$title2B."</li>";
                                 }
                                 if(!empty($title2C)){
                                     echo "<li>".$title2C."</li>";
                                 }
                                 if(!empty($title2D)){
                                     echo "<li>".$title2D."</li>";
                                 }
                            }
                            if($section03_lower === $section5_lower){
                                 if(!empty($title3A)){
                                     echo "<li>".$title3A."</li>";
                                 }
                                 if(!empty($title3B)){
                                     echo "<li>".$title3B."</li>";
                                 }
                                 if(!empty($title3C)){
                                     echo "<li>".$title3C."</li>";
                                 }
                                 if(!empty($title3D)){
                                     echo "<li>".$title3D."</li>";
                                 }
                            }
                            if($section04_lower === $section5_lower){
                                 if(!empty($title4A)){
                                     echo "<li>".$title4A."</li>";
                                 }
                                 if(!empty($title4B)){
                                     echo "<li>".$title4B."</li>";
                                 }
                                 if(!empty($title4C)){
                                     echo "<li>".$title4C."</li>";
                                 }
                            } else{
                             echo null;
                            }
 
                         }// for loop end here 
     
                         } // if end here 
                         else{
                             echo null;
                         }

                              ?>
                    </ul>
                    </div>
                </div>
            </div>
<?php 
} // if end here 
else{
    echo null;
}
?>
<!-- 5th course section end -->
        </div>

    </div>

    <?php 
    } // loop thats ends here to place breaket 
        
    } // first check if ends here 
    else{
        echo null; 
    } // 1st if's else ends here
    ?>

    <?php 
        $getRequirements = $cources->fetching('course_requirments','*',null,"courses_id='$mian_id'");
        if(!empty($getRequirements)){
    ?>
<?php         
            foreach($getRequirements as $RequirementsData){  
                $reqs = $RequirementsData['course_requirments'];                
                if(!empty($reqs)){
                    ?>
<h1 class="container fw-bold mt-4" style=" font-size: 30px;">Requirements</h1>
<div class="Requirements_section mt-3">
<ul>
    <?php                         
                        echo $reqs;
    ?>
</ul>
</div>
    <?php  
                    }else{
                        echo null;
                    }
            }
        
        }else{
                echo null;
        }              
    ?>

<?php
      $cour_desp = $courseData['course_description'];
      if(!empty($cour_desp)){
?>
    <h1 class="container fw-bold mt-4" style="font-size: 30px;">Description</h1>
    <div class="Requirements_section">

    <p>
    <?= $cour_desp ?>
    </p>

    </div>
<?php 
    }else{
         echo null;
    }?>


<!-- ----------------------------------------------------------------------------------- -->





<?php
$courses_id = $_GET['course_id'];

// echo $courses_id;
echo "";

$CommentObj = new backend();

$fetchingData1 = $CommentObj->fetching("comments","*",null,"courses_id = $courses_id");


if(!empty($fetchingData1)){

echo "<div class='comment_show'>";

echo  "<div class='comment_show_first'>";

    $firstTwoComments = array_slice($fetchingData1, 0, 2);
    foreach($firstTwoComments as $CommentData){
        $comment = $CommentData['comment'];
        $time_elapsed = $CommentData['time_elapsed'];
        $registration_id = $CommentData['registration_id'];
        $fetchingDataStudent1 = $CommentObj->fetching("student","*",null,"registration_id = $registration_id");
        if(!empty($fetchingDataStudent1)){
            foreach($fetchingDataStudent1 as $StudentData){
                $sfname = $StudentData['sfname'];
                $slname = $StudentData['slname'];

                $sfnameInitial = substr($sfname, 0, 1);
                $slnameInitial = substr($slname, 0, 1);

                $FullNameStudentContent = $sfname . " " . $slnameInitial . ".";
                $FullNameStudentCircle = $sfnameInitial . $slnameInitial;
            }
?>
        <hr>
        <div class="comment_show_first_section">
            <div class="first_section_circle">
               <?=$FullNameStudentCircle?>
            </div>
            <div class="first_section_content">
                <h2 class="fw-bold"><?= $FullNameStudentContent ?></h2>
                <p>
                
                <?php 
                // echo "Time Elapsed from Database: $time_elapsed<br>";
                $commentTimestamp =  strtotime($time_elapsed);

                // echo "Comment Timestamp: $commentTimestamp<br>";

                $currentTimestamp = time(); // Current timestamp
                // echo "Current Timestamp: $currentTimestamp<br>";

                // Calculate the difference in seconds
                $timeDifference = $currentTimestamp - $commentTimestamp;
                // echo "Time Difference: $timeDifference<br>";

                // Calculate the number of days and weeks
                $days = floor($timeDifference / (60 * 60 * 24));
                $weeks = floor($days / 7);
                
                // Determine whether to display days or weeks
                if ($days < 7) {
                    echo "$days days ago";
                } else {
                    echo "$weeks weeks ago";
                }
                
                ?>

                </p>
            </div>
        </div>
        <p class="ms-3 show_first_section_para">
            <?= $comment ?>
            </p>
<?php 

        }

    }

?>
    <button type="button" class="btn launch_button_comments" data-bs-toggle="modal" data-bs-target="#exampleModalLong">
            Show all reviews
    </button> 

<?php 
// comment_show_first div ends here 
echo '</div>';

}else{
    echo null;
}

?>

 <?php 

$fetchingData1 = $CommentObj->fetching("comments","*",null,"courses_id = $courses_id");

if(!empty($fetchingData1)){

    echo "<div class='comment_show_second'>";

    $firstTwoComments = array_slice($fetchingData1, 2, 2);
    foreach($firstTwoComments as $CommentData){
        $comment = $CommentData['comment'];
        $time_elapsed = $CommentData['time_elapsed'];
        $registration_id = $CommentData['registration_id'];
        $fetchingDataStudent1 = $CommentObj->fetching("student","*",null,"registration_id = $registration_id");
        if(!empty($fetchingDataStudent1)){
            foreach($fetchingDataStudent1 as $StudentData){
                $sfname = $StudentData['sfname'];
                $slname = $StudentData['slname'];

                $sfnameInitial = substr($sfname, 0, 1);
                $slnameInitial = substr($slname, 0, 1);

                $FullNameStudentContent = $sfname . " " . $slnameInitial . ".";
                $FullNameStudentCircle = $sfnameInitial . $slnameInitial;
            }

 ?>
 <hr>
        <div class="comment_show_first_section">
            <div class="first_section_circle">
               <?=$FullNameStudentCircle?>
            </div>
            <div class="first_section_content">
                <h2 class="fw-bold"><?= $FullNameStudentContent ?></h2>
                <p>
                
                <?php 
                // echo "Time Elapsed from Database: $time_elapsed<br>";
                $commentTimestamp =  strtotime($time_elapsed);

                // echo "Comment Timestamp: $commentTimestamp<br>";

                $currentTimestamp = time(); // Current timestamp
                // echo "Current Timestamp: $currentTimestamp<br>";

                // Calculate the difference in seconds
                $timeDifference = $currentTimestamp - $commentTimestamp;
                // echo "Time Difference: $timeDifference<br>";

                // Calculate the number of days and weeks
                $days = floor($timeDifference / (60 * 60 * 24));
                $weeks = floor($days / 7);
                
                // Determine whether to display days or weeks
                if ($days < 7) {
                    echo "$days days ago";
                } else {
                    echo "$weeks weeks ago";
                }
                
                ?>

                </p>
            </div>
        </div>
        <p class="ms-3 show_first_section_para">
            <?= $comment ?>
            </p>
<?php 
        }
    }
// comment_show_second ends here 
    echo "</div> ";
// comment_show ends here 
    echo "</div>";

}else{
    echo null;
}
?>

            <!-- <hr>
        <div class="comment_show_first_section mt-2">
            <div class="first_section_circle">
                MU
            </div>
            <div class="first_section_content">
                <h2 class="fw-bold">Eric D.</h2>
                <p>3 weaks ago</p>
            </div>
        </div>
        <p class="ms-3 show_first_section_para">The course is very ellboarated with hands-on exercises. The content is up-to-date and quiz after 
                each section makes learning more fun.
            </p> -->
 


<!-- ----------------------------------------------------------------------------------- -->

 <h1 class="container fw-bold mt-4" style=" font-size: 30px;">Students also bought</h1>

<!-- ---------------------------------------------------------------------------------------------------------------------------- -->

<!-- cources section start 1st  -->


<?php 
$courcesExtra = new backend();

$getCources = $courcesExtra->fetching('cource','*',null,"courses_id !='$mian_id'");

foreach($getCources as $extraCourseData){
    $courses_id = $extraCourseData['courses_id'];
    // echo $courses_id;
?>
<div class="cources_section">
    <div class="cources_section_left">
        <div class="section_right">
            <img src="../../instructor/new/<?= $extraCourseData['course_img'] ?>" alt="">
           </div>  
        <div class="section_left">
            <h6 class="fw-bold text-dark section_left_head" style="width: 100%;">
                <?= $extraCourseData['course_title'] ?>
            </h6>

            <h6 class="ms-3 mt-4 section_left_responsiveness_heading"><span class="badge p-2 badge-color">Best Seller</span> &nbsp;
                <span class="text-success fw-bold">30 total hours.</span><span class="fw-bold">&nbsp;Updated</span>
                <?php 
                $getIncludes = $cources->fetching('course_requirments','*',null,"courses_id !='$mian_id'");
                  foreach($getTime as $timeData){
                  echo $timeData['last_updated'];  }  ?>
            </h6>   
        </div>
    </div>
    
    <?php 
     $course_price = $cources->fetching('course_prices','*',null,"courses_id  = $courses_id");
     foreach($course_price as $main_price){
         $price = $main_price['course_price'];
         $currency = $main_price['currency'];
         $therPrices = $currency . '&nbsp;' . $price; } ?>

    <div class="cources_section_right position-relative">
    <span class="section_right_span1"
            style="color:darkred;  margin-left: 30px;padding-top: 20px; font-size: 20px;  display: block; font-weight: bold;">4.6 
            <i class="fa-solid fa-star" style="color: #ffa600;padding-right: 40px;"></i>
             <span class="text-dark section_right_span2">
                <?php  
                if($price === 'Free'){
                  ?>
                  <span class="badge text-light bg-danger">free</span>
                  <?php
                }else{
                  echo $therPrices;
                }
                 ?>
                <!-- $12.56 -->
            </span>
        
        </span>

        <div class="section_right_icon">
        <?php 
          if($price === 'Free'){
            ?>
            <form action="enrolled_students.php" style="display:inline-block;" method='post' enctype='multipart/form-data'>
            <input type="hidden" name="courses_id" value="<?= $courseData['courses_id'] ?>">
            <button type="submit" class="btn-last" name="enroll_submit"><i class="fas fa-graduation-cap" style="color: grey;"></i></button> 
            </form>	
            <?php
          }else{
            ?>
            <form action="cart_data.php" style="display:inline-block;" method='post' enctype='multipart/form-data'>
            <input type="hidden" name="courses_id" value="<?= $courseData['courses_id'] ?>">
            <button type="submit" class="btn-last" name="cartCourse"><i class="fa-solid fa-cart-shopping" style="color: grey;"></i></button> 
            </form>	
            <?php
          }
        ?>
        
        </div>
    </div>
    </div>
<?php } ?>




    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>

    <!-- Modal -->
    <div class="modal fade" style="height:100vh;" id="exampleModalLong" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">All Comments Here</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">

        <div class="comment_show_first">

        <?php 

$courses_id = $_GET['course_id'];

// echo $courses_id;

$CommentObj = new backend();

$fetchingData1 = $CommentObj->fetching("comments","*",null,"courses_id = $courses_id");

if(!empty($fetchingData1)){

    // $firstTwoComments = array_slice($fetchingData1, 2, 2);
    foreach($fetchingData1 as $CommentData){
        $comment = $CommentData['comment'];
        $time_elapsed = $CommentData['time_elapsed'];
        $registration_id = $CommentData['registration_id'];
        $fetchingDataStudent1 = $CommentObj->fetching("student","*",null,"registration_id = $registration_id");
        if(!empty($fetchingDataStudent1)){
            foreach($fetchingDataStudent1 as $StudentData){
                $sfname = $StudentData['sfname'];
                $slname = $StudentData['slname'];

                $sfnameInitial = substr($sfname, 0, 1);
                $slnameInitial = substr($slname, 0, 1);

                $FullNameStudentContent = $sfname . " " . $slnameInitial . ".";
                $FullNameStudentCircle = $sfnameInitial . " " . $slnameInitial;
            }

 ?>

<div class="comment_show_first_section">
            <div class="first_section_circle">
               <?=$FullNameStudentCircle?>
            </div>
            <div class="first_section_content">
                <h2 class="fw-bold"><?= $FullNameStudentContent ?></h2>
                <p>
                
                <?php 
                // echo "Time Elapsed from Database: $time_elapsed<br>";
                $commentTimestamp =  strtotime($time_elapsed);

                // echo "Comment Timestamp: $commentTimestamp<br>";

                $currentTimestamp = time(); // Current timestamp
                // echo "Current Timestamp: $currentTimestamp<br>";

                // Calculate the difference in seconds
                $timeDifference = $currentTimestamp - $commentTimestamp;
                // echo "Time Difference: $timeDifference<br>";

                // Calculate the number of days and weeks
                $days = floor($timeDifference / (60 * 60 * 24));
                $weeks = floor($days / 7);
                
                // Determine whether to display days or weeks
                if ($days < 7) {
                    echo "$days days ago";
                } else {
                    echo "$weeks weeks ago";
                }
                
                ?>

                </p>
            </div>
        </div>
        <p class="ms-3 show_first_section_para">
            <?= $comment ?>
            </p>

            <hr>

<?php 

        }

    }
}

?>



        <!-- <div class="comment_show_first_section">
            <div class="first_section_circle">
                MU
            </div>
            <div class="first_section_content">
                <h2 class="fw-bold">Eric D.</h2>
                <p>3 weaks ago</p>
            </div>
        </div>
        <p class="ms-3 show_first_section_para">The course is very ellboarated with hands-on exercises. The content is up-to-date and quiz after 
                each section makes learning more fun.
            </p> -->

            <hr>


    </div>

    <!-- <div class="comment_show_first">
        <hr>
        <div class="comment_show_first_section">
            <div class="first_section_circle">
                MU
            </div>
            <div class="first_section_content">
                <h2 class="fw-bold">Eric D.</h2>
                <p>3 weaks ago</p>
            </div>
        </div>
        <p class="ms-3 show_first_section_para">The course is very ellboarated with hands-on exercises. The content is up-to-date and quiz after 
                each section makes learning more fun.
            </p>

            <hr>
        <div class="comment_show_first_section mt-2">
            <div class="first_section_circle">
                MU
            </div>
            <div class="first_section_content">
                <h2 class="fw-bold">Eric D.</h2>
                <p>3 weaks ago</p>
            </div>
        </div>
        <p class="ms-3 show_first_section_para">The course is very ellboarated with hands-on exercises. The content is up-to-date and quiz after 
                each section makes learning more fun.
            </p>

    </div> -->


            </div>
               
            </div>
        </div>
    </div>

 <!-- Modal-2 -->
    <div class="modal fade" style="margin-top: 120px;" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <?php 
            // echo $courses_id
            ?>
            <h5 class="modal-title" id="exampleModalLabel">Course Preview Video</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
       
          <?php 
        //  echo $mian_id;
         $cources = new backend();
          $video_data = $cources->fetching("cource","*",null,"courses_id = $mian_id");
          if(!empty($video_data)){
            foreach($video_data as $data_for_video){
              $course_video_remains = $data_for_video['course_video'];
            //   echo $course_video_remains;
              if(strpos($course_video_remains, ' ') !== false){
               $course_video = str_replace(' ', '', $course_video_remains);
              }else{
                $course_video = $course_video_remains;
              }
              // echo $course_video ;
              echo "<video style='height: 100%; width:100%;' controls>
    <source src='../../instructor/new/$course_video'></video>";           
}// loop ends here 
    }
  else{
      echo "Video May be Not uploaded by Instructor";
  }
?>
 <!-- <a href="../../uploads/"></a> -->
  <!-- <a href="../../instructor/new/uploads/"></a> -->

  </div>        
          </div>
      </div>
    </div>

</body>

</html>

<?php
}
?>
