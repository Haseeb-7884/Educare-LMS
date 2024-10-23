<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Custom Payment Form</title>
    <script src="https://js.stripe.com/v3/"></script>
    <style>
        /* Style for form container */
        .payment-form {
            max-width: 400px;
            margin: 0 auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            background-color: #f9f9f9;
        }

        /* Style for input field */
        .payment-form input[type="text"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }

        /* Style for submit button */
        .payment-form button {
            display: block;
            width: 100%;
            padding: 10px;
            font-size: 16px;
            text-align: center;
            background-color: #00a0d2;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .payment-form button:hover {
            background-color: #0079a5;
        }
    </style>
</head>
<body>
    <div class="payment-form" id="payment-form">
        <!-- Input field for amount -->
        <input type="text" id="amount" name="amount" value="1500" placeholder="Enter amount in PKR">
        
        <!-- Payment Method container -->
        <div id="card-element" style="margin-bottom: 10px;">
            <!-- A Stripe Element will be inserted here. -->
        </div>
        
        <!-- Used to display form errors. -->
        <div id="card-errors" role="alert" style="color: red;"></div>
        
        <!-- Stripe Submit button -->
        <button id="submit-payment">Submit Payment</button>
        
        <form action="submit4.php" method="post" id="stripe-form" style="display: none;">
            <input type="hidden" name="stripeToken" id="stripeToken" value="">
            <input type="hidden" name="amount" value="1500"> <!-- Amount in PKR -->
        </form>
    </div>

    <script>
        // Create a Stripe client.
        var stripe = Stripe('your_stripe_publishable_key');

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

            // Submit the form with the card Element.
            stripe.createToken(card).then(function(result) {
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
