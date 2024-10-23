<!-- <?php 
  include("../back.php");
  if(isset($_SESSION['login']) && ($_SESSION['role'] == 2)){

?> -->
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Dashboard</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <style>

    </style>

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
    <link href="css/course1.css" rel="stylesheet">

</head>

<body id="page-top">
    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav sidebar sidebar-dark accordion" style="background-color: purple;" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">

                <div class="sidebar-brand-text mx-3">Welcome Admin</div>
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

            
            <li class="nav-item fw-bold">
                <a class="nav-link collapsed"  href="http://localhost/PHP-OOP/PROJECT/admin/user_management.php">
                    <i class="fas fa-comment-dots"></i>
                    <span>User Managment</span>
                </a>

            </li>

        
            <li class="nav-item fw-bold">
                <a class="nav-link collapsed" href="http://localhost/PHP-OOP/PROJECT/admin/course_management.php">
                    <i class="fas fa-signal"></i>
                    <span>Courses Managment</span>
                </a>
            </li>

            <!-- Nav Item - Charts -->
            <li class="nav-item fw-bold">
                <a class="nav-link" href="http://localhost/PHP-OOP/PROJECT/admin/communication_tools.php">
                    <i class="fas fa-fw fa-wrench"></i>
                    <span>Communication Tools</span></a>
            </li>

            <!-- Nav Item - Tables -->
            <li class="nav-item fw-bold">
                <a class="nav-link" href="http://localhost/PHP-OOP/PROJECT/admin/comments_feedbacks.php">
                    <i class="far fa-question-circle"></i>
                    <span>Comments & Feedbacks</span></a>
            </li>

            <!-- Nav Item - Tables -->
            <li class="nav-item fw-bold">
                <a class="nav-link" href="http://localhost/PHP-OOP/PROJECT/admin/payments.php">
                    <i class="far fa-question-circle"></i>
                    <span>Payments & Revenue</span></a>
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
                                <button class="btn" style="background-color: purple;" type="button">
                                    <i class="fas fa-search fa-sm" style="color: white;"></i>
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

                        <!-- Nav Item - Messages -->
                        <li class="nav-item dropdown no-arrow mx-1">
                            <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-envelope fa-fw"></i>
                                <!-- Counter - Messages -->
                                <span class="badge badge-danger badge-counter">7</span>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="messagesDropdown">
                                <h6 class="dropdown-header">
                                    Message Center
                                </h6>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="img/undraw_profile_1.svg" alt="...">
                                        <div class="status-indicator bg-success"></div>
                                    </div>
                                    <div class="font-weight-bold">
                                        <div class="text-truncate">Hi there! I am wondering if you can help me with a
                                            problem I've been having.</div>
                                        <div class="small text-gray-500">Emily Fowler · 58m</div>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="img/undraw_profile_2.svg" alt="...">
                                        <div class="status-indicator"></div>
                                    </div>
                                    <div>
                                        <div class="text-truncate">I have the photos that you ordered last month, how
                                            would you like them sent to you?</div>
                                        <div class="small text-gray-500">Jae Chun · 1d</div>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="img/undraw_profile_3.svg" alt="...">
                                        <div class="status-indicator bg-warning"></div>
                                    </div>
                                    <div>
                                        <div class="text-truncate">Last month's report looks great, I am very happy with
                                            the progress so far, keep up the good work!</div>
                                        <div class="small text-gray-500">Morgan Alvarez · 2d</div>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="https://source.unsplash.com/Mv9hjnEUHR4/60x60"
                                            alt="...">
                                        <div class="status-indicator bg-success"></div>
                                    </div>
                                    <div>
                                        <div class="text-truncate">Am I a good boy? The reason I ask is because someone
                                            told me that people say this to all dogs, even if they aren't good...</div>
                                        <div class="small text-gray-500">Chicken the Dog · 2w</div>
                                    </div>
                                </a>
                                <a class="dropdown-item text-center small text-gray-500" href="#">Read More Messages</a>
                            </div>
                        </li>

                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">

                        <?php 
                        $Admin_ID = $_SESSION['id'];
                        // echo $Admin_ID;
                    $AdminObject = new backend();
                    $Admindata = $AdminObject->fetching("instructor","*",null,"registration_id = $Admin_ID");
                    if($Admindata){

                        foreach($Admindata as $allAdminData){
                            $fname = $allAdminData['fname'];
                            $lname = $allAdminData['lname'];
                            $fullName2 = $fname . " " . $lname;
                            $instructor_img = $allAdminData['instructor_img'];
                            ?>
                             <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-500 small"><?= $fullName2 ?></span>
                                <img class="img-profile rounded-circle" src="../<?=$instructor_img?>">
                            </a>
                        <?php 
                    } // loop data
                    }else{
                        ?>
 <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-500 small">Mr Instructor</span>
                                <img class="img-profile rounded-circle" src="../../assets/images/profike-pic.png">
                            </a>
                        <?php 
                    }// else ends here?>

                           

                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="http://localhost/PHP-OOP/PROJECT/instructor/dashboard/profile.php">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Profile
                                </a>
                                <a class="dropdown-item" href="http://localhost/PHP-OOP/PROJECT/index.php">
                                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Go to Website
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="http://localhost/PHP-OOP/PROJECT/instructor/dashboard/delete.php">
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

                    <div class="container">

                        <div class="heading_container">
                            <h2>List of Courses</h2>
                        </div>
                        <!-- based on instructor starts -->
                        <p>Here filtered the result on basis of instructor</p>
                        <form action="index.php" mrthod="post" class="course_selection">
                            <div class="course_selection_first">
                                <?php 
                                $select_instructor = new backend();
                                $course_ins = $select_instructor->fetching('instructor');
                                ?>
                                <select class="form-select" style="width: 340px;" name='selected_option' id='selected_id'>
                                    <option selected disabled>Select the instructor you want courses</option>
                                    <!-- <option value="1">One</option> -->
                                 
                    <?php
                        foreach($course_ins as $SelectInstructor){ 
                            $instructor_id = $SelectInstructor['instructor_id'];
                            $fname = $SelectInstructor['fname']; 
                            $lname = $SelectInstructor['lname']; 
                            $fullName = $fname." ".$lname;
                            ?>
                            
                            <option value="<?= $instructor_id ?>"><?= $fullName ?></option>
                        
                        
                                <?php   }   ?>
                                </select>

                            </div>
                            <div class="course_selection_second">
                                <input type="submit" class="btn text-light fw-bold" value="Apply" style="background-color: purple;">
                            </div>
                        </form>
           <!-- based on instructor ends -->
                        <!-- based on category starts -->
                        <p>If want to filter the result on basis of category</p>
                        <form action="index.php" mrthod="post" class="course_selection">
                            <div class="course_selection_first">
                                <?php 
                                $course_cat = new  backend();
                                $CatSelection = $course_cat->fetching('cources_categories');
                                ?>
                                <select class="form-select" style="width: 340px;" name='selected_option_two' id='selected_id_two'>
                                    <option selected disabled>Select the desired category</option>
                                    <!-- <option value="1">One</option> -->
                                 
                    <?php
                        foreach($CatSelection as $SelectCat){ 
                            $category_id = $SelectCat['category_id'];
                            $category_name = $SelectCat['category_name'];
                          
                            ?>
                            
                            <option value="<?= $category_id ?>"><?= $category_name ?></option>
                        
                        
                                <?php   }   ?>
                                </select>

                            </div>
                            <div class="course_selection_second">
                                <input type="submit" class="btn text-light fw-bold" value="Apply" style="background-color: purple;">
                            </div>
                        </form>

                        <!-- based on category ends -->
                    
                        <table class="table">
                            <thead class="text-light" style="background-color:purple;">
                                <tr>
                                    <th scope="col">Sr No.</th>
                                    <th scope="col">course title</th>
                                    <th scope="col">instructor name</th>
                                    <th scope="col">course category</th>
                                    <th scope="col">submission date</th>
                                </tr>
                            </thead>
                            <tbody class="text-dark">
                            <?php 
                    if (isset($_GET['selected_option']))  {
                        $selected_option = $_GET['selected_option'];   
                        // echo $selected_option;   
                     

                        $course_data = $select_instructor->fetching('cource','*',null,"instructor_id = $selected_option");

                        if(!empty($course_data)){
                            foreach($course_data as $CoursesCurriculam){
                                $course_title = $CoursesCurriculam['course_title'];
                                $course_id = $CoursesCurriculam['courses_id'];
                                $select_category = $CoursesCurriculam['select_category'];


                                $course_data2 = $select_instructor->fetching('instructor','*',null,"instructor_id = $selected_option");
                                foreach($course_data2 as $instrutor_data2){
                                    $fname = $instrutor_data2['fname'];
                                    $lname = $instrutor_data2['lname'];
                                    $FullName = $fname . " " . $lname;
                                }

                                $course_data3 = $select_instructor->fetching('cources_categories','*',null,"category_id = $select_category");
                                foreach($course_data3 as $category_data3){
                                    $category_name = $category_data3['category_name'];
                                    $category_id = $category_data3['category_id'];
                                }

                                $course_data4 = $select_instructor->fetching('course_requirments','*',null,"courses_id = $course_id");
                                if(!empty($course_data4)){
                                    foreach($course_data4 as $category_data4){
                                        $last_updated = $category_data4['last_updated'];
                                } // loops ends here 
                                
                                }else{
                                  echo null;
                                }// else condition ends 

                                ?>
                                <tr>
                                <th >1</th>
                                <td>
                                    <?= $course_title ?>
                                </td>
                                <td><?= $FullName ?></td>
                                <td><?= $category_name ?></td>
                                <td><?= $last_updated ?></td>
                                
                                    <!-- <td class="btn mt-1 pt-1 pb-1 ps-3 pe-3 btn-primary bg-primary fw-bold">
                                        pending
                                    </td> -->
                                </tr>

                                <?php 

                            }
                        }else{
                            echo null;
                        }
                       

                    } elseif (isset($_GET['selected_option_two'])) {
                        
                        $selected_option_two = $_GET['selected_option_two']; 
                        
                        // echo $selected_option_two;

                        $course_data5 = $select_instructor->fetching("cource","*",null,"select_category = $selected_option_two");

                        if(!empty($course_data5)){
                            foreach($course_data5 as $CoursesCurriculam5){
                                $course_title = $CoursesCurriculam5['course_title'];
                                $course_id = $CoursesCurriculam5['courses_id'];
                                $select_category = $CoursesCurriculam5['select_category'];
                                $instructor_id = $CoursesCurriculam5['instructor_id'];


                                $course_data6 = $select_instructor->fetching('instructor','*',null,"instructor_id = $instructor_id");
                                foreach($course_data6 as $instrutor_data6){
                                    $fname = $instrutor_data6['fname'];
                                    $lname = $instrutor_data6['lname'];
                                    $FullName = $fname . " " . $lname;
                                }

                                $course_data7 = $select_instructor->fetching('cources_categories','*',null,"category_id = $select_category");
                                foreach($course_data7 as $category_data7){
                                    $category_name = $category_data7['category_name'];
                                    $category_id = $category_data7['category_id'];
                                }

                                $course_data_last = $select_instructor->fetching('course_requirments','*',null,"courses_id = $course_id");
                                if(!empty($course_data_last)){
                                    foreach($course_data_last as $category_data8){
                                        $last_updated = $category_data8['last_updated'];
                                        
                                } // loops ends here 
                                
                                }else{
                                  echo null;
                                }// else condition ends 

                                ?>
                                <tr>
                                <th >1</th>
                                <td>
                                    <?= $course_title ?>
                                </td>
                                <td><?= $FullName ?></td>
                                <td><?= $category_name ?></td>

                                <td><?= $last_updated ?></td>

                                    <!-- <td class="btn mt-1 pt-1 pb-1 ps-3 pe-3 btn-primary bg-primary fw-bold">
                                        pending
                                    </td> -->
                                </tr>

                                <?php 

                            }
                        }else{
                            echo "nothing found out";
                        }

                    }
                    else{
                        echo null;
                    }
                    ?>
                            
                                
                           
                            </tbody>
                        </table>


                    </div>

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
    header("location: log.php");
  } 
?>