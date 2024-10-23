<?php include('../../back.php');
if(isset($_POST['course_submit']) && $_SERVER['REQUEST_METHOD'] === 'POST')
{

    // $course = $_SESSION['title'];
    // $submittedValue = $_POST[$course];
    $course_name = $_POST['course_name'];

    $course_subtitle = $_POST['course_subtitle'];
    $course_language = $_POST['course_language'];
    $selected_option = $_POST['selected_option'];
    $course_level = $_POST['course_level'];
    $course_taught = $_POST['course_taught'];

    $selected_course_type = $_POST['course_type'];

    $image = $_FILES['course_image'];
    $imgArray = imagehandling($image);

    $course_video = $_FILES['course_video'];
    $video = imagehandling($course_video);

    $instructor_id = $_POST['instructor_id'];

    $name = isset($_POST['name']) ? $_POST['name'] : '';


        $editorContent = $_POST['editorContent'];

  
    $course_detail = new backend();
    $get_course = $course_detail->insertion('cource',array('course_title'=>$course_name,'course_subtitle'=>$course_subtitle,'select_language'=>$course_language,'selecting_level'=>$course_level,
    'select_category'=>$selected_option,'primary_taught'=>$course_taught,'course_img'=>$imgArray['imgPath'],'course_video'=>$video['imgPath'],
    'instructor_name'=>$name,'course_description'=>$editorContent,'instructor_id'=>$instructor_id,'course_type'=>$selected_course_type));
    
  
    if ($get_course) {
        $course_detail = new backend();
        $get_course_id = $course_detail->fetching('cource');
        foreach ($get_course_id as $detail_id) {
            $detail = $detail_id['courses_id'];
            header("location: record_detail.php?courses_id=$detail");
        }
      
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Dashboard</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <style>
        .editor-container {
            width: 80%;
            margin: 20px auto;
        }

        #editor {
            border: 1px solid #ccc;
            min-height: 200px;
            padding: 10px;
            margin-bottom: 10px;
        }
        .exceeded-limit:focus {
            border-color: red !important;
            box-shadow: 0 0 0 0.2rem rgba(255, 0, 0, 0.25) !important;
        }
        .error {
            border-color: red;
        }
        .error-message {
            color: red;
            display: none;
        }
        .disabled {
            background-color: lightgray;
            cursor: not-allowed;
        }
    </style>   
</head>

<body>


    <div class="continer-fluid bg-dark text-light d-flex justify-content-around align-item-center">
        <h4><span class="badge bg-secondary mt-2 ms-5">Draft</span></h4>
<?php
  if (isset($_SESSION['title'])) {
    $courseName = $_SESSION['title'];
    ?>
      <h2 class="fw-bold me-5"><?php echo $courseName ?></h2>
    <?php
  }
?>
        

        <a href="../add_cource_title.php" class="btn btn-light btn-sm mt-2 mb-2" style="font-weight:bold;">back to
            course</a>
    </div>

    <div class="container-fluid  mt-5">

        <!-- Page Wrapper -->
        <div id="wrapper">

            <!-- Sidebar -->
            <ul class="navbar-nav bg-light shadow text-dark sidebar sidebar-light accordion" id="accordionSidebar">

                <!-- Divider -->
                <hr class="sidebar-divider my-0">

                <!-- Divider -->
                <hr class="sidebar-divider">

                
                <li class="nav-item fw-bold" >
                    <a class="nav-link collapsed" href="index.php" >
                        <i class="fas fa-fw fa-cog" style="color:black"></i>
                        <span style="color:black">course landing page</span>
                    </a>
                </li>

                <li class="nav-item fw-bold active" style="opacity: 0.5;">
                    <a class="nav-link collapsed" href="record_detail.php" style="pointer-events: none;">
                        <i class="fas fa-fw fa-wrench" style="color:black"></i>
                        <span style="color:black;">
                           course content
                        </span>
                    </a>

                </li>

                <li class="nav-item fw-bold" style="opacity: 0.5;">
                    <a class="nav-link collapsed" href="cource_curriculam.php" style="pointer-events: none;">
                        <i class="fas fa-fw fa-folder" style="color:black"></i>
                        <span style="color:black">
                          setup $ lectures video
                        </span>
                    </a>
                </li>

                <li class="nav-item fw-bold" style="opacity: 0.5;">
                    <a class="nav-link" href="quiz_assingment.php" style="pointer-events: none;">
                        <i class="fas fa-fw fa-chart-area" style="color:black"></i>
                        <span style="color:black">
                        Quizzes 
                        </span></a>
                </li>

                <li class="nav-item fw-bold" style="opacity: 0.5;">
                    <a class="nav-link" href="quiz_assingment1.php" style="pointer-events: none;">
                        <i class="fas fa-fw fa-chart-area" style="color:black"></i>
                        <span style="color:black">
                        Assingments
                        </span></a>
                </li>

                <li class="nav-item fw-bold" style="opacity: 0.5;">
                    <a class="nav-link" href="course_price.php" style="pointer-events: none;">
                        <i class="fas fa-fw fa-table" style="color:black"></i>
                        <span style="color:black">
                            pricing
                        </span></a>
                </li>

                <li class="nav-item fw-bold" style="opacity: 0.5;">
                    <a class="nav-link" href="additional_info.php" style="pointer-events: none;">
                        <i class="fas fa-fw fa-table" style="color:black"></i>
                        <span style="color:black">
                            Final Submission
                        </span></a>
                </li>

                <!-- Divider -->
                <hr class="sidebar-divider d-none d-md-block">

                <!-- Sidebar Toggler (Sidebar) -->
                <div class="text-center d-none d-md-inline">
                    <button class="rounded-circle border-0" id="sidebarToggle"></button>
                </div>

            </ul>
            <!-- End of Sidebar -->

            <!-- Content Wrapper -->
            <div id="content-wrapper" class="d-flex flex-column container">

                <!-- Main Content -->
                <div id="content">



                    <!-- Begin Page Content -->
                    <div class="container-fluid mt-1">

                        <!-- Page Heading -->
                        <div class="d-sm-flex align-items-center justify-content-between mb-4">
                            <h1 class="h3 mb-4 text-dark mt-5" style="font-weight:bold;font-size:30px;">
                                Course Landing page
                            </h1>
                        </div>

                        <!-- content goes here written in inside dashboard section  -->

                        <hr>

                        <p class="mt-5 text-dark">Your course landing page is crucial to your success on Udemy.
                            If it’s done right, it can also help you gain visibility in search engines like Google. As
                            you complete this section, think about creating a compelling Course Landing Page that
                            demonstrates why someone would want to enroll in your course. Learn more about creating your
                            course
                            landing page and course title standards.</p>

                      <form action="index.php" method="post" enctype="multipart/form-data">

                            <?php 
                            if  (isset($_SESSION['title']) && isset($_SESSION['category_id'])) {
                                $courseName = $_SESSION['title'];
                                $category = $_SESSION['category_id'];
                            ?>                                
                            <div class='mb-3 text-dark mt-5'>
                                <label class='form-label'>
                                    <strong class='text-dark'>Course title <span class="text-danger">*</span></strong></label>
                                <input type='text' required name='course_name' id='course_title' class='form-control  form-control-lg' value='<?=$courseName?>' placeholder='$courseName'>
                                <div class='form-text'>Your title should be a mix of attention-grabbing, informative, and
                                    optimized for search.
                                    <strong class='text-dark'>Title should contain only 8 words</strong>
                                    </div>
                            </div>
<?php
}
?>  
                         
                        <div class="mb-3 text-dark mt-5">
                            <label class="form-label">
                                <strong class="text-dark">Course subtitle <span class="text-danger">*</span></strong></label>
                            <input type="text" required name="course_subtitle" class="form-control form-control-lg"
                                placeholder="Insert your course subtitle">
                            <div class="form-text mt-2" style="font-size: 15px;">
                            <strong class='text-dark'>Should contain keywords</strong> , Mainly
                                mention keywords you find most important areas that you've covered during your course.</div>
                        </div>


                        <label class="form-label mt-5">
                            <strong class="text-dark">Basic info <span class="text-danger">*</span></strong></label>

                        <div class="row d-flex align-items-center justify-content-between">
                            <div class="col-sm-4">
                                <select name="course_language" id="course_language" class="form-select form-select-lg">
                                    <option value="0" required selected>Select a language</option>
                                    <option value="English">English</option>
                                </select>
                            </div>

                            <div class="col-sm-4">
                                <select name="course_level" id="course_level" class="form-select form-select-lg">
                                    <option value="0" required disabled selected>Select your Level</option>
                                    <option value="Beigner">Beginner Level</option>
                                    <option value="Intermediate">Intermediate Level</option>
                                    <option value="Expert">Expert Level</option>
                                    <option value="">All levels</option>
                                </select>
                            </div>

                            <div class="col-sm-4">
                                <?php  
                                if(isset($_SESSION['title']) && isset($_SESSION['category_id'])){
                                    $courseName = $_SESSION['title'];
                                    $category = $_SESSION['category_id'];
                                    $course_cat = new  backend();
                                    $CatSelection = $course_cat->fetching('cources_categories','*');
                                 ?>

                                <select class='form-select form-select-lg' name='selected_option' id='selected_option'>
                                    <option value='' required disabled>Please select an option <span class="text-danger">*</span></option>

                                    <?php
                                    foreach($CatSelection as $SelectCat){ 
                              
                                    $selected = ($SelectCat['category_id'] == $category) ? 'selected' : '';
                           
                                    echo "<option value=\"{$SelectCat['category_id']}\" $selected>{$SelectCat['category_name']}</option>";
                                    ?>
                                   
                                    <?php }   ?>
                                </select>
                                <?php  }  ?>
                            </div>

                             <div class="mb-3 text-dark mt-5">
                                <label class="form-label">
                                    <strong class="text-dark">What is primarily taught in your course? <span class="text-danger">*</span></strong></label>
                                <input type="text" name="course_taught" required class="form-control form-control-lg" placeholder="e.g web development">
                            </div>


                            <div class="card mb-3 mt-5 container">
                                <div class="row d-flex justify-content-between">
                                    <div class="col-md-6">
                                        <img src="../../assets/images/placeholder.jpg">
                                    </div>
                                    <div class="col-md-6">
                                        <div class="card-body mt-5">
                                            <h5 class="card-title">Upload Cource image<span class="text-danger">*</span></h5>
                                            <p class="card-text">Upload your course image here. It must meet our course image quality standards to be accepted. Important guidelines: .jpg, .jpeg or .png no text on the image.</p>
                                            <input type="file" required name="course_image" accept=".png, .jpeg, .jpg">
                                            <p id="errorMessage" style="color: red; display: none;">Please upload a file in PNG, JPEG, or JPG format.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="card mb-3 mt-5 container">
                                <div class="row d-flex justify-content-between">
                                    <div class="col-md-6">
                                        <img src="../../assets/images/placeholder.jpg">
                                    </div>
                                    <div class="col-md-6">
                                        <div class="card-body mt-5">
                                            <h5 class="card-title">Upload Cource Promotional video <span class="text-danger">*</span></h5>
                                            <p class="card-text">This is a wider card with supporting text below as a
                                                natural lead-in to additional content. This content is a little bit
                                                longer.</p>
                                            <input type="file" required name="course_video">
                                        </div>
                                    </div>
                                </div>
                            </div>

                           <?php 

                           if(isset($_SESSION['instructor_id'])){
                            $instructor_id = $_SESSION['instructor_id'];
                            $instructor = new backend();
                            $instructor_name = $instructor->fetching('instructor','*',null,"instructor_id = '$instructor_id'");
                            foreach($instructor_name as $name){
                               $instrutor_img = $name['instructor_img'];
                               $fname = $name['fname'];
                               $lname = $name['lname'];
                               $name = $fname . $lname;
                            echo "<div class='text-dark mt-5'>
                            <label class='form-label'>
                                <strong class='text-dark'>Instructor profile(s)</strong></label>
                            <div style='height:50px;width:50%;' class='mt-4 d-flex justify-content-center align-items-center'>                     
                                        <img src='../../$instrutor_img' class='rounded-circle'
                                           style='height:70px; width:70px;'>
                                    <a href='../dashboard/profile.php' class='d-block ms-5'>
                                        <strong>  
                                        $name
                                        </strong>
                                        
                                    </a>         
                                    <input type='hidden' name='name' value='$name'>
                                    <input type='hidden' name='instructor_id' value='$instructor_id'>
                            </div>
                            </div>";
                            // echo "main file here";     
                        }
                           }elseif($_SESSION['id']){
                            $login_id = $_SESSION['id'];
                            $instructor = new backend();
                            $instructor_name = $instructor->fetching('instructor','*',null,"registration_id = '$login_id'");
                            foreach($instructor_name as $name){
                                $instrutor_img = $name['instructor_img'];
                                $instructor_id = $name['instructor_id'];
                                $fname = $name['fname'];
                                $lname = $name['lname'];
                                $name = $fname . $lname;
                                echo "<div class='text-dark mt-5'>
                                <label class='form-label'>
                                    <strong class='text-dark'>Instructor profile(s)</strong></label>
                                <div style='height:50px;width:50%;' class='mt-4 d-flex justify-content-center align-items-center'>                     
                                            <img src='../../$instrutor_img' class='rounded-circle'
                                               style='height:70px; width:70px;'>
                                        <a href='../dashboard/profile.php' class='d-block ms-5'>
                                            <strong>  
                                            $name
                                            </strong>
                                        </a>         
                                        <input type='hidden' name='name' value='$name'>
                                        <input type='hidden' name='instructor_id' value='$instructor_id'>
                                </div>
                                </div>";
                                // echo "main file here";     
                            }
                           }
                           else{ ?>
                                <!-- <div class='text-dark mt-5'>
                                <label class='form-label'>
                                    <strong class='text-dark'>Instructor profile(s)</strong></label>
                                <div style='height:50px;width:50%;' class='mt-4 d-flex justify-content-center align-items-center'>                     
                                            <img src='../../assets/images/first-person.jpg' class='rounded-circle'
                                               style='height:70px; width:70px;'>
                                        <a href='../dashboard/profile.php' class='d-block ms-5'>
                                            <strong>
                                              Update your profile first
                                            </strong>
                                        </a>         
                                </div>
                                </div>    -->
                                <div class="container mt-4">
                                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                    <i class="fa-solid fa-circle-exclamation me-2"></i>
                                    <strong>Warning!</strong> Please <a href="../dashboard/profile.php" class="alert-link">make your profile</a> first before submitting the course.

                                </div>
                                </div>
                            <?php } ?>

                            <br>
                    
                        <div class="mt-5 border border-1 border-dark bg-secondary text-light p-3">
                        <p class="fw-bold"><strong>Note</strong> <br>
                            if this course free then click the checkbox given below
                            </p>
                   
                            <div class="form-check ms-3">
                                <input class="form-check-input" type="checkbox" name="course_type" value="Free">
                                <label class="form-check-label fw-bold" style="font-size:20px;">
                                    Is this course is free?
                                </label>
                                <p></p>
                            </div>
                         
                        </div>
                                    
                    <div class="mb-3 text-dark mt-4"class="border border-2 border-dark"> 
                    <label class="form-label">
                            <strong class="text-dark">Course description <span class="text-danger">*</span> </strong></label>

                           
                            <div id="editor" class="editor" contenteditable="true" placeholder="Start typing here..."></div>
            <div id="editorErrorMessage" class="error-message">This field is required.</div>

            <!-- Hidden input field to store editor content -->
            <input type="hidden" id="editorContent" name="editorContent">

                            <button type="button" class="btn text-dark fw-bold" onclick="execCommand('bold')"><i class="fa-solid fa-bold"></i></button>
                            <button type="button" class="btn text-dark fw-bold" onclick="execCommand('underline')"><i class="fa-solid fa-underline"></i></button>
                            <button type="button" class="btn text-dark fw-bold" onclick="execCommand('italic')"><i class="fa-solid fa-italic"></i></button>
                            <button type="button" class="btn text-dark fw-bold" onclick="createList('insertUnorderedList')"><i class="fa-solid fa-list"></i></button>
                            <button type="button" class="btn text-dark fw-bold" onclick="createList('insertOrderedList')"><i class="fa-solid fa-list-ol"></i></button>

                    </div>
                    </div>

 
                        <!-- <input type="submit" class="btn btn-primary" name="course_submit" value="Submit Course"> -->
                        <button type="submit" style="background-color:black" id="submitBtn"  class="btn text-light mt-3 mb-5 fw-bold" name="course_submit">Submit & Next</button>
                     </div>
                    <!-- /.container-fluid -->
                </form>

                </div>
            

            </div>
            <!-- End of Content Wrapper -->

        </div>
        <!-- End of Page Wrapper -->

        <!-- Scroll to Top Button-->
        <a class="scroll-to-top rounded" href="#page-top">
            <i class="fas fa-angle-up"></i>
        </a>

        <!-- Logout Modal-->
        <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                    <div class="modal-footer">
                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                        <a class="btn btn-primary" href="login.html">Logout</a>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    
    <script>
// Get the textarea element by its ID
const biographyTextarea = document.getElementById('course_title');

// Variable to track the original value before truncation
let originalValue = '';

// Add an event listener for input events (typing)
biographyTextarea.addEventListener('input', function () {
    // Get the current value of the textarea
    let bioText = this.value;

    // Split the text into words (handling spaces, tabs, etc.)
    const words = bioText.trim().split(/\s+/);

    // Check the number of words
    if (words.length > 8) {
        // If more than 50 words, truncate the text to the first 50 words
        bioText = words.slice(0, 8).join(' ');

        // Update the textarea value to show only the first 50 words
        this.value = bioText;

        // Store the original value before truncation
        originalValue = bioText;

        // Add a class to change the border color to red
        this.style.borderColor = 'red';
        this.classList.add('exceeded-limit');
    } else {
        // If 50 words or less, reset the border color and focus
        this.style.borderColor = '';
        this.classList.remove('exceeded-limit');
        originalValue = bioText;
    }
});

// Add an event listener for paste events to prevent pasting beyond the limit
biographyTextarea.addEventListener('paste', function (event) {
    // Prevent the default paste action
    event.preventDefault();

    // Get the text to paste
    let pasteText = (event.clipboardData || window.clipboardData).getData('text');

    // Append the paste text to the current textarea value
    let updatedText = originalValue + pasteText;

    // Split the updated text into words (handling spaces, tabs, etc.)
    const words = updatedText.trim().split(/\s+/);

    // Check if the number of words exceeds 50
    if (words.length > 8) {
        // If more than 50 words, truncate the text to the first 50 words
        updatedText = words.slice(0, 8).join(' ');

        // Update the textarea value to show only the first 50 words
        biographyTextarea.value = updatedText;

        // Add a class to change the border color to red
        biographyTextarea.style.borderColor = 'red';
        biographyTextarea.classList.add('exceeded-limit');
    } else {
        // If 50 words or less, update the textarea value and reset styles
        biographyTextarea.value = updatedText;
        biographyTextarea.style.borderColor = '';
        biographyTextarea.classList.remove('exceeded-limit');
        originalValue = updatedText;
    }
});
    </script>
<!-- --------------------------------------------------------------------------------------------------------------------------------------------------------------------- -->
    <script>

        const fileInput = document.getElementById('fileInput');
        const errorMessage = document.getElementById('errorMessage');

        fileInput.addEventListener('change', function () {
            const file = fileInput.files[0];
            const validExtensions = ['image/png', 'image/jpeg', 'image/jpg'];

            if (file && !validExtensions.includes(file.type)) {
                // Invalid file format
                fileInput.classList.add('error');
                errorMessage.style.display = 'block';
                fileInput.value = ''; // Clear the input
            } else {
                // Valid file format
                fileInput.classList.remove('error');
                errorMessage.style.display = 'none';
            }
        });

        function execCommand(command) {
            document.execCommand(command, false, null);
        }

        function createList(command) {
            document.execCommand(command, false, null);
        }

        // // Update hidden input value before form submission
        // document.querySelector('form').addEventListener('submit', function() {
        //     var editorContent = document.getElementById('editor').innerHTML;
        //     document.getElementById('editorContent').value = editorContent;
        // });

            document.getElementById('textEditorForm').addEventListener('submit', function(event) {
                var editorContent = document.getElementById('editor').innerHTML.trim();
                var hiddenInput = document.getElementById('editorContent');
                var editorErrorMessage = document.getElementById('editorErrorMessage');
                
                hiddenInput.value = editorContent;

                if (editorContent === '' || editorContent === '<br>') {
                    document.getElementById('editor').classList.add('error');
                    editorErrorMessage.style.display = 'block';
                    event.preventDefault(); // Prevent form submission
                } else {
                    document.getElementById('editor').classList.remove('error');
                    editorErrorMessage.style.display = 'none';
                }
            });
    </script>
<!-- --------------------------------------------------------------------------------------------------------------------------------------------------- -->
 
<script>
    
    // Function to check the editor content and enable/disable the submit button
    function checkEditorContent() {
        var editor = document.getElementById('editor');
        var editorContent = stripHTMLAndNormalize(editor.innerHTML.trim());
        var submitBtn = document.getElementById('submitBtn');
        var placeholder = stripHTMLAndNormalize(editor.getAttribute('data-placeholder').trim());

        console.log('Editor content:', editorContent); // Debugging line
        console.log('Placeholder content:', placeholder); // Debugging line

        // Update hidden input value
        document.getElementById('editorContent').value = editor.innerHTML.trim();

        // Check if the content is empty or matches the placeholder
        if (editorContent === '' || editorContent === placeholder) {
            submitBtn.disabled = true;
            submitBtn.classList.add('disabled');
            console.log('Submit button disabled'); // Debugging line
        } else {
            submitBtn.disabled = false;
            submitBtn.classList.remove('disabled');
            console.log('Submit button enabled'); // Debugging line
        }
    }

    // Attach the input event listener to the editor
    document.getElementById('editor').addEventListener('input', checkEditorContent);

    // Initial check on page load after a short delay
    window.addEventListener('load', function() {
        setTimeout(checkEditorContent, 100); // Adjust the delay as needed
    });

    // Form submit event listener to validate before actual submission
    document.getElementById('textEditorForm').addEventListener('submit', function(event) {
        var editor = document.getElementById('editor');
        var editorContent = stripHTMLAndNormalize(editor.innerHTML.trim());
        var editorErrorMessage = document.getElementById('editorErrorMessage');
        var placeholder = stripHTMLAndNormalize(editor.getAttribute('data-placeholder').trim());

        console.log('Form submitted with content:', editorContent); // Debugging line

        if (editorContent === '' || editorContent === placeholder) {
            editor.classList.add('error');
            editorErrorMessage.style.display = 'block';
            event.preventDefault(); // Prevent form submission
            console.log('Form submission prevented due to empty content'); // Debugging line
        } else {
            editor.classList.remove('error');
            editorErrorMessage.style.display = 'none';
            console.log('Form submission allowed'); // Debugging line
        }
    });
</script>
    


    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/chart-area-demo.js"></script>
    <script src="js/demo/chart-pie-demo.js"></script>

</body>


</html>

