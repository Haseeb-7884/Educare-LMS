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
        #submitBtn{
            /* display:none; */
            /* background-color: blue;    */
            font-weight:bold;
            color:white;
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

                <li class="nav-item fw-bold">
                    <a class="nav-link collapsed" href="index.php">
                        <i class="fas fa-fw fa-cog" style="color:black"></i>
                        <span style="color:black">course landing page</span>
                    </a>
                </li>

                <li class="nav-item fw-bold" style="opacity:0.5">
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

                <li class="nav-item fw-bold" style="opacity: 0.5;">
                    <a class="nav-link" href="quiz_assingment1.php" style="pointer-events: none;">
                        <i class="fas fa-fw fa-chart-area" style="color:black"></i>
                        <span style="color:black">
                        Assingments
                        </span></a>
                </li>

                <li class="nav-item fw-bold active">
                    <a class="nav-link" href="course_price.php">
                        <i class="fas fa-fw fa-table" style="color:black"></i>
                        <span style="black;">
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
                            Set Course Price
                            </h1>
                        </div>

                        <!-- content goes here written in inside dashboard section  -->

                        <hr>

                        <p class="mt-5 text-dark">
                        Unlock the power of pricing for your course creation journey. Dive into our guidance to discover the perfect price point. Settle on a rate that resonates with your course's value and attracts eager learners. Your course's success begins with the right price – let's find it together
                        </p>
                            <!-- file included here start -->

                            <?php
                            //  include ("builder/file2.php");  
                             ?>

                            
                               
                            <div class="mt-4">
                                <!-- <h4 class="text-dark fw-bold me-5" style="font-size:30px;">Add Sections Here</h4>
                                <p class="text-dark fw-bold">Add the section title here as given below</p> --> 


                                <form action="get-price.php" id="myForm" method="post" enctype="multipart/form-data">

                                <input type="hidden" name="courses_id" value="<?=  $coruse_id ?>" placeholder="<?=  $coruse_id ?>">
                                <input type="hidden" name="requirments_id" value="<?=  $requirments_id ?>" placeholder="<?=  $requirments_id ?>">
                                <input type="hidden" name="section_id" value="<?=  $section_id ?>" placeholder="<?=  $section_id ?>">
                         
                                <?php 
                                $getting_data = new backend();
                                $get_data = $getting_data->fetching('cource','*',null,"courses_id = $coruse_id");
                                foreach($get_data as $course_data){
                                   $courses_id = $course_data['courses_id'];
                                   $course_heading = $course_data['course_title'];
                                   $instructor_id = $course_data['instructor_id'];
                                }
                                ?>

                                <div class="mb-3 border border-2 border-secondary p-3 text-dark" style="background-color:white;">
                                             <label for="" class="form-label fw-bold">Course Title</label>
                                             <input type="text" class="form-control" name="quiz_title" value="<?= $course_heading ?>" disabled placeholder="Quiz name">
                                </div>

                                <?php 
                                 $get_data_requirements = $getting_data->fetching('course_requirments','*',null,"requirments_id = $requirments_id");
                                 foreach($get_data_requirements as $requirment_data){
                                    $course_short_description = strip_tags($requirment_data['short_description']);
                                    // echo $course_short_description;
                                 }
                                ?>

                                <div class="mb-3 border border-2 border-secondary p-3 text-dark" style="background-color:white;">
                                             <label for="" class="form-label fw-bold">Course Short Description</label>
                                             <textarea class="form-control" disabled placeholder="<?= $course_short_description ?>" id="exampleFormControlTextarea1" rows="3"></textarea>
                                </div>

                                <?php 
                                 $get_data_instructor = $getting_data->fetching('instructor','*',null,"instructor_id = $instructor_id");
                                 foreach($get_data_instructor as $instructor_data){
                                    $fname = $instructor_data['fname'];
                                    $lname = $instructor_data['lname'];
                                 }
                                ?>

                                <div class="mb-3 border border-2 border-secondary pt-3 ps-3 pb-2 text-dark" style="background-color:white;">
                                             <label for="" class="form-label fw-bold">Created and developed by</label> <strong class="text-primary"><?= $fname ?> <?= $lname ?></strong>
                                </div>

                                <div class="mb-3 border border-2 border-secondary p-3 text-dark" style="background-color:white;">
                                <label for="" class="form-label fw-bold">Select Currency From Below</label>
                                <select class="form-select" name="currency" id="currency">

                                <option disabled selected>Select from the following</option>
                                <option value="PKR">Pakistani Ruppes - PKR</option>
                                </select>
                                </div>

                                
                                <div class="mb-3 pt-3  pb-2 text-dark" >
                                             <label for="" class="form-label fw-bold">
                                                Read the given Term & Conditions by downloading file here
                                             </label> <strong class="text-primary">
                                                <a href="data.php?file=data.pdf" class="text-decoration-underline">Term and conditions file</a>
                                             </strong>
                                </div>

                                <?php 
                                  $data = new backend();
                                  $get_data_2 = $data->fetching('cource','*',null,"courses_id = $coruse_id");
                                  foreach($get_data_2 as $course){
                                     $id_course = $course['courses_id'];
                                     $course_type = $course['course_type'];
                                    //  echo $course_type;
                                  
                                     if($course_type === 'Free'){
                                        ?>
                                        <div class="mb-3 border border-2 border-secondary p-3 text-dark" style="background-color:white;">
                                             <label for="" class="form-label fw-bold">Enter Course Price</label>
                                             <input type="text" class="form-control" name="course_price" readonly value="<?= $course_type?>">
                                        </div>
                                        <?php
                                     }else{
                                        ?>
                                        <div class="mb-3 border border-2 border-secondary p-3 text-dark" style="background-color:white;">
                                             <label for="" class="form-label fw-bold">Enter Course Price</label>
                                             <input type="text" class="form-control" name="course_price" placeholder="mention the course price here">
                                       </div>
                                        <?php
                                     }

                                  }
                                ?>

                                

                                <div class="form-check ms-2 mt-4 mb-4">

                                        <label for="" class="form-label fw-bold">
                                        
                                        </label>

                                            <label for="agreeCheckbox" class="form-check-label fw-bold text-dark">
                                            <input class="form-check-input" type="checkbox" value="" id="agreeCheckbox" onchange="toggleSubmit()">
                                               Agreed with the given Terms & Conditions
                                            </label>
                                            </div>
                                    <!--  top  ---------------------------------    -->



                                 <!-- for submission button  -->
                            <div class="d-flex align-items-center justify-content-left">  
                                <div class="me-4">
                                <input type="submit" name="price_submit" id="submitBtn" value="Submit" disabled class="btn btn-primary fw-bold">
    
                            </div>
                            </form>

                            </div>

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

    <script>
        function toggleSubmit(){
            var submitBtn = document.getElementById("submitBtn");
            var agreeCheckbox = document.getElementById("agreeCheckbox");

            submitBtn.disabled = !agreeCheckbox.checked;

            // submitBtn.style.display = agreeCheckbox.checked ? "block" : "none";
        }
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




