<?php 
include('../../back.php');
$coruse_id = $_GET['courses_id'];
$requirments_id = $_GET['requirments_id'];
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
    
    <!-- Sweatalert CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert2/11.12.1/sweetalert2.min.css"
        integrity="sha512-uE3H1RGE5HkSD6RqI8zbKiSCevsWKVi/74GXOSiu0+IcHO3pkLG+Ouzmn1sB6Be5Y6f+3fuIkGxsieEIUrgMTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

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


                <li class="nav-item fw-bold"  style="opacity: 0.5;">
                    <a class="nav-link collapsed" href="record_detail.php" style="pointer-events: none;">
                        <i class="fas fa-fw fa-wrench" style="color:black"></i>
                        <span style="color:black">
                        course content
                        </span>
                    </a>

                </li>

                <li class="nav-item fw-bold active">
                    <a class="nav-link collapsed" href="cource_curriculam.php">
                        <i class="fas fa-fw fa-chart-area" style="color:black"></i>
                        <span style="color:black;">
                            setup $ lecture videos
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

                            
                               
                            <div class="mt-4">
                                <h4 class="text-dark fw-bold me-5" style="font-size:30px;">Add Sections Here</h4>
                                <p class="text-dark fw-bold">Add the section title here as given below</p>

                                <div class="text-light mt-4 mb-4" style="background-color:white;border-radius:5px; border:2px solid grey;">
                                
                                <h5 class="fw-bold p-3" style="background-color:#B12828;">
                                <i class="fas fa-exclamation-circle" style="color:white;"></i>
                                Note 
                                </h5>
            
                                <p class="text-dark p-3" >
                                    Here on this page you are restricted to add 8 sections in your curriculam at that particular time. To upload more sections contact Website admin 
                                    and apply for premium account. You have to be add atleast 5 sections mendatory</p>
                                  
                                </div> 

                                <form action="get_first_curriculam.php" class="" method="post" enctype="multipart/form-data">

                                <div class="mb-3 border border-2 border-secondary p-3 text-dark" style="background-color:white;">
                                    <!-- <label for="" class="form-label fw-bold text-dark">Add 1st Section here</label> -->

                                    <label for=" " class="form-label fw-bold"><strong>First 3 sections are required to be filled mendatory</strong></label>

                                    <div>
                                    <label for="" class="form-label fw-bold p-0 mt-3">Section 01<span class="text-danger">*</span></label>
                                    <input type="text" class="form-control mb-3" required name="section1" placeholder="Add Section title here">
                                    </div>
                                  
                                    <div>
                                    <label for="" class="form-label fw-bold p-0 mt-3">Section 02<span class="text-danger">*</span></label>
                                    <input type="text" class="form-control mb-3" required name="section2" placeholder="Add Section title here">
                                    </div>

                                    <div>
                                    <label for="" class="form-label fw-bold p-0 mt-3">Section 03<span class="text-danger">*</span></label>
                                    <input type="text" class="form-control mb-3" required name="section3" placeholder="Add Section title here">
                                    </div>
                                     
                                    <div>
                                    <label for="" class="form-label fw-bold p-0 mt-3">Section 04</label>
                                    <input type="text" class="form-control mb-3" name="section4" placeholder="Add Section title here">
                                    </div>
              
                                    <div>
                                    <label for="" class="form-label fw-bold p-0 mt-3">Section 05</label>
                                    <input type="text" class="form-control mb-3" name="section5" placeholder="Add Section title here">      
                                    </div>

                                </div>

                                <div class="text-light mt-4 mb-4" style="background-color:white; border-radius:5px; border:2px solid grey;">
                                
                                <h5 class="fw-bold p-3" style="background-color:#B12828;">
                                <i class="fas fa-exclamation-circle" style="color:white;"></i>
                                Note 
                                </h5>

                                <p class="p-3 text-dark">
                                Here you are restricted to add 5 lectures for a desired section. Please add 3 lectures atleast for a one section 
                                please enter the correct section name you mention earlier to submit data
                            </p>
                           
                                </div> 

                                <div class="mb-3 border border-2 border-secondary p-3 text-dark" style="background-color:white;">
                                

                                <div class="ps-3 pe-3 pt-2 pb-3 text-dark">
                                             <label for="" class="form-label fw-bold">Desired Section <span class="text-danger">*</span></label>
                                             <input type="text" class="form-control" required name="section01"  placeholder="e.g Any Entered Section Title">
                                             <strong style="font-size:13px;"> Enter the section title (from your above entered section) you want to include these lecture part </strong>
                                    </div>



                                <div class="d-flex justify-content-evenly">
                                    <div class="ps-3 pe-3 pt-2 pb-3 text-dark">
                                             <label for="" class="form-label fw-bold">Enter Lecture Tile <span class="text-danger">*</span></label>
                                             <input type="text" class="form-control" id="inputField1" required style="width:430px;" name="title1A"  placeholder="Enter title for the desired lecture">
                                    </div>   
                                    <div class="ps-3 pe-3 pt-2 pb-3 text-dark">
                                             <label for="" class="form-label fw-bold">YouTube Video Link <span class="text-danger">*</span></label>
                                             <input type="text" class="form-control iframe-only" id="inputField2" class="iframe-only" required style="width:400px;" name="lecture1A"  placeholder="paste the embeded youtube video link">
                                    </div>
                                    <input type="hidden" value="iframe1A" name="iframe1A">
                                </div>    

                                <div class="d-flex justify-content-evenly">
                                    <div class="ps-3 pe-3 pt-2 pb-3 text-dark">
                                             <label for="" class="form-label fw-bold">Enter Lecture Tile <span class="text-danger">*</span></label>
                                             <input type="text" class="form-control" id="inputField3" required style="width:430px;" name="title1B"  placeholder="Enter title for the desired lecture">
                                    </div>   
                                    <div class="ps-3 pe-3 pt-2 pb-3 text-dark">
                                             <label for="" class="form-label fw-bold">YouTube Video Link <span class="text-danger">*</span></label>
                                             <input type="text" class="form-control iframe-only" id="inputField4" required style="width:400px;" name="lecture1B"  placeholder="paste the embeded youtube video link">
                                    </div>
                                    <input type="hidden" value="iframe1B" name="iframe1B">
                                </div>  

                                <div class="d-flex justify-content-evenly">
                                    <div class="ps-3 pe-3 pt-2 pb-3 text-dark">
                                             <label for="" class="form-label fw-bold">Enter Lecture Tile <span class="text-danger">*</span></label>
                                             <input type="text" class="form-control" id="inputField5" required style="width:430px;" name="title1C"  placeholder="Enter title for the desired lecture">
                                    </div>   
                                    <div class="ps-3 pe-3 pt-2 pb-3 text-dark">
                                             <label for="" class="form-label fw-bold">YouTube Video Link <span class="text-danger">*</span></label>
                                             <input type="text" class="form-control iframe-only" id="inputField6" required style="width:400px;" name="lecture1C"  placeholder="paste the embeded youtube video link">
                                    </div>
                                    <input type="hidden" value="iframe1C" name="iframe1C">
                                </div> 

                                <div class="d-flex justify-content-evenly">
                                    <div class="ps-3 pe-3 pt-2 pb-3 text-dark">
                                             <label for="" class="form-label fw-bold">Enter Lecture Tile</label>
                                             <input type="text" class="form-control" id="inputField7" style="width:430px;" name="title1D"  placeholder="Enter title for the desired lecture">
                                    </div>   
                                    <div class="ps-3 pe-3 pt-2 pb-3 text-dark">
                                             <label for="" class="form-label fw-bold">YouTube Video Link</label>
                                             <input type="text" class="form-control iframe-only" id="inputField8" style="width:400px;" name="lecture1D"  placeholder="paste the embeded youtube video link">
                                    </div>
                                    <input type="hidden" value="iframe1D" name="iframe1D">
                                </div> 

                                                            
                                </div>

                                <input type="hidden" name="courses_id" value="<?=  $coruse_id ?>" placeholder="<?=  $coruse_id ?>">
                                <input type="hidden" name="requirments_id" value="<?=  $requirments_id ?>" placeholder="<?=  $requirments_id ?>">

                                <div class="mb-3 border border-2 border-secondary p-3 text-dark" style="background-color:white;">
                                  
                                <div class="ps-3 pe-3 pt-2 pb-3 text-dark">
                                             <label for="" class="form-label fw-bold">Desired Section <span class="text-danger">*</span></label>
                                             <input type="text" class="form-control" required name="section02"  placeholder="e.g Any Entered Section here">
                                             <strong style="font-size:13px;"> Enter the section title (from your above entered section) you want to include these lecture part </strong>
                                        </div>

                                    <div class="d-flex justify-content-evenly">
                                    <div class="ps-3 pe-3 pt-2 pb-3 text-dark">
                                             <label for="" class="form-label fw-bold">Enter Lecture Tile <span class="text-danger">*</span></label>
                                             <input type="text" class="form-control"id="inputField9" required style="width:430px;" name="title2A"  placeholder="Enter title for the desired lecture">
                                    </div>   
                                    <div class="ps-3 pe-3 pt-2 pb-3 text-dark">
                                             <label for="" class="form-label fw-bold">YouTube Video Link <span class="text-danger">*</span></label>
                                             <input type="text" class="form-control iframe-only" id="inputField10" required style="width:400px;" name="lecture2A"  placeholder="paste the embeded youtube video link">
                                    </div>
                                    <input type="hidden" value="iframe2A" name="iframe2A">
                                </div>    

                                <div class="d-flex justify-content-evenly">
                                    <div class="ps-3 pe-3 pt-2 pb-3 text-dark">
                                             <label for="" class="form-label fw-bold">Enter Lecture Tile <span class="text-danger">*</span></label>
                                             <input type="text" class="form-control" required id="inputField11" style="width:430px;" name="title2B"  placeholder="Enter title for the desired lecture">
                                    </div>   
                                    <div class="ps-3 pe-3 pt-2 pb-3 text-dark">
                                             <label for="" class="form-label fw-bold">YouTube Video Link <span class="text-danger">*</span></label>
                                             <input type="text" class="form-control iframe-only" required id="inputField12" style="width:400px;" name="lecture2B"  placeholder="paste the embeded youtube video link">
                                    </div>
                                    <input type="hidden" value="iframe2B" name="iframe2B">
                                </div>  

                                <div class="d-flex justify-content-evenly">
                                    <div class="ps-3 pe-3 pt-2 pb-3 text-dark">
                                             <label for="" class="form-label fw-bold">Enter Lecture Tile <span class="text-danger">*</span></label>
                                             <input type="text" class="form-control" required id="inputField13" style="width:430px;" name="title2C"  placeholder="Enter title for the desired lecture">
                                    </div>   
                                    <div class="ps-3 pe-3 pt-2 pb-3 text-dark">
                                             <label for="" class="form-label fw-bold">YouTube Video Link <span class="text-danger">*</span></label>
                                             <input type="text" class="form-control iframe-only" required id="inputField14" style="width:400px;" name="lecture2C"  placeholder="paste the embeded youtube video link">
                                    </div>
                                    <input type="hidden" value="iframe2C" name="iframe2C">
                                </div> 

                                <div class="d-flex justify-content-evenly">
                                    <div class="ps-3 pe-3 pt-2 pb-3 text-dark">
                                             <label for="" class="form-label fw-bold">Enter Lecture Tile</label>
                                             <input type="text" class="form-control" style="width:430px;" id="inputField15" name="title2D"  placeholder="Enter title for the desired lecture">
                                    </div>   
                                    <div class="ps-3 pe-3 pt-2 pb-3 text-dark">
                                             <label for="" class="form-label fw-bold">YouTube Video Link</label>
                                             <input type="text" class="form-control iframe-only" id="inputField16" style="width:400px;" id="inputField16" name="lecture2D"  placeholder="paste the embeded youtube video link">
                                    </div>
                                    <input type="hidden" value="iframe2D" name="iframe2D">
                                </div> 
                                 
                                </div>

                                <div class="mb-3 border border-2 border-secondary p-3 text-dark" style="background-color:white;">
                                   

                                <div class="ps-3 pe-3 pt-2 pb-3 text-dark">
                                             <label for="" class="form-label fw-bold">Desired Section <span class="text-danger">*</span></label>
                                             <input type="text" class="form-control" required name="section03" placeholder="e.g Any Entered Section here">
                                             <strong style="font-size:13px;"> Enter the section title (from your above entered section) you want to include these lecture part </strong>
                                    </div>


                                    <div class="d-flex justify-content-evenly">
                                    <div class="ps-3 pe-3 pt-2 pb-3 text-dark">
                                             <label for="" class="form-label fw-bold">Enter Lecture Tile <span class="text-danger">*</span></label>
                                             <input type="text" class="form-control" id="inputField17" required style="width:430px;" name="title3A"  placeholder="Enter title for the desired lecture">
                                    </div>   
                                    <div class="ps-3 pe-3 pt-2 pb-3 text-dark">
                                             <label for="" class="form-label fw-bold">YouTube Video Link <span class="text-danger">*</span></label>
                                             <input type="text" class="form-control iframe-only" id="inputField18" required style="width:400px;" name="lecture3A"  placeholder="paste the embeded youtube video link">
                                    </div>
                                    <input type="hidden" value="iframe3A" name="iframe3A">
                                </div>    

                                <div class="d-flex justify-content-evenly">
                                    <div class="ps-3 pe-3 pt-2 pb-3 text-dark">
                                             <label for="" class="form-label fw-bold">Enter Lecture Tile <span class="text-danger">*</span></label>
                                             <input type="text" class="form-control" required id="inputField19" style="width:430px;" name="title3B"  placeholder="Enter title for the desired lecture">
                                    </div>   
                                    <div class="ps-3 pe-3 pt-2 pb-3 text-dark">
                                             <label for="" class="form-label fw-bold">YouTube Video Link <span class="text-danger">*</span></label>
                                             <input type="text" class="form-control iframe-only" required id="inputField20" style="width:400px;" name="lecture3B"  placeholder="paste the embeded youtube video link">
                                    </div>
                                    <input type="hidden" value="iframe3B" name="iframe3B">
                                </div>  

                                <div class="d-flex justify-content-evenly">
                                    <div class="ps-3 pe-3 pt-2 pb-3 text-dark">
                                             <label for="" class="form-label fw-bold">Enter Lecture Tile <span class="text-danger">*</span></label>
                                             <input type="text" class="form-control" required id="inputField21" style="width:430px;" name="title3C"  placeholder="Enter title for the desired lecture">
                                    </div>   
                                    <div class="ps-3 pe-3 pt-2 pb-3 text-dark">
                                             <label for="" class="form-label fw-bold">YouTube Video Link <span class="text-danger">*</span></label>
                                             <input type="text" class="form-control iframe-only" id="inputField22" required style="width:400px;" name="lecture3C"  placeholder="paste the embeded youtube video link">
                                    </div>
                                    <input type="hidden" value="iframe3C" name="iframe3C">
                                </div> 

                                <div class="d-flex justify-content-evenly">
                                    <div class="ps-3 pe-3 pt-2 pb-3 text-dark">
                                             <label for="" class="form-label fw-bold">Enter Lecture Tile</label>
                                             <input type="text" class="form-control" style="width:430px;" id="inputField23" name="title3D"  placeholder="Enter title for the desired lecture">
                                    </div>   
                                    <div class="ps-3 pe-3 pt-2 pb-3 text-dark">
                                             <label for="" class="form-label fw-bold">YouTube Video Link</label>
                                             <input type="text" class="form-control iframe-only" id="inputField24" style="width:400px;" id="inputField24" name="lecture3D"  placeholder="paste the embeded youtube video link">
                                    </div>
                                    <input type="hidden" value="iframe3D" name="iframe3D">
                                </div> 
                                 
                                </div>

                            <div class="mb-3 border border-2 border-secondary p-3 text-dark" style="background-color:white;">
                                   

                                <div class="ps-3 pe-3 pt-2 pb-3 text-dark">
                                             <label for="" class="form-label fw-bold">Desired Section</label>
                                             <input type="text" class="form-control"  name="section04"  placeholder="Enter the section title you want to include video">
                                </div>
                                   
                                <div class="d-flex justify-content-evenly">
                                    <div class="ps-3 pe-3 pt-2 pb-3 text-dark">
                                             <label for="" class="form-label fw-bold">Enter Lecture Tile</label>
                                             <input type="text" class="form-control" id="inputField25" style="width:430px;" name="title4A"  placeholder="Enter title for the desired lecture">
                                    </div>   
                                    <div class="ps-3 pe-3 pt-2 pb-3 text-dark">
                                             <label for="" class="form-label fw-bold">YouTube Video Link</label>
                                             <input type="text" class="form-control iframe-only" id="inputField26" style="width:400px;" name="lecture4A"  placeholder="paste the embeded youtube video link">
                                    </div>
                                    <input type="hidden" value="iframe4A" name="iframe4A">
                                </div>    

                                <div class="d-flex justify-content-evenly">
                                    <div class="ps-3 pe-3 pt-2 pb-3 text-dark">
                                             <label for="" class="form-label fw-bold">Enter Lecture Tile</label>
                                             <input type="text" class="form-control" style="width:430px;" id="inputField27" name="title4B"  placeholder="Enter title for the desired lecture">
                                    </div>   
                                    <div class="ps-3 pe-3 pt-2 pb-3 text-dark">
                                             <label for="" class="form-label fw-bold">YouTube Video Link</label>
                                             <input type="text" class="form-control iframe-only" id="inputField28" style="width:400px;" name="lecture4B"  placeholder="paste the embeded youtube video link">
                                    </div>
                                    <input type="hidden" value="iframe4B" name="iframe4B">
                                </div>  

                                <div class="d-flex justify-content-evenly">
                                    <div class="ps-3 pe-3 pt-2 pb-3 text-dark">
                                             <label for="" class="form-label fw-bold">Enter Lecture Tile</label>
                                             <input type="text" class="form-control" id="inputField29" style="width:430px;" name="title4C"  placeholder="Enter title for the desired lecture">
                                    </div>   
                                    <div class="ps-3 pe-3 pt-2 pb-3 text-dark">
                                             <label for="" class="form-label fw-bold">YouTube Video Link</label>
                                             <input type="text" class="form-control iframe-only" id="inputField30" style="width:400px;" name="lecture4C"  placeholder="paste the embeded youtube video link">
                                    </div>
                                    <input type="hidden" value="iframe4C" name="iframe4C">
                                </div> 

                                <div class="d-flex justify-content-evenly">
                                    <div class="ps-3 pe-3 pt-2 pb-3 text-dark">
                                             <label for="" class="form-label fw-bold">Enter Lecture Tile</label>
                                             <input type="text" class="form-control" style="width:430px;" id="inputField31" name="title4D"  placeholder="Enter title for the desired lecture">
                                    </div>   
                                    <div class="ps-3 pe-3 pt-2 pb-3 text-dark">
                                             <label for="" class="form-label fw-bold">YouTube Video Link</label>
                                             <input type="text" class="form-control iframe-only" style="width:400px;" id="inputField32" name="lecture4D"  placeholder="paste the embeded youtube video link">
                                    </div>
                                    <input type="hidden" value="iframe4D" name="iframe4D">
                                </div> 
                                 
                            </div>

                            <div class="mb-3 border border-2 border-secondary p-3 text-dark" style="background-color:white;">
                                   

                                   <div class="ps-3 pe-3 pt-2 pb-3 text-dark">
                                                <label for="" class="form-label fw-bold">Desired Section</label>
                                                <input type="text" class="form-control" name="section05"  placeholder="Enter the section title you want to include video">
                                   </div>
                                      
                                   <div class="d-flex justify-content-evenly">
                                       <div class="ps-3 pe-3 pt-2 pb-3 text-dark">
                                                <label for="" class="form-label fw-bold">Enter Lecture Tile</label>
                                                <input type="text" class="form-control" style="width:430px;" id="inputField33" name="title5A"  placeholder="Enter title for the desired lecture">
                                       </div>   
                                       <div class="ps-3 pe-3 pt-2 pb-3 text-dark">
                                                <label for="" class="form-label fw-bold">YouTube Video Link</label>
                                                <input type="text" class="form-control iframe-only" id="inputField34" style="width:400px;" name="lecture5A"  placeholder="paste the embeded youtube video link">
                                       </div>
                                       <input type="hidden" value="iframe5A" name="iframe5A">
                                   </div>    
   
                                   <div class="d-flex justify-content-evenly">
                                       <div class="ps-3 pe-3 pt-2 pb-3 text-dark">
                                                <label for="" class="form-label fw-bold">Enter Lecture Tile</label>
                                                <input type="text" class="form-control" style="width:430px;" id="inputField35" name="title5B"  placeholder="Enter title for the desired lecture">
                                       </div>   
                                       <div class="ps-3 pe-3 pt-2 pb-3 text-dark">
                                                <label for="" class="form-label fw-bold">YouTube Video Link</label>
                                                <input type="text" class="form-control iframe-only" style="width:400px;" id="inputField36" name="lecture5B"  placeholder="paste the embeded youtube video link">
                                       </div>
                                       <input type="hidden" value="iframe5B" name="iframe5B">
                                   </div>  
   
                                   <div class="d-flex justify-content-evenly">
                                       <div class="ps-3 pe-3 pt-2 pb-3 text-dark">
                                                <label for="" class="form-label fw-bold">Enter Lecture Tile</label>
                                                <input type="text" class="form-control" id="inputField37" style="width:430px;" name="title5C"  placeholder="Enter title for the desired lecture">
                                       </div>   
                                       <div class="ps-3 pe-3 pt-2 pb-3 text-dark">
                                                <label for="" class="form-label fw-bold">YouTube Video Link</label>
                                                <input type="text" class="form-control iframe-only" id="inputField38" style="width:400px;" name="lecture5C"  placeholder="paste the embeded youtube video link">
                                       </div>
                                       <input type="hidden" value="iframe5C" name="iframe5C">
                                   </div> 

                                   <div class="d-flex justify-content-evenly">
                                       <div class="ps-3 pe-3 pt-2 pb-3 text-dark">
                                                <label for="" class="form-label fw-bold">Enter Lecture Tile</label>
                                                <input type="text" class="form-control" id="inputField39" style="width:430px;" name="title5D"  placeholder="Enter title for the desired lecture">
                                       </div>   
                                       <div class="ps-3 pe-3 pt-2 pb-3 text-dark">
                                                <label for="" class="form-label fw-bold">YouTube Video Link</label>
                                                <input type="text" class="form-control iframe-only" id="inputField40" style="width:400px;" name="lecture5D"  placeholder="paste the embeded youtube video link">
                                       </div>
                                       <input type="hidden" value="iframe5D" name="iframe5D">
                                   </div> 
                                    
                               </div>

                                 <!-- for submission button  -->
                           
                                <div class="d-flex align-items-center justify-content-left">  
                                <div class="mt-4">

                                <a href="updatations/record-detail.php?courses_id=<?=$courses_id?>&requirments_id=<?=$requirments_id?>" class="btn bg-primary text-light fw-bold p-1 mt-4 mb-5 me-4">Update Previous</a>

                                <input type="submit" style="background-color:black;" name="curriculum_submit" value="Submit & Next" class="mb-4 btn text-light fw-bold">
    
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

