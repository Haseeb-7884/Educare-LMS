<?php 
require('config.php');
?>

<form action="submit4.php" method="post">
    <!-- Input field for amount -->
    <input type="text" name="amount" value="1500"> <!-- Assuming default amount is 1500 PKR -->
    
    <script src="https://checkout.stripe.com/checkout.js" class="stripe-button" 
    data-key="<?php echo $Publishablekey; ?>"
    data-amount="1500" 
    data-name="Educare"
    data-description="Join courses with us"
    data-image="oi.png"
    data-currency="pkr" 
    data-email="abc123@gmail.com">
    </script>
</form>
