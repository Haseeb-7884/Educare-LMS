<?php
include ("../back.php"); 

$main_id = $_GET['courses_id'];

$getCources = new backend();

// var_dump($get_cources);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- Fontawesome CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- <link rel="stylesheet" href="video_gallery.css"> -->
    <link rel="stylesheet" href="../assets/css/video_gallery.css">

    <style>
    
      .second_body{
        display:flex;
        justify-content:center;
        align-items:center;
        margin-top: 80px;
      }
      .main_image_placement{
        height: 400px;
        width:520px;
        display:flex;
        justify-content:center;
        align-items:center;
        flex-direction: column;
      }
      .main_image_placement > img{
        padding-bottom:20px;
      }
    
    </style>

</head>

<body>


<?php
$get_lectures = $getCources->fetching('courses_lectures','*',null,"courses_id = '$main_id'");

if(!empty($get_lectures)){

foreach($get_lectures as $all_cources){
    // for 1st section
    $title1A = $all_cources['title1A'] ?? null;
    $title1B = $all_cources['title1B'] ?? null;
    $title1C = $all_cources['title1C'] ?? null;
    $title1D = $all_cources['title1D'] ?? null;

    $A1 = $all_cources['A1'] ?? null;
    $B1 = $all_cources['B1'] ?? null;
    $C1 = $all_cources['C1'] ?? null;
    $D1 = $all_cources['D1'] ?? null;

    $section01 = $all_cources['section01'] ?? null;

    $lecture1A = $all_cources['lecture1A'] ?? null;
    $lecture1B = $all_cources['lecture1B'] ?? null;
    $lecture1C = $all_cources['lecture1C'] ?? null;
    $lecture1D = $all_cources['lecture1D'] ?? null;

  // for 2nd section

    $title2A = $all_cources['title2A'] ?? null;
    $title2B = $all_cources['title2B'] ?? null;
    $title2C = $all_cources['title2C'] ?? null;
    $title2D = $all_cources['title2D'] ?? null;

    $A2 = $all_cources['A2'] ?? null;
    $B2 = $all_cources['B2'] ?? null;
    $C2 = $all_cources['C2'] ?? null;
    $D2 = $all_cources['D2'] ?? null;
    
    $section02 = $all_cources['section02'] ?? null;

    $lecture2A = $all_cources['lecture2A'] ?? null;
    $lecture2B = $all_cources['lecture2B'] ?? null;
    $lecture2C = $all_cources['lecture2C'] ?? null;
    $lecture2D = $all_cources['lecture2D'] ?? null;


    // for 3rd section

    $title3A = $all_cources['title3A'] ?? null;
    $title3B = $all_cources['title3B'] ?? null;
    $title3C = $all_cources['title3C'] ?? null;
    $title3D = $all_cources['title3D'] ?? null;

    $A3 = $all_cources['A3'] ?? null;
    $B3 = $all_cources['B3'] ?? null;
    $C3 = $all_cources['C3'] ?? null;
    $D3 = $all_cources['D3'] ?? null;
    
    $section03 = $all_cources['section03'] ?? null;

    $lecture3A = $all_cources['lecture3A'] ?? null;
    $lecture3B = $all_cources['lecture3B'] ?? null;
    $lecture3C = $all_cources['lecture3C'] ?? null;
    $lecture3D = $all_cources['lecture3D'] ?? null;

    // for 4rth section

    $title4A = $all_cources['title4A'] ?? null;
    $title4B = $all_cources['title4B'] ?? null;
    $title4C = $all_cources['title4C'] ?? null;
    $title4D = $all_cources['title4D'] ?? null;

    $A4 = $all_cources['A4'] ?? null;
    $B4 = $all_cources['B4'] ?? null;
    $C4 = $all_cources['C4'] ?? null;
    $D4 = $all_cources['D4'] ?? null;

    $section04 = $all_cources['section04'] ?? null;

    $lecture4A = $all_cources['lecture4A'] ?? null;
    $lecture4B = $all_cources['lecture4B'] ?? null;
    $lecture4C = $all_cources['lecture4C'] ?? null;
    $lecture4D = $all_cources['lecture4D'] ?? null;

    // for 5th section

    $title5A = $all_cources['title5A'] ?? null;
    $title5B = $all_cources['title5B'] ?? null;
    $title5C = $all_cources['title5C'] ?? null;
    $title5D = $all_cources['title5D'] ?? null;

    $A5 = $all_cources['A5'] ?? null;
    $B5 = $all_cources['B5'] ?? null;
    $C5 = $all_cources['C5'] ?? null;
    $D5 = $all_cources['D5'] ?? null;

    $section05 = $all_cources['section05'] ?? null;

    $lecture5A = $all_cources['lecture5A'] ?? null;
    $lecture5B = $all_cources['lecture5B'] ?? null;
    $lecture5C = $all_cources['lecture5C'] ?? null;
    $lecture5D = $all_cources['lecture5D'] ?? null;

?>


    <div class="container-fluid hero-section">
        <div class="hero-section-first">
    <!-- for section one (start) -->

        <?= !empty($lecture1A) ? '<div class="hero-section-first-player" id="'.$A1.'" data-bs-target="'.$A1.'">'.preg_replace('/\s(width|height)="\d*"/i', '', $lecture1A).'</div>' : null; ?>

        <?= !empty($lecture1B) ? '<div class="hero-section-first-player" id="'.$B1.'" data-bs-target="'.$B1.'" style="visibility: hidden;">'.preg_replace('/\s(width|height)="\d*"/i', '', $lecture1B).'</div>' : null; ?>

        <?= !empty($lecture1C) ? '<div class="hero-section-first-player" id="'.$C1.'" data-bs-target="'.$C1.'" style="visibility: hidden;">'.preg_replace('/\s(width|height)="\d*"/i', '', $lecture1C).'</div>' : null; ?>

        <?= !empty($lecture1D) ? '<div class="hero-section-first-player" id="'.$D1.'" data-bs-target="'.$D1.'" style="visibility: hidden;">'.preg_replace('/\s(width|height)="\d*"/i', '', $lecture1D).'</div>' : null; ?>
        
    <!-- for section one (start) -->
    <!-- for section two (start) -->

    <?= !empty($lecture2A) ? '<div class="hero-section-first-player" id="'.$A2.'" data-bs-target="'.$A2.'" style="visibility: hidden;">'.preg_replace('/\s(width|height)="\d*"/i', '', $lecture2A).'</div>' : null; ?>

    <?= !empty($lecture2B) ? '<div class="hero-section-first-player" id="'.$B2.'" data-bs-target="'.$B2.'" style="visibility: hidden;">'.preg_replace('/\s(width|height)="\d*"/i', '', $lecture2B).'</div>' : null; ?>

    <?= !empty($lecture2C) ? '<div class="hero-section-first-player" id="'.$C2.'" data-bs-target="'.$C2.'" style="visibility: hidden;">'.preg_replace('/\s(width|height)="\d*"/i', '', $lecture2C).'</div>' : null; ?>

    <?= !empty($lecture2D) ? '<div class="hero-section-first-player" id="'.$D2.'" data-bs-target="'.$D2.'" style="visibility: hidden;">'.preg_replace('/\s(width|height)="\d*"/i', '', $lecture2D).'</div>' : null; ?>

   <!-- for section two (ends) -->
   <!-- for section three (start) -->
  
<?= !empty($lecture3A) ? '<div class="hero-section-first-player" id="'.$A3.'" data-bs-target="'.$A3.'" style="visibility: hidden;">'.preg_replace('/\s(width|height)="\d*"/i', '', $lecture3A).'</div>' : null; ?>

<?= !empty($lecture3B) ? '<div class="hero-section-first-player" id="'.$B3.'" data-bs-target="'.$B3.'" style="visibility: hidden;">'.preg_replace('/\s(width|height)="\d*"/i', '', $lecture3B).'</div>' : null; ?>

<?= !empty($lecture3C) ? '<div class="hero-section-first-player" id="'.$C3.'" data-bs-target="'.$C3.'" style="visibility: hidden;">'.preg_replace('/\s(width|height)="\d*"/i', '', $lecture3C).'</div>' : null; ?>

<?= !empty($lecture3D) ? '<div class="hero-section-first-player" id="'.$D3.'" data-bs-target="'.$D3.'" style="visibility: hidden;">'.preg_replace('/\s(width|height)="\d*"/i', '', $lecture3D).'</div>' : null; ?>
 
  <!-- for section three (ends) -->
  <!-- for section four (starts) -->
  
<?= !empty($lecture4A) ? '<div class="hero-section-first-player" id="'.$A4.'" data-bs-target="'.$A4.'" style="visibility: hidden;">'.preg_replace('/\s(width|height)="\d*"/i', '', $lecture4A).'</div>' : null; ?>

<?= !empty($lecture4B) ? '<div class="hero-section-first-player" id="'.$B4.'" data-bs-target="'.$B4.'" style="visibility: hidden;">'.preg_replace('/\s(width|height)="\d*"/i', '', $lecture4B).'</div>' : null; ?>

<?= !empty($lecture4C) ? '<div class="hero-section-first-player" id="'.$C4.'" data-bs-target="'.$C4.'" style="visibility: hidden;">'.preg_replace('/\s(width|height)="\d*"/i', '', $lecture4C).'</div>' : null; ?>

<?= !empty($lecture4D) ? '<div class="hero-section-first-player" id="'.$D4.'" data-bs-target="'.$D4.'" style="visibility: hidden;">'.preg_replace('/\s(width|height)="\d*"/i', '', $lecture4D).'</div>' : null; ?>   
    
 <!-- for section four (ends) -->
  <!-- for section five (starts) -->
  <!-- <div class="hero-section-first-player" id="iframe3" data-bs-target="iframe3" style="visibility: hidden;">
            <iframe 
                src="https://www.youtube.com/embed/d2ofxg8pHfQ?si=NUgN-eDiUlWUivLD" title="YouTube video player"
                frameborder="0" allowfullscreen></iframe>
    </div> -->

<?php
    if(!empty($lecture5A)){
        $fine_lecture5A = preg_replace('/\s(width|height)="\d*"/i', '', $lecture5A);
?>
 <div class="hero-section-first-player" id="<?=$A5?>" data-bs-target="<?=$A5?>" style="visibility: hidden;">
           <?=$fine_lecture5A?>
    </div>
<?php
    }else{
ECHO null;
    }
    ?>

<?php
    if(!empty($lecture5B)){
        $fine_lecture5B = preg_replace('/\s(width|height)="\d*"/i', '', $lecture5B);
?>
 <div class="hero-section-first-player" id="<?=$B5?>" data-bs-target="<?=$B5?>" style="visibility: hidden;">
           <?=$fine_lecture5B?>
    </div>
<?php
    }else{
ECHO null;
    }
    ?>

<?php
    if(!empty($lecture5C)){
        $fine_lecture5C = preg_replace('/\s(width|height)="\d*"/i', '', $lecture5C);
?>
 <div class="hero-section-first-player" id="<?=$C5?>" data-bs-target="<?=$C5?>" style="visibility: hidden;">
           <?=$fine_lecture5C?>
    </div>
<?php
    }else{
ECHO null;
    }
    ?>
  
<?php
    if(!empty($lecture5D)){
        $fine_lecture5D = preg_replace('/\s(width|height)="\d*"/i', '', $lecture5D);
?>
 <div class="hero-section-first-player" id="<?=$D5?>" data-bs-target="<?=$D5?>" style="visibility: hidden;">
           <?=$fine_lecture5D?>
    </div>
<?php
    }else{
ECHO null;
    }
    ?>
  
   
 <!-- for section five (ends) -->

        </div>
        <div class="hero-section-second position-fixed" style="left: 75%;overflow-y:scroll;">
            <div class="hero-section-second-first">
                <h4 class="ms-3 mt-3 fw-bold">Course content</h4>
            </div>

            <div class="accordion" style="height:100vh;" id="accordionExample">

            <?php if(!empty($section01)){ ?>

                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingOne">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            
                            <?php echo !empty($section01) ? $section01 : null; ?>
                        
                        </button>
                    </h2>
                    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                        data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <ol>

                            <?php echo !empty($title1A) ? '<li><a href="#" class="fw-bold text-dark text-decoration-none" onclick="showVideo(\''.$A1.'\')"> '.$title1A.' <br><i class="fa-brands fa-youtube mt-2" style="color: #000000; font-size:23px;"><p style="display: inline-block;font-size: 18px; font-family:sans-serif; margin-left: 10px;"> 9 min</p></i></a></li>' : null; ?>

                            <?php echo !empty($title1B) ? '<li><a href="#" class="fw-bold text-dark text-decoration-none" onclick="showVideo(\''.$B1.'\')"> '.$title1B.' <br><i class="fa-brands fa-youtube mt-2" style="color: #000000; font-size:23px;"><p style="display: inline-block;font-size: 18px; font-family:sans-serif; margin-left: 10px;"> 9 min</p></i></a></li>' : null; ?>
                            
                            <?php echo !empty($title1C) ? '<li><a href="#" class="fw-bold text-dark text-decoration-none" onclick="showVideo(\''.$C1.'\')"> '.$title1C.' <br><i class="fa-brands fa-youtube mt-2" style="color: #000000; font-size:23px;"><p style="display: inline-block;font-size: 18px; font-family:sans-serif; margin-left: 10px;"> 9 min</p></i></a></li>' : null; ?>

                            <?php echo !empty($title1D) ? '<li><a href="#" class="fw-bold text-dark text-decoration-none" onclick="showVideo(\''.$D1.'\')"> '.$title1D.' <br><i class="fa-brands fa-youtube mt-2" style="color: #000000; font-size:23px;"><p style="display: inline-block;font-size: 18px; font-family:sans-serif; margin-left: 10px;"> 9 min</p></i></a></li>' : null; ?>

                            </ol>
                        </div>
                    </div>
                </div>

                <?php }else{ echo null;  }  ?>
                <?php if(!empty($section02)){ ?>

                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingTwo">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            <?php echo !empty($section02) ? $section02 : null; ?>
                        </button>
                    </h2>
                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                        data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <ol>

                            <?php echo !empty($title2A) ? '<li><a href="#" class="fw-bold text-dark text-decoration-none" onclick="showVideo(\''.$A2.'\')"> '.$title2A.' <br><i class="fa-brands fa-youtube mt-2" style="color: #000000; font-size:23px;"><p style="display: inline-block;font-size: 18px; font-family:sans-serif; margin-left: 10px;"> 9 min</p></i></a></li>' : null; ?>

                            <?php echo !empty($title2B) ? '<li><a href="#" class="fw-bold text-dark text-decoration-none" onclick="showVideo(\''.$B2.'\')"> '.$title2B.' <br><i class="fa-brands fa-youtube mt-2" style="color: #000000; font-size:23px;"><p style="display: inline-block;font-size: 18px; font-family:sans-serif; margin-left: 10px;"> 9 min</p></i></a></li>' : null; ?>

                            <?php echo !empty($title2C) ? '<li><a href="#" class="fw-bold text-dark text-decoration-none" onclick="showVideo(\''.$C2.'\')"> '.$title2C.' <br><i class="fa-brands fa-youtube mt-2" style="color: #000000; font-size:23px;"><p style="display: inline-block;font-size: 18px; font-family:sans-serif; margin-left: 10px;"> 9 min</p></i></a></li>' : null; ?>

                            <?php echo !empty($title2D) ? '<li><a href="#" class="fw-bold text-dark text-decoration-none" onclick="showVideo(\''.$D2.'\')"> '.$title2D.' <br><i class="fa-brands fa-youtube mt-2" style="color: #000000; font-size:23px;"><p style="display: inline-block;font-size: 18px; font-family:sans-serif; margin-left: 10px;"> 9 min</p></i></a></li>' : null; ?>
                             
                            </ol>
                        </div>
                    </div>
                </div>

                <?php }else{ echo null;  }  ?>
                <?php if(!empty($section03)){ ?>
        
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingThree">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        <?php echo !empty($section03) ? $section03 : null; ?>
                        </button>
                    </h2>
                    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                        data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <ol>

                            <?php echo !empty($title3A) ? '<li><a href="#" class="fw-bold text-dark text-decoration-none" onclick="showVideo(\''.$A3.'\')"> '.$title3A.' <br><i class="fa-brands fa-youtube mt-2" style="color: #000000; font-size:23px;"><p style="display: inline-block;font-size: 18px; font-family:sans-serif; margin-left: 10px;"> 9 min</p></i></a></li>' : null; ?>

                            <?php echo !empty($title3B) ? '<li><a href="#" class="fw-bold text-dark text-decoration-none" onclick="showVideo(\''.$B3.'\')"> '.$title3B.' <br><i class="fa-brands fa-youtube mt-2" style="color: #000000; font-size:23px;"><p style="display: inline-block;font-size: 18px; font-family:sans-serif; margin-left: 10px;"> 9 min</p></i></a></li>' : null; ?>

                            <?php echo !empty($title3C) ? '<li><a href="#" class="fw-bold text-dark text-decoration-none" onclick="showVideo(\''.$C3.'\')"> '.$title3C.' <br><i class="fa-brands fa-youtube mt-2" style="color: #000000; font-size:23px;"><p style="display: inline-block;font-size: 18px; font-family:sans-serif; margin-left: 10px;"> 9 min</p></i></a></li>' : null; ?>

                            <?php echo !empty($title3D) ? '<li><a href="#" class="fw-bold text-dark text-decoration-none" onclick="showVideo(\''.$D3.'\')"> '.$title3D.' <br><i class="fa-brands fa-youtube mt-2" style="color: #000000; font-size:23px;"><p style="display: inline-block;font-size: 18px; font-family:sans-serif; margin-left: 10px;"> 9 min</p></i></a></li>' : null; ?>
 
                            </ol>
                        </div>
                    </div>
                </div>
                <?php }else{ echo null;  }  ?>

                <?php if(!empty($section04)){ ?>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingFour">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                            <?php echo !empty($section04) ? $section04 : null;  ?>
                        </button>
                    </h2>
                    <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                        data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <ol>
 
                            <?php echo !empty($title4A) ? '<li><a href="#" class="fw-bold text-dark text-decoration-none" onclick="showVideo(\''.$A4.'\')"> '.$title4A.' <br><i class="fa-brands fa-youtube mt-2" style="color: #000000; font-size:23px;"><p style="display: inline-block;font-size: 18px; font-family:sans-serif; margin-left: 10px;"> 9 min</p></i></a></li>' : null; ?>

                            <?php echo !empty($title4B) ? '<li><a href="#" class="fw-bold text-dark text-decoration-none" onclick="showVideo(\''.$B4.'\')"> '.$title4B.' <br><i class="fa-brands fa-youtube mt-2" style="color: #000000; font-size:23px;"><p style="display: inline-block;font-size: 18px; font-family:sans-serif; margin-left: 10px;"> 9 min</p></i></a></li>' : null; ?>

                            <?php echo !empty($title4C) ? '<li><a href="#" class="fw-bold text-dark text-decoration-none" onclick="showVideo(\''.$C4.'\')"> '.$title4C.' <br><i class="fa-brands fa-youtube mt-2" style="color: #000000; font-size:23px;"><p style="display: inline-block;font-size: 18px; font-family:sans-serif; margin-left: 10px;"> 9 min</p></i></a></li>' : null; ?>

                            <?php echo !empty($title4D) ? '<li><a href="#" class="fw-bold text-dark text-decoration-none" onclick="showVideo(\''.$D4.'\')"> '.$title4D.' <br><i class="fa-brands fa-youtube mt-2" style="color: #000000; font-size:23px;"><p style="display: inline-block;font-size: 18px; font-family:sans-serif; margin-left: 10px;"> 9 min</p></i></a></li>' : null; ?>

                            </ol>
                        </div>
                    </div>
                </div>
                <?php }else{ echo null;  }  ?>

                <?php if(!empty($section05)){ ?>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingFive">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                            <?php echo !empty($section05) ? $section05 : null; ?>
                        </button>
                    </h2>
                    <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive"
                        data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <ol>

                            <?php echo !empty($title5A) ? '<li><a href="#" class="fw-bold text-dark text-decoration-none" onclick="showVideo(\''.$A5.'\')"> '.$title5A.' <br><i class="fa-brands fa-youtube mt-2" style="color: #000000; font-size:23px;"><p style="display: inline-block;font-size: 18px; font-family:sans-serif; margin-left: 10px;"> 9 min</p></i></a></li>' : null; ?>

                            <?php echo !empty($title5B) ? '<li><a href="#" class="fw-bold text-dark text-decoration-none" onclick="showVideo(\''.$B5.'\')"> '.$title5B.' <br><i class="fa-brands fa-youtube mt-2" style="color: #000000; font-size:23px;"><p style="display: inline-block;font-size: 18px; font-family:sans-serif; margin-left: 10px;"> 9 min</p></i></a></li>' : null; ?>

                            <?php echo !empty($title5C) ? '<li><a href="#" class="fw-bold text-dark text-decoration-none" onclick="showVideo(\''.$C5.'\')"> '.$title5C.' <br><i class="fa-brands fa-youtube mt-2" style="color: #000000; font-size:23px;"><p style="display: inline-block;font-size: 18px; font-family:sans-serif; margin-left: 10px;"> 9 min</p></i></a></li>' : null; ?>

                            <?php echo !empty($title5D) ? '<li><a href="#" class="fw-bold text-dark text-decoration-none" onclick="showVideo(\''.$D5.'\')"> '.$title5D.' <br><i class="fa-brands fa-youtube mt-2" style="color: #000000; font-size:23px;"><p style="display: inline-block;font-size: 18px; font-family:sans-serif; margin-left: 10px;"> 9 min</p></i></a></li>' : null; ?>

                            </ol>
                        </div>
                    </div>
                </div>
                <?php }else{ echo null;  }  ?>
                

                

            </div>
        </div>
    </div>

    <div class="hero-second">

        <div style="width: 913px;"
            class="hero-second-1 border-1 border-top-0 border-end-0 border-start-0 border border-secondary">

            <ul class="nav nav-pills mb-2" id="pills-tab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="btn btb-light fw-bold text-dark active" id="pills-home-tab" data-bs-toggle="pill"
                        data-bs-target="#pills-home" type="button" role="tab">Overview</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="btn btb-light fw-bold text-secondary" id="pills-profile-tab" data-bs-toggle="pill"
                        data-bs-target="#pills-profile" type="button" role="tab">Notes</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="btn btb-light fw-bold text-secondary" id="pills-contact-tab" data-bs-toggle="pill"
                        data-bs-target="#pills-contact" type="button" role="tab">Announcements</button>
                </li>

                <li class="nav-item" role="presentation">
                    <button class="btn btb-light fw-bold text-secondary" id="pills-instructor-tab" data-bs-toggle="pill"
                        data-bs-target="#pills-instructor" type="button" role="tab">Message Instructor</button>
                </li>
            </ul>   

        </div>

        <div class="tab-content" id="pills-tabContent">
            <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                <h3 class="mt-5 mb-3 fw-bold text-dark ms-3">About this course</h3>
                <p class="ms-3 mb-5" style="width: 80%;">Compelete learning for Building of Cources project with
                    Webappbuilder, Php MySQL, HTML CSS Bootsrap</p>
            </div>

            <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">

            <div class="container p-2 notes_container d-flex justify-content-between align-items-center">
            <?php 
            $courses_id = $_GET['courses_id'];
            // echo $courses_id;
            $get_notes = $getCources->fetching("notes","*",null,"courses_id = $courses_id");
            if(!empty($get_notes)){
                foreach($get_notes as $cour_data){
                    $title = $cour_data['title'];
                    $note_file = $cour_data['note_file'];

                    // Get the file extension
                    $fileExtension = pathinfo($note_file, PATHINFO_EXTENSION);

                    // Determine the file type
                    if ($fileExtension == 'txt') {
                        // echo "text file";
?>
                    <div class="inside_child_notes">
                        <div class="inside_child_notes_first">
                        <i class="fa-regular fa-file-lines"></i>
                        </div>
                        <div class="inside_child_notes_second">
                            <a href="download.php?file='<?= urlencode($note_file)?>"><h2>Download File</h2></a>
                        </div>
                    </div>
<?php 
                    } elseif ($fileExtension == 'doc' || $fileExtension == 'docx') {
                        $fileType = 'Word file';
?>
                    <div class="inside_child_notes">
                        <div class="inside_child_notes_first">
                        <i class="fa-regular fa-file-word" style="color: #0033ff;"></i>
                        </div>
                        <div class="inside_child_notes_second">
                          <a href="download.php?file='<?= urlencode($note_file)?>"><h2>Download File</h2></a>
                        </div>
                    </div>
<?php 
                    } elseif ($fileExtension == 'pdf') {
                        $fileType = 'PDF file';
?>
                    <div class="inside_child_notes">
                        <div class="inside_child_notes_first">
                        <i class="fa-regular fa-file-pdf" style="color: #ff0000;"></i>
                        </div>
                        <div class="inside_child_notes_second">
                            <a href="download.php?file='<?= urlencode($note_file)?>"><h2>Download File</h2></a>
                        </div>
                    </div>
<?php 
                    } else {
                        $fileType = 'unknown file type';
                    }

                }
            }else{
                
            }

            ?>

               

               

               
                   

                   

            </div>

            </div>

            <div class="tab-pane fade" id="pills-instructor" role="tabpanel" aria-labelledby="pills-contact-tab">
            <div class="main_container">
                <form action="student_messages.php" method="post" enctype="multipart/form-data" class="p-4">
                    <!-- <h2 class="mb-4">Send message to instructor</h2> -->

                    <h5 class="fw-bold">Message Title</h4>
                    <input type="text" name="message_title" class="form-control" placeholder="Enter Message Title">

                    <h5 class="mt-4 fw-bold">Message Body:</h5>
                    <div class="form-floating">
                    <textarea class="form-control" name="message_body" placeholder="Enter Description" style="height: 100px"></textarea>
                    <label>Comments</label>
                    </div>

                    <?php 
                    $courses_id = $_GET['courses_id'];

                    // $getCources = new backend();

                    // echo $courses_id;

                    $getInstructor = $getCources->fetching("cource","*",null,"courses_id = $courses_id");

                    if(!empty($getInstructor)){
                        foreach($getInstructor as $InstructorIDdata){
                            $instructor_get_id = $InstructorIDdata['instructor_id'];

                        }
                    }else{
                        echo "Instructor ID not found";
                    }

                    ?>

                    <input type="hidden" name="instructor_get_id" value="<?= $instructor_get_id?>">
                   
                    <input type="hidden" name="coursess_id" value="<?= $courses_id?>" placeholder="<?= $courses_id?>">

                    <h5 class="mt-4 fw-bold">Select Inquiry:</h5>
                    <select class="form-select"  name="message_inquery"  id="message_inquery">
                                <option value="" selected disabled>Select inquiry</option>
                                <option value="courseCotent">Course Content Inquiry</option>
                                <option value="AssignmentClarification">Assignment Clarification</option>
                                <!-- <option value="3">Technical Issue</option>
                                <option value="4">Feedback/Suggestion</option> -->
                    </select>

                    <input type="submit" class="mt-4 btn text-light fw-bold" style="background-color:purple;border-radius: 0%;input:hover{background-color:black;}" value="Send Message" name="student_message">

                </form>
            </div>


            
            </div>
        </div>

        <div style="width: 913px; height:28vh;"
            class="hero-second-2 border-1 border-bottom-0 border-end-0 border-start-0 border border-secondary">
            <div class="hero-second-2-01">
                <p class="ms-3 mt-4">By the numbers</p>
            </div>
            
            <?php 
            $courses_id = $_GET['courses_id'];
            $fetchdata1 = $getCources->fetching("cource","*",null,"courses_id = '$courses_id'");
            foreach($fetchdata1 as $dataGet1){
                $courses_id = $dataGet1['courses_id'];
                ?>
            <div class="hero-second-2-03">
                <p class="ms-3 mt-4">skill level: <?= $dataGet1['selecting_level'] ?></p>
                <p class="ms-3">languages: <?= $dataGet1['select_language'] ?></p>
                <p class="ms-3">Captions: Yes</p>
            </div>
            <?php 
            $fetchdata2 = $getCources->fetching("course_requirments","*",null,"courses_id = '$courses_id'");
            foreach($fetchdata2 as $dataGet2){
                $last_updated = $dataGet2['last_updated'];
            } // course_requirments for loop ends

            $fetchdata3 = $getCources->fetching("courses_lectures","*",null,"courses_id = '$courses_id'");
            foreach($fetchdata3 as $dataGet3){
                $lecture1A = !empty($dataGet3['lecture1A']) ? 1 : 0;
                $lecture1B = !empty($dataGet3['lecture1B']) ? 1 : 0;
                $lecture1C = !empty($dataGet3['lecture1C']) ? 1 : 0;
                $lecture1D = !empty($dataGet3['lecture1D']) ? 1 : 0;


                $lecture2A = !empty($dataGet3['lecture2A']) ? 1 : 0;
                $lecture2B = !empty($dataGet3['lecture2B']) ? 1 : 0;
                $lecture2C = !empty($dataGet3['lecture2C']) ? 1 : 0;
                $lecture2D = !empty($dataGet3['lecture2D']) ? 1 : 0;

                $lecture3A = !empty($dataGet3['lecture3A']) ? 1 : 0;
                $lecture3B = !empty($dataGet3['lecture3B']) ? 1 : 0;
                $lecture3C = !empty($dataGet3['lecture3C']) ? 1 : 0;
                $lecture3D = !empty($dataGet3['lecture3D']) ? 1 : 0;

                $lecture4A = !empty($dataGet3['lecture4A']) ? 1 : 0;
                $lecture4B = !empty($dataGet3['lecture4B']) ? 1 : 0;
                $lecture4C = !empty($dataGet3['lecture4C']) ? 1 : 0;
                $lecture4D = !empty($dataGet3['lecture4D']) ? 1 : 0;

                $lecture5A = !empty($dataGet3['lecture5A']) ? 1 : 0;
                $lecture5B = !empty($dataGet3['lecture5B']) ? 1 : 0;
                $lecture5C = !empty($dataGet3['lecture5C']) ? 1 : 0;
                $lecture5D = !empty($dataGet3['lecture5D']) ? 1 : 0;

                // echo $lecture3A;  
                // var_dump($lecture3A)  ;

                $AllRecords = $lecture1A+$lecture1B+$lecture1C+$lecture1D+$lecture2A+$lecture2B+$lecture2C+$lecture2D+
                $lecture3A+$lecture3B+$lecture3C+$lecture3D+$lecture4A+$lecture4B+$lecture4C+$lecture4D+
                $lecture5A+$lecture5B+$lecture5C+$lecture5D;

            } // courses_lectures for loop end
            ?>
                <?php } // courses for loop ends?>

           
            <div class="hero-second-2-03">
                <p class="ms-3 mt-4">lectures: <?= $AllRecords?></p>
                <p class="ms-3">last updated: <?= $last_updated?></p>
    
            </div>
        </div>

        <div style="width: 913px; height:14vh;"
            class="hero-second-3 border-1 border-bottom-0 border-end-0 border-start-0 border border-secondary">
            <div class="hero-second-3-01">
                <p class="ms-4 mt-4">Features</p>
            </div>
            <div class="hero-second-3-02">
                <p class="mt-4">Available on <a href="" class="fw-bold">Desktop</a></p>
            </div>
        </div>

        <div style="width: 913px; height:14vh;"
            class="hero-second-4 border-1 border-bottom-0 border-end-0 border-start-0 border border-secondary">
            <div class="hero-second-4-01">
                <p class="ms-4 mt-4">Description</p>
            </div>
            <div class="hero-second-4-02">            
                <article class="ms-3 mt-4">
                <?php 
                $courses_id = $_GET['courses_id'];
                $fetchdata4 = $getCources->fetching("course_requirments","*",null,"courses_id = '$courses_id'");
                foreach($fetchdata4 as $dataGet4){
                    $courses_id = $dataGet4['courses_id'];
                    $short_description = $dataGet4['short_description'];
                    echo $short_description;
                }
                    ?>
                    <h5 class="mt-5 fw-bold text-dark">Master Piece Script for Web Development</h5>
                    <ul style="line-height: 30px;">
                        <?php 
                      $courses_id = $_GET['courses_id'];
                      $fetchdata5 = $getCources->fetching("course_additional_info","*",null,"courses_id = '$courses_id'");
                     if(!empty($fetchdata5)){
                        foreach($fetchdata5 as $dataGet5){
                            $courses_id = $dataGet5['courses_id'];

                            $enterd_main = $dataGet5['enterd_main'];
                            $stripped_enterd_main = strip_tags($enterd_main, '<li>');

                            $cover_planning = $dataGet5['cover_planning'];
                            $final_words = $dataGet5['final_words'];
                            $instructor_instructions = $dataGet5['instructor_instructions'];
                            $instructor_planings = $dataGet5['instructor_planings'];

                            $course_prerequsites = $dataGet5['course_prerequsites'];
                            $stripped_course_prerequsites = strip_tags($course_prerequsites, '<li>');

                            echo $stripped_enterd_main;
                        } 
                     }else{
                        echo "Nothing";
                     }
                    
                        ?>
                    </ul>
                    <p class="mt-4 text-dark"><strong>Course outline - </strong>You will come to know what you will
                        learn and how to cover</p>
                    <ul style="line-height: 30px;">
                        <li>First Launch Dashbaord</li>
                        <li>Manage Assets and other files init</li>
                        <li>Making goal for cover the course</li>
                        <li>Create Database</li>
                        <li>Manage links in the sidebar</li>
                        <li>Implement code of CRUD</li>
                        <li>Add Products into Database</li>
                        <li>Add Products Details</li>
                        <li>How to add theme into Project</li>
                        <li>Only VIP Features Development</li>
                        <li>Hide and Show columns for member from dashboard</li>
                        <li>Add items into Cart</li>
                        <li>Activate the Products to Access</li>
                        <li>Display records on main page</li>
                    </ul>

                    <h5 class="fw-bold text-dark">Your Course cover planning</h5>

                    <p class="aside-para-descr">
                        <?= $cover_planning ?>
                    </p>

                    <h5 class="fw-bold text-dark">Target to create project Remaining</h5>

                    <p class="aside-para-descr">Many common things which is used in user interact base <strong>web app
                            develoment</strong>. So that why i tried my best skill to cover it with mega mind point of
                        view. I created all the master scripts got a project and cover it successfully;
                    </p>

                    <h5 class="fw-bold text-dark mt-5">Final Words</h5>

                    <p class="aside-para-descr">
                        <?= $final_words ?>
                    </p>

                    <h6 class="fw-bold text-dark" style="font-size: 18px; margin-top: 30px;">Are there any Course
                        requirements or rerequisites?</h6>

                    <ul style="font-size: 15px; line-height: 30px;">
                        <?= $stripped_course_prerequsites ?>
                    </ul>

                </article>

            </div>
        </div>
        <div style="width: 950px; height:80vh; margin-top: 163%;"
            class="hero-second-5 border-1 border-bottom-0 border-end-0 border-start-0  border border-secondary">

            <div class="hero-second-5-first">
                <p class="ms-4 mt-4">Instructor</p>
            </div>
            <?php 
                    //   $login_id = $_SESSION['id'];
                      $login_id = 1;
                      $fetchdata6 = $getCources->fetching("instructor","*",null,"registration_id = '$login_id'");
                     if(!empty($fetchdata6)){
                        foreach($fetchdata6 as $dataGet6){
                            // $courses_id = $dataGet6['courses_id'];
                            $fname = $dataGet6['fname'];
                            $lname = $dataGet6['lname'];
                            $headline = $dataGet6['headline'];
                            $instructor_img = $dataGet6['instructor_img'];
                            $biography = $dataGet6['biography'];
                            $MoreInfo = $dataGet6['MoreInfo'];
                            $teachings = $dataGet6['teachings'];
                            
                            $fullName = $fname . " " . $lname; 

                        } 
                     }else{
                        echo "Nothing";
                     }
                    
                        ?>
            <div class="hero-second-5-second">
                <div class="hero-second-5-second-sub01">
                    <img src="../<?= $instructor_img?>" alt="">
                    <div>
                        <h4 class="fw-bold mt-3 mb-1"><?= $fullName ?></h4>
                        <p style="font-size: 15px;"><?= $headline ?></p>
                    </div>
                </div>

               <a href=""><i class="fa-brands fa-youtube"style="margin-left: 13px; background-color: rgb(52, 52, 52); color:white; padding: 5px 5px 5px 5px;"></i>
               </a>
               <a href=""><i class="fa-brands fa-youtube"style="margin-left: 10px; background-color: rgb(52, 52, 52); color:white; padding: 5px 5px 5px 5px;"></i></a>

                <p class="ms-2 mt-4" style="width: 600px;">
                <?= $biography ?>
                </p>

                <h6 class="ms-2 mt-4 fw-bold" style="font-size: 19px;">know more about me</h6>

                <p class="ms-2">
                <?= $MoreInfo ?>
               
                </p>

                <h6 class="ms-2 mt-4 fw-bold" style="font-size: 19px;">Way of my Teaching</h6>

                <p class="ms-2">
                    <?= $teachings ?> 
                </p>

                <h6 class="ms-2 mt-3 fw-bold" style="font-size: 19px;">Future Planning</h6>

                <p class="ms-2">
                    <?= $instructor_planings ?>
                </p>

                <h6 class="ms-2 mt-3 fw-bold" style="font-size: 19px;">Final Instruction</h6>

                <p class="ms-2">
                <?= $instructor_instructions ?>    
                </p>

            
   
                <div class="comment_setion ms-2 mt-5 mb-5 ps-3 pe-3 pt-2">
            <h4>Leave us a comment</h4>
<form action="submit_comment.php" method="POSt">
    <?php 
    $courses_id = $_GET['courses_id'];
    // echo  $courses_id ;
    ?>
    <input type="hidden" name="courses_id" placeholder="<?= $courses_id?>" value="<?= $courses_id?>">
<div class="form-floating">
  <textarea class="form-control" placeholder="Leave a comment here" name="comment_content" id="comments" style="height: 100px"></textarea>
  <label for="comments">Comments</label>
</div> 

<input type="submit" name="comment_submit" class="btn btn_color text-light ps-2 pt-1 pe-2 pb-1 mt-3 fw-bold">

</form>
    </div>
        </div>
</div>
    </div>
<?PHP
} // first (main) for loop ends 
?>


<div style="margin-top: 30%;">
   <!-- foter section -->
</div>

<?php 
}else{
?>

<div class="second_body">
  <div class="main_image_placement">
  <img style="height: 30; width:30%;" src="../assets/images/cours.PNG">
  <h5>Curriculam is Empty</h5>
  <p>looks like your instructor have not design curriculam for this course yet.</p>
  <a href="../student/dashboard.php">Back to home page</a>
  </div>
  </div>

<?php 
}
?>

    <!-- Option 1: Bootstrap Bundle
      with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>



    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"
        integrity="sha384-o7IQeFA3aoJ64LToC86v6CBBBzQPZ1r8FtC5FbopG2jRD5M/x3dr5ZM/ZPyCZvcK"
        crossorigin="anonymous"></script>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>

    <!-- GSAP CDNS  -->
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"
        integrity="sha512-16esztaSRplJROstbIIdwX3N97V1+pZvV33ABoG1H2OyTttBxEGkTsoIVsiP1iaTtM8b3+hu2kB6pQ4Clr5yug=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js"
        integrity="sha512-Ic9xkERjyZ1xgJ5svx3y0u3xrvfT/uPkV99LBwe68xjy/mGtO+4eURHZBW2xW4SZbFrF1Tf090XqB+EVgXnVjw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script>
        function showVideo(videoId) {
            // Hide all iframes
            var iframes = document.querySelectorAll('.hero-section-first-player');
            iframes.forEach(function (iframe) {
                iframe.style.display = 'none';
                iframe.style.visibility = 'hidden'; // Hide the iframe along with display
            });

            // Show the selected iframe
            var selectedIframe = document.getElementById(videoId);

            // Toggle visibility of the selected video
            if (selectedIframe.style.visibility === 'hidden') {
                selectedIframe.style.display = 'block';
                selectedIframe.style.visibility = 'visible';
            } else {
                selectedIframe.style.display = 'none';
                selectedIframe.style.visibility = 'hidden';
            }
        }
    </script>

</body>

