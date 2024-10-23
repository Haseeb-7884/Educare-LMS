
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />

    <title>Hello, world!</title>

    <!-- <link rel="stylesheet" href="navbar.css"> -->
    <link rel="stylesheet" href="../assets/css/navbar.css">
</head>

<body>
    <div class="navbar_bg">
        <input type="checkbox" id="check">
        <label for="check" class="checkboxbtn"><i class="fa-solid fa-bars"></i></label>
        <label class="navbar_logo">
            <!-- <img src="../assets/images/logo/logo-removebg-preview.png" alt=""> -->
            <img src="assets/images/logo/logo-removebg-preview.png" alt="">
        </label>

        <div class="navbar_menu">
            <ul>
                <li class="hidden_items"><a href="" class="active text-decoration underline fw-bold" style="color:purple;">Home</a></li>
                <li class="hidden_items"><a target="_blank" href="includes/pages/about.php">About</a></li>
                <li class="hidden_items"><a target="_blank" href="includes/pages/contact.php">Contact</a></li>
                <li class="hidden_items"><a target="_blank" href="student/index.php">Courses</a></li>
                <li class="hidden_items"><a target="_blank" href="instructor/dashboard/resources/index.php">FAQs</a></li>
                <li class="hidden_items"><a href="instructor/dashboard/index.php">Instructor</a></li>
                <li class="hidden_items"><a href="">Privacy Policy</a></li>

                <li class="mobile_responsive_one">
                    <div class="profile_right">
                    <?php 
                    $NewObjMobile2 = new backend();
                    if(isset($_SESSION['login'])){

                    $LoginId = $_SESSION['id'];

                    $CoursesDataMobile2 =  $NewObjMobile2->fetching('student','*',null,"registration_id = $LoginId");
                    
                    if(!empty($CoursesDataMobile2)){


                    foreach($CoursesDataMobile2 as $AllrecordsMobile2){
                        $fnameMobile = $AllrecordsMobile2['sfname'];
                        $first = substr($fnameMobile, 0, 1);

                        $lnameMobile = $AllrecordsMobile2['slname'];
                        $last = substr($lnameMobile, 0, 1);
                        
                        $compeleteNameAlphaMobile2 = $first . $last; 

                        if(!empty($compeleteNameAlphaMobile2)){
?>
                        <div class="profile_responsive">
                            <a href="http://localhost/PHP-OOP/PROJECT/instructor/dashboard/profile.php">
                            <?=  $compeleteNameAlphaMobile2  ?>
                            </a>
                        </div> 
<?php 
                        } // inner if condition
                        else{
?>
 <a style="display:none; visiblity:hidden; background-color:white" href="">
                        &nbsp;
                        </a>
<?php 
                        } // inner else condition
                        ?>

<?php 
                    } // for loop ends

                    
                    }// not if (data) ends 
                    else{
                   echo null;
                    }// not else (data) ends 
                    
                }
                    else{
                        echo null;   
                    }
                     ?>

                    </div>
                    <div class="profile_left">

                    <?php 
                    $NewObjMobile3 = new backend();

                    if(isset($_SESSION['login'])){
            
                    $LoginId = $_SESSION['id'];

                    $CoursesDataMobile4 =  $NewObjMobile3->fetching('student','*',null,"registration_id = '$LoginId'");                    
                    
                    if(!empty($CoursesDataMobile4)){

                    foreach($CoursesDataMobile4 as $AllrecordsMobile){
                        $fname = $AllrecordsMobile['sfname'];
                        $lname = $AllrecordsMobile['slname'];
                        $compeleteNameMobile = $fname ."&nbsp;". $lname;
                        ?>

                        <a href="http://localhost/PHP-OOP/PROJECT/instructor/dashboard/profile.php" style="text-decoration: none; color: black;">
                        <h2> 
                            <?= 'Hi,' . $fname ?> <?= $lname ?>
                    </h2>
                        <p>Welcome back</p>
                       </a>

                        <?php 
                    }// loop ends

                } // inner if ends here 
                else{
                    $LoginId = $_SESSION['id'];
                    $RegistrationObject = new backend();
                    $RegistrationMain =  $RegistrationObject->fetching('registration','*',null,"registration_id = $LoginId");   
                    if(!empty($RegistrationMain)){
                       foreach($RegistrationMain as $RegisterData){
                           $username = $RegisterData['username'];
                           $email = $RegisterData['email'];
                           echo $email;
                       }
                    }else{
                       echo "Not found the id";
                    }

                } // inner else ends here 

                }else{
?>
    
     <div class="mobile_login_btns">
        <a href="http://localhost/PHP-OOP/PROJECT/includes/login.php" >Log in</a>
        <a href="http://localhost/PHP-OOP/PROJECT/includes/register.php">Sign up</a>
     </div>
    
<?php
                }

