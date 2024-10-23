<?php  include("../../back.php");  

  $logID = $_GET['Log_id'];
  $cources_id = $_GET['cources_id'];
//   echo $logID;
//   echo $cources_id;

  if(isset($_SESSION['id'])){


  $getPrice = new backend();
  $all_price = $getPrice->fetching("course_prices","*",null,"courses_id = $cources_id");

  foreach($all_price as $allData){
    $final_price = $allData['course_price'];
    if($final_price === 'Free'){

        echo null;

    }else{

        header("location: checkout.php?final_price=$final_price&total_price=$final_price&courses_id=$cources_id");
    }
  }

}else{
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

?>