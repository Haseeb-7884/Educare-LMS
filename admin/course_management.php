<!-- <?php 
  include("../back.php");
  //   if(isset($_SESSION['login'])){
  
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

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
    <link href="css/course_preview.css" rel="stylesheet">



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
            <li class="nav-item fw-bold">
                <a class="nav-link" href="http://localhost/PHP-OOP/PROJECT/admin/index.php">
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

        
            <li class="nav-item fw-bold active">
                <a class="nav-link collapsed" href="http://localhost/PHP-OOP/PROJECT/admin/course_management.php">
                    <i class="fas fa-signal"></i>
                    <span >Courses Managment</span>
                </a>
            </li>

            <!-- Nav Item - Charts -->
            <li class="nav-item fw-bold">
                <a class="nav-link" href="http://localhost/PHP-OOP/PROJECT/admin/communication_tools.php">
                    <i class="fas fa-fw fa-wrench"></i>
                    <span>Communication Tools</span></a>
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
                                <a class="dropdown-item" href="profile.php">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Profile
                                </a>
                                <a class="dropdown-item" href="edit_profile.php">
                                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Profile Settings
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

                    <div class="container">


<ul class="nav nav-pills mb-5 d-flex justify-content-center align-items-center" style="gap: 40px;" id="pills-tab" role="tablist">

  <li class="nav-item" role="presentation">
    <button class="nav-link" style="background-color: purple; color: white;" onmouseover="this.style.backgroundColor='purple'; this.style.color='white';" onmouseout="this.style.backgroundColor=''; this.style.color='';" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">
Course Status
</button>
  </li>

  <li class="nav-item" role="presentation">
    <button class="nav-link" style="background-color: purple; color: white;" onmouseover="this.style.backgroundColor='purple'; this.style.color='white';" onmouseout="this.style.backgroundColor=''; this.style.color='';" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">
Course Preview
</button>
  </li>

  <li class="nav-item" role="presentation">
    <button class="nav-link" style="background-color: purple; color: white;" onmouseover="this.style.backgroundColor='purple'; this.style.color='white';" onmouseout="this.style.backgroundColor=''; this.style.color='';" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">
Course Enrollments
</button>
  </li>
  
</ul>


