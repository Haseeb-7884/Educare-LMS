<?php 
include("../back.php");
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

    <!-- Fontawsome CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <title>Sign up</title>
    <style>
        .sign_up_container {
            height: 75vh;
            margin-top: 70px !important;
            background-color: #7c2ae8;
            margin: 0 auto;
            width: 70%;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .SignUp_first {
            height: 100%;
            flex: 1;
            background-color: white;
            padding: 20px;
        }

        .input-group-text {
            background: none !important;
            border: none !important;
        }

        .input-group {
            border-bottom: 1px solid #7c2ae8;
        }
        .input-group-added {
            border-bottom: 1px solid red;
        }

        .input-group>input::placeholder {
            color: #7c2ae8;
            opacity: 1;
        }

        .input-group-text>i {
            color: #7c2ae8;
        }

        .input-group-added>i {
            color: red;
        }

        .login-fields>input {
            border: none !important;
        }

        .input-group-added>input {
            border: none !important;
        }

        .login-fields>input:focus,
        textarea:focus,
        select:focus {
            outline: none;
            box-shadow: none;
        }

        .input-group-added>input:focus,
        textarea:focus,
        select:focus {
            outline: none;
            box-shadow: none;
        }

        .container-para {
            margin-left: 85px;
            font-weight: bold;
            margin-top: 20px;
        }

        .SignUp_second {
            height: 100%;
            flex: 1;
            background: linear-gradient(rgba(62, 36, 140, 0.877), rgba(62, 36, 140, 0.745)), url('../assets/images/signup-image.png');
            background-size: cover;
            background-position: center;
            display: flex;
            justify-content: center;
            align-items: center;
            color: white;
            flex-direction: column;
            padding: 0px 45px;
        }
        .SignUp_second > h5{
            text-align: center;
            font-size: 25px;
        }
        .custom-underline{
            text-decoration: underline;
            text-decoration-color:#7c2ae8;
            color:black;
            color: inherit;
            position: relative;
        }
        h2 .custom-underline::first-letter {
  color: #7c2ae8 !important; /* Ensure it has higher specificity */
}
    </style>
</head>

<body style="background-color: #7c2ae8;">

    <div class="container mt-5 mb-5 sign_up_container">
        <div class="SignUp_first">
            <h2> <span class="custom-underline">Sign</span> Up</h2>

            <form action="../back.php" method="post" enctype="multipart/form-data">

                <?php 
                if(isset($_GET['ObtainUser'])){
                    $ObtainUser = $_GET['ObtainUser'];
                    $ObtainEmail = $_GET['ObtainEmail'];
                    $ObtainPassword = $_GET['ObtainPassword'];
?>
<div class="input-group login-fields  mt-5">
    <span class="input-group-text">
        <i class="fa-solid fa-envelope"></i>
    </span>
    <input type="text" value="<?=$ObtainEmail?>" name="email" class="form-control" placeholder="Enter your Email">
</div>

<div class="input-group login-fields mt-4">
    <span class="input-group-text">
        <i class="fa-solid fa-lock"></i>
    </span>
    <input type="password" value="<?=$ObtainPassword?>" class="form-control" name="password" placeholder="Enter Your Password">
</div>

<div class="input-group input-group-added mt-4 mb-2">
        <span class="input-group-text">
            <i class="fa-solid fa-user" style="color:red;"></i>
        </span>
        <input type="text" value="<?=$ObtainUser?>" id="username" class="form-control" name="username" placeholder="Enter Unique Username">
</div>
<small id="usernameError" style="color: red; display: block;">Username Already Taken (try different)</small>

<?php 
                }else{
?>
<div class="input-group login-fields  mt-5">
    <span class="input-group-text">
        <i class="fa-solid fa-envelope"></i>
    </span>
    <input type="text" name="email" class="form-control" placeholder="Enter your Email">
</div>

<div class="input-group login-fields mt-4">
    <span class="input-group-text">
        <i class="fa-solid fa-lock"></i>
    </span>
    <input type="password" class="form-control" name="password" placeholder="Enter Your Password">
</div>

<div class="input-group login-fields mt-4 mb-2">
        <span class="input-group-text">
            <i class="fa-solid fa-user"></i>
        </span>
        <input type="text" id="username" class="form-control" name="username" placeholder="Enter Unique Username">
</div>
<?php 
                }


                ?>


                <button type="submit" name="register_submit" style="background-color: #7c2ae8;"
                    class="btn mt-5 fw-bold btn-primary w-100">Sign Up</button>

                <p class="container-para">Already have an Account <a href="../includes/login.php">login here</a> </p>

            </form>

        </div>
        <div class="SignUp_second">
            <h5>
                "Welcome aboard! Every course is a new adventure in learning."
            </h5>
            <p class="mt-2">Lets Countinue</p>
        </div>
    </div>
  
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
</body>

</html>