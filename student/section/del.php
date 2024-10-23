<?php 
include("../../back.php");
if(isset($_GET['cources_id'])){
    $cources_id = $_GET['cources_id'];
    echo $cources_id;

    $delete_item = new backend();

    $del = $delete_item->deletion('cart_items',"courses_id = $cources_id");

    if($del){
        header("location: cart.php");
    }else{
        echo "Can not get deleted";
    }
}
?>