?>
                       

                    </div>
                </li>

                <li class="mobile_responsive_two">
                
                      <div class="accordion" id="accordionPanelsStayOpenExample">
                        <div class="accordion-item accordian_position">
                          <h2 class="accordion-header" id="panelsStayOpen-headingOne">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
                                <strong>See More Pages</strong>
                            </button>
                          </h2>
                          <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show" aria-labelledby="panelsStayOpen-headingOne">
                            <div class="accordion-body">
                                <ul class="accordian_body_content text-center">
                                    <li><a href="">Home</a></li>
                                    <li><a href="">About</a></li>
                                    <li><a href="">Contact</a></li>
                                    <li><a href="">Instructor</a></li>
                                    <li><a href="">Cources</a></li>
                                </ul>
                            </div>
                          </div>
                        </div>
                    </div>


                </li>

                <li class="mobile_responsive_three">
                    <h5>Learn</h5>
                    <a href="#">My learning</a>
                </li>

                <li class="mobile_responsive_four">
                    <h5>Most Popluar</h5>
                    <a href="#">Development</a>
                    <a href="#">Marketing</a>
                    <a href="#">IT & Software</a>
                    <a href="#">Office Productivity</a>
                    <a href="#">Ethical Hacking</a>
                    <a href="#">Machine Learning & AI</a>
                </li>

                <li class="mobile_responsive_five">
                    <a href=""><i class="fa-regular fa-heart"> <span class="badge badge_special_icon">
                        <p>1</p>
                    </span> </i> </a>
                    <a href=""> <i class="fa-solid fa-cart-shopping"> <span class="badge badge_special_icon">
                        <p>1</p>
                    </span> </i> </a>

                    <?php 
                    
                    ?>
                    <a href=""> <i class="fa-regular fa-bell"> <span class="badge badge_special_icon">
                        <p>1</p>
                    </span> </i> </a> 

                </li>

            </ul>

        </div>
     
        <div class="navbar_icons">
        <?php 
        $NewObj = new backend();
    
        if(isset($_SESSION['login'])){
        
        $LoginId = $_SESSION['id'];
        
        $CoursesData =  $NewObj->fetching('favourite_courses','*',null,"registration_id = $LoginId");
  
        if (!empty($CoursesData)) {
            $all = count($CoursesData);
?>
        <a target="_blank" href="http://localhost/PHP-OOP/PROJECT/student/dashboard.php"><i class="fa-regular fa-heart"> <span class="badge badge_special_icon">
                    <p>
                       <?=
                        $all
                       ?>
                    </p>
            </span> </i> </a>
<?php 
// inside else 
}// inner if condition
else{
  echo null;
}
    }else{
  echo null;
    }
        ?>

 <?php 
        $NewObj2 = new backend();
        if(isset($_SESSION['login'])){

        $LoginId = $_SESSION['id'];

        $CoursesData2 =  $NewObj2->fetching('cart_items','*',null,"registration_id = $LoginId");

        if (!empty($CoursesData2)) {
            $all2 = count($CoursesData2);
        ?>
            <a target="_blank" href="http://localhost/PHP-OOP/PROJECT/student/section/cart.php"> <i class="fa-solid fa-cart-shopping"> <span class="badge badge_special_icon">
                        <p><?= $all2 ?></p>
                    </span> </i> </a>
        <?php 
        } // inner if condition 
        else{
    // echo "no items in cart";
?>
 <a target="_blank" href="http://localhost/PHP-OOP/PROJECT/student/section/cart.php"> <i class="fa-solid fa-cart-shopping"> </i> </a>
<?php     
        } // inner else condition 
        }else{
?>
        <a target="_blank" href="http://localhost/PHP-OOP/PROJECT/student/section/cart.php">
                <i class="fa-solid fa-cart-shopping"> </i>
        </a>
   <?php
        }
        ?>

        <?php 
        $NewObj6 = new backend();
        if(isset($_SESSION['login'])){

        $LoginId = $_SESSION['id'];

        // here the data for only the dummy as it changed for the students also 
        $CoursesData6 =  $NewObj6->fetching('favourite_courses','*',null,"registration_id = $LoginId");

        if (!empty($CoursesData6)) {
            $all6 = count($CoursesData6);
        ?>
            <a target="_blank" href=""> <i class="fa-regular fa-bell"> <span class="badge badge_special_icon">
                        <p><?= $all6 ?></p>
                    </span> </i> </a> 
<?php 
        } // inner if condition 
        else{
// echo "<h6>Messages here</h6>";
echo null;
        } // inner else condition 
        }else{
?>
    <div class="d-flex justify-content-between align-items-center">
        <a href="http://localhost/PHP-OOP/PROJECT/includes/login.php" class="login_credentials_right btn fw-bold btn-sm border border-1 border-dark me-4">Log in</a>
        <a href="http://localhost/PHP-OOP/PROJECT/includes/register.php" class="login_credentials_left btn fw-bold btn-sm btn-dark text-light border border-1 border-dark">Sign up</a>
    </div>
<?php 
// echo null;
        }
        ?>

    <div class="profile-wrapper">
         
         
         <?php 
                    $NewObjMain2 = new backend();
                    if(isset($_SESSION['login'])){

                    $LoginId = $_SESSION['id'];

                    $CoursesDataMain2 =  $NewObjMain2->fetching('student','*',null,"registration_id = $LoginId");
                    
                    if(!empty($CoursesDataMain2)){

                    foreach($CoursesDataMain2 as $AllrecordsMain2){
                        $fname = $AllrecordsMain2['sfname'];
                        $firstName = substr($fname, 0, 1);

                        $lname = $AllrecordsMain2['slname'];
                        $lastName = substr($lname, 0, 1);
                        
                        $compeleteNameAlpha2 = $firstName . $lastName; 

                        if(!empty($compeleteNameAlpha2)){
?>
<div class="profile position-relative">
                        <a href="http://localhost/PHP-OOP/PROJECT/instructor/dashboard/profile.php">
                        <?=  $compeleteNameAlpha2  ?>
                        </a> 
</div>                        
<?php 
                        } // inner if condition
                        else{
?>
 <a style="display:none; visiblity:hidden; background-color:white" href="">
                        &nbsp;
                        </a>
                   
<?php 
                        } // inner else condition
                        ?>
    
                        <?php 
                    } // for loop ends

                } // inner if ends 
                else{
                    $LoginId = $_SESSION['id'];
                    $RegistrationObject = new backend();
                    $RegistrationMain =  $RegistrationObject->fetching('registration','*',null,"registration_id = $LoginId");   
                    if(!empty($RegistrationMain)){
                       foreach($RegistrationMain as $RegisterData){
                           $username = $RegisterData['username'];
                           echo "<strong style='cursor:pointer'>Welcome&nbsp; <span style='color:purple;'>$username</span> </strong>";
                       }
                    }else{
                       echo "Not found the id";
                    }

                }// inner else ends 
                    
                }
                    else{
                        ?>
                        <a style="display:none; visiblity:hidden; background-color:white" href="">
                        &nbsp;
                        
                            <!-- $LoginId = $_SESSION['id'];
                            $RegistrationObject = new backend();
                            $RegistrationMain =  $RegistrationObject->fetching('registration','*',null,"registration_id = $LoginId");   
                            if(!empty($RegistrationMain)){
                               foreach($RegistrationMain as $RegisterData){
                                   $username = $RegisterData['username'];
                                   echo $username;
                               }
                            }else{
                               echo "Not found the id";
                            } -->
                      
                        </a>
                    <?php   
                    }
                     ?>
         


            
            <div class="menu_content">
                <!-- first section starts -->
                   <div class="top_menu_bar">
                     <div class="d-flex top_menu_bar_first justify-content-between align-items-center">
                       
                        <?php 
                    $NewObjMain = new backend();

                    if(isset($_SESSION['login'])){
            
                    $LoginId = $_SESSION['id'];
            
                    $CoursesDataMain =  $NewObjMain->fetching('student','*',null,"registration_id = $LoginId");
                        
                   if(!empty($CoursesDataMain)){

                    
                    foreach($CoursesDataMain as $AllrecordsMain){
                        $fname = $AllrecordsMain['sfname'];
                        $firstName = substr($fname, 0, 1);

                        $lname = $AllrecordsMain['slname'];
                        $lastName = substr($lname, 0, 1);
                        
                        $compeleteNameAlpha = $firstName . $lastName; 
                        ?>
 <div class="section_profile">
<a href="http://localhost/PHP-OOP/PROJECT/instructor/dashboard/profile.php" >
  <?= $compeleteNameAlpha ?>
</a>
</div>
    <?php } // for loop ends

} // inner if ends
else{
$LoginId = $_SESSION['id'];
                    $RegistrationObject = new backend();
                    $RegistrationMain =  $RegistrationObject->fetching('registration','*',null,"registration_id = $LoginId");   
                    if(!empty($RegistrationMain)){
                       foreach($RegistrationMain as $RegisterData){
                           $username = $RegisterData['username'];
                        //    echo $username;
                       }
                    }else{
                       echo "Not found the id";
                    }
            
} // inner else ends 

}else{
    echo null;
?>
<!-- <a href="http://localhost/PHP-OOP/PROJECT/instructor/dashboard/profile.php" >
  MN
</a> -->

<?php              
}
    ?>
                    
                        <div class="d-flex top_menu_bar_second justify-content-between align-items-center">
                            <p>
                    <?php 
                    $NewObj3 = new backend();

                    if(isset($_SESSION['login'])){
            
                    $LoginId = $_SESSION['id'];

                    
                    $CoursesData4 =  $NewObj3->fetching('student','*',null,"registration_id = $LoginId");
                    
                    if(!empty($CoursesData4)){

                   

                    foreach($CoursesData4 as $Allrecords){
                        $fname = $Allrecords['sfname'];
                        $lname = $Allrecords['slname'];
                        $compeleteName = $fname ."&nbsp;". $lname;
                        ?>
                    <a  href="http://localhost/PHP-OOP/PROJECT/instructor/dashboard/profile.php">
                        <?= $compeleteName  ?>
                    </a>
                        <?php 
                    }// loop ends
                } // inner if ends 
                else{
                
                    $LoginId = $_SESSION['id'];
                    $RegistrationObject = new backend();
                    $RegistrationMain =  $RegistrationObject->fetching('registration','*',null,"registration_id = $LoginId");   
                    if(!empty($RegistrationMain)){
                       foreach($RegistrationMain as $RegisterData){
                           $username = $RegisterData['username'];
                           echo "<strong style='cursor:pointer'>Welcome&nbsp; <span style='color:purple;'>$username</span> </strong>";
                       }
                    }else{
                       echo "Not found the id";
                    }
            
                } // inner else ends here 

                }else{
?>
 <!-- <a  href="http://localhost/PHP-OOP/PROJECT/instructor/dashboard/profile.php"> -->
                     <?= null ?>
                    <!-- </a> -->
<?php
                }

