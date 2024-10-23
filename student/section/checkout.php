<?php 
include("../../back.php");
if(isset($_SESSION['auth'])){
    $login_id = $_SESSION['id'];
    $total_price = $_GET['total_price'];
    $final_price = $_GET['final_price'];
    $courses_id_string = $_GET['courses_id'];

    // Split the string into individual IDs
    $courses_ids = explode(',', $courses_id_string);
    // foreach ($courses_ids as $course_id) {
    //     // Do something with each course ID
    //     echo "Course ID: $course_id<br>";
    // }
// echo $login_id;
// echo $total_price;
// echo $final_price;
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

    <!-- Font awsome CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="../../assets/css/checkout.css">
    <!-- <link rel="stylesheet" href="checkout.css"> -->

    <!-- stripe payment gateways link  -->
    <script src="https://js.stripe.com/v3/"></script>

    <title>Hello, world!</title>
</head>

<body>

<?php 
$logID = $_SESSION['id'];

$cources = new backend();

    $get_enrollments = $cources->fetching('enrollments','*',null,"courses_id = $courses_id_string AND registration_id = $logID");

    if($get_enrollments){
           header("location: attach_file.php");
    }// enrollments if part ends 
    else{
?>

<div class="d-flex justify-content-between container align-items-center" style="height:10vh; width:100%;">
     <img src="" alt="">
     <a href="" style="font-weight:bold; color:purple; font-size:20px;">Cancel</a>
</div>

    <div class="container-fluid hero-section">


        <div class="hero-section-first">
            <h3 class="mt-5">Checkout</h3>

            <h4 class="fw-bold text-dark ms-1 mt-4">Billing Address</h4>

            <select class="form-select form-select-lg mt-4 ms-2 mobile-responsiveness-2" >
                <option selected disabled>Select the country</option>
                <option value="pkr">Pakistan</option>
            </select>
            <p style="margin-top: 10px; font-size: 15px; margin-left: 8px;">Udemy is required by the law to collect
                applicatoion taxes for purchases made in certain taxes jurisdictions</p>

            <h2 class="ms-1 mt-4 mb-4 fw-bold text-dark">Payments Methods</h2>

            <div class="accordion accordion-flush" id="accordionFlushExample">
                <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-headingOne">
                        <button class="accordion-button collapsed p-2"
                            style="background-color: rgba(128, 128, 128, 0.249);" type="button"
                            data-bs-toggle="collapse" data-bs-target="#flush-collapseOne">

                            <div class="accordian-first d-flex justify-content-between align-items-center"
                                style="width:100%;">
                                <div>
                                    <input class="form-check-input" type="radio" name="payment"
                                        id="card">
                                    <label class="form-check-label" for="card">
                                        <h5 class="fw-bold ms-2">Credit/Debit Card</h5>
                                    </label>
                                </div>
                                <div>
                                    <img src="../../assets/images/card-img.png"
                                        style="height:40px; width:100px; border-radius:0px;" alt="">
                                </div>

                            </div>
                        </button>
                    </h2>
                    <div id="flush-collapseOne" class="accordion-collapse collapse"
                        data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">

                        <?php 
                       
                        if($final_price == 0){
                            $actual_price = $total_price;
                   
                        }else{
                            $actual_price = $final_price;
                        }
                      
                        ?>

                            <div class="payment-form" id="payment-form">
                                <!-- Input field for amount -->
                                <!-- <input type="text" id="amount" name="amount" value="1500" placeholder="Enter amount in PKR"> -->

                                <form action="submit4.php" method="post" id="stripe-form">
                                    <input type="text" name="name"
                                        class="form-group mb-3 border-1 border-secondary border"
                                        style="width:100%; border-radius:0px; height:35px;"
                                        placeholder="Your Name on Card">
                                    <input type="email" name="useremail"
                                        class="form-group mb-3 border-1 border-secondary border"
                                        style="width:100%; border-radius:0px; height:35px;"
                                        placeholder="Enter your email">

                                        <?php 
                                           $courses_id_string = $_GET['courses_id'];

                                           // Split the string into individual IDs
                                           $courses_ids = explode(',', $courses_id_string);
                                          foreach ($courses_ids as $course_id) {
                                            $courses_id = $course_id;
                                            // Do something with each course ID
                                        }
                                        ?>
<?php  $login_id = $_SESSION['id']; ?>
                                    <input type='hidden' name='courses_id' value='<?=$courses_id?>'>
                                    <input type="hidden" name="id" value="<?=$login_id?>">
                                    <input type="hidden" name="stripeToken" id="stripeToken" value="">
                                    <input type="hidden" name="amount" value="<?= $actual_price ?>"> <!-- Amount in PKR -->
                                </form>

                                <!-- Payment Method container -->
                                <div id="card-element" class="mb-3 border border-1 border-secondary p-2">
                                    <!-- A Stripe Element will be inserted here. -->
                                </div>

                                <!-- Used to display form errors. -->
                                <div id="card-errors" role="alert" style="color: red;"></div>


                                <!-- Stripe Submit button -->
                                <button id="submit-payment" class="btn btn-sm fw-bold">Submit Payment</button>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingTwo">
                            <button class="accordion-button collapsed p-2"
                                style="background-color: rgba(128, 128, 128, 0.249);" type="button"
                                data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo">
                                <div class="accordian-first d-flex justify-content-between" style="width:100%">

                                <div>
                                    <input class="form-check-input" type="radio" name="payment"
                                        id="easypaisa">
                                    <label class="form-check-label" for="easypaisa">
                                      <h5 class="fw-bold ms-2">Easypaisa</h5>
                                    
                                </div>
                                <div>
                                    <img src="../../assets/images/easypaisa.png"
                                        style="height:35px; width:95px; border-radius:0px;" alt="">
                                    </label>
                                </div>

                                  
                                </div>
                            </button>
                        </h2>
                        <div id="flush-collapseTwo" class="accordion-collapse collapse"
                            aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">

                            <div class="accordion-body">Placeholder content for this accordion, which is intended to
                                demonstrate the <code>.accordion-flush</code> class. This is the first item's accordion
                                body.</div>

                        </div>
                    </div>

                </div>

            </div>


            <div class="hero-section-second">

            <h2>Summery</h2>

            <div class="d-flex justify-content-between align-items-center hero-section-second-price">
            <p style="font-weight:bold; font-size:15px;">Origional Price</p>
            <p class="fw-bold"><?= $total_price ?> PKR</p>
            </div>

            <?php 
            if(!empty($final_price)){
?>
            <div class="d-flex justify-content-between align-items-center mt-0 mx-auto" style="width: 73%; color:purple;">
            <p style="font-weight:bold; font-size:13px;">Discount Amount</p>
            <p class="fw-bold"> - <?=
            
             $total_price - $final_price; 
             ?> PKR</p>
            </div>
<?php 
            }// if ends 
            else {
echo null;
            } // else ends 
            ?>


            <hr style="width: 74%; margin:0 auto;">

            <div class="d-flex justify-content-between align-items-center hero-section-second-price-bold">
            <p>Total:</p>
            <?php 
            if($final_price == 0){
                echo "<p>PKR $total_price</p>";
            }else{
                echo "<p>PKR $final_price</p>";
            }
            ?>
            </div>

            <p style="width: 72%; margin:0 auto;">
            By completing your purchase you agree to these <a href="" style="color:purple; text-decoration:none;">Terms of Services</a> 
            </p>
            
            <div class="hero-second-container">To compelete checkout follow the given payments methods</div>

            <p style="margin-top:25px; font-weight:bold; margin-left:35%;" class="mobile-responsive-01">30 days money back garutee</p>

            </div>

        </div>

        <!-- Option 1: Bootstrap Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
            crossorigin="anonymous"></script>

        <script>
            // Create a Stripe client.
            var stripe = Stripe('pk_test_51OrNTiKE6ut2K9RwR7w7E1PeTVS7Lz7IDiYdZSUbfKbUq233flqvB8dQogGWRwyyygZ3CBY5bjTO0WYbl2jtg9Qj009UGJ3oKC');

            // Create an instance of Elements.
            var elements = stripe.elements();

            // Create an instance of the card Element.
            var card = elements.create('card');

            // Add an instance of the card Element into the `card-element` div.
            card.mount('#card-element');

            // Handle form submission.
            var form = document.getElementById('payment-form');
            var submitButton = document.getElementById('submit-payment');
            submitButton.addEventListener('click', function (event) {
                event.preventDefault();

                // Disable the submit button to prevent multiple clicks.
                submitButton.disabled = true;

                // Submit the form with the card Element.
                stripe.createToken(card).then(function (result) {
                    if (result.error) {
                        // Inform the user if there was an error.
                        var errorElement = document.getElementById('card-errors');
                        errorElement.textContent = result.error.message;

                        // Enable the submit button.
                        submitButton.disabled = false;
                    } else {
                        // Set the token in hidden input field and submit the form.
                        document.getElementById('stripeToken').value = result.token.id;
                        document.getElementById('stripe-form').submit();
                    }
                });
            });
        </script>
</body>

</html>

<?php                 
    }// enrolments if's else part ends here 
?>

<?php
} // session if part ends here 
?>
