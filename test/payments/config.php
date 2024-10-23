<?php 
require('stripe-php-master/init.php');
$Publishablekey = "pk_test_51OrNTiKE6ut2K9RwR7w7E1PeTVS7Lz7IDiYdZSUbfKbUq233flqvB8dQogGWRwyyygZ3CBY5bjTO0WYbl2jtg9Qj009UGJ3oKC";

$Secretkey = "sk_test_51OrNTiKE6ut2K9RwRhb4cPJOOZxNgue6ntLcOkUpMsXq3EGf9ku86vyCm0Kpnesv6fLBz794ZLo5klNEIhgex5OO0057mkNQx4";

\Stripe\Stripe::setApiKey($Secretkey);



?>