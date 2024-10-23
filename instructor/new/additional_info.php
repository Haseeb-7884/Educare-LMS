<?php 
include('../../back.php');
$coruse_id = $_GET['courses_id'];
$requirments_id = $_GET['requirments_id'];
$section_id = $_GET['section_id'];
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

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

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
        .editor_limit_0 {
            font-family: Arial, sans-serif;
            font-size: 14px;
            line-height: 1.5;
            width: 100%;
            box-sizing: border-box;
        }
.error-message {
            color: red;
            display: none;
        }
.disabled {
            background-color: gray;
            cursor: not-allowed;
        }
 .error {
            border-color: red;
        }

.editor_limit_0 strong {
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

                <li class="nav-item fw-bold" style="opacity: 0.5;">
                    <a class="nav-link collapsed" href="index.php" style="pointer-events: none;">
                        <i class="fas fa-fw fa-cog" style=""></i>
                        <span>course landing page</span>
                    </a>
                </li>

                <li class="nav-item fw-bold" style="opacity: 0.5;">
                    <a class="nav-link collapsed" href="record_detail.php" style="pointer-events: none;">
                        <i class="fas fa-fw fa-wrench" style=""></i>
                        <span>
                        course content
                        </span>
                    </a>

                </li>

                <li class="nav-item fw-bold" style="opacity: 0.5;">
                    <a class="nav-link collapsed" href="cource_curriculam.php" style="pointer-events: none;">
                        <i class="fas fa-fw fa-chart-area" style=""></i>
                        <span>
                            setup $ test video
                        </span>
                    </a>
                </li>

                <li class="nav-item fw-bold" style="opacity: 0.5;">
                    <a class="nav-link" href="" style="pointer-events: none;">
                    <i class="fas fa-fw fa-folder" style=""></i>
                        <span>
                           Assingments & Quizzes
                        </span></a>
                </li>

                <li class="nav-item fw-bold" style="opacity: 0.5;">
                    <a class="nav-link" href="course_price.php" style="pointer-events: none;">
                        <i class="fas fa-fw fa-table" style=""></i>
                        <span >
                            pricing
                        </span></a>
                </li>

                <li class="nav-item fw-bold active">
                    <a class="nav-link" href="additional_info.php">
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
                            Course Additional information
                            </h1>
                        </div>

                        <!-- content goes here written in inside dashboard section  -->

                        <hr>

                        <p class="mt-5 text-dark">
                        Last here fill out the Additional Informarmation about the course and fill the each section 
                        </p>
                        
                        <hr>

                        <form action="additional_submit.php" method="post">

                        <input type="hidden" name="courses_id" value="<?=  $coruse_id ?>" placeholder="<?=  $coruse_id ?>">
                        <input type="hidden" name="requirments_id" value="<?=  $requirments_id ?>" placeholder="<?=  $requirments_id ?>">
                        <input type="hidden" name="section_id" value="<?=  $section_id ?>" placeholder="<?=  $section_id ?>">

                        <div class="mb-3 text-dark">
                                <label class="form-label">
                                <strong class="text-dark d-block" style="font-size:20px">
                                Discuse about the prerequsites of this course <span class="text-danger">*</span>
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

                                    <div id="editor" class="editor placeholder editor_limit_0" contenteditable="true" data-placeholder="<p>Sample Content</p><ul><li>Comfortable with basic computer operations and internet usage.</li><li>Familiarity with using modern web browsers like Chrome or Firefox.</li><li>Basic understanding of programming concepts and experience with any programming language.</li><li>Ability to use code editors such as Visual Studio Code or Sublime Text.</li><li>Logical approach to problem-solving.</li><li>Strong desire to learn web development and commit time to the course.</li></ul>"></div>

                                    <div class="editor_limit_0_error error-message" style="color: red; display: none;">Please enter at least 5 points.</div>
                                    <div id="editorErrorMessage" class="error-message">This field is required.</div>

                                    <!-- Hidden input field to store editor content -->
                                    <input type="hidden" id="editorContent" name="course_prerequsites">

                                    </div>
                                   Discuss about the prerequsites of the course for better understanding of the students in bullet points

                                </div>

                                
                                    <div class=" mb-3 mt-5 text-dark">
                                <label class="form-label">
                                <strong class="text-dark d-block" style="font-size:20px">
                                Enter Some Masterpiece about the course <span class="text-danger">*</span>
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

                                    <div class="editor placeholder" contenteditable="true" 

                                    data-placeholder="<p>Sample Content</p><ul><li>Covers frontend, backend, database management, and deployment.</li>
<li>Build real-world applications for a robust portfolio.</li>
<li>Learn from industry professionals.</li>
<li>Access materials anytime, anywhere.</li>
<li>Get personalized resume, portfolio, and interview guidance.</li>
<li>Join a supportive network of learners and professionals.</li>
<li>Regular quizzes and assignments to test knowledge.</li>
<li>Stay updated with the latest tools and frameworks.</li>
<li>Learn CI/CD for scalable and maintainable applications.</li>
<li>Master agile project management techniques.</li></ul>"></div>

<div class="editor_limit_1_error error-message" style="color: red; display: none;">Please enter at least 5 points.</div>
<div id="editorErrorMessage" class="error-message">This field is required.</div>
                                    
                                    <input type="hidden" id="editorContent1" name="enterd_main">

                                    </div>
                                  

                                </div>

                                <!-- </div> -->


                       
                                <!-- <div class="mb-3 border border-2 border-secondary ps-3 pe-3 pt-2 pb-3 text-dark bg-light"> -->

                                <strong class="text-dark d-block mb-2 mt-4 " style="font-size:20px">
                                Discuss about the Course cover planning the students should adopt <span class="text-danger">*</span></strong>

                                <div class="form-floating" >
                                    <textarea class="form-control" name="cover_planning" style="height:150px;" placeholder="Leave a comment here" id="floatingTextarea"></textarea>
                                    <label for="floatingTextarea">Sum up Your Taughts in 4 to 5 lines</label>
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

                                    <div id="editor1" class="editor" style="background-color:white;" contenteditable="true" placeholder="Start typing here..."></div>
                                    <!-- Hidden input field to store editor content -->
                                    <input type="hidden" id="editorContent1" style="background-color:white;" name="final_words">

                                    </div>
                                   Say Some Final words for the studets to grow up confidence in them about course
                                </div>


                                <strong class="text-dark d-block mb-2 mt-4 " style="font-size:20px">
                                Discuss about your future planings regarding students </strong>

                                <div class="form-floating" >
                                    <textarea class="form-control" name="instructor_planings" style="height:150px;" placeholder="Leave a comment here" id="floatingTextarea"></textarea>
                                    <label for="floatingTextarea">Your future plannings</label>
                                    Here Disucss about your future plannings and your goals for the students you willing to do 

                                </div>  

                                
                                <strong class="text-dark d-block mb-2 mt-4 " style="font-size:20px">
                                Make your final instructions for the students quries <span class="text-danger">*</span></strong>

                                <div class="form-floating" >
                                    <textarea class="form-control" required name="instructor_instructions" style="height:150px;" placeholder="Leave a comment here" id="floatingTextarea"></textarea>
                                    <label for="floatingTextarea">Instructions for the students</label>
                                    In last instruct the students in case of thier queries and Questions where they get guide
                                </div>                                


                                <!-- </div> -->

                                <button type="submit" style="background-color:black; font-weight: bold;" class="btn text-light mb-4 mt-4" name="info_submit">Final Course Submission</button>

                                </form>
                            <!-- file included here end -->
                    </div>
                    <!-- /.container-fluid -->
                
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

    <!-- Bootstrap core JavaScript-->

    
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


    document.querySelectorAll('.editor').forEach(editor => {
            const placeholderHTML = editor.getAttribute('data-placeholder');
            const hiddenInput = editor.nextElementSibling;

            editor.addEventListener('focus', function() {
                if (editor.innerHTML === placeholderHTML) {
                    editor.innerHTML = '';
                    editor.classList.remove('placeholder');
                }
            });

            editor.addEventListener('blur', function() {
                if (editor.textContent.trim() === '') {
                    editor.innerHTML = placeholderHTML;
                    editor.classList.add('placeholder');
                }
                hiddenInput.value = editor.innerHTML;
            });

            editor.addEventListener('input', function() {
                hiddenInput.value = editor.innerHTML;
            });

            // Initialize placeholder
            if (editor.textContent.trim() === '') {
                editor.innerHTML = placeholderHTML;
                editor.classList.add('placeholder');
            }
        });

        function createList(command) {
            document.execCommand(command, false, null);
        }


        function createList(command) {
            document.execCommand(command);
        }


        document.querySelector('.editor_limit_0').addEventListener('input', function() {
            const editor = document.querySelector('.editor_limit_0');
            const errorMessage = document.querySelector('.editor_limit_0_error');
            const listItems = editor.getElementsByTagName('li');

            if (listItems.length < 5) {
                editor.classList.add('error');
                errorMessage.style.display = 'block';
            } else {
                editor.classList.remove('error');
                errorMessage.style.display = 'none';
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




