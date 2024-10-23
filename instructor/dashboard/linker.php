<?php
include("../../back.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Instructor Check</title>
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-beta2/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <style>
    body, html {
      height: 100%;
      margin: 0;
      display: flex;
      align-items: center;
      justify-content: center;
      /* background: #ffffff; */
      color: #333;
      background-color:#add8e6;
      font-family: Arial, sans-serif;
    }
    .container {
      text-align: center;
      background: #f8f9fa;
      padding: 40px;
      border-radius: 8px;
      box-shadow: 0 4px 30px rgba(0, 0, 0, 0.1);
      max-width: 500px;
      width: 100%;
    }
    .btn-custom {
      width: 100%;
      margin-top: 10px;
      padding: 15px;
      font-size: 16px;
      display: flex;
      align-items: center;
      justify-content: center;
    }
    .btn-custom i {
      margin-right: 10px;
    }
    h1 {
      color: #1e88e5;
    }
    p {
      color: #1565c0;
    }
    .swal2-footer a {
            display: inline-block;
            padding: 10px 20px;
            color: #fff;
            background-color: #3085d6;
            border-radius: 5px;
            text-decoration: none;
            font-weight: bold;
        }
  </style>
</head>
<body>

<?php

if(isset($_SESSION['login']) && ($_SESSION['role'] == 1)){
    header("location: http://localhost/PHP-OOP/PROJECT/instructor/dashboard/index.php");
}
else if(isset($_SESSION['login']) && ($_SESSION['role'] == 0)){
?>

<div class="container" >
  <h1 class="mb-4" style="color: red;"><i class="fas fa-exclamation-circle" style="color: red !important;"></i> You are not an Instructor</h1>
  <p class="mb-4" style="color:black;">It seems like you are not an instructor yet. Please choose one of the options below:</p>
  <div>
    <a href="http://localhost/PHP-OOP/PROJECT/instructor/dashboard/edit_profile.php" class="btn btn-primary btn-custom"><i class="fas fa-user-plus"></i> Create your Instructor Profile (if not created)</a>
    <a href="http://localhost/PHP-OOP/PROJECT" class="btn btn-secondary btn-custom"><i class="fas fa-arrow-left"></i> Go Back to Main Page</a>
  </div>
  
</div>

<?php 
} //elseif boundary

else{
    header("location: http://localhost/PHP-OOP/PROJECT/instructor/dashboard/delete.php");
}
?>
<?php 
$match = new backend();
$login_id = $_SESSION['id'];
// echo $login_id;
$getID = $match->fetching("instructor","instructor_id",null,"registration_id = $login_id");
if(isset($_SESSION['login']) && (!empty($getID)) && ($_SESSION['role'] == 0)){
?>
<script>
        Swal.fire({
            icon: "warning",
            title: "Profile Under Review",
            html: "<p>Sorry for the inconvinence. Please wait for admin approvel after approvel you are able to create and manage courses </p>",
            footer: '<a href="http://localhost/PHP-OOP/PROJECT/instructor/dashboard/profile.php">Preview Profile</a>',
            showConfirmButton: false
        });
    </script>
<?php 
}else{
  echo null;  
?>
<!-- <div class="container" >
  <h1 class="mb-4" style="color: red;"><i class="fas fa-exclamation-circle" style="color: red !important;"></i> You are not an Instructor</h1>
  <p class="mb-4" style="color:black;">It seems like you are not an instructor yet. Please choose one of the options below:</p>
  <div>
    <a href="http://localhost/PHP-OOP/PROJECT/instructor/dashboard/edit_profile.php" class="btn btn-primary btn-custom"><i class="fas fa-user-plus"></i> Create your Instructor Profile (if not created)</a>
    <a href="http://localhost/PHP-OOP/PROJECT" class="btn btn-secondary btn-custom"><i class="fas fa-arrow-left"></i> Go Back to Main Page</a>
  </div>
  
</div> -->
<?php   
}
?>


<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-beta2/js/bootstrap.min.js"></script>
</body>
</html>