?>


                            <?php 
                    $NewObj4 = new backend();
                    if(isset($_SESSION['login'])){
            
                    $LoginId = $_SESSION['id'];
    
                    $CoursesData5 =  $NewObj4->fetching('registration','*',null,"registration_id = $LoginId");
                        
                    foreach($CoursesData5 as $Emailed){
                        $email = $Emailed['email'];
                        ?>
                            <span><?= $email ?></span> 
                        <?php 
                    }// for loop ends here
                 }
                 else{
                    echo null;
                 } ?>
                        </p>
                        </div>
                     </div>
                   </div>
                     <!-- first section ends -->
                     <hr>
                     <!-- second section start -->
                     <div class="second_menu_bar d-flex justify-content-between align-items-center">
                        <a target="_blank" href="http://localhost/PHP-OOP/PROJECT/student/dashboard.php" class="second_menu_bar_content">
                            <p>My learning</p>
                            <p style="visibility:hidden;">1</p>
                        </a>

                        <a target="_blank" href="http://localhost/PHP-OOP/PROJECT/student/section/cart.php" class="second_menu_bar_content">
                            <p>My cart</p>
                            <?php 
                            $NewObjMobile2 = new backend();
                            if(isset($_SESSION['login'])){

                            $LoginId = $_SESSION['id'];

                            $CoursesDataMobile2 =  $NewObjMobile2->fetching('cart_items','*',null,"registration_id = $LoginId");

                            if (!empty($CoursesDataMobile2)) {
                                $allMobile2 = count($CoursesDataMobile2);
                            ?>
                                <p><?= $allMobile2 ?></p>
                            <?php 
                            } // inner if condition 
                            else{
                        echo null;
                            } // inner else condition 
                            }else{
                        echo null;
                            }
        ?>
                           
                        </a>

                        <a target="_blank" href="http://localhost/PHP-OOP/PROJECT/student/dashboard.php" class="second_menu_bar_content">
                            <p>My Favourites</p>
                            <?php 
                        $NewObjMobile6 = new backend();
                        if(isset($_SESSION['login'])){

                        $LoginId = $_SESSION['id'];

                        // here the data for only the dummy as it changed for the students also 
                        $CoursesDataMobile6 =  $NewObjMobile6->fetching('favourite_courses','*',null,"registration_id = $LoginId");

                        if (!empty($CoursesDataMobile6)) {
                            $allMobile6 = count($CoursesDataMobile6);
                        ?>                                
                                    <p><?= $allMobile6 ?></p>
                <?php 
                        } // inner if condition 
                        else{
              
                echo null;
                        } // inner else condition 

                        }else{
                 echo null;
                        }
                        ?> 
                          
                        </a>

                        <a target="_blank" href="http://localhost/PHP-OOP/PROJECT/instructor/dashboard/index.php" class="second_menu_bar_content">
                            <p>Instructor Dashboard</p>
                            <p style="visibility:hidden;">1</p>
                        </a>
                        

                        <a target="_blank" href="" class="second_menu_bar_content">
                            <p>Notification</p>

                            <p>1</p>

                        </a>
