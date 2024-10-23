<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- Font awesome CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="checkout.css">

    <!-- Stripe payment gateways link -->
    <script src="https://js.stripe.com/v3/"></script>

    <title>Hello, world!</title>
</head>

<body>

    <div class="container-fluid hero-section">
        <div class="hero-section-first">
            <h3 class="mt-5">Checkout</h3>
            <h4 class="fw-bold text-dark ms-1 mt-4">Billing Address</h4>

            <select class="form-select form-select-lg mt-4 ms-2" style="width: 40%;">
                <option selected disabled>Select the country</option>
                <option value="pkr">Pakistan</option>
            </select>
            <p style="margin-top: 10px; font-size: 15px; margin-left: 8px;">Udemy is required by the law to collect
                applicatoion taxes for purchases made in certain taxes jurisdictions</p>

            <h2 class="ms-1 fw-bold text-dark">Payments Methods</h2>

            <div class="accordion accordion-flush" id="accordionFlushExample">
                <!-- Credit/Debit Card -->
                <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-headingOne">
                        <button class="accordion-button collapsed p-2" type="button" data-bs-toggle="collapse"
                            data-bs-target="#flush-collapseOne">
                            <div class="accordian-first d-flex justify-content-around">
                                <div><h5 class="fw-bold">Credit/Debit Card</h5></div>
                                <div></div>
                            </div>
                        </button>
                    </h2>
                    <div id="flush-collapseOne" class="accordion-collapse collapse"
                        data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">
                            <div class="payment-form" id="payment-form">
                                <!-- Input field for amount -->
                                <!-- <input type="text" id="amount" name="amount" value="1500" placeholder="Enter amount in PKR"> -->

                                <!-- Email input field -->
                                <input type="email" id="email" name="email" placeholder="Enter your email" required>

                                <!-- Payment Method container -->
                                <div id="card-element" class="mb-0 border border-1 border-dark p-2">
                                    <!-- A Stripe Element will be inserted here. -->
                                </div>

                                <!-- Used to display form errors. -->
                                <div id="card-errors" role="alert" style="color: red;"></div>

                                <!-- Stripe Submit button -->
                                <button id="submit-payment">Submit Payment</button>

                                <form action="submit4.php" method="post" id="stripe-form" style="display: none;">
                                    <input type="hidden" name="stripeToken" id="stripeToken" value="">
                                    <input type="hidden" name="amount" value="500"> <!-- Amount in PKR -->
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Easypaisa -->
                <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-headingTwo">
                        <button class="accordion-button collapsed p-2" style="background-color: rgba(128, 128, 128, 0.249);"
                            type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo">
                            <div class="accordian-first d-flex justify-content-evenly">
                                <h5 class="fw-bold">Easypaisa</h5>
                            </div>
                        </button>
                    </h2>
                    <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo"
                        data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">Placeholder content for this accordion, which is intended to
                            demonstrate the <code>.accordion-flush</code> class. This is the first item's accordion
                            body.</div>
                    </div>
                </div>
            </div>
        </div>

        <div class="hero-section-second">
            <!-- Additional content in the second section if needed -->
        </div>
    </div>

    <!-- Bootstrap Bundle with Popper -->
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
submitButton.addEventListener('click', function(event) {
    event.preventDefault();

    // Disable the submit button to prevent multiple clicks.
    submitButton.disabled = true;

    // Get the user's email from the input field
    var email = document.getElementById('email').value;

    // Create a PaymentMethod object to represent card details and the email
    stripe.createPaymentMethod({
        type: 'card',
        card: card,
        billing_details: {
            email: email,
        },
    }).then(function(result) {
        if (result.error) {
            // Inform the user if there was an error.
            var errorElement = document.getElementById('card-errors');
            errorElement.textContent = result.error.message;

            // Enable the submit button.
            submitButton.disabled = false;
        } else {
            // Set the PaymentMethod ID in the hidden input field and submit the form.
            document.getElementById('stripeToken').value = result.paymentMethod.id;
            document.getElementById('stripe-form').submit();
        }
    });
});

    </script>

</body>

</html>
