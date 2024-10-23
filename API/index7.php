<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Payment Page</title>
    <script src="https://js.stripe.com/v3/"></script>
    <!-- Bootstrap CSS from CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS for payment form -->
    <style>
        #card-errors {
            color: red;
            margin-bottom: 20px;
        }

        #submit-payment {
            margin-top: 10px;
        }
    </style>
</head>
<body>

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="payment-form border border-1 border-dark p-4" id="payment-form">
                <!-- Card Number -->
                <div id="card-number-group" class="mb-3">
                    <label for="card-number" class="form-label">Card Number</label>
                    <div id="card-number" class="form-control"></div>
                </div>

                <!-- CVC -->
                <div id="cvc-group" class="mb-3">
                    <label for="cvc" class="form-label">CVC</label>
                    <div id="cvc" class="form-control"></div>
                </div>

                <!-- Expiry Date -->
                <div id="expiry-group" class="mb-3">
                    <label for="expiry" class="form-label">Expiry Date</label>
                    <div id="expiry" class="form-control"></div>
                </div>

                <!-- Used to display form errors. -->
                <div id="card-errors" role="alert"></div>

                <!-- Stripe Submit button -->
                <button id="submit-payment" class="btn btn-primary">Submit Payment</button>

                <form action="submit4.php" method="post" id="stripe-form" style="display: none;">
                    <input type="hidden" name="stripeToken" id="stripeToken" value="">
                    <input type="hidden" name="amount" value="5500"> <!-- Amount in PKR -->
                </form>
            </div>
        </div>
    </div>
</div>


<!-- ... (previous HTML code) ... -->



<script>
        // Create a Stripe client
        var stripe = Stripe('pk_test_51OrNTiKE6ut2K9RwR7w7E1PeTVS7Lz7IDiYdZSUbfKbUq233flqvB8dQogGWRwyyygZ3CBY5bjTO0WYbl2jtg9Qj009UGJ3oKC');

        // Create an instance of Elements
        var elements = stripe.elements();

        // Create card elements
        var cardNumber = elements.create('cardNumber');
        var cardExpiry = elements.create('cardExpiry');
        var cardCvc = elements.create('cardCvc');

        // Mount card elements to their respective divs
        cardNumber.mount('#card-number');
        cardExpiry.mount('#expiry');
        cardCvc.mount('#cvc');

        // Handle form submission
        var form = document.getElementById('stripe-form');
        var submitButton = document.getElementById('submit-payment');

        form.addEventListener('submit', function(event) {
            event.preventDefault();

            // Disable the submit button to prevent multiple submissions
            submitButton.disabled = true;

            // Create PaymentMethod
            stripe.createPaymentMethod({
                type: 'card',
                card: cardNumber,
            }).then(function(result) {
                if (result.error) {
                    // Display error message
                    var errorElement = document.getElementById('card-errors');
                    errorElement.textContent = result.error.message;

                    // Enable the submit button
                    submitButton.disabled = false;

                    // Log the error to the console for debugging
                    console.error(result.error);
                } else {
                    // Insert PaymentMethod into the form
                    var paymentMethodInput = document.getElementById('paymentMethod');
                    paymentMethodInput.value = result.paymentMethod.id;

                    // Submit the form
                    form.submit();
                }
            }).catch(function(error) {
                // Handle other errors
                console.error(error);

                // Enable the submit button
                submitButton.disabled = false;
            });
        });
</script>

</body>
</html>



</body>
</html>
