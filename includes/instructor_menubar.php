<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
    integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />

<link rel="stylesheet" href="../assets/css/instructor_menubar.css">
    
  <title>Website</title>

  <style>
    .profile_first_menu > ul > li > a:hover{
      color: purple !important;
      text-decoration: underline !important;
    }
  </style>

</head>

<body>

    <div class="container-fluid profile_first bg-light">
        <div class="container d-flex justify-content-between align-items-center" style="gap:130px;">
          <div class="profile_first_logo" style="width: 13%; height:100%;">
            <img src="../../assets/images/logo/logo-removebg-preview.png" style="height: 100%; width: 100%;" alt="">
          </div>
          <div class="profile_first_menu" style="width: 87%; height:100%;">
            <ul class="d-flex justify-content-between align-items-center pt-3" style="height: 100%; width:100%;">
              <li style="list-style: none;"><a href="../../index.php" class="text-dark fw-bold text-decoration-none">Home page</a></li>
              <li style="list-style: none;"><a href="../dashboard/ins_profile.php?instructor_id=<?= $instructor_id ?>" class="text-dark fw-bold text-decoration-none">Edit Profile</a></li>
              <li style="list-style: none;"><a href="../../student/index.php" class="text-dark fw-bold text-decoration-none">Explore Courses</a></li>
              <li style="list-style: none;"><a href="../dashboard/index.php?instructor_id=<?= $instructor_id ?>" class="text-dark fw-bold text-decoration-none">Return to Dashboard</a></li>
              <li style="list-style: none;"><a href="delete.php" class="text-dark fw-bold text-decoration-none">logout</a></li>
            </ul>
          </div>
        </div>
    </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>

</body>

</html>
