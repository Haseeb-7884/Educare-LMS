<?php 
include("../../back.php");

if(isset($_POST['cartCourse'])){

    $addtocart = new backend();
    $courses_id = $_POST['courses_id'];

if(isset($_SESSION['login'])){

    $user_id = $_SESSION['id'];
    // echo $user_id;
    // echo $courses_id;
    $fetch_data_exists = $addtocart->fetching('cart_items','*',null,"courses_id = $courses_id AND registration_id = $user_id");
     
    echo $fetch_data_exists;
    if(!is_null($fetch_data_exists) && count($fetch_data_exists) > 0){
        echo "Product Aready Exixts";
        header("location: index.php?course_id=$courses_id");
    }else{
        echo "Entering data";
        $id = $_SESSION['id'];
        // echo $id;
        $insert_cart_data = $addtocart->insertion('cart_items',array('courses_id'=>$courses_id,'registration_id'=>$id));
        header("location: cart.php?loginID=$id");
    }

    echo $user_id;
    echo $courses_id;
    
} // login end

else{
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Warning</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
     crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<style>
  body{
    background-color: #DDE1E3;
    padding-top:15%; 
  }
.warning-container{
  margin: 0 auto;
  height: 60px;
  width: 800px;
}
.warning-content{
  height:100%;
  width: 100%;
  display:flex;
  justify-content: space-around;
  align-items:center;
  padding: 25px 20px 25px 20px;
  border-radius:5px;
  background-color:white;
  overflow:hidden;
}
.warning-content > i{
  color: darkred;
  font-size: 88px;
  width: 12%;
  height:100; 
}
.warning-content > div{
  width: 62%;
  height: 100%;
  padding-left:10px;
  /* background-color: blue; */
}
.warning-content > div > p:nth-child(1){
  font-weight: bold;
  color: darkred;
  font-size: 22px;
  margin:0px;
}
.warning-content > div > p:nth-child(2){
  color: black;
  width:100%;
  margin-top:10px;
  font-size: 20px;
  
}
.warning-content > section{
  width: 25%;
  height: 100%;
  display: flex;
  justify-content:center;
  align-items:center;
}
.login_button{
  background-color:darkred;
  color:white;
  font-size:15px;
  font-weight:bold;
  text-decoration:none;
  border-radius: 5px;
  padding: 10px 20px 10px 20px;
  text-transform: capitalize;
}
</style>
<body>
    <div class="warning-container">
        <div class="warning-content">

        <i class="fa-solid fa-triangle-exclamation"></i>
         
        <div>
        <p>Warning</p>
        <p>You need to login, after login you can purchase this course.</p>
        </div>

        <section>
          <a class="login_button" href="../../includes/login.php">
                <i class="fas fa-sign-in-alt"></i> Login to continue
          </a>
        </section>

        </div>
    </div>
</body>
</html>


<?php
}

} // cartCourse end
?>
