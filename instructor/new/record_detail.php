

<?php include('../../back.php');
if(isset($_POST['requirements_submit']) && $_SERVER['REQUEST_METHOD'] === 'POST')
{

    $course_requirments = $_POST['course_requirments'];
    $short_description = $_POST['short_description'];
    $course_outcomes = $_POST['course_outcomes'];
    $course_includes = $_POST['course_includes'];
    $course_specifications = $_POST['course_specifications'];
    // $course_learners = $_POST['course_learners'];
    $coruse_id = $_POST['coruse_id'];


    // $courses_id = isset($_GET['courses_id']) ? $_GET['courses_id'] : 'Not set';
    // echo "Courses ID: $courses_id";
       
    $course_detail = new backend();
    $get_course = $course_detail->insertion('course_requirments',array('course_requirments'=>$course_requirments,
    'short_description'=>$short_description,
    'course_outcome'=>$course_outcomes,
    'course_includes'=>$course_includes,
    'course_specifications'=>$course_specifications,
    'courses_id'=>$coruse_id));

    if($get_course){
        $course_detail = new backend();
        $getID = $course_detail->fetching('course_requirments');
        foreach ($getID as $all_data) {
            $courses_id = $all_data['courses_id'];
            $requirments_id = $all_data['requirments_id'];
            // header("location: cource_curriculam.php?courses_id=$courses_id&requirments_id=$requirments_id");
            header("Location: cource_curriculam.php?courses_id=$courses_id&requirments_id=$requirments_id");
        }
    }else{
        echo "Leaving any information";
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

    <!-- Fontawsome CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
    integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

    <style>
        .editor-container {
            width: 80%;
            margin: 20px auto;
        }

        .editor {
            border: 1px solid #ccc;
            min-height: 200px;
            padding: 10px;
            margin-bottom: 10px;
        }
        .error {
            border-color: red;
        }
        .disabled {
            background-color: gray;
            cursor: not-allowed;
        }
        .error-message {
            color: red;
            display: none;
        }
        .editor_limit_0 {
            font-family: Arial, sans-serif;
            font-size: 14px;
            line-height: 1.5;
            width: 100%;
            box-sizing: border-box;
        }
        .editor_limit_1 {
            font-family: Arial, sans-serif;
            font-size: 14px;
            line-height: 1.5;
            width: 100%;
            box-sizing: border-box;
        }
        .editor_limit_2 {
            font-family: Arial, sans-serif;
            font-size: 14px;
            line-height: 1.5;
            width: 100%;
            box-sizing: border-box;
        }
        .editor_limit_3 {
            font-family: Arial, sans-serif;
            font-size: 14px;
            line-height: 1.5;
            width: 100%;
            box-sizing: border-box;
        }
        .editor_limit_0 strong {
            font-weight: bold;
        }
        .editor_limit_1 strong {
            font-weight: bold;
        }
        .editor_limit_2 strong {
            font-weight: bold;
        }
        .editor_limit_3 strong {
            font-weight: bold;
        }
        .editor_limit_0 ul, .editor_limit_0 ol {
            margin: 0;
            padding-left: 20px;
        }
        .editor_limit_0 li {
            margin-bottom: 10px;
        }
    </style>
</head>

<body>


    <div class="continer-fluid bg-dark text-light d-flex justify-content-around align-item-center">
        <h4><span class="badge bg-secondary mt-2 ms-5">Draft</span></h4>
<?php
  if (isset($_GET['courses_id'])) {
    $courses_id = $_GET['courses_id'];
    $course_detail = new backend();
    $get_course = $course_detail->fetching('cource','*',null,"courses_id='$courses_id'");
    foreach($get_course as $content_details){
        $courseName = $content_details['course_title'];
        $coruse_id = $content_details['courses_id'];
    }
    ?>
      <h2 class="fw-bold me-5"><?php echo $courseName?></h2>
    <?php
  }else{
    echo "Connecttion problem";
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

                <li class="nav-item fw-bold" style="opacity: 0.5;">
                    <a class="nav-link collapsed" href="index.php" style="pointer-events: none;">
                        <i class="fas fa-fw fa-cog" style="color:black"></i>
                        <span style="color:black">course landing page</span>
                    </a>
                </li>

                <li class="nav-item fw-bold active">
                    <a class="nav-link collapsed" href="record_detail.php">
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

                        <p class="mt-5 text-dark">Your course landing page is crucial to your success on this Website.
                            If it’s done right, it can also help you gain visibility in search engines like Google. As
                            you complete this section, think about creating a compelling Course Landing Page that
                            demonstrates why someone would want to enroll in your course. Learn more about creating your
                            course
                            landing page and course title standards.</p>

                      <form action="record_detail.php" id="textEditorForm" method="post" enctype="multipart/form-data">

                      <div class="text-light p-3" style="background-color:#5a5c69;border-radius:5px;">
                                <h5 class="fw-bold ">Note <span class="text-light">*</span></h5>
                                <p>
                                    Please make the bullet points to showcase requirements, learning outcomes, and all other given content
                                </p>
                           </div> 

                            <div class='mb-3 text-dark mt-5'>
                                <label class='form-label'>
                                    <strong class='text-dark'>Course title</strong></label>
                                <input type='text' name='course_name' class='form-control  form-control-lg' placeholder='<?= $courseName; ?>' disabled>
                                <div class='form-text'>Your title should be a mix of attention-grabbing, informative, and
                                    optimized for search.</div>
                            </div>


                            <input type="hidden" value="<?= $coruse_id ?>" placeholder="<?= $coruse_id?>" name="coruse_id">

                            <div class="mb-3 text-dark">
                                <label class="form-label">
                                    <strong class="text-dark">
                                    Course Requirments <span class="text-danger">*</span>
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

                                    <!-- Hidden input field to store editor content -->
                                    
                                    <div id="editor" class="editor editor1 placeholder p-3" contenteditable="true"
                                    style="height: 25vh; border: 1px solid black;overflow:scroll; margin-bottom:5px;"
                                    data-placeholder="
                                    <strong>Sample Content</strong>
                                    <br>
<li>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Maiores,
 tempore? sit amet consectetur adipisicing elit. Sequi nesciunt repudiandae esse commodi dolorum
doloribus quos</li>
<li>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Maiores,
 tempore? sit amet consectetur adipisicing elit. Sequi nesciunt repudiandae esse commodi dolorum
doloribus quos</li>
<li>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Maiores,
 tempore? sit amet consectetur adipisicing elit. Sequi nesciunt repudiandae esse commodi dolorum
doloribus quos</li>
<li>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Maiores,
 tempore? sit amet consectetur adipisicing elit. Sequi nesciunt repudiandae esse commodi dolorum
doloribus quos</li>
<li>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Maiores,
 tempore? sit amet consectetur adipisicing elit. Sequi nesciunt repudiandae esse commodi dolorum
doloribus quos</li>
<br>"
></div>

                                    <div id="editorErrorMessage" class="error-message">This field is required.</div>
                                    
                                    <input type="hidden" class="hiddenInput1" id="editorContent" name="course_requirments">
                                    
                                    </div>
                                    Dicuss about the core requirements of this course make some nessassaory keypoints to ellaborate the course requirements
                                    Mention the liseted keypoint requiremnts to show the course prespective
                             
                                </div>

                                <div class="mb-3 text-dark mt-5">
                                <label class="form-label">
                                    <strong class="text-dark">Course Short Description <span class="text-danger">*</span>

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

                                    </strong></label>
                                    <div class="form-floating">

                                    <!-- Hidden input field to store editor content -->
                                    
                                    <div id="editor" class="editor editor2 placeholder editor_limit_1 p-3" contenteditable="true"
                                    style="height: 25vh; border: 1px solid black;overflow:scroll; margin-bottom:5px;"
                                    data-placeholder="
<strong>Sample Content</strong>
<br>
<li>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Maiores,
 tempore? sit amet consectetur adipisicing elit. Sequi nesciunt repudiandae esse commodi dolorum
doloribus quos</li>
<li>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Maiores,
 tempore? sit amet consectetur adipisicing elit. Sequi nesciunt repudiandae esse commodi dolorum
doloribus quos</li>
"
></div>

                                    <div class="editor_limit_1_error error-message" style="color: red; display: none;">Please enter Mendatory 2 points.</div>
                                    <div id="editorErrorMessage" class="error-message">This field is required.</div>
                                    
                                    <input type="hidden" class="hiddenInput2" name="short_description" id="editorContent">

                                    </div>
                                    Discuss about the short discription of the course that is overall conclusion sum-up your description into short for better understanding
                                    <strong>Only 2 points Allowed to Enter and Mendatory</strong>
                            </div>



                            <div class="mb-3 text-dark mt-5">
                                <label class="form-label">
                                    <strong class="text-dark">Course Learning Outcomes <span class="text-danger">*</span>

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
                                    
                                    <div id="editor" class="editor3 placeholder editor_limit_0 p-3" contenteditable="true" 
                                    style="height: 25vh; border: 1px solid black;overflow:scroll; margin-bottom:5px;" 
                                    data-placeholder="
<strong>Sample Content</strong>
<br>
<li>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Maiores,
tempore? sit amet consectetur adipisicing elit. Sequi nesciunt repudiandae
esse commodi dolorum doloribus quos nemo sit eius mollitia numquam iure nihil,
explicabo illo ipsum at eum libero labore impedit voluptates voluptatibus consequuntur
omnis fugiat consequatur! Quas consequatur
</li>
<li>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Maiores,
tempore? sit amet consectetur adipisicing elit. Sequi nesciunt repudiandae
esse commodi dolorum doloribus quos nemo sit eius mollitia numquam iure nihil,
explicabo illo ipsum at eum libero labore impedit voluptates voluptatibus consequuntur
omnis fugiat consequatur! Quas consequatur
</li>
<li>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Maiores,
tempore? sit amet consectetur adipisicing elit. Sequi nesciunt repudiandae
esse commodi dolorum doloribus quos nemo sit eius mollitia numquam iure nihil,
explicabo illo ipsum at eum libero labore impedit voluptates voluptatibus consequuntur
omnis fugiat consequatur! Quas consequatur
</li>
"></div>
<div class="editor_limit_0_error error-message" style="color: red; display: none;">Please enter at least 7 points.</div>
                                    <div id="editorErrorMessage" class="error-message">This field is required.</div>
                                    
                                    <input type="hidden" class="hiddenInput3" id="editorContent" name="course_outcomes">

                                    </div>
                                    Discuss about the keypoints what the students should learn in the course. Mention the learning outcomes that students will gain after learning this course 
                                    <strong>Should Have atleast 7 points each point contains minimum 2 to 3 lines</strong>
                            </div>



                            <div class="mb-3 text-dark mt-5">
                                <label class="form-label">
                                    <strong class="text-dark">What this Course includes <span class="text-danger">*</span>

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

                                    <div id="editor" class="editor4 placeholder editor_limit_2 p-3" contenteditable="true" 
                                    style="height: 25vh; border: 1px solid black;overflow:scroll; margin-bottom:5px;" 
                                    data-placeholder="
<strong>Sample Content</strong>
<br>
<br>
<li>24/7 times Availability</li>
<li>24/7 times Availability</li>
<li>24/7 times Availability</li>"></div>
<div class="editor_limit_2_error error-message" style="color: red; display: none;">Please enter at least 5 points.</div>
                                    <div id="editorErrorMessage" class="error-message">This field is required.</div>
                                    
                                    <input type="hidden" class="hiddenInput4" id="editorContent" name="course_includes">

                                    </div>
                                    Dicuss about the features of the course for the learners and sumup in the short bullet points to showcase 
                                    <strong>Must also contains 5 points atleast just showcase the features</strong>
                            </div>

                            <div class="mb-3 text-dark mt-5">
                                <label class="form-label">
                                    <strong class="text-dark">Course short outlines <span class="text-danger">*</span>

                                    <button type="button" class="btn fw-bold" onclick="createList('insertUnorderedList')">
                                   
                                    <i class="fa-solid fa-list-ul" style="color: #000000;"></i>
                                </button>
                                    <button type="button" class="btn fw-bold" onclick="createList('insertOrderedList')">
                                 
                                    <i class="fa-solid fa-list-ol" style="color: #000000;"></i>
                                </button>

                                    </strong></label>
                                    <div class="form-floating">
                                        <!-- <textarea class="form-control" name="course_specifications" placeholder="Discuss Students about your course specifications" id="floatingTextarea2" style="height: 100px"></textarea> -->
                                    
                                    <div id="editor5" class="editor editor5 placeholder editor_limit_3 p-3" contenteditable="true" data-placeholder="
<strong>Sample Content</strong>
<br>
<br>
<li>First Launch Dashbaord</li>
<li>Manage Assets and other files init</li>
<li>Making goal for cover the course</li>
<li>Create Database</li>
<li>Manage links in the sidebar</li>
<li>Implement code of CRUD</li>
<li>Add Products into Database</li>
<li>Add Products Details</li>                                 
"></div>
<div class="editor_limit_3_error error-message" style="color: red; display: none;">Please enter at least 12 points.</div>
                                    <div id="editorErrorMessage" class="error-message">This field is required.</div>
                                    
                                    <input type="hidden" class="hiddenInput5" id="editorContent" name="course_specifications">

                                    </div>
                                    Plaese enter the short course outline for the students for their better understanding make sure that each point
                                    is a one liner
                            </div>
 
                        <!-- <a href="updatations/index.php?courses_id=" class="btn bg-primary text-light fw-bold p-1 mt-4 mb-5 me-4">Update Previous</a> -->

                        <button type="submit" style="background-color:black;" id="submitBtn" disabled class="btn fw-bold text-light mt-4 mb-5 disabled" name="requirements_submit">Submit & Next</button>
                     </div>
                    <!-- /.container-fluid -->
                </form>

                </div>
                <!-- End of Main Content -->

                <!-- Footer -->
                <footer class="sticky-footer bg-white">
                    <div class="container my-auto">
                        <div class="copyright text-center my-auto">
                            <span>Copyright &copy; Your Website 2021</span>
                        </div>
                    </div>
                </footer>
                <!-- End of Footer -->

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


function initializeEditor(editorClass, placeholderHTML, hiddenInputClass) {
    document.querySelectorAll(`.${editorClass}`).forEach(editor => {
        const hiddenInput = editor.parentElement.querySelector(`.${hiddenInputClass}`);

        const updatePlaceholder = () => {
            if (editor.textContent.trim() === '') {
                editor.innerHTML = placeholderHTML;
                editor.classList.add('placeholder');
            }
        };

        editor.addEventListener('focus', () => {
            if (editor.innerHTML === placeholderHTML) {
                editor.innerHTML = '';
                editor.classList.remove('placeholder');
            }
        });

        editor.addEventListener('blur', () => {
            if (editor.textContent.trim() === '') {
                editor.innerHTML = placeholderHTML;
                editor.classList.add('placeholder');
            }
            hiddenInput.value = editor.innerHTML === placeholderHTML ? '' : editor.innerHTML;
        });

        editor.addEventListener('input', () => {
            hiddenInput.value = editor.innerHTML;
        });

        // Initialize placeholder
        updatePlaceholder();
    });
}

// Initialize each editor
initializeEditor('editor1', `
<strong>Sample Content</strong>
<br>
<li>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Maiores,
 tempore? sit amet consectetur adipisicing elit. Sequi nesciunt repudiandae esse commodi dolorum
doloribus quos</li>
<li>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Maiores,
 tempore? sit amet consectetur adipisicing elit. Sequi nesciunt repudiandae esse commodi dolorum
doloribus quos</li>
<li>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Maiores,
 tempore? sit amet consectetur adipisicing elit. Sequi nesciunt repudiandae esse commodi dolorum
doloribus quos</li>
<li>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Maiores,
 tempore? sit amet consectetur adipisicing elit. Sequi nesciunt repudiandae esse commodi dolorum
doloribus quos</li>
<li>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Maiores,
 tempore? sit amet consectetur adipisicing elit. Sequi nesciunt repudiandae esse commodi dolorum
doloribus quos</li>
<br>
`, 'hiddenInput1');

initializeEditor('editor2', `
<strong>Sample Content</strong>
<br>
<li>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Maiores,
 tempore? sit amet consectetur adipisicing elit. Sequi nesciunt repudiandae esse commodi dolorum
doloribus quos</li>
<li>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Maiores,
 tempore? sit amet consectetur adipisicing elit. Sequi nesciunt repudiandae esse commodi dolorum
doloribus quos</li>

`, 'hiddenInput2');

initializeEditor('editor3', `
<strong>Sample Content</strong>
<br>
<li>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Maiores,
tempore? sit amet consectetur adipisicing elit. Sequi nesciunt repudiandae
esse commodi dolorum doloribus quos nemo sit eius mollitia numquam iure nihil,
explicabo illo ipsum at eum libero labore impedit voluptates voluptatibus consequuntur
omnis fugiat consequatur! Quas consequatur
</li>
<br>
<li>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Maiores,
tempore? sit amet consectetur adipisicing elit. Sequi nesciunt repudiandae
esse commodi dolorum doloribus quos nemo sit eius mollitia numquam iure nihil,
explicabo illo ipsum at eum libero labore impedit voluptates voluptatibus consequuntur
omnis fugiat consequatur! Quas consequatur
</li>
<br>
<li>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Maiores,
tempore? sit amet consectetur adipisicing elit. Sequi nesciunt repudiandae
esse commodi dolorum doloribus quos nemo sit eius mollitia numquam iure nihil,
explicabo illo ipsum at eum libero labore impedit voluptates voluptatibus consequuntur
omnis fugiat consequatur! Quas consequatur
</li>

`, 'hiddenInput3');
initializeEditor('editor4', `
<strong>Sample Content</strong>
<br>
<br>
<li>24/7 times Availability</li>
<li>24/7 times Availability</li>
<li>24/7 times Availability</li>
`, 'hiddenInput4');
initializeEditor('editor5', `
<strong>Sample Content</strong>
<br>
<br>
<li>First Launch Dashbaord</li>
<li>Manage Assets and other files init</li>
<li>Making goal for cover the course</li>
<li>Create Database</li>
<li>Manage links in the sidebar</li>
<li>Implement code of CRUD</li>
<li>Add Products into Database</li>
<li>Add Products Details</li> 
`, 'hiddenInput5');
</script>
<!-- --------------------------------------------------------------------------------------------------------------------------- -->

<script>
    function execCommand(command) {
        document.execCommand(command, false, null);
    }

    function createList(command) {
        document.execCommand(command, false, null);
    }

    // Function to strip HTML tags, normalize whitespace, and remove newlines
    function stripHTMLAndNormalize(html) {
        var tmp = document.createElement("DIV");
        tmp.innerHTML = html;
        var text = tmp.textContent || tmp.innerText || "";
        return text.replace(/\s+/g, ' ').trim(); // Normalize whitespace and remove newlines
    }

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


<!-- --------------------------------------------------------------------------------------------------------------------------------------------------------------------------- -->
<script>
        function createList(command) {
            document.execCommand(command);
        }

        document.querySelector('.editor_limit_0').addEventListener('input', function() {
            const editor = document.querySelector('.editor_limit_0');
            const errorMessage = document.querySelector('.editor_limit_0_error');
            const listItems = editor.getElementsByTagName('li');

            if (listItems.length < 7) {
                editor.classList.add('error');
                errorMessage.style.display = 'block';
            } else {
                editor.classList.remove('error');
                errorMessage.style.display = 'none';
            }
        });

        // document.querySelector('.editor_limit_1').addEventListener('input', function() {
        //     const editor = document.querySelector('.editor_limit_1');
        //     const errorMessage = document.querySelector('.editor_limit_1_error');
        //     const listItems = editor.getElementsByTagName('li');

        //     if (listItems.length < 2) {
        //         editor.classList.add('error');
        //         errorMessage.style.display = 'block';
        //     } else {
        //         editor.classList.remove('error');
        //         errorMessage.style.display = 'none';
        //     }
        // });

//         document.querySelector('.editor_limit_1').addEventListener('input', function() {
//     const editor = document.querySelector('.editor_limit_1');
//     const errorMessage = document.querySelector('.editor_limit_1_error');
//     const listItems = editor.getElementsByTagName('li');

//     // Existing validation: Check if there are less than 2 list items
//     if (listItems.length < 2) {
//         editor.classList.add('error');
//         errorMessage.style.display = 'block';
//     } else {
//         editor.classList.remove('error');
//         errorMessage.style.display = 'none';
//     }

//     // New validation: Check if there are 2 or more list items
//     if (listItems.length >= 3) {
//         // Prevent further input
//         const selection = window.getSelection();
//         const range = document.createRange();
//         range.selectNodeContents(editor);
//         range.collapse(false); // Move cursor to end
//         selection.removeAllRanges();
//         selection.addRange(range);

//         // Prevent pasting
//         editor.onpaste = function(e) {
//             e.preventDefault();
//         };

//         // Prevent new input except for deletion and navigation keys
//         editor.onkeydown = function(e) {
//             const allowedKeys = ['Backspace', 'Delete', 'ArrowLeft', 'ArrowRight'];
//             if (!allowedKeys.includes(e.key)) {
//                 e.preventDefault();
//                 errorMessage.style.display = 'block';
//                 errorMessage.textContent = 'You are exceeding your points limit.';
//             }
//         };
//     } else {
//         // Allow input and pasting if less than 2 list items
//         editor.onpaste = null;
//         editor.onkeydown = null;
//     }
// });


document.querySelector('.editor_limit_1').addEventListener('input', function() {
    const editor = document.querySelector('.editor_limit_1');
    const errorMessage = document.querySelector('.editor_limit_1_error');
    const listItems = editor.getElementsByTagName('li');

    // Existing validation: Check if there are less than 2 list items
    if (listItems.length < 2) {
        editor.classList.add('error');
        errorMessage.style.display = 'block';
        errorMessage.textContent = 'You need to add at least 2 points.';
    } else {
        editor.classList.remove('error');
        errorMessage.style.display = 'none';
    }

    // New validation: Check if there are 2 or more list items
    if (listItems.length > 2) {
        // Prevent further input
        const selection = window.getSelection();
        const range = document.createRange();
        range.selectNodeContents(editor);
        range.collapse(false); // Move cursor to end
        selection.removeAllRanges();
        selection.addRange(range);

        // Prevent pasting
        editor.onpaste = function(e) {
            e.preventDefault();
        };

        // Prevent new input except for deletion and navigation keys
        editor.onkeydown = function(e) {
            const allowedKeys = ['Backspace', 'Delete', 'ArrowLeft', 'ArrowRight'];
            if (!allowedKeys.includes(e.key)) {
                e.preventDefault();
                errorMessage.style.display = 'block';
                errorMessage.textContent = 'You are exceeding your points limit.';
            }
        };
    } else {
        // Allow input and pasting if less than 2 list items
        editor.onpaste = null;
        editor.onkeydown = null;
    }
});


        document.querySelector('.editor_limit_2').addEventListener('input', function() {
            const editor = document.querySelector('.editor_limit_2');
            const errorMessage = document.querySelector('.editor_limit_2_error');
            const listItems = editor.getElementsByTagName('li');

            if (listItems.length < 5) {
                editor.classList.add('error');
                errorMessage.style.display = 'block';
            } else {
                editor.classList.remove('error');
                errorMessage.style.display = 'none';
            }
        });

        document.querySelector('.editor_limit_3').addEventListener('input', function() {
            const editor = document.querySelector('.editor_limit_3');
            const errorMessage = document.querySelector('.editor_limit_3_error');
            const listItems = editor.getElementsByTagName('li');

            if (listItems.length < 10) {
                editor.classList.add('error');
                errorMessage.style.display = 'block';
            } else {
                editor.classList.remove('error');
                errorMessage.style.display = 'none';
            }
        });

    
    </script>

    <!-- Bootstrap core JavaScript-->
    
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


