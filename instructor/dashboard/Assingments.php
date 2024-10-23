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
            <li class="nav-item fw-bold">
                <a class="nav-link collapsed" target="_blank" href="cources.php">
                <i class="fab fa-youtube"></i>  
                    Cources
                </a>
            </li>

                 <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="A&Q.php">
                <i class="fab fa-youtube"></i>  
                    Assingments & Quizzes
                </a>
            </li>


            <!-- Nav Item - Utilities Collapse Menu -->
            <li class="nav-item fw-bold">
                <a class="nav-link collapsed" href="communication.php">
                   <i class="fas fa-comment-dots"></i>
                    <span>Communication</span>
                </a>

            </li>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item fw-bold">
                <a class="nav-link collapsed" href="performance.php">
                <i class="fas fa-signal"></i>
                    <span>performance</span>
                </a>
            </li>

            <!-- Nav Item - Charts -->
            <li class="nav-item fw-bold">
                <a class="nav-link" href="tools.php">
                <i class="fas fa-fw fa-wrench"></i>
                    <span>Tools</span></a>
            </li>

            <!-- Nav Item - Tables -->
            <li class="nav-item fw-bold">
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

            <!-- content goes here written in inside dashboard section  -->

                    <table class="table table-striped">
  <thead class="text-center bg-primary"style="color:white!important;">
    <tr>
      <th scope="col">Assingment ID</th>
      <th scope="col">Course Name</th>
      <th scope="col">Assingment Title</th>
      <th scope="col">Preview & Edit</th>
    </tr>
  </thead>
  <tbody class="text-center">

<?php 
$Assingment_Object = new backend();
?>

<!-- 1st tr starts here  -----------------------------------------------------------------------------------------------------  -->
    <tr>

    <?php
$instructor_logId = $_SESSION['id'];
// echo $instructor_logId;
$InsData = $Assingment_Object->fetching("instructor","*",null,"registration_id = $instructor_logId");
if(!empty($InsData)){
    foreach($InsData as $mainDataGet){
    $instructor_main_id = $mainDataGet['instructor_id'];
    // $instructor_main_id = 6;
} // loop of instructor ends 

$CourceData = $Assingment_Object->fetching("cource","*",null,"instructor_id = $instructor_main_id");
if(!empty($CourceData)){
    foreach($CourceData as $GetCourceData){
        $courses_required_id = $GetCourceData['courses_id'];        
        $AssingmentsData = $Assingment_Object->fetching("assingments","*",null,"cources_id = $courses_required_id");
        if(!empty($AssingmentsData)){
            foreach($AssingmentsData as $TotalAssingments){
                $QA_id = $TotalAssingments['QA_id'];
                $assingment_title1 = $TotalAssingments['assingment_title1'];
                $assingment_title2 = $TotalAssingments['assingment_title2'];
                $assingment_title3 = $TotalAssingments['assingment_title3'];
                $assingment_title4 = $TotalAssingments['assingment_title4'];
                $assingment_title5 = $TotalAssingments['assingment_title5'];
                $cources_id = $TotalAssingments['cources_id'];

                //  1st td of body starts (ID) 
                if(!empty($QA_id)){
                    echo "<td>$QA_id</td>";
                  }else{
                    echo null;
                  }
                //  1st td of body ends (ID) 

                //  2nd td of body starts (Course Name) 
                $CourceNewData = $Assingment_Object->fetching("cource","*",null,"courses_id = $cources_id");
                if(!empty($CourceNewData)){
                    foreach ($CourceNewData as $Always) {
                        $course_title = $Always['course_title'];
                        echo "<td>".$course_title."</td>";
                    }
                }
                //  2nd td of body ends (Course Name) 

                // 3rd td of body starts (Assingment Title)
                if (!empty($assingment_title1)) {
                    echo '<td>' . $assingment_title1 . '</td>';
                }else{
                    echo null;
                }
                // 3rd td of body ends (Assingment Title)

                // 4rth td of body Starts (Preview & Edit)
                if (!empty($assingment_title1)) {
?>
        <td><a href="edit_assingments.php?title=<?=$assingment_title1?>">Edit Here</a></td>
<?php                     
                }
                // 4rth td of body ends (Preview & Edit)
            }
        }else{
            echo null;
        }
    }
}else{
    echo "<td colspan='4'>There is no Assingment yet</td>";
}





}else{
    echo null;
}