<!-- 
                        <a target="_blank" href="" class="second_menu_bar_content">
                            <p>My Messages</p>
                            <p>1</p>
                        </a> -->

                        <a target="_blank" href="" class="second_menu_bar_content">
                            <p>Account Setting</p>
                            <p style="visibility:hidden;">1</p>
                        </a>

                        <a target="_blank" href="" class="second_menu_bar_content">
                            <p>payment Method</p>
                            <p style="visibility:hidden;">1</p>
                        </a>

                        <?php 
                        $id = $_SESSION['id'];
                        // echo $id;
                        ?>

                        <a target="_blank" href="http://localhost/PHP-OOP/PROJECT/includes/attach.php?register_id=<?= $id ?>" class="second_menu_bar_content">
                            <p>Public Profile</p>
                            <p style="visibility:hidden;">1</p>
                        </a>

                        <a target="_blank" href="http://localhost/PHP-OOP/PROJECT/includes/attach2.php?register_id=<?= $id ?>" class="second_menu_bar_content">
                            <p>Make Profile</p>
                            <p style="visibility:hidden;">1</p>
                        </a>

            

                        <a target="_blank" href="" class="second_menu_bar_content">
                            <p>Help</p>
                            <p style="visibility:hidden;">1</p>
                        </a>

                        <a href="http://localhost/PHP-OOP/PROJECT/instructor/dashboard/delete.php" class="second_menu_bar_content">
                            <p>Logout</p>
                            <p style="visibility:hidden;">1</p>
                        </a>
                        

                     </div>
                     <!-- second section starts -->
                   
                </div>
                </div>
        </div>
    </div>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>

 

    <script>
    $(document).ready(function() {
        $('.profile-wrapper').mouseleave(function() {
            $('.menu_content').hide();
        });
    });
    </script>



</body>

</html>