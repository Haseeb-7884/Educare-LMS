<?php 
require('config.php');
?>

<form action="submit.php" method="post">
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