<div class="tab-content" id="pills-tabContent">


  <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
  
  <p> <strong style="color: black;">Select the category you whom to preview the courses</strong>
                        </p>
                        <form class="first_container" action="course_management.php" method="post">

                            <div class="first_container_first">

                           <?php
                            $course_cat = new  backend();
                            $CatSelection = $course_cat->fetching('cources_categories');
                            ?>

                            <select class="form-select" style="width: 340px;" name='selected_status' id='selected_status'>
                            <option selected disabled>Select the desired category</option>    
                    <?php
                        foreach($CatSelection as $SelectCat){ 
                            $category_id = $SelectCat['category_id'];
                            $category_name = $SelectCat['category_name'];
                    ?>
                            
                            <option value="<?= $category_id ?>"><?= $category_name ?></option>
                        
                        
                                <?php   }   ?>

                            </select> 

                            </div>
                            <div class="first_container_second">
                                <input type="submit" class="btn submit_btn" value="Apply" name="preview_submit">
                            </div>
                        </form>

                        <table class="table mt-5 ">
                            <thead class="table_head">
                              <tr>
                                <th scope="col">ID No.</th>
                                <th scope="col" class="text-center">Course Title</th>
                                <th scope="col">Main Category</th>
                                <th scope="col">Sub Category</th>
                                <th scope="col">Instructor</th>
                                <th scope="col">Last Updated</th>
                                <th scope="col" class="text-center">Status</th>
                              </tr>
                            </thead>
                            <tbody>
                            

                            
                            <?php 
                            $statusObject = new backend();
                            if (isset($_POST['preview_submit']))  {
                                $selected_status = $_POST['selected_status'];

                                if(!empty($selected_status)){
                                    // echo $selected_status;
                                    $fetchCourses = $statusObject->fetching("cource","*",null,"select_category = $selected_status");
                                    if(!empty($fetchCourses)){
                                        foreach($fetchCourses as $coursesData){
                                            $courses_id = $coursesData['courses_id'];
                                            $course_title = $coursesData['course_title'];
                                            $select_category = $coursesData['select_category'];
                                            $primary_taught = $coursesData['primary_taught']; 
                                            $instructor_id = $coursesData['instructor_id']; 



                                            $fetchInstructor = $statusObject->fetching("instructor","*",null,"instructor_id = $instructor_id");
                                            if(!empty($fetchInstructor)){
                                                foreach($fetchInstructor as $instructorData){
                                                    $fname = $instructorData['fname'];
                                                    $lname = $instructorData['lname'];
                                                    $fullName = $fname . " " . $lname;
                                                }
                                            }else{
                                                // echo "<p>Nothing course found</p>";
                                                echo null;
                                            }

                                            $fetchCategory = $statusObject->fetching("cources_categories","*",null,"category_id = $select_category");
                                            if(!empty($fetchCategory)){
                                                foreach($fetchCategory as $categoryData){
                                                    $category_name = $categoryData['category_name'];
                                                }
                                            }else{
                                                // echo "<p>Nothing course found</p>";
                                                echo null;
                                            }

                                          

                                            $fetchDate = $statusObject->fetching("course_requirments","*",null,"courses_id = $courses_id");
                                            if(!empty($fetchDate)){
                                                foreach($fetchDate as $dateData){
                                                    $record_time = $dateData['last_updated'];
                                                    if(!empty($record_time)){
                                                        $updatedTime = $record_time;
                                                    }else{
                                                        // echo "not provided";
                                                        echo null;
                                                    }
                                                }
                                            }else{
                                                // echo "<p>inside last loop Nothing course found</p>";
                                                echo null;
                                            }

                                            ?>
<tr>
                                <th><?=$courses_id?></th>
                                <td><?= $course_title?></td>
                                <td><?= $category_name?></td>
                                <td><?= $primary_taught?></td>
                                <td><?= $fullName?></td>
                                <td><?= $updatedTime ?></td>
                              
           
                                <td class="d-flex justify-content-center align-items-center last_data">
    <?php
    $fetchStatus = $statusObject->fetching("courses_status", "*", null, "courses_id = $courses_id");
    // Debugging: Echo out $fetchStatus to check its value
    // var_dump($fetchStatus);

    // Check if $fetchStatus is not empty and loop through the results
    if (!empty($fetchStatus)) {
        foreach ($fetchStatus as $statusData) {
            // Retrieve the 'courses_status' from $statusData
            $courses_status = $statusData['course_status']; // Corrected array key
            // Output the corresponding status based on its value
            if ($courses_status == 'Approved') {
                echo '<span class="btn mt-1 pt-1 pb-1 ps-3 pe-3 btn-success bg-success fw-bold">Approved</span>';
            } elseif ($courses_status == 'Declined') {
                echo '<span class="btn mt-1 pt-1 pb-1 ps-3 pe-3 btn-danger bg-danger fw-bold">Declined</span>';
            } elseif ($courses_status == 'Revision') {
               ?>
              <span class="btn mt-1 pt-1 pb-1 ps-3 pe-3 btn-danger bg-warning fw-bold">Revision</span>
               <a href="status_change.php?course_id=<?= $courses_id?>" class="btn fw-bold">Again change</a>
               <?php 
            } elseif ($courses_status == 'Pending') {
                ?>
                <span class="btn mt-1 pt-1 pb-1 ps-3 pe-3 btn-danger bg-primary fw-bold">Pending</span>
                 <a href="status_change.php?course_id=<?= $courses_id?>" class="btn fw-bold">Again change</a>
                 <?php 
            }
        }
    } else {
        // If no data found, display a link to change the status
        ?>
        <a href="status_support.php?courses_id=<?= $courses_id ?>" class="btn fw-bold text-primary text-decoration-underline">Change status</a>
    <?php
    }
    ?>
</td>

           
</tr>        

                                            <?php 

                                        } // first loop ends 
                                    }else{
                                        // echo "<p>last before Nothing course found</p>";
                                        echo null;
                                    }
                                  
                                }else{
                                     ?>
                                     <tr>
                                <td>
                                    <h2>Seach for the category dropdown to get courses</h2>
                                </td>
                                </tr> 
                                     <?php 
                                }
                                }
                                ?>
                        
                               
                            </tbody>

                          </table>


  </div>
  <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
  
  
  
  <p> <strong style="color: black;">Select the category you whom to preview the courses</strong>
                        </p>

                        <form class="first_container" action="" method="post">

                            <div class="first_container_first">
              <?php 
                                $course_cat = new  backend();
                                $CatSelection = $course_cat->fetching('cources_categories');
                                ?>
                                <select class="form-select" style="width: 340px;" name='option_two' id='option_two'>
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
                            <div class="first_container_second">
                                <input type="submit" class="btn submit_btn" value="Apply" name="previewSubmit">
                            </div>
                        </form>


                        <?php 
                        if(isset($_POST['option_two'])){

                            $option_two = $_POST['option_two'];

                            // echo $selected_option_two;
                         
                            if(!empty($option_two))
                            
                            $Myobj = new backend();

                            $get_categories = $Myobj->fetching("cource","*",null,"select_category = $option_two");

                            if(!empty($get_categories)){
                                foreach($get_categories as $CatData){
                                    $CatData['course_title'];
                                    $courses_id = $CatData['courses_id'];
                                    $course_title = $CatData['course_title']; 
                                    $course_img = $CatData['course_img']; 
                                    $course_video = $CatData['course_video']; 
                                    $instructor_id = $CatData['instructor_id']; 
                               

                            $get_instructor = $Myobj->fetching("instructor","*",null,"instructor_id = $instructor_id");

                            if(!empty($get_instructor)){

                                foreach($get_instructor as $InsData){
                                    $fname = $InsData['fname'];
                                    $lname = $InsData['lname'];
                                    $fullNameIns = $fname." ".$lname;
                                }

                            }else{
                                echo "Instructor not found";
                            }

                            $get_update = $Myobj->fetching("course_requirments","*",null,"courses_id = $courses_id");

                            if(!empty($get_update)){
                                foreach($get_update as $UpdateData){
                                    $last_updated = $UpdateData['last_updated']; 
                                    $updated_description = $UpdateData['short_description']; 
                                    $short_description  = strip_tags($updated_description);
                                }
                            }else{
                                echo "Update not found";
                            }

                            $get_price = $Myobj->fetching("course_prices","*",null,"courses_id = $courses_id");
                            if(!empty($get_price)){
                                foreach($get_price as $priceData){
                                     $course_price =  $priceData['course_price'];
                                    
                                }
                            }else{
                                echo "Price not found";
                            }

                            ?>

<div class="main_container d-flex justify-content-center align-items-center">
                            <div class="main_container_first">
                                <img src="../instructor/new/<?=$course_img?>" alt="">
                               
                                <div class="video_display" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                <i class="fas fa-play button-icon"></i>
                                </div>

                            </div>
                            <div class="main_container_second">
                                <div class="container_second_first">
                                    <h1><?= $course_title?></h1>
                                    <p>
                                     <?= $short_description ?>
                                    </p>
                                    <section>
                                        <i class="far fa-user d-block"> &nbsp; <?= $fullNameIns?>&nbsp;
                                        <!-- <strong>(instructor)</strong> -->
                                    </i>
                                        <i class="far fa-clock d-block">&nbsp;<strong>last updated:</strong> <?= $last_updated?></i>
                                        <?php 
                                        if($course_price != 'Free'){
                                            ?>
                                        <i class="fas fa-tag">&nbsp;<?=$course_price ?> <strong>pkr</strong></i>;
                                            <?php 
                                        }else{
                                            ?>
                                        <i class="fas fa-tag">&nbsp;<strong><?=$course_price?></strong></i> ;
                                            <?php 
                                        }
                                        ?>
                                    </section>
                                    <a target="_blank" href="http://localhost/PHP-OOP/PROJECT/student/section/index.php?course_id=<?= $courses_id?>" class="btn preview_btn">preview course</a>
                                </div>

                            </div>
                        </div>


                            <?php 
                             } // first loop ends 
                            }else{
                                echo "
                                <div class='d-flex justify-content-center align-items-center'>
                            <h1>Browse the courses from the above to preview</h1>
                                </div>
                                ";
                            } // first ifs else part ends here 

                        }else{
                            echo null;
                        }
                        ?>

                      

  


  </div>
  
