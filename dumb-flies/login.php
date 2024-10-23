<?php 
// include("../back.php");
// $_SESSION['auth'] = false;
// if(isset($_POST['loginSubmit'])) {
//     $user_email = $_POST['email'];
//     $user_password = $_POST['password'];
//     $userLogin = new backend();
//     $userLoginData = $userLogin->fetching('registration','*',null,"email = '$user_email'");
//     $userPassword = $userLoginData[0]['password'];
//     if(password_verify($user_password , $userPassword)){
//         $_SESSION['auth'] = true;
//         $_SESSION['login'] = $userLoginData[0]['username'];
//         $_SESSION['id'] = $userLoginData[0]['registration_id'];
//         // echo "Login successfully";
//         header("location: ../index.php");
//     }else{
//         echo '<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>';
//         echo '<script>';
//         echo 'document.addEventListener("DOMContentLoaded", function() {';
//         echo '  Swal.fire({';
//         echo '    icon: "error",';
//         echo '    title: "Oops...",';
//         echo '    title: "Something went wrong",';
//         echo '  });';
//         echo '});';
//         echo '</script>';
//         // header("location:includes/login.php");
//     }
// }

?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
   

   <div class="container">
    <form action="../back.php" method="post" enctype="multipart/form-data">
        <h1>Welcome to Login Page</h1>
        <div class="mb-3">
          <label class="form-label">Email address</label>
          <input type="email" class="form-control" name="email">
          <div class="form-text">We'll never share your email with anyone else.</div>
        </div>
        <div class="mb-3">
          <label class="form-label">Password</label>
          <input type="password" class="form-control" name="password">
        </div>
        
        <button type="submit" name="loginSubmit" class="btn btn-primary">Submit</button>
      </form> </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

   
  </body>
</html>