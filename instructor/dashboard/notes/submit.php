<?php
include("../../../back.php");

if(isset($_POST['SubmitData'])){

    $title = $_POST['title'];

    $selected_course = $_POST['selected_course'];
   
    // echo $title;
    // echo "selected".$selected_course;

    $notes = $_FILES['note_file'];
    // echo  $notes;

    $imgArray = noteshandling($notes);

    $noteObj = new backend();
    
    $notesEnter = $noteObj->insertion("notes",array('title'=>$title,'note_file'=>$imgArray['notePath'],
    'courses_id'=>$selected_course));
    
    if($notesEnter){
     
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Coupon Submission</title>
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
  color: green;
  font-size: 85px;
  width: 13%;
  /* background-color:orange; */
  height:100; 
}
.warning-content > div{
  width: 72%;
  height: 100%;
  /* background-color: blue; */
}
.warning-content > div > p:nth-child(1){
  font-weight: bold;
  color: darkgreen;
  font-size: 22px;
  margin:0px;
}
.warning-content > div > p:nth-child(2){
  color: black;
  font-size: 15px;
}
.warning-content > section{
  width: 14%;
  height: 100%;
  display: flex;
  justify-content:center;
  align-items:center;
}
.login_button{
  background-color:green;
  color:white;
  text-decoration:none;
  border-radius: 5px;
  padding: 5px 10px 5px 10px;
}
</style>
<body>
    <div class="warning-container">
        <div class="warning-content">

        <i class="fa-solid fa-circle-check"></i>
         
        <div>
        <p>Successfull</p>
        <p>
         Congrats. Your Notes has been Uploaded successfully. Go to Dashboard via given Button
        </p>
        </div>

        <section>
          <a class="login_button" href="../../AddCources.php">
            Return Back
          </a>
        </section>

        </div>
    </div>
</body>
</html>
<?php         
        
    }else{
        echo null;
    }

}else{
    echo "Return back";
}


?>