<?php 
include("../back.php");

$MainObj = new backend(); 

$mainID = $_GET['register_id'];


$getData = $MainObj->fetching('student','*',null,"registration_id = $mainID");
echo $mainID;

if(!empty($getData)){
    foreach($getData as $StudentData){
        $studentPhone = $StudentData['phone'];

        $getData2 = $MainObj->fetching('instructor','*',null,"registration_id = $mainID");

        if(!empty($getData2)){
            foreach($getData2 as $InstructorData){
                $instructorPhone = $InstructorData['number'];

                if($studentPhone == $instructorPhone){
                   header("location: http://localhost/PHP-OOP/PROJECT/instructor/dashboard/edit_profile.php") ;
                }elseif($studentPhone != $instructorPhone){
                    echo "Here";
                    header("location: http://localhost/PHP-OOP/PROJECT/student/student_profile.php?student_id=$mainID") ;
                }else{
                    header("location: http://localhost/PHP-OOP/PROJECT/");
                }
                
            }
        }else{
            header("location: http://localhost/PHP-OOP/PROJECT/student/student_profile.php?student_id=$mainID") ;        
?>

<?php 
        }

    }
}else{
    // header("location: http://localhost/PHP-OOP/PROJECT/student/student_profile.php?student_id=$mainID") ;
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
  color: red;
  font-size: 88px;
  width: 12%;
  /* background-color:orange; */
  height:100; 
}
.warning-content > div{
  width: 70%;
  height: 100%;
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
  font-size: 15px;
}
.warning-content > section{
  width: 15%;
  height: 100%;
  display: flex;
  justify-content:center;
  align-items:center;
}
.login_button{
  background-color:red;
  color:white;
  text-decoration:none;
  border-radius: 5px;
  padding: 5px 10px 5px 10px;
}
</style>
<body>
    <div class="warning-container">
        <div class="warning-content">

        <i class="fa-solid fa-triangle-exclamation"></i>
         
        <div>
        <p>Warning</p>
        <p>It Seems Your Profile is not Compeleted. Make Profile First to Continue</p>
        </div>

        <section>
          <a class="login_button" href="http://localhost/PHP-OOP/PROJECT/index.php">
                Return Back
          </a>
        </section>

        </div>
    </div>
</body>
</html>

<?php 
}

?>