?>

   </tr>
 <!-- 1st tr ends here  -----------------------------------------------------------------------------------------------------  -->
<!-- 2nd tr starts here  -----------------------------------------------------------------------------------------------------  -->
   <tr>

<?php
$instructor_logId = $_SESSION['id'];
// echo $instructor_logId;
$InsData = $Assingment_Object->fetching("instructor","instructor_id",null,"registration_id = $instructor_logId");
if(!empty($InsData)){
    foreach($InsData as $mainDataGet){
    $instructor_main_id = $mainDataGet['instructor_id'];
    // $instructor_main_id = 6;
}
$CourceData = $Assingment_Object->fetching("cource","*",null,"instructor_id = $instructor_main_id");
if(!empty($CourceData)){
    foreach($CourceData as $GetCourceData){
        $courses_required_id = $GetCourceData['courses_id'];        
        $AssingmentsData = $Assingment_Object->fetching("assingments","*",null,"cources_id = $courses_required_id");
        if(!empty($AssingmentsData)){
            foreach($AssingmentsData as $TotalAssingments){
                $QA_id = $TotalAssingments['QA_id'];
                $assingment_title1 = $TotalAssingments['assingment_title1'];
                $assingment_title2 = $TotalAssingments['assingment_title2'];
                $assingment_title3 = $TotalAssingments['assingment_title3'];
                $assingment_title4 = $TotalAssingments['assingment_title4'];
                $assingment_title5 = $TotalAssingments['assingment_title5'];
                $cources_id = $TotalAssingments['cources_id'];

                //  1st td of body starts (ID) 
                if(!empty($QA_id)){
                    if(!empty($assingment_title2)){
                        echo "<td>$QA_id</td>";
                    }else{
                        echo null;
                    }
                 }else{
                     echo null;
                 }
                //  1st td of body ends (ID) 

                //  2nd td of body starts (Course Name) 
                $CourceNewData = $Assingment_Object->fetching("cource","*",null,"courses_id = $cources_id");
                if(!empty($CourceNewData) && !empty($assingment_title2)){
                    foreach ($CourceNewData as $Always) {
                        $course_title = $Always['course_title'];
                        echo "<td>".$course_title."</td>";
                    }
                }
                //  2nd td of body ends (Course Name) 

                // 3rd td of body starts (Assingment Title)
                if (!empty($assingment_title2)) {
                    echo '<td>' . $assingment_title2 . '</td>';
                }else{
                    echo null;
                }
                // 3rd td of body ends (Assingment Title)

                // 4rth td of body Starts (Preview & Edit)
                if (!empty($assingment_title2)) {
?>
        <td><a href="edit_assingments.php?title=<?=$assingment_title2?>">Edit Here</a></td>
<?php                     
                }
                // 4rth td of body ends (Preview & Edit)
            }
        }else{
            echo null;
        }
    }
}else{
    echo null;
}
}else{
    echo null;
}
?>

</tr>
<!-- 2nd tr ends here  -----------------------------------------------------------------------------------------------------  -->
<!-- 3rd tr starts here  -----------------------------------------------------------------------------------------------------  -->
<tr>

