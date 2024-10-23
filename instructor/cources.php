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
    <style>
        .course_search_icon {
            color: #005eff;
            position: absolute;
            left: 180px;
        }
        .course_section{
            height: 230px;
            padding-bottom: 20px;
        }
        .course_section img{
            width: 100%;
            height: 100%;
        }
    </style>
</head>

<body>


    <div class="d-flex justify-content-between align-items-center mt-5 container">

        <div>
            <form class="position-relative">
                <i class="fa-solid fa-magnifying-glass pt-2 pe-3 course_search_icon"></i>
                <input class="form-control me-2 rounded-pill" type="search" placeholder="Search">
            </form>
        </div>

        <a href="../AddCources.php" class="btn btn-primary fw-bold fs-5 p-2">New Course</a>
    </div>

    <div class="container mt-5 d-flex justify-content-around  border-1 border-secondary border align-items-center" style="background-color:white;">
        <div class="col-md-3 course_section"><img src="https://s.udemycdn.com/instructor/dashboard/engaging-course.jpg" alt=""></div>
        <div class="col-md-6">
            <h2 class="mt-3">Create an Engagging Course</h2>
            <p class="mt-3">Whether you've been teaching for years or are teaching for the first time, you can make an
                engaging course. We've compiled resources and best practices to help you get to the next level, no matter where
                you're starting.</p>
            <a href="../AddCources.php">Get Started</a>
        </div>
    </div>

<div class="container mt-5">
    <div class="row d-flex justify-content-between">
        <div class="col-md-6 ">
            <div class="card mb-3" style="max-width: 540px;">
                <div class="row g-0 border-1 border-secondary border">
                  <div class="col-md-4">
                    <img src="https://s.udemycdn.com/instructor/dashboard/video-creation.jpg" class="img-fluid rounded-start" alt="...">
                  </div>
                  <div class="col-md-8">
                    <div class="card-body">
                      <h5 class="card-title mt-3">Get Started with Video</h5>
                      <p class="card-text">
                        Quality video lectures can set your course apart. Use our resources to learn the basics.
                      </p>
                      <a href="#" class="card-text">Get Started</a>
                    </div>
                  </div>
                </div>
              </div>
        </div>
        <div class="col-md-6 ">
            <div class="card mb-3" style="max-width: 540px;">
                <div class="row g-0 border-1 border-secondary border">
                  <div class="col-md-4">
                    <img src="https://s.udemycdn.com/instructor/dashboard/build-audience.jpg" class="img-fluid rounded-start" alt="...">
                  </div>
                  <div class="col-md-8">
                    <div class="card-body">
                      <h5 class="card-title mt-3">Build Your Audience</h5>
                      <p class="card-text">
                        Set your course up for success by building your audience.
                      </p>
                      <a href="#" class="card-text">Get Started</a>
                    </div>
                  </div>
                </div>
              </div>
        </div>
    </div>
</div>

<p class="text-center mt-5 mb-5">Have Questions? Here are most popular instructor resources</p>


<div class="container mb-5">

    <div class="row">
        <div class="col">
          <div class="card">
            <div class="card-body">
                <i class="fa-brands fa-youtube" style="color: #000000; font-size:50px; margin-left: 60px; margin-bottom: 18px;"></i>
              <h5 class="card-title text-center mb-3">
                <a href="">Card title</a>
              </h5>
              <p class="card-text text-center">Send a sample video, get expert feedback</p>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card">
            <div class="card-body">
                <i class="fa-solid fa-message" style="color: #000000; font-size:50px; margin-left: 60px; margin-bottom: 18px;"></i>
                <h5 class="card-title text-center mb-3">
                    <a href="" class="text-decoration-none">Card title</a>
                </h5>
                <p class="card-text text-center">Send a sample video, get expert feedback</p>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card">
            <div class="card-body">
                <i class="fa-solid fa-chalkboard-user" style="color: #000000; font-size:50px; margin-left: 60px; margin-bottom: 18px;"></i>
                <h5 class="card-title text-center mb-3">
                    <a href="" class="text-decoration-none">Card title</a>
                </h5>
                <p class="card-text text-center">Send a sample video, get expert feedback</p>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card">
            <div class="card-body">
                <i class="fa-solid fa-arrow-trend-up" style="color: #000000; font-size:50px; margin-left: 60px; margin-bottom: 18px;"></i>
                <h5 class="card-title text-center mb-3">
                    <a href="" class="text-decoration-none">Card title</a>
                </h5>
                <p class="card-text text-center">Send a sample video, get expert feedback</p>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card">
            <div class="card-body">
                <i class="fa-solid fa-circle-question" style="color: #000000; font-size:50px; margin-left: 60px; margin-bottom: 18px;"></i>
                <h5 class="card-title text-center mb-3">
                    <a href="" class="text-decoration-none">Card title</a>
                </h5>
                <p class="card-text text-center">Send a sample video, get expert feedback</p>
            </div>
          </div>
        </div>
      </div>
</div>
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>

</body>

</html>