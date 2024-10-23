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


    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

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
                        <i class="fas fa-fw fa-cog" style="color:black"></i>
                        <span style="color:black">course landing page</span>
                    </a>
                </li>

                <li class="nav-item fw-bold" style="opacity: 0.5;">
                    <a class="nav-link collapsed" href="record_detail.php" style="pointer-events: none;">
                        <i class="fas fa-fw fa-wrench" style="color:black"></i>
                        <span style="color:black">
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


                <li class="nav-item fw-bold active">
                    <a class="nav-link" href="quiz_assingment1.php">
                    <i class="fas fa-fw fa-folder" style="color:black"></i>
                        <span>
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
                        <!-- Page Heading -->
                        <div class="d-sm-flex align-items-center justify-content-start mb-4">
                            <h1 class="h3 mb-4 text-dark mt-5" style="font-weight:bold;font-size:30px;">
                           Assingments Section
                            </h1>
                            <?php 
                            $courses_id = $_GET['courses_id'];
                            $requirments_id = $_GET['requirments_id'];
                            $section_id = $_GET['section_id'];
                            // echo $courses_id . $requirments_id . $section_id;
                            ?>
                            <a href="course_price.php?courses_id=<?= $courses_id ?>&requirments_id=<?= $requirments_id?>&section_id=<?= $section_id?>" class="ms-5 mt-4 d-block fw-bold" style="font-size:19px;">(skip this section)</a>
                        </div>

                        <!-- content goes here written in inside dashboard section  -->

                        <hr>

                        <p class="mt-5 text-dark">Start putting together your course by creating sections, lectures and practice (quizzes, coding exercises and assignments).
                            Start putting together your course by creating sections, lectures and practice activities (quizzes, coding exercises and assignments). Use your course outline to structure your content and label your sections and lectures clearly. If you’re intending to offer your course for free,
                            the total length of video content must be less than 2 hours.</p>
                            <!-- file included here start -->

                            <?php
                            //  include ("builder/file2.php");  
                             ?>

                            
                               
                            <div class="mt-4">
                                <!-- <h4 class="text-dark fw-bold me-5" style="font-size:30px;">Add Sections Here</h4>
                                <p class="text-dark fw-bold">Add the section title here as given below</p> --> 

                               

                                <div class="text-light mt-4 mb-4" style="background-color:white;border-radius:5px;border: 2px solid #B12828;">
                                <h4 class="fw-bold p-3" style="background-color:#B12828;">Special Note for Assingment</h4>
                                
                                <ul class="text-dark fw-bold">
                                    <li class="ps-3 pe-3 pt-3 pb-3">
                                          Upload the Assingment file you want to upload or discuss any small Assessment related to topic
                                          Here you can select any 1 option you like
                                    </li>
                                    <li class="ps-3 pe-3">
                                          After Uploading the Assingment check for the dropdown given below where select any 1 option with you want to show the Assingment 
                                    </li>
                                </ul>
                                </div>

                                <form action="get_data1.php" method="post" enctype="multipart/form-data">

                                <input type="hidden" name="courses_id" value="<?=  $coruse_id ?>" placeholder="<?=  $coruse_id ?>">
                                <input type="hidden" name="requirments_id" value="<?=  $requirments_id ?>" placeholder="<?=  $requirments_id ?>">
                                <input type="hidden" name="section_id" value="<?=  $section_id ?>" placeholder="<?=  $section_id ?>">
                                
                               <div class="border border-2 border-secondary bg-light p-3 mb-4" >
                               <div class="mb-3 p-3 border border-2 border-secondary text-light" style="background-color:black;border-radius:5px">
                                    <label for="" class="form-label fw-bold text-dark"></label>
                                    <!-- <input type="text" class="form-control" name="section1" placeholder="Add 1st Section title here"> -->

                                    <h3 class="fw-bold text-light ms-3">Add Assingment from here</h3>

                                    <div class="ps-3 pe-3  pb-3 pt-3 text-light">
                                             <label for="" class="form-label fw-bold">Enter Assingment Title</label>
                                             <input type="text" class="form-control" name="assingment_title1" placeholder="Assingment name">
                                    </div>
                                    <div class="ps-3 pe-3  pb-3 pt-3 text-light">
                                             <label for="" class="form-label fw-bold">Upload Assingment File</label>
                                             <input type="file" class="form-control" name="assingment_file1" placeholder="">
                                    </div>
                                    <div class="ps-3 pe-3 pt-2 pb-3 text-light">
                                             <label for="" class="form-label fw-bold">Small Assessment For Learners</label>
                                             <textarea class="form-control"  rows="3" name="assesment1" placeholder=""></textarea>
                                             <p style="font-size:13px; margin-top:5px;"> <strong><u>Note</u></strong>
                                             Enter the desired section you want to attach for the Assingment</p>   
                                    </div>

                                    <div class="ps-3 pe-3 pt-2 pb-3 text-light">
                                             <label for="" class="form-label fw-bold">Enter desired section for Assingment</label>
                                             <input type="text" class="form-control" name="assingment_section_name1" placeholder="Enter Desired Section">
                                             <p style="font-size:13px; margin-top:5px;"> <strong><u>Note</u></strong>
                                             Enter the desired section you want to attach for the Assingment</p>        
                                    </div>

                                    <div class="ps-3 pe-3 pt-2 pb-3 text-light">
                                             <label for="" class="form-label fw-bold">Mention Assingment Deadline</label>
                                             <input type="date" class="form-control" name="assingment_deadline_01" placeholder="Enter Desired Section">
                                             <p style="font-size:13px; margin-top:5px;"> <strong><u>Note</u></strong>
                                             Mention the Assingment Date Whom Assingments have to be submitted by students</p>        
                                    </div>
                                 
                                </div>
                                <div class="mb-3 border border-2 border-secondary p-3 text-dark" style="background-color:black;border-radius:5px">
                                    <label for="" class="form-label fw-bold text-dark"></label>
                                    <!-- <input type="text" class="form-control" name="section1" placeholder="Add 1st Section title here"> -->

                                    <h3 class="fw-bold text-light ms-3">Add Assingment from here</h3>

                                    <div class="ps-3 pe-3  pb-3 pt-3 text-light">
                                             <label for="" class="form-label fw-bold">Enter Assingment Title</label>
                                             <input type="text" class="form-control" name="assingment_title2" placeholder="Assingment name">
                                    </div>
                                    <div class="ps-3 pe-3  pb-3 pt-3 text-light">
                                             <label for="" class="form-label fw-bold">Upload Assingment File</label>
                                             <input type="file" class="form-control" name="assingment_file2" placeholder="">
                                    </div>

                                    <div class="ps-3 pe-3 pt-2 pb-3 text-light bg">
                                             <label for="" class="form-label fw-bold">Small Assessment For Learners</label>
                                             <textarea class="form-control"  rows="3" name="assesment2" placeholder=""></textarea>
                                             <p style="font-size:13px; margin-top:5px;"> <strong><u>Note</u></strong>
                                             Enter Detials of Assingment Assessment Should Mention Assingments Requirements Also</p>  
                                    </div>

                                    <div class="ps-3 pe-3 pt-2 pb-3 text-light">
                                             <label for="" class="form-label fw-bold">Enter desired section for Assingment</label>
                                             <input type="text" class="form-control" name="assingment_section_name2" placeholder="Enter Desired Section">
                                             <p style="font-size:13px; margin-top:5px;"> <strong><u>Note</u></strong>
                                             Enter the desired section you want to attach for the Assingment</p>        
                                    </div>

                                    <div class="ps-3 pe-3 pt-2 pb-3 text-light">
                                             <label for="" class="form-label fw-bold">Mention Assingment Deadline</label>
                                             <input type="date" class="form-control" name="assingment_deadline_02" placeholder="Enter Desired Section">
                                             <p style="font-size:13px; margin-top:5px;"> <strong><u>Note</u></strong>
                                             Mention the Assingment Date Whom Assingments have to be submitted by students</p>        
                                    </div>
                                 
                                </div>
                                <div class="mb-3 border border-2 border-secondary p-3 text-dark" style="background-color:black;border-radius:5px">
                                    <label for="" class="form-label fw-bold text-dark"></label>
                                    <!-- <input type="text" class="form-control" name="section1" placeholder="Add 1st Section title here"> -->

                                    <h3 class="fw-bold text-light ms-3">Add Assingment from here</h3>

                                    <div class="ps-3 pe-3  pb-3 pt-3 text-light">
                                             <label for="" class="form-label fw-bold">Enter Assingment Title</label>
                                             <input type="text" class="form-control" name="assingment_title3" placeholder="Assingment name">
                                    </div>
                                    <div class="ps-3 pe-3  pb-3 pt-3 text-light">
                                             <label for="" class="form-label fw-bold">Upload Assingment File</label>
                                             <input type="file" class="form-control" name="assingment_file3" placeholder="">
                                             <p style="font-size:13px; margin-top:5px;"> <strong><u>Note</u></strong>
                                             Enter the desired section you want to attach for the Assingment</p>   
                                    </div>
                                    <div class="ps-3 pe-3 pt-2 pb-3 text-light">
                                             <label for="" class="form-label fw-bold">Small Assessment For Learners</label>
                                             <textarea class="form-control"  rows="3" name="assesment3" placeholder=""></textarea>
                                    </div>

                                    <div class="ps-3 pe-3 pt-2 pb-3 text-light">
                                             <label for="" class="form-label fw-bold">Mention Assingment Deadline</label>
                                             <input type="date" class="form-control" name="assingment_deadline_03" placeholder="Enter Desired Section">
                                             <p style="font-size:13px; margin-top:5px;"> <strong><u>Note</u></strong>
                                             Mention the Assingment Date Whom Assingments have to be submitted by students</p>        
                                    </div>

                                    <div class="ps-3 pe-3 pt-2 pb-3 text-light">
                                             <label for="" class="form-label fw-bold">Enter desired section for Assingment</label>
                                             <input type="text" class="form-control" name="assingment_section_name3" placeholder="Enter Desired Section">
                                             <p style="font-size:13px; margin-top:5px;"> <strong><u>Note</u></strong>
                                             Enter the desired section you want to attach for the Assingment</p>        
                                    </div>
                                 
                                </div>
                                <div class="mb-3 border border-2 border-secondary p-3 text-dark" style="background-color:black;border-radius:5px">
                                    <label for="" class="form-label fw-bold text-dark"></label>
                                    <!-- <input type="text" class="form-control" name="section1" placeholder="Add 1st Section title here"> -->

                                    <h3 class="fw-bold text-light ms-3">Add Assingment from here</h3>

                                    <div class="ps-3 pe-3  pb-3 pt-3 text-light">
                                             <label for="" class="form-label fw-bold">Enter Assingment Title</label>
                                             <input type="text" class="form-control" name="assingment_title4" placeholder="Assingment name">
                                    </div>
                                    <div class="ps-3 pe-3  pb-3 pt-3 text-light">
                                             <label for="" class="form-label fw-bold">Upload Assingment File</label>
                                             <input type="file" class="form-control" name="assingment_file4" placeholder="">
                                    </div>
                                    <div class="ps-3 pe-3 pt-2 pb-3 text-light">
                                             <label for="" class="form-label fw-bold">Small Assessment For Learners</label>
                                             <textarea class="form-control"  rows="3" name="assesment4" placeholder=""></textarea>
                                             <p style="font-size:13px; margin-top:5px;"> <strong><u>Note</u></strong>
                                             Enter the desired section you want to attach for the Assingment</p> 
                                    </div>

                                    <div class="ps-3 pe-3 pt-2 pb-3 text-light">
                                             <label for="" class="form-label fw-bold">Mention Assingment Deadline</label>
                                             <input type="date" class="form-control" name="assingment_deadline_04" placeholder="Enter Desired Section">
                                             <p style="font-size:13px; margin-top:5px;"> <strong><u>Note</u></strong>
                                             Mention the Assingment Date Whom Assingments have to be submitted by students</p>        
                                    </div>

                                    <div class="ps-3 pe-3 pt-2 pb-3 text-light">
                                             <label for="" class="form-label fw-bold">Enter desired section for Assingment</label>
                                             <input type="text" class="form-control" name="assingment_section_name4" placeholder="Enter Desired Section">
                                             <p style="font-size:13px; margin-top:5px;"> <strong><u>Note</u></strong>
                                             Enter the desired section you want to attach for the Assingment</p>        
                                    </div>
                                 
                                </div>
                                <div class="mb-3 border border-2 border-secondary p-3 text-dark" style="background-color:black;border-radius:5px">
                                    <label for="" class="form-label fw-bold text-dark"></label>
                                    <!-- <input type="text" class="form-control" name="section1" placeholder="Add 1st Section title here"> -->

                                    <h3 class="fw-bold text-light ms-3">Add Assingment from here</h3>

                                    <div class="ps-3 pe-3  pb-3 pt-3 text-light">
                                             <label for="" class="form-label fw-bold">Enter Assingment Title</label>
                                             <input type="text" class="form-control" name="assingment_title5" placeholder="Assingment name">
                                    </div>
                                    <div class="ps-3 pe-3  pb-3 pt-3 text-light">
                                             <label for="" class="form-label fw-bold">Upload Assingment File</label>
                                             <input type="file" class="form-control" name="assingment_file5" placeholder="">
                                    </div>
                                    <div class="ps-3 pe-3 pt-2 pb-3 text-light">
                                             <label for="" class="form-label fw-bold">Small Assessment For Learners</label>
                                             <textarea class="form-control"  rows="3" name="assesment5" placeholder=""></textarea>
                                             <p style="font-size:13px; margin-top:5px;"> <strong><u>Note</u></strong>
                                             Enter the desired section you want to attach for the Assingment</p> 
                                    </div>

                                    <div class="ps-3 pe-3 pt-2 pb-3 text-light">
                                             <label for="" class="form-label fw-bold">Mention Assingment Deadline</label>
                                             <input type="date" class="form-control" name="assingment_deadline_05" placeholder="Enter Desired Section">
                                             <p style="font-size:13px; margin-top:5px;"> <strong><u>Note</u></strong>
                                             Mention the Assingment Date Whom Assingments have to be submitted by students</p>        
                                    </div>

                                    <div class="ps-3 pe-3 pt-2 pb-3 text-light">
                                             <label for="" class="form-label fw-bold">Enter desired section for Assingment</label>
                                             <input type="text" class="form-control" name="assingment_section_name5" placeholder="Enter Desired Section">
                                             <p style="font-size:13px; margin-top:5px;"> <strong><u>Note</u></strong>
                                             Enter the desired section you want to attach for the Assingment</p>        
                                    </div>
                                 
                                </div>
                               </div>

                    

                                    <!--  top  ---------------------------------    -->


                                 <!-- for submission button  -->
                            <div class="d-flex align-items-center justify-content-left">  
                                <div class="me-4">
                                <input type="submit" name="Content_Submit" value="Submit" class="btn btn-primary fw-bold">
    
                            </div>
                            </form>

                            </div>

                           
                                <!-- <div>
                                  <p class="fw-bold text-dark" style="font-size: 18px;padding-top:15px">Add more options
                                  <a href="" class="text-decoration-underline ms-2">Click Here</a>
                                  <input type="submit" name="extra_curriculam">
                                </p>
                                </div> -->
                            </div>
                              
                          

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




