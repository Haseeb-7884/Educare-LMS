<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- Fontawsome CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <title>Hello, world!</title>
    <style>
        body {
            background-color: #e7e2ff;
        }

        .main-container {
            height: 70vh;

            margin-top: 80px;
            flex-direction: column;
            width: 850px;
            border-radius: 10px;
            position: relative;
            z-index: 2;
        }

        .main-container-left {
            width: 50%;
            height: 100%;
            float: left;
            /* border: 2px solid blue; */
            background-color: white;
            border-top-left-radius: 15px;
            border-bottom-left-radius: 15px;
        }

        .main-container-right {
            width: 50%;
            height: 100%;
            float: right;
            /* border: 2px solid brown; */
            border-top-right-radius: 15px;
            border-bottom-right-radius: 15px;
            background-color: #7a68f2;
        }

        .round-btn {
            position: absolute;
            background-color: #7a68f2;
            height: 60px;
            width: 60px;
            border-radius: 60%;
            left: 17.5%;
            top: 9.5%;
            z-index: 1;
        }

        .login-container {
            /* border: 2px solid green; */
            margin-top: 70px;
            height: 60vh;
        }

        .login-form {
            width: 500px;
            margin-left: 40px;
        }

        .login-fields {
            width: 280px;
            border-radius: 20px;
        }

        .submit-btn {
            background-color: #7a68f2;
            padding-top: 10px;
            padding-bottom: 10px;
            padding-right: 15px;
            padding-left: 15px;
            color: white;
            font-weight: bold;
            margin-top: 10px;
            margin-left: 90px;
        }

        .input-background {
            background-color: #9283f3;
            /* background-color: #e9ecef; */
            border-radius: 20px;
        }

        .container-right-section {
            height: 40vh;
            width: 250px;
            background-color: #a194f2;
            border-radius: 20px;
            /* border:2px solid black; */
            margin-top: 75px;
        }

        .login-img {
            height: 40vh;
            width: 150px;
            position: absolute;
            left: 50px;
        }

        .login-img img {
            height: 100%;
            width: 100%;
        }
        .container-para{
            margin-left: 85px;
            font-weight: bold;
            margin-top: 20px;
        }
        .round-btn-last{
            position: absolute;
            background-color: white;
            height: 60px;
            width: 60px;
            border-radius: 60%;
            left: 78%;
            bottom: 12.5%;
            z-index: 1;
        }
        @media screen and (max-width: 768px) {
            body{
                border: 2px solid red;
            }
        }
    </style>
</head>

<body>

    <div class="round-btn"></div>

    <div class="container main-container">

        <div class="main-container-left">
            <div class="container login-container">
                <H3 class="text-center fw-bold mt-3">LOGIN</H3>
                <p class="text-center">Here to get started visiting our website</p>

                <form class="container login-form" action="../back.php" method="post" enctype="multipart/form-data">
                    
                    <div class="input-group login-fields mb-3">
                        <span class="input-group-text">
                            <!-- <i class="fa-solid fa-user"></i> -->
                            <!-- <i class="fa-solid fa-envelope"></i> -->
                            <i class="fa-solid fa-user"></i>
                        </span>
                        <input type="text" name="username" class="form-control" placeholder="username">
                    </div>

                    <div class="input-group login-fields mb-3">
                        <span class="input-group-text">
                            <i class="fa-solid fa-lock"></i>
                        </span>
                        <input type="password" class="form-control" name="password" placeholder="password">
                    </div>
                    <button type="submit" name="loginSubmit" class="btn submit-btn">Login now</button>
                </form>

                <p class="container-para">Do not have Account <a href="../includes/register.php">Sign up</a> </p>

            </div>
        </div>
        <div class="main-container-right">

            <div class="container container-right-section position-relative">
                <div class="login-img">
                    <img src="../assets/images/login.png" alt="">
                </div>
            </div>

        </div>
    </div>
    <div class="round-btn-last"></div>

<script
  src="https://code.jquery.com/jquery-3.7.1.min.js"
  integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo="
  crossorigin="anonymous"></script>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>


</body>

</html>