<?php
$instructor_logId = $_SESSION['id'];
// echo $instructor_logId;
$InsData = $Assingment_Object->fetching("instructor","instructor_id",null,"registration_id = $instructor_logId");
if(!empty($InsData)){
    foreach($InsData as $mainDataGet){
    $instructor_main_id = $mainDataGet['instructor_id'];
    // $instructor_main_id = 6;
}
$CourceData = $Assingment_Object->fetching("cource","*",null,"instructor_id = $instructor_main_id");
if(!empty($CourceData)){
    foreach($CourceData as $GetCourceData){
        $courses_required_id = $GetCourceData['courses_id'];        
        $AssingmentsData = $Assingment_Object->fetching("assingments","*",null,"cources_id = $courses_required_id");
        if(!empty($AssingmentsData)){
            foreach($AssingmentsData as $TotalAssingments){
                $QA_id = $TotalAssingments['QA_id'];
                $assingment_title1 = $TotalAssingments['assingment_title1'];
                $assingment_title2 = $TotalAssingments['assingment_title2'];
                $assingment_title3 = $TotalAssingments['assingment_title3'];
                $assingment_title4 = $TotalAssingments['assingment_title4'];
                $assingment_title5 = $TotalAssingments['assingment_title5'];
                $cources_id = $TotalAssingments['cources_id'];

                //  1st td of body starts (ID) 
                if(!empty($QA_id)){
                    if(!empty($assingment_title3)){
                        echo "<td>$QA_id</td>";
                    }else{
                        echo null;
                    }
                 }else{
                     echo null;
                 }
                //  1st td of body ends (ID) 

                //  2nd td of body starts (Course Name) 

                $CourceNewData = $Assingment_Object->fetching("cource","*",null,"courses_id = $cources_id");
                if(!empty($CourceNewData) && !empty($assingment_title3)){
                    foreach ($CourceNewData as $Always) {
                        $course_title = $Always['course_title'];
                        echo "<td>".$course_title."</td>";
                    }
                }
                //  2nd td of body ends (Course Name) 

                // 3rd td of body starts (Assingment Title)
                if (!empty($assingment_title3)) {
                    echo '<td>' . $assingment_title3 . '</td>';
                }else{
                    echo null;
                }
                // 3rd td of body ends (Assingment Title)

                // 4rth td of body Starts (Preview & Edit)
                if (!empty($assingment_title3)) {
?>
        <td><a href="edit_assingments.php?title=<?=$assingment_title3?>">Edit Here</a></td>
<?php                     
                }
                // 4rth td of body ends (Preview & Edit)
            }
        }else{
            echo null;
        }
    }
}else{
    echo null;
}
}else{
    echo null;
}
?>

</tr>
<!-- 3rd tr ends here  -----------------------------------------------------------------------------------------------------  -->
<!-- 4rth tr Starts here  -----------------------------------------------------------------------------------------------------  -->

<tr>


<?php
$instructor_logId = $_SESSION['id'];
// echo $instructor_logId;
$InsData = $Assingment_Object->fetching("instructor","instructor_id",null,"registration_id = $instructor_logId");
if(!empty($InsData)){
    foreach($InsData as $mainDataGet){
    $instructor_main_id = $mainDataGet['instructor_id'];
    // $instructor_main_id = 6;
}
$CourceData = $Assingment_Object->fetching("cource","*",null,"instructor_id = $instructor_main_id");
if(!empty($CourceData)){
    foreach($CourceData as $GetCourceData){
        $courses_required_id = $GetCourceData['courses_id'];        
        $AssingmentsData = $Assingment_Object->fetching("assingments","*",null,"cources_id = $courses_required_id");
        if(!empty($AssingmentsData)){
            foreach($AssingmentsData as $TotalAssingments){
                $QA_id = $TotalAssingments['QA_id'];
                $assingment_title1 = $TotalAssingments['assingment_title1'];
                $assingment_title2 = $TotalAssingments['assingment_title2'];
                $assingment_title3 = $TotalAssingments['assingment_title3'];
                $assingment_title4 = $TotalAssingments['assingment_title4'];
                $assingment_title5 = $TotalAssingments['assingment_title5'];
                $cources_id = $TotalAssingments['cources_id'];

                //  1st td of body starts (ID) 
                if(!empty($QA_id)){
                    if(!empty($assingment_title4)){
                        echo "<td>$QA_id</td>";
                    }else{
                        echo null;
                    }
                 }else{
                     echo null;
                 }
                //  1st td of body ends (ID) 

                //  2nd td of body starts (Course Name) 

                $CourceNewData = $Assingment_Object->fetching("cource","*",null,"courses_id = $cources_id");
                if(!empty($CourceNewData) && !empty($assingment_title4)){
                    foreach ($CourceNewData as $Always) {
                        $course_title = $Always['course_title'];
                        echo "<td>".$course_title."</td>";
                    }
                }
                //  2nd td of body ends (Course Name) 

                // 3rd td of body starts (Assingment Title)
                if (!empty($assingment_title4)) {
                    echo '<td>' . $assingment_title4 . '</td>';
                }else{
                    echo null;
                }
                // 3rd td of body ends (Assingment Title)

                // 4rth td of body Starts (Preview & Edit)
                if (!empty($assingment_title4)) {
?>
        <td><a href="edit_assingments.php?title=<?=$assingment_title4?>">Edit Here</a></td>
<?php                     
                }
                // 4rth td of body ends (Preview & Edit)
            }
        }else{
            echo null;
        }
    }
}else{
    echo null;
}
}else{
    echo null;
}
?>

