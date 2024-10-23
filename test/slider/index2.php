<?php 
include("../../back.php");
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

    <title>Hello, world!</title>
    <link rel="stylesheet" href="../../assets/css/swiper-bundle.min.css">
    <link rel="stylesheet" href="../../assets/css/home.css">
    <link rel="stylesheet" href="../../assets/css/responsive.css">

    <style>

        .nav-list-section {
            list-style: none;
            position: absolute;
            top: -35%;
            left: 82.5%;
            width: 140px;
        }
        .nav-list-section > ul{
            list-style: none;
        }
        .swiper-button-next{
            background-color: blue;
            color: white;
            height: 35px; /* Adjust as needed */
            width: 35px; /* Adjust as needed */
            border-radius: 50%;
        }
        .swiper-button-prev{
            background-color: blue;
            color: white;
            height: 35px; /* Adjust as needed */
            width: 35px; /* Adjust as needed */
            border-radius: 50%;
            /* margin-right: 30px; */
        }
    </style>
</head>

<body>


    <div class="container mt-5 d-flex justify-content-left align-items-center">
        <h3> <strong>
                Some Other <span class="main_font_color"> Courses </span>
            </strong>
        </h3>
    </div>



    <!-- Slider main container -->
    <div class="position-relative">
    <div class="swiper container mt-4">
        <!-- Additional required wrapper -->
        <div class="swiper-wrapper">
            <!-- Slides -->
            <div class="swiper-slide">
            <div class="row row-cols-1 row-cols-lg-4 g-3 g-lg-3">
            <?php 
            $SpecialCources = new backend();

            $Coup = $SpecialCources->fetching('coupons');

            $coup_slice = array_slice($Coup, 0, 3);

            if(!empty($coup_slice)){
            foreach($Coup as $imp_data){
            $cours_id = $imp_data['courses_id'];

            $Cour = $SpecialCources->fetching('cource','*',null,"courses_id = $cours_id");

            foreach ($Cour as $discounted) {
            if (true){
                $course_id = $discounted['courses_id'];
                $Course_Title = $discounted['course_title'];
                $Course_Img = $discounted['course_img'];
                $Course_Video = $discounted['course_video'];
                $Instructor_Id = $discounted['instructor_id'];
               ?>
               
                    <a href="" class="col text-decoration-none text-dark">
                        <div class="card h-100">
                            <img src="assets/images/web-development.jpg" class="card-img-top p-2" alt="...">
                            <div class="card-body">
                                <h5 class="card-title"><?= $Course_Title ?></h5>
                                <div style="color:#005eff;" class="d-flex justify-content-between">
                                    <p class="card-text"> 5.5
                                        <i class="fa-solid fa-star ms-2" style="color: #ffc800;"></i>
                                        <i class="fa-solid fa-star" style="color: #ffc800;"></i>
                                        <i class="fa-solid fa-star" style="color: #ffc800;"></i>
                                        <i class="fa-solid fa-star" style="color: #ffc800;"></i>
                                        <i class="fa-solid fa-star" style="color: #ffc800;"></i>
                                    </p>
                                    <?php 
                                $Discounted = $SpecialCources->fetching('coupons','*',null,"courses_id = $course_id");   
                                if(!empty($Discounted)){

                                foreach($Discounted as $discountedPrice){
                                    $Courses_id =  $discountedPrice['courses_id'];
                                    $discountPercent =  $discountedPrice['coupon_percent'];
                                    $priced = $SpecialCources->fetching('course_prices','*',null,"courses_id = $course_id");
                                    foreach($priced as $CommonPrice){
                                        $Course_price =  $CommonPrice['course_price'];
                                        if($Course_price != 'Free'){
                                        $discount_percentage = $discountPercent / 100;
                                        $discount_amount = $discount_percentage * $Course_price;
                                        $final_price = $Course_price - $discount_amount;
                                        ?>
                                          <p class="fw-bold">
                                            <?= $final_price ?>
                                          </p>
                                          <p class="fw-bold">
                                            <strike><?= $Course_price ?></strike>
                                          </p>
                                        <?php 
                                            // $counter++;
                                }// if condition ends
                                elseif($Course_price === 'Free'){
                                    ?>
                                    <p class="fw-bold">
                                    <?= $Course_price ?>
                                    </p>
                                    <?php 
                                }
                                    }// loop ends here
                                } // outer loop ended        
                            }else{
                                echo null;
                            }

                                ?>
                                    
                                </div>
                              
                                <div>
                                    <p>Mr Instructor</p>
                                </div>
                            </div>
                        </div>
                    </a>
             
        <?php
                    } // if condition ends 
        } // for loop ends
} // first one if ends here 
}else{
    echo null;
}

        ?>
           </div>
            </div>

            <div class="swiper-slide">
                <div class="row row-cols-1 row-cols-lg-4 g-3 g-lg-3">
                    <a href="" class="col text-decoration-none text-dark">
                        <div class="card h-100">
                            <img src="assets/images/web-development.jpg" class="card-img-top p-2" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Content1</h5>
                                <div style="color:#005eff;" class="d-flex justify-content-between">
                                    <p class="card-text"> 5.5
                                        <i class="fa-solid fa-star ms-2" style="color: #ffc800;"></i>
                                        <i class="fa-solid fa-star" style="color: #ffc800;"></i>
                                        <i class="fa-solid fa-star" style="color: #ffc800;"></i>
                                        <i class="fa-solid fa-star" style="color: #ffc800;"></i>
                                        <i class="fa-solid fa-star" style="color: #ffc800;"></i>
                                    </p>
                                    <p class="fw-bold">$50.00</p>
                                </div>
                                <div>
                                    <p>Mr Instructor</p>
                                </div>
                            </div>
                        </div>
                    </a>

                    <a href="" class="col text-decoration-none text-dark">
                        <div class="card h-100">
                            <img src="assets/images/web-development.jpg" class="card-img-top p-2" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Content2</h5>
                                <div style="color:#005eff;" class="d-flex justify-content-between">
                                    <p class="card-text"> 5.5
                                        <i class="fa-solid fa-star ms-2" style="color: #ffc800;"></i>
                                        <i class="fa-solid fa-star" style="color: #ffc800;"></i>
                                        <i class="fa-solid fa-star" style="color: #ffc800;"></i>
                                        <i class="fa-solid fa-star" style="color: #ffc800;"></i>
                                        <i class="fa-solid fa-star" style="color: #ffc800;"></i>
                                    </p>
                                    <p class="fw-bold">$50.00</p>
                                </div>
                                <div>
                                    <p>Mr Instructor</p>
                                </div>
                            </div>
                        </div>
                    </a>

                    <a href="" class="col text-decoration-none text-dark">
                        <div class="card h-100">
                            <img src="assets/images/web-development.jpg" class="card-img-top p-2" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Content3</h5>
                                <div style="color:#005eff;" class="d-flex justify-content-between">
                                    <p class="card-text"> 5.5
                                        <i class="fa-solid fa-star ms-2" style="color: #ffc800;"></i>
                                        <i class="fa-solid fa-star" style="color: #ffc800;"></i>
                                        <i class="fa-solid fa-star" style="color: #ffc800;"></i>
                                        <i class="fa-solid fa-star" style="color: #ffc800;"></i>
                                        <i class="fa-solid fa-star" style="color: #ffc800;"></i>
                                    </p>
                                    <p class="fw-bold">$50.00</p>
                                </div>
                                <div>
                                    <p>Mr Instructor</p>
                                </div>
                            </div>
                        </div>
                    </a>

                    <a href="" class="col text-decoration-none text-dark">
                        <div class="card h-100">
                            <img src="assets/images/web-development.jpg" class="card-img-top p-2" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Content4</h5>
                                <div style="color:#005eff;" class="d-flex justify-content-between">
                                    <p class="card-text"> 5.5
                                        <i class="fa-solid fa-star ms-2" style="color: #ffc800;"></i>
                                        <i class="fa-solid fa-star" style="color: #ffc800;"></i>
                                        <i class="fa-solid fa-star" style="color: #ffc800;"></i>
                                        <i class="fa-solid fa-star" style="color: #ffc800;"></i>
                                        <i class="fa-solid fa-star" style="color: #ffc800;"></i>
                                    </p>
                                    <p class="fw-bold">$50.00</p>
                                </div>
                                <div>
                                    <p>Mr Instructor</p>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>

        </div>
        <!-- If we need pagination -->
        <div class="swiper-pagination"></div>


    </div>

    
    <nav class="nav-list-section">
        <ul class="">
            <li class="">
                <div class="swiper-button-next"></div>
            </li>
            <li class="">
                <div class="swiper-button-prev"></div>
            </li>
        </ul>
    </nav>

</div>

    <script src="../../assets/js/swiper-bundle.min.js"></script>
    <script src="../../assets/js/swiper.js"></script>
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>

</body>

</html>