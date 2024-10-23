<?php 
  include("../../back.php");
  if(isset($_SESSION['login']) && ($_SESSION['role'] == 1)){	
?>
<!DOCTYPE html>
<html lang="en">
    

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>INSTRUCTOR - Dashboard</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

<style>
  
</style>

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">
    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar" >

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="sidebar-brand-icon">
                    <i class="fas fa-chalkboard-teacher"></i>
                </div>
                <div class="sidebar-brand-text mx-3">INSTRUCTOR</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item fw-bold active">
                <a class="nav-link" href="index.php">
                <i class="far fa-window-restore"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" target="_blank" href="cources.php">
                <i class="fab fa-youtube"></i>  
                    Cources
                </a>
            </li>

                 <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item active">
                <a class="nav-link collapsed" href="A&Q.php">
                <i class="fab fa-youtube"></i>  
                <span> Assingments & Quizzes</span>
                </a>
            </li>


            <!-- Nav Item - Utilities Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="communication.php">
                   <i class="fas fa-comment-dots"></i>
                    <span style="color: ">Communication</span>
                </a>

            </li>

            <!-- <li class="nav-item">
                <a class="nav-link collapsed" href="performance.php">
                <i class="fas fa-signal"></i>
                    <span>performance</span>
                </a>
            </li> -->

            <!-- Nav Item - Charts -->
            <li class="nav-item">
                <a class="nav-link" href="tools.php">
                <i class="fas fa-fw fa-wrench"></i>
                    <span>Tools</span></a>
            </li>

            <!-- Nav Item - Tables -->
            <li class="nav-item">
                <a class="nav-link" href="resources.php">
                <i class="far fa-question-circle"></i>
                    <span>Resources</span></a>
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
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Search -->
                    <form
                        class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                        <div class="input-group">
                            <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..."
                                aria-label="Search" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="button">
                                    <i class="fas fa-search fa-sm"></i>
                                </button>
                            </div>
                        </div>
                    </form>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                                aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small"
                                            placeholder="Search for..." aria-label="Search"
                                            aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>

                        <!-- Nav Item - Alerts -->
                        <li class="nav-item dropdown no-arrow mx-1">
                            <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-bell fa-fw"></i>
                                <!-- Counter - Alerts -->
                                <span class="badge badge-danger badge-counter">3+</span>
                            </a>
                            <!-- Dropdown - Alerts -->
                            <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="alertsDropdown">
                                <h6 class="dropdown-header">
                                    Alerts Center
                                </h6>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-primary">
                                            <i class="fas fa-file-alt text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">December 12, 2019</div>
                                        <span class="font-weight-bold">A new monthly report is ready to download!</span>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-success">
                                            <i class="fas fa-donate text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">December 7, 2019</div>
                                        $290.29 has been deposited into your account!
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-warning">
                                            <i class="fas fa-exclamation-triangle text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">December 2, 2019</div>
                                        Spending Alert: We've noticed unusually high spending for your account.
                                    </div>
                                </a>
                                <a class="dropdown-item text-center small text-gray-500" href="#">Show All Alerts</a>
                            </div>
                        </li>

<?php 
                                
                                $getStudent = new backend();

                                $logerID = $_SESSION['id'];

                                $getStudentDataMain = $getStudent->fetching("student_messages","*",null,"instructor_id = $logerID");
?>

                        <!-- Nav Item - Messages -->
                        <li class="nav-item dropdown no-arrow mx-1">
                            <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-envelope fa-fw"></i>
                                <!-- Counter - Messages -->
                                <span class="badge badge-danger badge-counter"><?php
                                   if(!empty($getStudentDataMain)){
                                    $numberOfRecords = count($getStudentDataMain);   
                                    echo $numberOfRecords;
                                }else{
                                    echo null;
                                }
                                ?></span>
                            </a>


                            <!-- Dropdown - Messages -->
                            <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="messagesDropdown">
                                <h6 class="dropdown-header">
                                    Incomming Messages From Students
                                </h6>
    <?php 
                                if(!empty($getStudentDataMain)){

                                $getStudentData = array_slice($getStudentDataMain, 0, 6);

                                if(!empty($getStudentData)){
                                    foreach($getStudentData as $StuData){
                                        $student_id = $StuData['student_id'];
                                        $message_title = $StuData['message_title'];
                                        $message_body = $StuData['message_body'];
                                        $message_inquery = $StuData['message_inquery'];
                                        $instructor_id  = $StuData['instructor_id'];

                                        // echo   $student_id;

                                    $getStudentInfo = $getStudent->fetching("student","*",null,"registration_id = $student_id");     
?>





<?php 
                                    if(!empty($getStudentInfo)){
                                        foreach($getStudentInfo as $StudentAllData){
                                           $sfname = $StudentAllData['sfname'];
                                           $slname = $StudentAllData['slname'];
                                           $student_img = $StudentAllData['student_img'];

                                           $StudentFullName = $sfname." ".$slname;
// echo $StudentFullName;
                       
?>

<a class="dropdown-item d-flex align-items-center" href="#">
    <div class="dropdown-list-image mr-3">
        <img class="rounded-circle" src="../../<?php 

        if (substr($student_img, 0, 3) === '../') {
            // Remove the first two characters
            $student_img = substr($student_img, 3);
            echo $student_img;
        }else{
            echo $student_img;
        }
         ?>"
            alt="...">
        <div class="status-indicator bg-success"></div>
    </div>
    <div class="font-weight-bold">
        <div class="text-truncate">
            <?=$message_body?>
        </div>
        <div class="small text-gray-500"><?= $StudentFullName;?> · 58m</div>
    </div>
    </a>


<?php 

} // inner loops of studentInfo ends
} // if condition of studentInfo ends
else{
    echo null;
} // ifs else part condition of studentInfo ends

   }// loops ends here
                                } // first if ends here 
                                else{
                                    echo "No data found as a Message";
                                } // first if else part ends here 

                            }else{
        echo "<strong class='container mx-auto'>No Message Found</strong>";
                            } // outer else ends 

                                ?>

                               
                                <a class="dropdown-item text-center small text-gray-500" href="#">Read More Messages</a>
                            
                            </div>
                        </li>

                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">

                        <?php 
                        if (isset($_SESSION['id'])) {
                            $login_id = $_SESSION['id'];
                            $loginObject = new backend();
                            $login_data = $loginObject->fetching('instructor', '*', null, "registration_id = '$login_id'");
                            if ($login_data){
                                foreach ($login_data as $final_data) {
                                    $fname = $final_data['fname'];
                                    $instructor_img = $final_data['instructor_img'];
                                    ?>
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-500 small"><?= $fname ?></span>
                                <img class="img-profile rounded-circle"
                                    src="../../<?= $instructor_img ?>">  
                            </a> 
                                    <?php
                                } // for loop
                            }    // if end
                            else{
                                ?>
                        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-500 small">Mr Instructor</span>
                                <img class="img-profile rounded-circle"
                                    src="../../assets/images/profike-pic.png">  
                            </a>
                                <?php }// else end  
                         } ?>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="profile.php">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Profile
                                </a>
                                <a class="dropdown-item" href="edit_profile.php">
                                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Profile Settings
                                </a>
                                <a class="dropdown-item" target="_blank" href="http://localhost/PHP-OOP/PROJECT/index.php">
                                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Go to website
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="delete.php">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <!-- <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
                        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
                            <strong>Welcome</strong></a>
                    </div> -->

                    <!-- content goes here written in inside dashboard section  -->
<?php
if (isset($_SESSION['id'])) {
    $login_id = $_SESSION['id'];

    // Assuming backend() is a class or function to interact with the backend
    $loginObject = new backend();

    $login_data = $loginObject->fetching('instructor', 'instructor_id', null, "registration_id = '$login_id'");

    if (!empty($login_data)) {
        foreach ($login_data as $final_data) {
            try {
                $instructor_id = $final_data['instructor_id'];
                // echo $instructor_id;

                $cources_data = $loginObject->fetching('cource', '*', null, "instructor_id = '$instructor_id'");

                // Check if the array is not empty before entering the loop
                if (!empty($cources_data)) {
                   
                        // Your loop logic here
?>
                   <div class="container p-4" style="background-color:#add8e6;">
                      <div class="positive-message">
                        <h2>
                            <!-- <i class="fas fa-check-circle"></i> -->
                            <i class="fa-solid fa-award"></i>
                             Access Your Courses!</h2>
                        <p>You can access the courses you've made by.
                        <a target="_blank" href="cources.php" class="fw-bold">Click here</a>
                        </p>
                      </div>
                    </div>
<?php
                  
                } else {
                    // Display a template message for no courses
                    ?>
                    <div class='container mt-4'>
                        <div class='alert alert-info' role='alert'>
                            <h4 class='alert-heading'>You don't have any courses yet!</h4>
                            <p>Please create a course to get started.</p>
                            <hr>
                            <p class='mb-0'>You can create a new course by clicking on the 'Create Course' button.</p>
                            <a href='../add_cource_title.php' class='btn btn-primary mt-3'>Create Course</a>
                        </div>
                    </div>
                    <?php
                }
            } catch (Exception $e) {
                echo "An error occurred: " . $e->getMessage();
            }
        }
    } else {
        // Display a template message for no instructor profile
        ?>
        <div class='container mt-4'>
            <div class='alert alert-danger' role='alert'>
                <h4 class='alert-heading'>Please complete your instructor profile!</h4>
                <p>You need to create your instructor profile before creating courses.</p>
                <hr>
                <p class='mb-0'>Click on the 'Edit Profile' button to complete your profile.</p>
                <a href='edit_profile.php' class='btn btn-danger fw-bold mt-3'>Edit Profile</a>
            </div>
        </div>
        <?php
    }
} else {
    echo "ID is not set.";
}
?>
            <?php include('../../instructor/dashboard/MainPage.php'); ?>
          

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
<?php
}else{
    header("location: linker.php");
  } 
?>