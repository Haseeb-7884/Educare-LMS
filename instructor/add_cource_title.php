<?php 
include('../back.php');

if (isset($_POST['submit'])) {
    $title = $_POST['course_title'];
    $main_id = $_POST['course_id'];

    // Check if 'selected_option' is set in the $_POST array
    $selected_option = isset($_POST['selected_option']) ? $_POST['selected_option'] : null;

    // Check if a category is selected
    if (!empty($selected_option)) {
        $course_cat = new backend();
        // Fetch the category data based on the selected category name
        $categoryData = $course_cat->fetching('cources_categories', '*', null, "category_id = $selected_option");

        if ($categoryData) {
            // Extract the category id from the fetched data
            $category_id = $categoryData[0]['category_id'];

            // Insert the data into the cource_details table with the associated category id
            $result = $course_cat->insertion('cource_details', array(
                'course_name' => $title,
                'category' => $category_id
            ));

            if ($result) {
                $_SESSION['title'] = $title;
                $_SESSION['category_id'] = $category_id;
                $instructor_id = $_GET['instructor_id'];
                // echo $instructor_id;
                // echo $instructor_id;
                header("location: new/index.php?instructor_id=$instructor_id");
              
            } else {
                echo "Error inserting data: " . $course_cat->getLastError();
            }
        } else {

                echo '<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>';
                echo '<script>';
                echo 'document.addEventListener("DOMContentLoaded", function() {';
                echo '  Swal.fire({';
                echo '     icon: "error",';
                echo '    title: "Category not found!",';
                echo '  });';
                echo '});';
                echo '</script>';
        }
    } else {

        echo '<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>';
        echo '<script>';
        echo 'document.addEventListener("DOMContentLoaded", function() {';
        echo '  Swal.fire({';
        echo '     icon: "error",';
        echo '    title: "Please select a category!",';
        echo '  });';
        echo '});';
        echo '</script>';
    }
}
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

    <title>add course title</title>
    <style>
        .form-btn{
            position: absolute;
            top: 56px;
            left: 300px;
        }
    </style>
</head>

<body>

    <div style="background-color:purple;" class="d-flex justify-content-center pb-2 pt-2">
        <h1 class="fw-bold text-light">Add title and Category</h1>
    </div>

    <div class="container">
        <div class="container d-flex justify-content-center">
            <h2 class="text-dark fw-bold fs-1 mt-5 mb-4">How about a working title and Category?</h2>
        </div>
        <p class="text-center mb-5">It's ok if you can't think of a good title and right category now. You can change it later.</p>

        <form action="add_cource_title.php" method="post">
            <div class="mb-3 container" style="padding-left: 230px; padding-right: 230px;">
                <input type="text" name="course_title" class="form-control form-control-lg" placeholder="e.g Learn JavaScript ES6 from Scratch" size="10">
            </div>
            <div class="mb-3 container" style="padding-left: 230px; padding-right: 230px;">
        
            <?php       
                $course_cat = new  backend();
                $CatSelection = $course_cat->fetching('cources_categories');
                ?>
                <select class='form-select form-select-lg' name='selected_option' id='selected_option'>
                <option value='' disabled selected>Please select an option</option>
                <?php
                foreach($CatSelection as $SelectCat){ 
                    // echo "<option>".$SelectCat['category_name']."</option>";
                    ?>
                <option value="<?php echo $SelectCat['category_id']; ?>"><?php echo $SelectCat['category_name']; ?></option>
                    <?php
                }
            ?> 
           
                </select> 
          <button type="submit" name="submit" class="position-relative btn btn-primary form-btn"> submit </button>
        </div>
        </form>

        <div class="container d-flex align-items-center justify-content-around">
            <a href="../index.php" class="btn btn-dark">Exit page</a>
                <a href="AddCources.php" class="btn btn-success ">previous page</a>
            </div>
           
    </div>


    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>

</body>

</html>