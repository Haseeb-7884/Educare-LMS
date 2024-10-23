<?php 
include("../back.php");
if(isset($_POST['roleChange'])){
    $role = $_POST['role'];
    $register_id = $_POST['register_id'];

    echo $role;

    $UpdatedRole = new backend();

    $ChangingRole = $UpdatedRole->update("instructor",array('role'=>$role),"registration_id = $register_id",null);

    $ChangingRoleSecond = $UpdatedRole->update("registration",array('role'=>$role),"registration_id = $register_id",null);

    if($ChangingRole && $ChangingRoleSecond){

        header("location: http://localhost/PHP-OOP/PROJECT/admin/user_management.php");
    }
    else{
        echo "Error Generating in respoonce";
    }



}


?>