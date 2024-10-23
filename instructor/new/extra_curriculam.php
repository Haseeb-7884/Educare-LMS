
<?php include('../../back.php');
if(isset($_POST['curriculam_submit']) && $_SERVER['REQUEST_METHOD'] === 'POST')
{

   $coruse_id = $_POST['coruse_id'];

    $course_detail = new backend();
    $get_course = $course_detail->insertion('cource',array());

   
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

                <li class="nav-item fw-bold">
                    <a class="nav-link collapsed" href="index.php">
                        <i class="fas fa-fw fa-cog" style="color:black"></i>
                        <span style="color:black">course landing page</span>
                    </a>
                </li>

                <li class="nav-item fw-bold">
                    <a class="nav-link collapsed" href="record_detail.php">
                        <i class="fas fa-fw fa-wrench" style="color:black"></i>
                        <span style="color:black">
                        course content
                        </span>
                    </a>

                </li>

                <li class="nav-item fw-bold active">
                    <a class="nav-link collapsed" href="cource_curriculam.php">
                        <span>
                        <!-- <i class="fas fa-fw fa-folder" style="color:black"></i> -->
                        <i class="fas fa-fw fa-chart-area" style="color:black"></i>
                            <!-- curriculam -->
                            setup $ test video
                        </span>
                    </a>
                </li>
<!-- 
                <li class="nav-item fw-bold active">
                    <a class="nav-link" href="">
                        <i class="fas fa-fw fa-chart-area" style="color:black"></i>
                        <span style="color:black">
                            
                        </span></a>
                </li> -->

                <li class="nav-item fw-bold">
                    <a class="nav-link" href="course_price.php">
                        <i class="fas fa-fw fa-table" style="color:black"></i>
                        <span style="color:black">
                            pricing
                        </span></a>
                </li>

                <li class="nav-item fw-bold">
                    <a class="nav-link" href="student_messages.php">
                        <i class="fas fa-fw fa-table" style="color:black"></i>
                        <span style="color:black">
                            course messages
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
                            Curriculam
                            </h1>
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

                            <form action="">
                               
                            <div class="mt-4">
                                <h4 class="text-dark fw-bold me-5" style="font-size:30px;">Add Sections Here</h4>
                                <p class="text-dark fw-bold">Add the section title here as given below</p>

                                <div class="text-light p-3 mt-4 mb-4" style="background-color:#B12828;border-radius:5px;">
                                <h5 class="fw-bold ">Note *</h5>
                                <p>
                                    Here on this page you are restricted to 5 sections to add in your curriculam at that particular time. To upload more sections 
                                    click on the button given below
                                    <hr>
                                   
                                 <p>for the normal user you can add upto 10 sections only to have more section, have to approve from the admin and change your profile to premium one</p>
                                

                                </p>
                                </div> 

                                <div class="mb-3 border border-2 border-secondary p-3 text-dark" style="background-color:white;">
                                    <label for="" class="form-label fw-bold text-dark">Add 1st Section here</label>
                                    <input type="email" class="form-control"  placeholder="Add 1st Section title here">

                                    <div class="ps-3 pe-3 pt-4 pb-3 text-dark">
                                             <label for="" class="form-label fw-bold">Upload lecture from local storage</label>
                                             <input type="file" class="form-control" width  placeholder="local storage">
                                    </div>
                                    <div class="ps-3 pe-3 pt-2 pb-3 text-dark">
                                             <label for="" class="form-label fw-bold">Paste the YouTube Video Link Here</label>
                                             <input type="text" class="form-control" width  placeholder="local storage">
                                    </div>
                                    <div class="ps-3 pe-3 pt-2 pb-2 text-dark">
                                             <label for="" class="form-label fw-bold">Upload Article Here</label>
                                             <input type="file" class="form-control" width  placeholder="local storage">
                                    </div>

                                </div>

                                <div class="mb-3 border border-2 border-secondary p-3 text-dark" style="background-color:white;">
                                    <label for="" class="form-label fw-bold text-dark">Add 2nd Section here</label>
                                    <input type="email" class="form-control"  placeholder="Add 1st Section title here">

                                    <div class="ps-3 pe-3 pt-4 pb-3 text-dark">
                                             <label for="" class="form-label fw-bold">Upload lecture from local storage</label>
                                             <input type="file" class="form-control" width  placeholder="local storage">
                                    </div>
                                    <div class="ps-3 pe-3 pt-2 pb-3 text-dark">
                                             <label for="" class="form-label fw-bold">Paste the YouTube Video Link Here</label>
                                             <input type="text" class="form-control" width  placeholder="local storage">
                                    </div>
                                    <div class="ps-3 pe-3 pt-2 pb-2 text-dark">
                                             <label for="" class="form-label fw-bold">Upload Article Here</label>
                                             <input type="file" class="form-control" width  placeholder="local storage">
                                    </div>

                                </div>


                                <div class="mb-3 border border-2 border-secondary p-3 text-dark" style="background-color:white;">
                                    <label for="" class="form-label fw-bold text-dark">Add 3rd Section here</label>
                                    <input type="email" class="form-control"  placeholder="Add 1st Section title here">

                                    <div class="ps-3 pe-3 pt-4 pb-3 text-dark">
                                             <label for="" class="form-label fw-bold">Upload lecture from local storage</label>
                                             <input type="file" class="form-control" width  placeholder="local storage">
                                    </div>
                                    <div class="ps-3 pe-3 pt-2 pb-3 text-dark">
                                             <label for="" class="form-label fw-bold">Paste the YouTube Video Link Here</label>
                                             <input type="text" class="form-control" width  placeholder="local storage">
                                    </div>
                                    <div class="ps-3 pe-3 pt-2 pb-2 text-dark">
                                             <label for="" class="form-label fw-bold">Upload Article Here</label>
                                             <input type="file" class="form-control" width  placeholder="local storage">
                                    </div>

                                </div>

                                <div class="mb-3 border border-2 border-secondary p-3 text-dark" style="background-color:white;">
                                    <label for="" class="form-label fw-bold text-dark">Add 4rth Section here</label>
                                    <input type="email" class="form-control"  placeholder="Add 1st Section title here">

                                    <div class="ps-3 pe-3 pt-4 pb-3 text-dark">
                                             <label for="" class="form-label fw-bold">Upload lecture from local storage</label>
                                             <input type="file" class="form-control" width  placeholder="local storage">
                                    </div>
                                    <div class="ps-3 pe-3 pt-2 pb-3 text-dark">
                                             <label for="" class="form-label fw-bold">Paste the YouTube Video Link Here</label>
                                             <input type="text" class="form-control" width  placeholder="local storage">
                                    </div>
                                    <div class="ps-3 pe-3 pt-2 pb-2 text-dark">
                                             <label for="" class="form-label fw-bold">Upload Article Here</label>
                                             <input type="file" class="form-control" width  placeholder="local storage">
                                    </div>

                                </div>

                                <div class="mb-3 border border-2 border-secondary p-3 text-dark" style="background-color:white;">
                                    <label for="" class="form-label fw-bold text-dark">Add 5th Section here</label>
                                    <input type="email" class="form-control"  placeholder="Add 1st Section title here">

                                    <div class="ps-3 pe-3 pt-4 pb-3 text-dark">
                                             <label for="" class="form-label fw-bold">Upload lecture from local storage</label>
                                             <input type="file" class="form-control" width  placeholder="local storage">
                                    </div>
                                    <div class="ps-3 pe-3 pt-2 pb-3 text-dark">
                                             <label for="" class="form-label fw-bold">Paste the YouTube Video Link Here</label>
                                             <input type="text" class="form-control" width  placeholder="local storage">
                                    </div>
                                    <div class="ps-3 pe-3 pt-2 pb-2 text-dark">
                                             <label for="" class="form-label fw-bold">Upload Article Here</label>
                                             <input type="file" class="form-control" width  placeholder="local storage">
                                    </div>

                                </div>

                            </div>

                            <!-- for submission button  -->
                            <div class="d-flex align-items-center justify-content-left">  
                                <div class="me-4">
                                <input type="submit" name="curriculam_submit" value="Submit Info" class="btn btn-primary fw-bold">
                                </div>
                                <div>
                                  <p class="fw-bold text-dark" style="font-size: 18px;padding-top:15px">Add more options<a href="" class="text-decoration-underline ms-2">Click Here</a></p>
                                </div>
                            </div>
                              
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