<div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
  




<table class="table mt-5 ">
                            <thead class="table_head" style="background-color:purple; color:white !important;">
                              <tr>
                                <th scope="col">ID No.</th>
                                <th scope="col" class="text-center">Course Title</th>
                                <th scope="col">Main Category</th>
                                <th scope="col">Instructor</th>
                                <th scope="col" class="text-center">No of Enrollments</th>
                              </tr>
                            </thead>
                            <tbody>
                            
<?php 

$CoursesEnrollments = new backend();

$getStatus = $CoursesEnrollments->fetching("courses_status","*",null,null);

// echo "Sttart is okay";

if(!empty($getStatus)){
    foreach($getStatus as $StatusData){
        $course_status = $StatusData['course_status'];
        // echo "Status Workking good";
        if($course_status == 'Approved'){
            $approved_courses_id = $StatusData['courses_id'];

            // echo "Approved Courses".$approved_courses_id;

            $getCourses = $CoursesEnrollments->fetching("cource","*",null,"courses_id = $approved_courses_id");

            if(!empty($getCourses)){

                foreach($getCourses as $Courses_data){
                    $course_title_approved = $Courses_data['course_title'];
                    $select_category_approved = $Courses_data['select_category'];
                    $instructor_id_approved = $Courses_data['instructor_id'];
                }

                $getCategory = $CoursesEnrollments->fetching("cources_categories","*",null,"category_id = $select_category_approved");

                if(!empty($getCategory)){

                    foreach($getCategory as $CategoryData){
                        $category_name_approved = $CategoryData['category_name'];
                    }

                }else{
                    echo "Category Not found";
                }

                // echo  $instructor_id_approved;

                $getInstructor = $CoursesEnrollments->fetching("instructor","*",null,"instructor_id =  $instructor_id_approved");

                if(!empty($getInstructor)){

                    foreach($getInstructor as $InstructorData){
                        $fname_approved = $InstructorData['fname'];
                        $lname_approved = $InstructorData['lname'];

                        $getFullName = $fname_approved ." ". $lname_approved;
                    }

                }else{
                    echo "Instructor Not found";
                }

                $getEnrollments = $CoursesEnrollments->fetching("enrollments","*",null,"courses_id =  $approved_courses_id");

                if(!empty($getEnrollments)){

                    $totalRecords = count($getEnrollments);
                    
                }else{
                    echo null;
                }

            }else{
                echo "Courses not found";
            }

?>
   <tr>
<td class="text-center"><?=$approved_courses_id?></td>
<td class="text-center"><?=$course_title_approved?></td>
<td><?=$category_name_approved?></td>
<td><?=  $getFullName?></td>
<td class="text-center"><?php
echo !empty($totalRecords) ? $totalRecords : "<strong class='text-danger'>Not Enrolled by Students</strong>";
?></td>     
    </tr>
<?php             


        }else{
            echo null;
        }
    } // loops
}else{
    echo "No record for the status";
}

?>

</tbody>
</table>


  </div>






</div>


                       
                      

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


    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
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

    <!-- modal  -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    ...
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>

</body>

</html>
<?php
  // }else{
  //     header("location: log.php");
  //   } 
  ?>