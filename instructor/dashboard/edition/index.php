<?php 
include("../../../back.php");

$CoursesUpdateData = new backend();

$courses_id = $_GET['courses_id'];

?>
<!doctype html>
<html lang="en">


<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- Fontawsome CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
        integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <title>Course edit page</title>

    <style>
        
    </style>

</head>

<body>


    <div class="container mx-auto mt-5 p-3">
        <form action="submit-update.php" method="post" enctype="multipart/form-data">

<?php 
$coourseTitle = $CoursesUpdateData->fetching("cource","*",null,"courses_id = $courses_id");
if(!empty($coourseTitle)){
    foreach($coourseTitle as $ctitile){
        $course_title = $ctitile['course_title'];
        $course_subtitle = $ctitile['course_subtitle'];
        $course_subtitle = $ctitile['course_subtitle'];
        $select_language = $ctitile['select_language'];
        $selecting_level = $ctitile['selecting_level'];
        $select_category = $ctitile['select_category'];
        $primary_taught = $ctitile['primary_taught'];
        $course_img = $ctitile['course_img'];
        $course_video = $ctitile['course_video'];
        $course_description = $ctitile['course_description'];
        $course_type = $ctitile['course_type'];
    }
}
?>
            <div class="mb-3">
                <label class="form-label fw-bold">Course Title</label>
                <input type="text" class="form-control" value="<?=$course_title?>"
                    name="course_title">
            </div>

            <div class="d-flex justify-content-between mb-3 align-items-center">
                <div class="flex-1">
                    <label class="form-label fw-bold">Course Category</label>
                    <select class="form-select" name="select_category" id="select_category">
                      
                     <option selected>Open this select menu</option>
                
                     <?php 
                     $coourseCategory = $CoursesUpdateData->fetching("cources_categories","*",null,null);
                     if(!empty($coourseCategory)){
                        foreach($coourseCategory as $cCategory){
                            $category_id = $cCategory['category_id'];
                            $category_name = $cCategory['category_name'];
                           ?>
                           <option value="<?=$category_id?>"><?=$category_name?></option>
                        <?php 
                        }
                    }  else{
                        echo "there is the error here";
                    }
                     ?>
                     
                    </select>
                </div>
                <div class="flex-1">
                    <label class="form-label fw-bold">Course SubCategory</label>
                    <input type="text" class="form-control" value="<?=$primary_taught?>"
                    name="primary_taught">
                </div>
                <div class="flex-1">
                    <label class="form-label fw-bold">Course Enrollment Level</label>
                    <select class="form-select" name="selecting_level" id="selecting_level">
                        <option selected>Open this select menu</option>
                        <option value="Beigner">Beigner</option>
                        <option value="Intermediate">Intermediate</option>
                        <option value="Advance">Advance</option>
                        <option value="Expert">Expert</option>
                    </select>
                </div>
                <?php 
                
                $cooursePrice = $CoursesUpdateData->fetching("course_prices","*",null,"courses_id = $courses_id");

                if(!empty($cooursePrice)){
                    foreach($cooursePrice as $cPrice){
                        $course_price = $cPrice['course_price'];
                    }
                }else{
                    echo "Price not found";
                }

                ?>
                <div class="flex-1">
                    <label class="form-label fw-bold">Course Price</label>
                    <input type="text" class="form-control" value="<?=$course_price?>"
                        name="course_price">
                </div>
            </div>

            <div class="d-flex justify-content-around align-items-center mb-3" style="height: 15vh;">

                <div class="flex-1">
                    <label class="form-label fw-bold">Course Image</label>
                    <input type="file" name="course_img" class="form-control"
                        value="learn javascript development with us" name="course_title">
                </div>

                <div class="flex-1">
                    <label class="form-label fw-bold">Course Video</label>
                    <input type="file" class="form-control" value="learn javascript development with us"
                        name="course_video">
                </div>

            </div>

            <div class="mb-4">
                <label class="form-label fw-bold">Course Subtitles</label>
                <input type="text" class="form-control" value="<?=$course_subtitle?>"
                name="course_subtitle">
            </div>


            <div class="mb-4 text-dark mt-4"class="border border-2 border-dark"> 
                    <label class="form-label">
                            <strong style="color:black">Course description</strong></label>

                            <div id="editor" class="p-3" style="height: 20vh; border: 1px solid black;overflow:scroll; margin-bottom:5px;" 
        contenteditable="true" placeholder="Start typing here..."><?= $course_description ?></div>

                            <!-- Hidden input field to store editor content -->
                            <input type="hidden" value="<?= $course_description ?>" id="editorContent">

                            <button type="button" style="background-color:white!important; color:black !important; border: none !important; border-radius:none !impotrtant;" onclick="execCommand('bold')">Bold</button>
                            <button type="button" style="background-color:white!important; color:black !important; border: none !important; border-radius:none !impotrtant;" onclick="execCommand('underline')">Underline</button>
                            <button type="button" style="background-color:white!important; color:black !important; border: none !important; border-radius:none !impotrtant;" onclick="execCommand('italic')">Italic</button>
                            <button type="button" style="background-color:white!important; color:black !important; border: none !important; border-radius:none !impotrtant;" onclick="createList('insertUnorderedList')"><i class="fa-solid fa-list-ul" style="color: black;"></i></button>
                            <button type="button" style="background-color:white!important; color:black !important; border: none !important; border-radius:none !impotrtant;" onclick="createList('insertOrderedList')"><i class="fa-solid fa-list-ol" style="color: black;"></i></button>

                    </div>
                  


            <?php 
            
            $coourseData = $CoursesUpdateData->fetching("course_requirments","*",null,"courses_id = $courses_id");

            if(!empty($coourseData)){
                foreach($coourseData as $DataRequirments){
                    $course_requirments = $DataRequirments['course_requirments'];
                    $short_description = $DataRequirments['short_description'];
                    $course_outcome = $DataRequirments['course_outcome'];
                    $course_includes = $DataRequirments['course_includes'];
                    $course_specifications = $DataRequirments['course_specifications'];
                }
            }else{
                echo "Price not found";
            }
            
            ?>

            <div class="mb-3 text-dark">
                <label class="form-label">
                    <strong style="color:black;">
                    Course Requirments
                    <button type="button" class="btn fw-bold" onclick="createList('insertUnorderedList')">
                    <!-- Bullet List -->
                    <i class="fa-solid fa-list-ul" style="color: black;"></i>
                </button>
                    <button type="button" class="btn fw-bold" onclick="createList('insertOrderedList')">
                    <!-- Numbered List -->
                    <i class="fa-solid fa-list-ol" style="color: black;"></i>
                </button>

                    </strong></label>
                    <div class="form-floating">

                    <div id="editor1" class="p-3" style="height: 35vh; border:1px solid black;overflow:scroll;" class="editor" contenteditable="true" placeholder="Start typing here...">
                    <?=$course_requirments?>                    
                    </div>
                    <!-- Hidden input field to store editor content -->
                    <input type="hidden" id="editorContent1" name="course_requirments">

                    </div>
                    Dicuss about the core requirements of this course make some nessassaory keypoints to ellaborate the course requirements
                    Mention the liseted keypoint requiremnts to show the course prespective
                </div>


      
            <div class="mb-3 text-dark mt-4">
                <label class="form-label">
                    <strong class="text-dark">Course Learning Outcomes

                    <button type="button" class="btn fw-bold" onclick="createList('insertUnorderedList')">
                    <!-- Bullet List -->
                    <i class="fa-solid fa-list-ul" style="color: #000000;"></i>
                </button>
                    <button type="button" class="btn fw-bold" onclick="createList('insertOrderedList')">
                    <!-- Numbered List -->
                    <i class="fa-solid fa-list-ol" style="color: #000000;"></i>
                </button>

                    </strong></label>
                    <div class="form-floating">

                    <div id="editor3" class="p-3" style="height: 35vh; border:1px solid black;overflow:scroll;" class="editor" contenteditable="true" placeholder="Start typing here...">
                <?= $course_outcome?>
                    </div>
                    <!-- Hidden input field to store editor content -->
                    <input type="hidden" id="editorContent3" name="course_outcomes">
                    </div>
                   <p style="font-soze:10px;"> Discuss about the keypoints what the students should learn in the course. Mention the learning outcomes that students will gain after learning this course </p>
            </div>

            <div class="mb-3 text-dark mt-4">
                <strong class="text-dark">Course Short Descriptions
                <button type="button" class="btn" onclick="execCommand('underline')">
                    <!-- Underline -->
                    <i class="fa-solid fa-underline" style="color: #000000;"></i>
                </button>

                <button type="button" class="btn" onclick="execCommand('italic')">
                    <!-- Italic -->
                    <i class="fa-solid fa-italic" style="color: #000000;"></i>
                </button>

                <button type="button" class="btn" onclick="execCommand('bold')">
                    <!-- Bold -->
                    <i class="fa-solid fa-bold" style="color: #000205;"></i>
                </button>

                <button type="button" class="btn fw-bold" onclick="createList('insertUnorderedList')">
                    <!-- Bullet List -->
                    <i class="fa-solid fa-list-ul" style="color: #000000;"></i>
                </button>
                <button type="button" class="btn fw-bold" onclick="createList('insertOrderedList')">
                    <!-- Numbered List -->
                    <i class="fa-solid fa-list-ol" style="color: #000000;"></i>
                </button>


                <div class="form-floating">

                    <div id="editor2" class="p-3" style="height: 35vh; border:1px solid black; overflow:scroll;" class="editor" contenteditable="true" placeholder="Start typing here...">
                        <?= $short_description  ?>
                    </div>
                    <!-- Hidden input field to store editor content -->
                    <input type="hidden" id="editorContent2" name="short_description">
                </div>
            </div>


            <div class="mb-3 text-dark mt-4">
                <label class="form-label">
                    <strong class="text-dark">What this Course includes

                <button type="button" class="btn fw-bold" onclick="createList('insertUnorderedList')">
                    <!-- Bullet List -->
                    <i class="fa-solid fa-list-ul" style="color: #000000;"></i>
                </button>
                    <button type="button" class="btn fw-bold" onclick="createList('insertOrderedList')">
                    <!-- Numbered List -->
                    <i class="fa-solid fa-list-ol" style="color: #000000;"></i>
                </button>

                    </strong></label>
                    <div class="form-floating">

                    <div id="editor4" class="p-3" style="height: 35vh; border:1px solid black; overflow:scroll;" class="editor" contenteditable="true" placeholder="Start typing here...">
                   <?= $course_includes ?>
                    </div>
                    <!-- Hidden input field to store editor content -->
                    <input type="hidden" id="editorContent4" name="course_includes">

                    </div>
                    Dicuss about the features of the course for the learners and sumup in the short bullet points to showcase
            </div>

            <div class="mb-4 text-dark mt-4">
                <label class="form-label">
                    <strong class="text-dark">Course short outlines 

                    <button type="button" class="btn fw-bold" onclick="createList('insertUnorderedList')">
                   
                    <i class="fa-solid fa-list-ul" style="color: #000000;"></i>
                </button>
                    <button type="button" class="btn fw-bold" onclick="createList('insertOrderedList')">
                 
                    <i class="fa-solid fa-list-ol" style="color: #000000;"></i>
                </button>

                    </strong></label>
                    <div class="form-floating">
                        <!-- <textarea class="form-control" name="course_specifications" placeholder="Discuss Students about your course specifications" id="floatingTextarea2" style="height: 100px"></textarea> -->
              
                    <div id="editor5" class="p-3" style="height: 35vh; border:1px solid black; overflow:scroll;" class="editor" contenteditable="true" placeholder="Start typing here...">
                    <?= $course_specifications ?>
                    </div>
                    <!-- Hidden input field to store editor content -->
                    <input type="hidden" id="editorContent5" name="course_specifications">
                    
                    </div>
                    Plaese enter the short course outline for the students for their better understanding make sure that each point
                    is a one liner
            </div>


            <hr>

            <!-- Course Sections page starts  -->

    <?php 
    
    $coourseSections = $CoursesUpdateData->fetching("course_sections","*",null,"courses_id = $courses_id");

    if(!empty($coourseSections)){
        foreach($coourseSections as $DataSections){
            $section1 = $DataSections['section1'];
            $section2 = $DataSections['section2'];
            $section3 = $DataSections['section3'];
            $section4 = $DataSections['section4'];
            $section5 = $DataSections['section5'];
        }
    }else{
        echo "Price not found";
    }

    ?>

            <h6 style="color:black; font-weight:bold;" class="mt-4">Course Sections Here</h6>

            <div class="mb-3 border border-2 border-secondary p-3 text-dark" style="background-color:white;">
                <!-- <label for="" class="form-label fw-bold text-dark">Add 1st Section here</label> -->
                <input type="text" class="form-control mb-3 mt-3" required name="section1" placeholder="<?= !empty($section1)?$section1:"Add 1st Section title"; ?>">
              
              
                <input type="text" class="form-control mb-3 mt-3" required name="section2" placeholder="<?=!empty($section2)?$section2:"Add 2nd Section title"; ?>">

                
                <input type="text" class="form-control mb-3 mt-3" required name="section3" placeholder="<?=!empty($section3)?$section3:"Add 3rd Section title"; ?>">
           
                 
                <input type="text" class="form-control mb-3 mt-3" required name="section4" placeholder="<?=!empty($section4)?$section4:"Add 4rth Section title"; ?>">


                <input type="text" class="form-control mb-3 mt-3" required name="section5" placeholder="<?=!empty($section5)?$section5:"Add 5th Section title"; ?>">      

            </div>


    <!-- main course content section start  -->

    <?php 
    
    $coourseContent = $CoursesUpdateData->fetching("courses_lectures","*",null,"courses_id = $courses_id");

    if(!empty($coourseContent)){
        foreach($coourseContent as $DataContent){
            $section01 = $DataContent['section01'];
            $section02 = $DataContent['section02'];
            $section03 = $DataContent['section03'];
            $section04 = $DataContent['section04'];

            $title1A = $DataContent['title1A'];
            $lecture1A = $DataContent['lecture1A'];

            $title1B = $DataContent['title1B'];
            $lecture1B = $DataContent['lecture1B'];

            $title1C = $DataContent['title1C'];
            $lecture1C = $DataContent['lecture1C'];

            $title1D = $DataContent['title1D'];
            $lecture1D = $DataContent['lecture1D'];
            // 2nd section content data 
            $title2A = $DataContent['title2A'];
            $lecture2A = $DataContent['lecture2A'];

            $title2B = $DataContent['title2B'];
            $lecture2B = $DataContent['lecture2B'];

            $title2C = $DataContent['title2C'];
            $lecture2C = $DataContent['lecture2C'];

            $title2D = $DataContent['title2D'];
            $lecture2D = $DataContent['lecture2D'];
            // 3rd section content data 
            $title3A = $DataContent['title3A'];
            $lecture3A = $DataContent['lecture3A'];

            $title3B = $DataContent['title3B'];
            $lecture3B = $DataContent['lecture3B'];

            $title3C = $DataContent['title3C'];
            $lecture3C = $DataContent['lecture3C'];

            $title3D = $DataContent['title3D'];
            $lecture3D = $DataContent['lecture3D'];
            // 4rth section content data 
            $title4A = $DataContent['title4A'];
            $lecture4A = $DataContent['lecture4A'];

            $title4B = $DataContent['title4B'];
            $lecture4B = $DataContent['lecture4B'];

            $title4C = $DataContent['title4C'];
            $lecture4C = $DataContent['lecture4C'];

            $title4D = $DataContent['title4D'];
            $lecture4D = $DataContent['lecture4D'];
        }
    }else{
        echo "Price not found";
    }

    ?>

            <div class="border border-2 border-secondary p-3 text-dark" style="background-color:white;">
                                

                <div class="ps-3 pe-3 pt-2 pb-3 text-dark">
                             <label for="" class="form-label fw-bold">Desired Section</label>
                             <input type="text" class="form-control" name="section01"  placeholder="<?= !empty($section01)?$section01:'Enter the defined section 01 title to embed section lectures'?>">
                    </div>

                <div class="d-flex justify-content-evenly">
                    <div class="ps-3 pe-3 pt-2 pb-3 text-dark">
                             <label for="" class="form-label fw-bold">Enter Lecture Tile</label>
                             <input type="text" class="form-control" style="width:430px;" name="title1A"  placeholder="<?= !empty($title1A)?$title1A:'Enter title for the desired lecture(A) for Section 01'?>">
                    </div>   
                    <div class="ps-3 pe-3 pt-2 pb-3 text-dark">
                             <label for="" class="form-label fw-bold">YouTube Video Link</label>
                             <input type="text" class="form-control" style="width:400px;" name="lecture1A"  placeholder="<?= !empty($lecture1A)?$lecture1A:'embeded youtube video link for lecture(A)'?>">
                    </div>
                    <input type="hidden" value="iframe1A" name="iframe1A">
                </div>    

                <div class="d-flex justify-content-evenly">
                    <div class="ps-3 pe-3 pt-2 pb-3 text-dark">
                             <label for="" class="form-label fw-bold">Enter Lecture Tile</label>
                             <input type="text" class="form-control" style="width:430px;" name="title1B"  placeholder="<?= !empty($title1B)?$title1B:'Enter title for the desired lecture(B) for Section 01 '?>">
                    </div>   
                    <div class="ps-3 pe-3 pt-2 pb-3 text-dark">
                             <label for="" class="form-label fw-bold">YouTube Video Link</label>
                             <input type="text" class="form-control" style="width:400px;" name="lecture1B"  placeholder="<?= !empty($lecture1B)?$lecture1B:'embeded youtube video link for lecture(B)'?>">
                    </div>
                    <input type="hidden" value="iframe1B" name="iframe1B">
                </div>  

                <div class="d-flex justify-content-evenly">
                    <div class="ps-3 pe-3 pt-2 pb-3 text-dark">
                             <label for="" class="form-label fw-bold">Enter Lecture Tile</label>
                             <input type="text" class="form-control" style="width:430px;" name="title1C"  placeholder="<?= !empty($title1C)?$title1C:'Enter title for the desired lecture(C) for Section 01 '?>">
                    </div>   
                    <div class="ps-3 pe-3 pt-2 pb-3 text-dark">
                             <label for="" class="form-label fw-bold">YouTube Video Link</label>
                             <input type="text" class="form-control" style="width:400px;" name="lecture1C"  placeholder="<?= !empty($lecture1C)?$lecture1C:'paste the embeded youtube video link for lecture(C)'?>">
                    </div>
                    <input type="hidden" value="iframe1C" name="iframe1C">
                </div> 

                <div class="d-flex justify-content-evenly">
                    <div class="ps-3 pe-3 pt-2 pb-3 text-dark">
                             <label for="" class="form-label fw-bold">Enter Lecture Tile</label>
                             <input type="text" class="form-control" style="width:430px;" name="title1D"  placeholder="<?= !empty($title1D)?$title1D:'Enter title for the desired lecture(D) for Section 01 '?>">
                    </div>   
                    <div class="ps-3 pe-3 pt-2 pb-3 text-dark">
                             <label for="" class="form-label fw-bold">YouTube Video Link</label>
                             <input type="text" class="form-control" style="width:400px;" name="lecture1D"  placeholder="<?= !empty($lecture1D)?$lecture1D:'paste the embeded youtube video link for lecture(D)'?>">
                    </div>
                    <input type="hidden" value="iframe1D" name="iframe1D">
                </div> 

                                            
                </div>

                <?= !empty($lecture2A)?$lecture2A:'Enter title for the desired lecture(A) for Section 02 '?>

                <!-- <input type="hidden" name="courses_id" value="<  $coruse_id ?>" placeholder="<  $coruse_id ?>"> -->
                <!-- <input type="hidden" name="requirments_id" value="<  $requirments_id ?>" placeholder="<  $requirments_id ?>"> -->

                <div class="mb-3 border border-2 border-secondary p-3 text-dark" style="background-color:white;">
                  
                <div class="ps-3 pe-3 pt-2 pb-3 text-dark">
                             <label for="" class="form-label fw-bold">Desired Section</label>
                             <input type="text" class="form-control" name="section02"  placeholder="<?= !empty($section02)?$section02:'Enter the defined section 02 title to embed section lectures'?>">
                    </div>

                    <div class="d-flex justify-content-evenly">
                    <div class="ps-3 pe-3 pt-2 pb-3 text-dark">
                             <label for="" class="form-label fw-bold">Enter Lecture Tile</label>
                             <input type="text" class="form-control" style="width:430px;" name="title2A"  placeholder="<?= !empty($title2A)?$title2A:'Enter title for the desired lecture(A) for Section 02 '?>">
                    </div>   
                    <div class="ps-3 pe-3 pt-2 pb-3 text-dark">
                             <label for="" class="form-label fw-bold">YouTube Video Link</label>
                             <input type="text" class="form-control" style="width:400px;" name="lecture2A"  placeholder="<?= !empty($lecture2A)?$lecture2A:'paste the embeded youtube video link for lecture(A)'?>">
                    </div>
                    <input type="hidden" value="iframe2A" name="iframe2A">
                </div>    

                <div class="d-flex justify-content-evenly">
                    <div class="ps-3 pe-3 pt-2 pb-3 text-dark">
                             <label for="" class="form-label fw-bold">Enter Lecture Tile</label>
                             <input type="text" class="form-control" style="width:430px;" name="title2B"  placeholder="<?= !empty($title2B)?$title2B:'Enter title for the desired lecture(B) for Section 02 '?>">
                    </div>   
                    <div class="ps-3 pe-3 pt-2 pb-3 text-dark">
                             <label for="" class="form-label fw-bold">YouTube Video Link</label>
                             <input type="text" class="form-control" style="width:400px;" name="lecture2B"  placeholder="<?= !empty($lecture2B)?$lecture2B:'paste the embeded youtube video link for lecture(B)'?>">
                    </div>
                    <input type="hidden" value="iframe2B" name="iframe2B">
                </div>  

                <div class="d-flex justify-content-evenly">
                    <div class="ps-3 pe-3 pt-2 pb-3 text-dark">
                             <label for="" class="form-label fw-bold">Enter Lecture Tile</label>
                             <input type="text" class="form-control" style="width:430px;" name="title2C"  placeholder="<?= !empty($title2C)?$title2C:'Enter title for the desired lecture(C) for Section 02 '?>">
                    </div>   
                    <div class="ps-3 pe-3 pt-2 pb-3 text-dark">
                             <label for="" class="form-label fw-bold">YouTube Video Link</label>
                             <input type="text" class="form-control" style="width:400px;" name="lecture2C"  placeholder="<?= !empty($lecture2C)?$lecture2C:'paste the embeded youtube video link for lecture(C)'?>">
                    </div>
                    <input type="hidden" value="iframe2C" name="iframe2C">
                </div> 

                <div class="d-flex justify-content-evenly">
                    <div class="ps-3 pe-3 pt-2 pb-3 text-dark">
                             <label for="" class="form-label fw-bold">Enter Lecture Tile</label>
                             <input type="text" class="form-control" style="width:430px;" name="title2D"  placeholder="<?= !empty($title2D)?$title2D:'Enter title for the desired lecture(D) for Section 02 '?>">
                    </div>   
                    <div class="ps-3 pe-3 pt-2 pb-3 text-dark">
                             <label for="" class="form-label fw-bold">YouTube Video Link</label>
                             <input type="text" class="form-control" style="width:400px;" name="lecture2D"   placeholder="<?= !empty($lecture2D)?$lecture2D:'paste the embeded youtube video link for lecture(D)'?>">
                    </div>
                    <input type="hidden" value="iframe2D" name="iframe2D">
                </div> 
                 
                </div>

                <div class="mb-3 border border-2 border-secondary p-3 text-dark" style="background-color:white;">
                   

                <div class="ps-3 pe-3 pt-2 pb-3 text-dark">
                             <label for="" class="form-label fw-bold">Desired Section</label>
                             <input type="text" class="form-control" name="section03"  placeholder="Enter the section title you want to include video">
                    </div>


                    <div class="d-flex justify-content-evenly">
                    <div class="ps-3 pe-3 pt-2 pb-3 text-dark">
                             <label for="" class="form-label fw-bold">Enter Lecture Tile</label>
                             <input type="text" class="form-control" style="width:430px;" name="title3A"  placeholder="Enter title for the desired lecture">
                    </div>   
                    <div class="ps-3 pe-3 pt-2 pb-3 text-dark">
                             <label for="" class="form-label fw-bold">YouTube Video Link</label>
                             <input type="text" class="form-control" style="width:400px;" name="lecture3A"  placeholder="paste the embeded youtube video link">
                    </div>
                    <input type="hidden" value="iframe3A" name="iframe3A">
                </div>    

                <div class="d-flex justify-content-evenly">
                    <div class="ps-3 pe-3 pt-2 pb-3 text-dark">
                             <label for="" class="form-label fw-bold">Enter Lecture Tile</label>
                             <input type="text" class="form-control" style="width:430px;" name="title3B"  placeholder="Enter title for the desired lecture">
                    </div>   
                    <div class="ps-3 pe-3 pt-2 pb-3 text-dark">
                             <label for="" class="form-label fw-bold">YouTube Video Link</label>
                             <input type="text" class="form-control" style="width:400px;" name="lecture3B"  placeholder="paste the embeded youtube video link">
                    </div>
                    <input type="hidden" value="iframe3B" name="iframe3B">
                </div>  

                <div class="d-flex justify-content-evenly">
                    <div class="ps-3 pe-3 pt-2 pb-3 text-dark">
                             <label for="" class="form-label fw-bold">Enter Lecture Tile</label>
                             <input type="text" class="form-control" style="width:430px;" name="title3C"  placeholder="Enter title for the desired lecture">
                    </div>   
                    <div class="ps-3 pe-3 pt-2 pb-3 text-dark">
                             <label for="" class="form-label fw-bold">YouTube Video Link</label>
                             <input type="text" class="form-control" style="width:400px;" name="lecture3C"  placeholder="paste the embeded youtube video link">
                    </div>
                    <input type="hidden" value="iframe3C" name="iframe3C">
                </div> 

                <div class="d-flex justify-content-evenly">
                    <div class="ps-3 pe-3 pt-2 pb-3 text-dark">
                             <label for="" class="form-label fw-bold">Enter Lecture Tile</label>
                             <input type="text" class="form-control" style="width:430px;" name="title3D"  placeholder="Enter title for the desired lecture">
                    </div>   
                    <div class="ps-3 pe-3 pt-2 pb-3 text-dark">
                             <label for="" class="form-label fw-bold">YouTube Video Link</label>
                             <input type="text" class="form-control" style="width:400px;" name="lecture3D"  placeholder="paste the embeded youtube video link">
                    </div>
                    <input type="hidden" value="iframe3D" name="iframe3D">
                </div> 
                 
                </div>

            <div class="mb-4 border border-2 border-secondary p-3 text-dark" style="background-color:white;">
                   

                <div class="ps-3 pe-3 pt-2 pb-3 text-dark">
                             <label for="" class="form-label fw-bold">Desired Section</label>
                             <input type="text" class="form-control" name="section04"  placeholder="Enter the section title you want to include video">
                </div>
                   
                <div class="d-flex justify-content-evenly">
                    <div class="ps-3 pe-3 pt-2 pb-3 text-dark">
                             <label for="" class="form-label fw-bold">Enter Lecture Tile</label>
                             <input type="text" class="form-control" style="width:430px;" name="title4A"  placeholder="Enter title for the desired lecture">
                    </div>   
                    <div class="ps-3 pe-3 pt-2 pb-3 text-dark">
                             <label for="" class="form-label fw-bold">YouTube Video Link</label>
                             <input type="text" class="form-control" style="width:400px;" name="lecture4A"  placeholder="paste the embeded youtube video link">
                    </div>
                    <input type="hidden" value="iframe4A" name="iframe4A">
                </div>    

                <div class="d-flex justify-content-evenly">
                    <div class="ps-3 pe-3 pt-2 pb-3 text-dark">
                             <label for="" class="form-label fw-bold">Enter Lecture Tile</label>
                             <input type="text" class="form-control" style="width:430px;" name="title4B"  placeholder="Enter title for the desired lecture">
                    </div>   
                    <div class="ps-3 pe-3 pt-2 pb-3 text-dark">
                             <label for="" class="form-label fw-bold">YouTube Video Link</label>
                             <input type="text" class="form-control" style="width:400px;" name="lecture4B"  placeholder="paste the embeded youtube video link">
                    </div>
                    <input type="hidden" value="iframe4B" name="iframe4B">
                </div>  

                <div class="d-flex justify-content-evenly">
                    <div class="ps-3 pe-3 pt-2 pb-3 text-dark">
                             <label for="" class="form-label fw-bold">Enter Lecture Tile</label>
                             <input type="text" class="form-control" style="width:430px;" name="title4C"  placeholder="Enter title for the desired lecture">
                    </div>   
                    <div class="ps-3 pe-3 pt-2 pb-3 text-dark">
                             <label for="" class="form-label fw-bold">YouTube Video Link</label>
                             <input type="text" class="form-control" style="width:400px;" name="lecture4C"  placeholder="paste the embeded youtube video link">
                    </div>
                    <input type="hidden" value="iframe4C" name="iframe4C">
                </div> 

                <div class="d-flex justify-content-evenly">
                    <div class="ps-3 pe-3 pt-2 pb-3 text-dark">
                             <label for="" class="form-label fw-bold">Enter Lecture Tile</label>
                             <input type="text" class="form-control" style="width:430px;" name="title4D"  placeholder="Enter title for the desired lecture">
                    </div>   
                    <div class="ps-3 pe-3 pt-2 pb-3 text-dark">
                             <label for="" class="form-label fw-bold">YouTube Video Link</label>
                             <input type="text" class="form-control" style="width:400px;" name="lecture4D"  placeholder="paste the embeded youtube video link">
                    </div>
                    <input type="hidden" value="iframe4D" name="iframe4D">
                </div> 
                 
            </div>

            <!-- courses section ends here 	-->

            
            <!-- <input type="hidden" name="courses_id" value="<  $coruse_id ?>" placeholder="<  $coruse_id ?>">
                        <input type="hidden" name="requirments_id" value="<  $requirments_id ?>" placeholder="<  $requirments_id ?>">
                        <input type="hidden" name="section_id" value="<  $section_id ?>" placeholder="<  $section_id ?>"> -->

        <!-- course additional info section starts  -->

        
        <?php 
        
        $coourseAdditionlInfo = $CoursesUpdateData->fetching("course_additional_info","*",null,"courses_id = $courses_id");

        if(!empty($coourseAdditionlInfo)){
            foreach($coourseAdditionlInfo as $AdditionalInfo){
                $course_prerequsites = $AdditionalInfo['course_prerequsites'];
                $final_words = $AdditionalInfo['final_words'];
                $cover_planning = $AdditionalInfo['cover_planning'];
                $instructor_instructions = $AdditionalInfo['instructor_instructions'];
                $instructor_planings = $AdditionalInfo['instructor_planings'];
            }
        }else{
            echo "Additional info not present";
        }
    

        ?>

                        <div class="mb-3 text-dark">
                                <label class="form-label">
                                <strong class="text-dark d-block" style="font-size:20px">
                                Discuse about the prerequsites of this course 
                                    <button type="button" class="btn fw-bold" onclick="createList('insertUnorderedList')">
                                    <!-- Bullet List -->
                                    <i class="fa-solid fa-list-ul" style="color: #000000;"></i>
                                </button>
                                    <button type="button" class="btn fw-bold" onclick="createList('insertOrderedList')">
                                    <!-- Numbered List -->
                                    <i class="fa-solid fa-list-ol" style="color: #000000;"></i>
                                </button>

                                    </strong></label>
                                    <div class="form-floating">

                                    <div id="editor1"  class="p-3" style="height: 35vh; border:1px solid black; overflow:scroll; font-weight: 400;" class="editor" contenteditable="true" placeholder="Start typing here...">
                                <?= !empty($course_prerequsites)?$course_prerequsites:"Enter Data"; ?>
                                   </div>
                                    <!-- Hidden input field to store editor content -->
                                    <input type="hidden" id="editorContent1" name="course_prerequsites">

                                    </div>
                                   Discuss about the prerequsites of the course for better understanding of the students in bullet points

                                </div>

                                <div class=" mb-3 mt-5 text-dark">
                                <label class="form-label">
                                <strong class="text-dark d-block" style="font-size:20px">
                                Enter Some Masterpiece about the course
                                    <button type="button" class="btn fw-bold" onclick="createList('insertUnorderedList')">
                                    <!-- Bullet List -->
                                    <i class="fa-solid fa-list-ul" style="color: #000000;"></i>
                                </button>
                                    <button type="button" class="btn fw-bold" onclick="createList('insertOrderedList')">
                                    <!-- Numbered List -->
                                    <i class="fa-solid fa-list-ol" style="color: #000000;"></i>
                                </button>

                                    </strong></label>
                                    <div class="form-floating">

                                    <div id="editor1"  class="p-3" style="height: 35vh; border:1px solid black; overflow:scroll;font-weight: 400 !important;" class="editor" contenteditable="true" placeholder="Start typing here...">
                                
                                  </div>
                                    <!-- Hidden input field to store editor content -->
                                    <input type="hidden" id="editorContent1" name="enterd_main">

                                    </div>

                                </div>   


                                <strong class="text-dark d-block mb-2 mt-4 " style="font-size:20px">
                                Discuss about the Course cover planning </strong>

                                <div class="form-floating" >
                                    <textarea class="form-control" name="cover_planning" style="height:150px; padding: 10px;font-weight: 400 !important;" placeholder="Leave a comment here" id="floatingTextarea">
                                    <?php 
                                    $updated_cover_planning = strip_tags($cover_planning);
                                    echo !empty($updated_cover_planning)?$updated_cover_planning:"Enter Data";
                                    ?>
                                </textarea>
                                   
                                </div>
                                

                                <div class="mb-3 text-dark">
                                <label class="form-label">
                                    <strong class="text-dark d-block mt-3" style="font-size:20px">
                                      Say some finals words to the students 
                                    <button type="button" class="btn" onclick="execCommand('underline')">
                               <!-- Underline -->
                               <i class="fa-solid fa-underline" style="color: #000000;"></i>
                               </button>
                               
                               <button type="button" class="btn" onclick="execCommand('italic')">
                               <!-- Italic -->
                               <i class="fa-solid fa-italic" style="color: #000000;"></i>
                               </button>

                               <button type="button" class="btn" onclick="execCommand('bold')">
                               <!-- Bold -->
                               <i class="fa-solid fa-bold" style="color: #000205;"></i>
                              </button> 
                                    </strong></label>
                                    <div class="form-floating">

                                    <div id="editor1"  class="p-3" style="height: 35vh; border:1px solid black; overflow:scroll;font-weight: 400 !important;" class="editor" contenteditable="true" placeholder="Start typing here...">
                                      <?= !empty($final_words)?$final_words:"Enter Data" ?>
                                    </div>
                                    <!-- Hidden input field to store editor content -->
                                    <input type="hidden" id="editorContent1" name="final_words">

                                    </div>
                                 <p style="font-size: 13px; font-weight: 500;"> Say Some Final words for the studets to grow up confidence in them about course</p> 
                                </div>


                                <strong class="text-dark d-block mb-2 mt-4 " style="font-size:20px;">
                                Discuss about your future planings regarding students</strong>

                                <div class="form-floating" >
                                    <textarea class="form-control" name="instructor_planings" style="height:150px;padding: 10px;" placeholder="Leave a comment here" id="floatingTextarea">
                                    <?= !empty($instructor_planings)?$instructor_planings:"Enter Data"; ?>
                                </textarea>
                                    
                                </div>  

                                
                                <strong class="text-dark d-block mb-2 mt-4 " style="font-size:20px">
                                Make your final instructions for the students quries</strong>

                                <div class="form-floating" >
                                    <textarea class="form-control" name="instructor_instructions" style="height:150px; padding: 10px;" placeholder="Leave a comment here" id="floatingTextarea">
                                    <?= !empty($instructor_instructions)?strip_tags($instructor_instructions):"Enter Data"; ?>
                                    </textarea>
                                    
                                </div>                                

<input type="submit" name="course_submit_update" class="btn text-light fw-bold mt-3" style="background-color:purple; border-radius:0%;">

        </form>
    </div>


    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>

        <script>
            function execCommand(command) {
                document.execCommand(command, false, null);
            }
    
            function createList(command) {
                document.execCommand(command, false, null);
            }
    
            document.querySelector('form').addEventListener('submit', function() {
        var editors = document.querySelectorAll('.editor');
        var editorContents = document.querySelectorAll('[id^="editorContent"]');
    
        editors.forEach(function(editor, index) {
            var editorContent = editor.innerHTML;
            editorContents[index].value = editorContent;
        });
    
    });

    function execCommandAndUpdate(command, editorId) {
        document.execCommand(command, false, null);
        updateHiddenInput(editorId);
    }

    function createListAndUpdate(command, editorId) {
        document.execCommand(command, false, null);
        updateHiddenInput(editorId);
    }

    function updateHiddenInput(editorId) {
        var editorContent = document.getElementById(editorId).innerHTML;
        document.getElementById(editorId + 'Content').value = editorContent;
    }

        </script>

</body>

</html>