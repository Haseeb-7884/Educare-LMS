<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;700;800&display=swap"
        rel="stylesheet">

    <!-- Font Awsomme CDN -->
    <script src="https://kit.fontawesome.com/5357644ec3.js" crossorigin="anonymous"></script>
    <title>Home Page</title>

    <style>
        .hero_special {
    color: lightgrey;
}

a {
    color: lightgrey;
}

.top-head-color {
    color: lightgrey;
}

.text-decoration-none:hover,
.hero_special:hover {
    color: red;
}

a span i {
    padding: 3px;
}

.navbar {
    background-color: white;
}

.navbar-nav .nav-item .nav-link {
    color: black;
}

.search-icon .fas {
    color: black;
}

ul li a {
    position: relative;
}

ul li a::before {
    content: "";
    position: absolute;
    top: 80%;
    height: 3px;
    width: 0%;
    background-color: red;
    /* transform: scale(0); */
    transition: 0.4s;

}

ul.navbar-nav li a:hover::before {
    /* transform: scale(1); */
    width: 100%;

}

.navbar-nav .nav-item .nav-link:hover {
    color: red;
}


.offcanvas-body {
    color: black;
}

.offcanvas-header {
    color: black;
}

.search-icon,
.fas:hover {
    color: red;
}

.bg-image {
    background-image: url('images/bg-image.jpg');
    background-position: center center;
    background-repeat: no-repeat;
    background-size: cover;
    background-attachment: fixed;
    height: 90vh;
}

    </style>
</head>

<body>

    <header>
        <div class="header-container-1 bg-dark sticky-top">
            <div class="head-1 container">
                <div class="row">
                    <div class="left col-lg-10 p-2">
                        <a href="#" class="me-5 top-head-color text-decoration-none">call +44 300 400 3456</a>
                        <span class="top-head-color">Follow us
                            <a href="" class="text-decoration-none">
                                <span>
                                    <i class="fab hero_special fa-google-plus-g ms-1"></i>
                                    <i class="fab hero_special fa-twitter"></i>
                                    <i class="fab hero_special fa-linkedin-in"></i>
                                </span>
                            </a>
                        </span>
                    </div>
                    <div class="right col-lg-2 p-2">
                        <a href="" class="text-decoration-none me-4 pe-2">Login<i class="fas fa-user-plus"></i></a>
                        <a href="" class="text-decoration-none ps-1">Regsiter<i class="fas fa-sign-in-alt"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-container-2 bg-light">
            <div class="head-2 container-fluid">

                <nav class="navbar container-fluid navbar-expand-lg navbar-light">
                    <div class="container">
                        <a class="navbar-brand" href="#">
                            <img src="bg-remove.png" class="d-block" style="height:60px" alt="">
                        </a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                            data-bs-target="#navbarSupportedContent">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">

                            <ul class="navbar-nav ms-auto mb-2 mb-lg-0 fw-bold">
                                <li class="nav-item pe-5">
                                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                                </li>

                                <li class="nav-item pe-5">
                                    <a class="nav-link" href="#">pages</a>
                                </li>

                                <li class="nav-item dropdown pe-5">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                        data-bs-toggle="dropdown">
                                        Cources Lists
                                    </a>
                                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <li><a class="dropdown-item" href="#">Action</a></li>
                                        <li><a class="dropdown-item" href="#">Another action</a></li>
                                        <li>
                                            <hr class="dropdown-divider">
                                        </li>
                                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                                    </ul>
                                </li>
                                <li class="nav-item pe-5">
                                    <a class="nav-link" href="#">Events</a>
                                </li>


                                <li class="nav-item pe-5">
                                    <a class="nav-link" href="#">Shop</a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link" href="#">Elements</a>
                                </li>

                            </ul>

                            <div class="ms-auto search-icon">
                                <a href=""><i class="fas fa-cart-arrow-down ms-3"></i></a>
                                <a href=""><i class="fas fa-search ms-3"></i></a>

                                <button class="btn btn-light ms-2 " type="button" data-bs-toggle="offcanvas"
                                    data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">
                                    <i class="fas fa-bars"></i></button>

                                <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight"
                                    aria-labelledby="offcanvasRightLabel">
                                    <div class="offcanvas-header">
                                        <h5 id="offcanvasRightLabel">Offcanvas right</h5>
                                        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="offcanvas-body">
                                        i am a body
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </header>

</body>
</html>