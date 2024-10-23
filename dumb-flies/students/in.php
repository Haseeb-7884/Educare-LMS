<?php  include("../../back.php");  

$mian_id = $_GET['course_id'];

echo $mian_id;

$cources = new backend();

$getdata = $cources->fetching('cource','*',null,"courses_id='$mian_id'");
// $getTime = $cources->fetching('course_requirments');
foreach($getdata as $courseData){
?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <title>Hello, world!</title>
    <link rel="stylesheet" href="section2.css">



</head>

<body>


<div class="container mt-4 description-section ">
        <div class="border border-2 p-4 border-secondary description-section-left">
            <h1 class="mb-3 fw-bold">What you'll learn</h1>
            <div class="d-flex justify-content-center inner-description">
                <div class="inner-description-first">
                    <ol class="list_style">
                            <?php 
                                  $getLearners = $cources->fetching('course_requirments','*',null,"courses_id='$mian_id'");
                                  foreach($getLearners as $LearnersData){
                                    echo $LearnersData['course_learners'];   
                                  }
                            ?>
                    </ol>
                </div>
            </div>
        </div>




            <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>

    <!-- Modal -->
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
}
?>