</tr>

<!-- 4rth tr ends here  -----------------------------------------------------------------------------------------------------  -->
<!-- 5th tr Starts here  -----------------------------------------------------------------------------------------------------  -->

<tr>


<?php
$instructor_logId = $_SESSION['id'];
// echo $instructor_logId;
$InsData = $Assingment_Object->fetching("instructor","instructor_id",null,"registration_id = $instructor_logId");
if(!empty($InsData)){
    foreach($InsData as $mainDataGet){
    $instructor_main_id = $mainDataGet['instructor_id'];
    // $instructor_main_id = 6;
}
$CourceData = $Assingment_Object->fetching("cource","*",null,"instructor_id = $instructor_main_id");
if(!empty($CourceData)){
    foreach($CourceData as $GetCourceData){
        $courses_required_id = $GetCourceData['courses_id'];        
        $AssingmentsData = $Assingment_Object->fetching("assingments","*",null,"cources_id = $courses_required_id");
        if(!empty($AssingmentsData)){
            foreach($AssingmentsData as $TotalAssingments){
                $QA_id = $TotalAssingments['QA_id'];
                $assingment_title1 = $TotalAssingments['assingment_title1'];
                $assingment_title2 = $TotalAssingments['assingment_title2'];
                $assingment_title3 = $TotalAssingments['assingment_title3'];
                $assingment_title4 = $TotalAssingments['assingment_title4'];
                $assingment_title5 = $TotalAssingments['assingment_title5'];
                $cources_id = $TotalAssingments['cources_id'];

                //  1st td of body starts (ID) 
                if(!empty($QA_id)){
                    if(!empty($assingment_title5)){
                        echo "<td>$QA_id</td>";
                    }else{
                        echo null;
                    }
                 }else{
                     echo null;
                 }
                //  1st td of body ends (ID) 

                //  2nd td of body starts (Course Name) 

                $CourceNewData = $Assingment_Object->fetching("cource","*",null,"courses_id = $cources_id");
                if(!empty($CourceNewData) && !empty($assingment_title5)){
                    foreach ($CourceNewData as $Always) {
                        $course_title = $Always['course_title'];
                        echo "<td>".$course_title."</td>";
                    }
                }
                //  2nd td of body ends (Course Name) 

                // 3rd td of body starts (Assingment Title)
                if (!empty($assingment_title5)) {
                    echo '<td>' . $assingment_title5 . '</td>';
                }else{
                    echo null;
                }
                // 3rd td of body ends (Assingment Title)

                // 4rth td of body Starts (Preview & Edit)
                if (!empty($assingment_title5)) {
?>
        <td><a href="edit_assingments.php?title=<?=$assingment_title5?>">Edit Here</a></td>
<?php                     
                }
                // 4rth td of body ends (Preview & Edit)
            }
        }else{
            echo null;
        }
    }
}else{
    echo null;
}
}else{
    echo null;
}
?>

</tr>


<!-- 5th tr Ends here  -----------------------------------------------------------------------------------------------------  -->



    </tbody>
    </table>

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