<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert2/11.12.1/sweetalert2.min.js" integrity="sha512-TV1UlDAJWH0asrDpaia2S8380GMp6kQ4S6756j3Vv2IwglqZc3w2oR6TxN/fOYfAzNpj2WQJUiuel9a7lbH8rA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>

document.addEventListener('DOMContentLoaded', () => {
    const inputFields = document.querySelectorAll('input.iframe-only');
    console.log('Input fields:', inputFields);

    inputFields.forEach(field => {
        console.log('Attaching listeners to:', field);
        field.addEventListener('input', (event) => {
            const value = event.target.value;
            console.log('Input event:', value);
            const iframeRegex = /^<iframe.*<\/iframe>$/;
            
            if (!iframeRegex.test(value)) {
                // Prevent further input and show SweetAlert
                event.target.value = '';
                Swal.fire({
                    icon: 'error',
                    title: 'Invalid input',
                    text: 'Only iframe tags are allowed!',
                });
            }
        });

        field.addEventListener('paste', (event) => {
            event.preventDefault();
            const clipboardData = (event.clipboardData || window.clipboardData).getData('text');
            console.log('Paste event:', clipboardData);
            const iframeRegex = /^<iframe.*<\/iframe>$/;

            if (iframeRegex.test(clipboardData)) {
                event.target.value = clipboardData;
            } else {
                Swal.fire({
                    icon: 'error',
                    title: 'Invalid input',
                    text: 'Only iframe tags are allowed!',
                });
            }
        });
    });
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




