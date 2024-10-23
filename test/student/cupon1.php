<?php 
function genrateCuponCode($length = 8){
    $characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
    $cuponCode = '';
    for($i=0 ; $i<$length; $i++){
        $cuponCode .= $characters[rand(0, strlen($characters) - 1)];
    }
    return $cuponCode;
}
$genrateCuponCode = genrateCuponCode();
echo "<b><h2>Cupon Generated : </h2></b>" . $genrateCuponCode ;
?>