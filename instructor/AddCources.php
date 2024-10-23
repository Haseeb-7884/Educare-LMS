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
</head>

<body>

    <div style="background-color:purple;" class="d-flex justify-content-around pb-2 pt-2">
        <h1 class="fw-bold text-light">Step 1</h1>
        <div class="d-flex align-items-center">
            <a href="dashboard/index.php" class="btn btn-light me-4">previous page</a>
            <a href="../index.php" class="btn btn-dark">Exit</a>
        </div>
    </div>

    <div class="container mt-5">
        <div class="container d-flex justify-content-center">
            <h2 class="text-dark fw-bold fs-1">First, let's find out what type of course you're making.</h2>
        </div>

        <div class="container row mt-5 d-flex justify-content-around">
            <a href="add_cource_title.php" style="text-decoration: none;" class="col-sm-5 btn text-dark">
                <div class=" border-2 border border-dark">
                    <div class="card p-3">
                        <div class="card-body">
                            <i class="fa-brands fa-youtube"
                                style="color: #000000; font-size:40px; margin-bottom: 18px;"></i>
                            <h5 class="card-title fw-bold">
                                New Course
                            </h5>
                            <p class="card-text">
                                create rich learning experiences with help of video lectures, quizzes, coding exercises
                                etc.
                            </p>
                        </div>
                    </div>
                </div>
            </a>

            <a href="../instructor/dashboard/notes/index.php" style="text-decoration: none;" class="col-sm-5 btn text-dark">
                <div class=" border-2 border border-dark">
                    <div class="card p-3">
                        <div class="card-body">
                            <i class="fa-solid fa-sheet-plastic"
                                style="color: #000000;  font-size:40px; margin-bottom: 18px;"></i>
                            <h5 class="card-title fw-bold">
                                Upload Notes
                            </h5>
                            <p class="card-text">
                                Help students prepare for certifications exams by providing Interective Notes.
                            </p>
                        </div>
                    </div>
                </div>
            </a>

        </div>
    </div>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>


</body>

</html>