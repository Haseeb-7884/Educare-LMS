<?php include('../../back.php');
if(isset($_GET['course_id'])){
    $course_id = $_GET['course_id'];  
    $course_object = new backend();
    $course_data = $course_object->fetching('cource','*',null,"courses_id = '$course_id'");
    
    echo $course_id;
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
        .img-style{
            width:480px;
            height:100%;
        }
    </style>
</head>

<body>


    <div class="continer-fluid bg-dark text-light d-flex justify-content-around align-item-center">
        <h4><span class="badge bg-secondary mt-2 ms-5">Draft</span></h4>
<?php

    foreach($course_data as $cources){
        $courseName = $cources['course_title'];
        $course_subtitle = $cources['course_subtitle'];
        $select_language = $cources['select_language'];
        $selecting_level = $cources['selecting_level'];
        $select_category = $cources['select_category'];
        $primary_taught = $cources['primary_taught'];
        $course_img = $cources['course_img'];
        $course_video = $cources['course_video'];
        $instructor_name = $cources['instructor_name'];
        $course_description = $cources['course_description'];
        $instructor_id = $cources['instructor_id'];
    ?>
      <h2 class="fw-bold me-5"><?php echo $courseName ?></h2>
  

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

                <li class="nav-item fw-bold active">
                    <a class="nav-link collapsed" href="all_course.php">
                        <i class="fas fa-fw fa-cog" style="color:black"></i>
                        <span style="color:black">course landing page</span>
                    </a>
                </li>

                <li class="nav-item fw-bold">
                    <a class="nav-link collapsed" href="record_detail.php">
                        <i class="fas fa-fw fa-wrench" style="color:black"></i>
                        <span style="color:black">
                            film $ edit
                        </span>
                    </a>

                </li>

                <li class="nav-item fw-bold">
                    <a class="nav-link collapsed" href="cource_curriculam.php">
                        <i class="fas fa-fw fa-folder" style="color:black"></i>
                        <span style="color:black">
                            curriculam
                        </span>
                    </a>
                </li>

                <li class="nav-item fw-bold">
                    <a class="nav-link" href="">
                        <i class="fas fa-fw fa-chart-area" style="color:black"></i>
                        <span style="color:black">
                            setup $ test video
                        </span></a>
                </li>

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
                                Course Landing page
                            </h1>
                        </div>

                        <!-- content goes here written in inside dashboard section  -->

                        <hr>

                        <p class="mt-5 text-dark">Your course landing page is crucial to your success on Udemy.
                            If it’s done right, it can also help you gain visibility in search engines like Google. As
                            you complete this section, think about creating a compelling Course Landing Page that
                            demonstrates why someone would want to enroll in your course. Learn more about creating your
                            course
                            landing page and course title standards.</p>

                      <form action="edit_course_details.php" method="post" enctype="multipart/form-data">

                            <?php 
                                echo"<div class='mb-3 text-dark mt-5'>
                                <label class='form-label'>
                                    <strong class='text-dark'>Course title</strong></label>
                                <input type='text' name=' $courseName' class='form-control  form-control-lg' placeholder='$courseName'>
                                <div class='form-text'>Your title should be a mix of attention-grabbing, informative, and
                                    optimized for search.</div>
                            </div>";

                            ?>  
                         
                        <div class="mb-3 text-dark mt-5">
                            <label class="form-label">
                                <strong class="text-dark">Course subtitle</strong></label>
                            <input type="text" name="course_subtitle" class="form-control form-control-lg"
                                placeholder="<?=  $course_subtitle ?>" value="<?= $course_subtitle ?>">
                            <div class="form-text mt-2" style="font-size: 15px;">Use 1 or 2 related keywords, and
                                mention 3-4 of the most important areas that you've covered during your course.</div>
                        </div>


                        <label class="form-label mt-5">
                            <strong class="text-dark">Basic info</strong></label>

                        <div class="row d-flex align-items-center justify-content-between">
                            <div class="col-sm-4">
                                <select name="course_language" id="course_language" class="form-select form-select-lg">
                                    <option value="">Select a language</option>
                                    <option value="<?= $select_language ?>" selected><?= $select_language ?></option>
                                </select>
                            </div>

                            <div class="col-sm-4">
                                <select name="course_level" id="course_level" class="form-select form-select-lg">
                                    <option value="0" disabled selected>Select your Level</option>
                                    <option value="<?= $selecting_level ?>"><?= $selecting_level ?></option>
                                
                                </select>
                            </div>

                            <div class="col-sm-4">
                                <?php  
                                    $course_cat = new  backend();
                                    $CatSelection = $course_cat->fetching('cources_categories');
                                 ?>

                                <select class='form-select form-select-lg' name='selected_option' id='selected_option'>
                                    <option value='' disabled>Please select an option</option>

                                    <?php
                                    foreach($CatSelection as $SelectCat){ 
                                    // echo "<option>".$SelectCat['category_name']."</option>";
                                    $selected = ($SelectCat['category_id'] == $select_category) ? 'selected' : '';
                                    // echo "<option value=\''></option>";
                                    echo "<option value=\"{$SelectCat['category_id']}\" $selected>{$SelectCat['category_name']}</option>";
                                    ?>
                                   
                                    <?php }   ?>
                                </select>
                             
                            </div>

                             <div class="mb-3 text-dark mt-5">
                                <label class="form-label">
                                    <strong class="text-dark">What is primarily taught in your course?</strong></label>
                                <input type="text" name="course_taught" class="form-control form-control-lg" value="<?=$primary_taught?>" placeholder="<?=  $primary_taught ?>">
                            </div>


                            <div class="card mb-3 mt-5 container">
                                <div class="row d-flex justify-content-between">
                                    <div class="col-md-6">
                                        <?php 
                                        if($course_img){
                                            echo "<img class='img-style' src='../../$course_img'>";
                                        }else{
                                            echo "<img src='../../assets/images/placeholder.jpg'>";
                                        }
                                        ?>   
                                    </div>
                                    <div class="col-md-6">
                                        <div class="card-body mt-5">
                                            <h5 class="card-title">Upload Cource image</h5>
                                            <p class="card-text">Upload your course image here. It must meet our course image quality standards to be accepted. Important guidelines: 750x422 pixels; .jpg, .jpeg,. gif, or .png. no text on the image.</p>
                                            <input type="file" name="course_image">
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="card mb-3 mt-5 container">
                                <div class="row d-flex justify-content-between">
                                    <div class="col-md-6">
                                        <?php 
                                        if($course_video){
                                            echo "<img class='img-style' src='../../$course_video'>";
                                        }else{
                                            echo "<img src='../../assets/images/placeholder.jpg'>";
                                        }
                                        ?>   
                                    </div>
                                    <div class="col-md-6">
                                        <div class="card-body mt-5">
                                            <h5 class="card-title">Upload Cource image</h5>
                                            <p class="card-text">Upload your course image here. It must meet our course image quality standards to be accepted. Important guidelines: 750x422 pixels; .jpg, .jpeg,. gif, or .png. no text on the image.</p>
                                            <input type="file" name="course_image">
                                        </div>
                                    </div>
                                </div>
                            </div>
                          

                            <div class='text-dark mt-5'>
                            <label class='form-label'>
                                <strong class='text-dark'>Instructor profile(s)</strong></label>
                            <div style='height:50px;width:50%;' class='mt-4 d-flex justify-content-center align-items-center'>                     
                                        <!-- <img src='../../assets/images/first-person.jpg' class='rounded-circle'
                                           style='height:70px; width:70px;'> -->
                                    <a href='../dashboard/profile.php' class='d-block ms-5'>
                                        <strong>  
                                      <?= $instructor_name ?>
                                        </strong>
                                    </a>         
                                    <input type='hidden' name='name' value=''>
                                    <input type='hidden' name='instructor_id' value='<?=  $instructor_id  ?>'>
                                    <input type='hidden' name='course_id' value='<?=  $course_id  ?>'>
                            </div>
                            </div>  
                          

                            <br>
                                          
                            
                    <div class="mb-3 text-dark mt-5" class="border border-2 border-dark"> 
                    <label class="form-label">
                            <strong class="text-dark">Course description</strong></label>

                            <div id="editor" contenteditable="true" value="<?= $course_description ?>" placeholder="<?= $course_description ?>" placeholder="Start typing here..."></div>

                            <!-- Hidden input field to store editor content -->
                            <input type="hidden" id="editorContent" name="editorContent">

                            <button type="button" class="btn btn-primary" onclick="execCommand('bold')">Bold</button>
                            <button type="button" class="btn btn-info" onclick="execCommand('underline')">Underline</button>
                            <button type="button" class="btn btn-secondary" onclick="execCommand('italic')">Italic</button>
                            <button type="button" class="btn btn-dark" onclick="createList('insertUnorderedList')">Bullet List</button>
                            <button type="button" class="btn btn-warning" onclick="createList('insertOrderedList')">Numbered List</button>

                    </div>
                    </div>


 
                        <!-- <input type="submit" class="btn btn-primary" name="course_submit" value="Submit Course"> -->
                        <button type="submit" class="btn btn-primary mt-5" name="course_submit">Submit Info</button>
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

    </div>

    <?php
        }// for loop end
  }// if conditiion end
?>
      


    <!-- Bootstrap core JavaScript-->
    
    <script>
        function execCommand(command) {
            document.execCommand(command, false, null);
        }

        function createList(command) {
            document.execCommand(command, false, null);
        }

        // Update hidden input value before form submission
        document.querySelector('form').addEventListener('submit', function() {
            var editorContent = document.getElementById('editor').innerHTML;
            document.getElementById('editorContent').value = editorContent;
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


