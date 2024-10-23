<?php 
include("../../back.php");
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>

  <?php
  $title = $_GET['title'];
  $course_id = $_GET['course_id'];
  $NewObj = new backend();
  $getQuizzes = $NewObj->fetching("quizzes","*",null,"cources_id = $course_id");
  if(!empty($getQuizzes)){
     foreach($getQuizzes as $TotalQuizzes){

        // $QA = $TotalQuizzes['Q$A'];
        $quiz_title = $TotalQuizzes['quiz_title'];

        // echo $quiz_title;
          $question1 = $TotalQuizzes['question1']; $option1 = $TotalQuizzes['option1'];
          $A1 = $TotalQuizzes['1A']; $B1 = $TotalQuizzes['1B'];
          $C1 = $TotalQuizzes['1C']; $D1 = $TotalQuizzes['1D'];
  
          $question2 = $TotalQuizzes['question2']; $option2 = $TotalQuizzes['option2'];
          $A2 = $TotalQuizzes['2A']; $B2 = $TotalQuizzes['2B'];
          $C2 = $TotalQuizzes['2C']; $D2 = $TotalQuizzes['2D'];
  
          $question3 = $TotalQuizzes['question3']; $option3 = $TotalQuizzes['option3'];
          $A3 = $TotalQuizzes['3A']; $B3 = $TotalQuizzes['3B'];
          $C3 = $TotalQuizzes['3C']; $D3 = $TotalQuizzes['3D'];
  
          $question4 = $TotalQuizzes['question4']; $option4 = $TotalQuizzes['option4'];
          $A4 = $TotalQuizzes['4A']; $B4 = $TotalQuizzes['4B'];
          $C4 = $TotalQuizzes['4C']; $D4 = $TotalQuizzes['4D'];
  
          $question5 = $TotalQuizzes['question5']; $option5 = $TotalQuizzes['option5'];
          $A5 = $TotalQuizzes['5A']; $B5 = $TotalQuizzes['5B'];
          $C5 = $TotalQuizzes['5C']; $D5 = $TotalQuizzes['5D'];
  
          $question6 = $TotalQuizzes['question6']; $option6 = $TotalQuizzes['option6'];
          $A6 = $TotalQuizzes['6A']; $B6 = $TotalQuizzes['6B'];
          $C6 = $TotalQuizzes['6C']; $D6 = $TotalQuizzes['6D'];
  
          $question7 = $TotalQuizzes['question7']; $option7 = $TotalQuizzes['option7'];
          $A7 = $TotalQuizzes['7A']; $B7 = $TotalQuizzes['7B'];
          $C7 = $TotalQuizzes['7C']; $D7 = $TotalQuizzes['7D'];
  
          $question8 = $TotalQuizzes['question8']; $option8 = $TotalQuizzes['option8'];
          $A8 = $TotalQuizzes['8A']; $B8 = $TotalQuizzes['8B'];
          $C8 = $TotalQuizzes['8C']; $D8 = $TotalQuizzes['8D'];
  
          $question9 = $TotalQuizzes['question9']; $option9 = $TotalQuizzes['option9'];
          $A9 = $TotalQuizzes['9A']; $B9 = $TotalQuizzes['9B'];
          $C9 = $TotalQuizzes['9C']; $D9 = $TotalQuizzes['9D'];
  
          $question10 = $TotalQuizzes['question10']; $option10 = $TotalQuizzes['option10'];
          $A10 = $TotalQuizzes['10A']; $B10 = $TotalQuizzes['10B'];
          $C10 = $TotalQuizzes['10C']; $D10 = $TotalQuizzes['10D'];  
  ?>

<div class="container p-2">
<?php
$title_lower = trim($title);
$quiz_title_lower = trim($quiz_title);

if($title_lower === $quiz_title_lower){
?>

<form action="" method="POST">

<div class="mb-3 border border-2 border-secondary p-3 text-dark bg-light">
        <label for="" class="form-label fw-bold">Enter Quiz Title</label>
        <input type="text" value="<?=$title?>" class="form-control" name="quiz_title" placeholder="Quiz name">
</div>

<?php 
}else{
    echo "Nothing in tile";
}
?>

<?php 
if(!empty($question1)){
?>

<div class="mb-3 border border-2 border-secondary p-3 text-dark" style="background-color:white;">
        <label for="" class="form-label fw-bold text-dark">Qustion no. 01</label>
<input type="text" class="form-control" value="<?=$question1?>" name="question1" placeholder="question title">
<div class="d-flex justify-content-evenly">
        <div class="ps-3 pe-3 pt-4 pb-3 text-dark">
                <input type="text" class="form-control" value="<?=$A1?>" name="1A" placeholder="A: Option">
        </div>
        <div class="ps-3 pe-3 pt-4 pb-3 text-dark">
                <input type="text" class="form-control" value="<?=$B1?>" name="1B" placeholder="B: Option">
        </div>
        <div class="ps-3 pe-3 pt-4 pb-2 text-dark">
                <input type="text" class="form-control" value="<?=$C1?>" name="1C" placeholder="C: Option">
        </div>
        <div class="ps-3 pe-3 pt-4 pb-2 text-dark">
                <input type="text" class="form-control" value="<?=$D1?>" name="1D" placeholder="D: Option">
        </div>
</div>
<label for="" class="form-label fw-bold text-dark">Enter Correct Option</label>
        <input type="text" class="form-control" value="<?=$option1?>" name="option1" placeholder="Enter the correct option here">
</div>
<?php 
}else{
echo "Section 01 not found";
}
?>
    
<?php 
if(!empty($question2)){
?>

    <div class="mb-3 border border-2 border-secondary p-3 text-dark" style="background-color:white;">
        <label for="" class="form-label fw-bold text-dark">Qustion no. 02</label>
        <input type="text" value="<?=$question2?>" class="form-control" name="question2" placeholder="question title">

        <div class="d-flex justify-content-evenly">
        <div class="ps-3 pe-3 pt-4 pb-3 text-dark">
                <input type="text" value="<?= $A2?>" class="form-control" name="2A" placeholder="A: Option">
        </div>
        <div class="ps-3 pe-3 pt-4 pb-3 text-dark">
                <input type="text" value="<?= $B2 ?>" class="form-control" name="2B" placeholder="B: Option">
        </div>
        <div class="ps-3 pe-3 pt-4 pb-2 text-dark">
                <input type="text" value="<?= $C2 ?>" class="form-control" name="2C" placeholder="C: Option">
        </div>
        <div class="ps-3 pe-3 pt-4 pb-2 text-dark">
                <input type="text" value="<?= $D2 ?>" class="form-control" name="2D" placeholder="D: Option">
        </div>
        </div>

        <label for="" class="form-label fw-bold text-dark">Enter Correct Option</label>
        <input type="text" class="form-control" value="<?=$option2?>" name="option2" placeholder="Enter the correct option here">
    </div>

<?php 
}else{
echo null;
}
?>
<?php 
if(!empty($question3)){
?>

    <div class="mb-3 border border-2 border-secondary p-3 text-dark" style="background-color:white;">
        <label for="" class="form-label fw-bold text-dark">Qustion no. 03</label>
        <input type="text" class="form-control"  value="<?=$question3?>" name="question3" placeholder="question title">

        <div class="d-flex justify-content-evenly">
        <div class="ps-3 pe-3 pt-4 pb-3 text-dark">
                <input type="text" class="form-control" value="<?=$A3?>" name="3A" placeholder="A: Option">
        </div>
        <div class="ps-3 pe-3 pt-4 pb-3 text-dark">
                <input type="text" class="form-control" value="<?=$B3?>" name="3B" placeholder="B: Option">
        </div>
        <div class="ps-3 pe-3 pt-4 pb-2 text-dark">
                <input type="text" class="form-control" value="<?=$C3?>" name="3C" placeholder="C: Option">
        </div>
        <div class="ps-3 pe-3 pt-4 pb-2 text-dark">
                <input type="text" class="form-control" value="<?=$D3?>" name="3D" placeholder="D: Option">
        </div>
        </div>

        <label for="" class="form-label fw-bold text-dark">Enter Correct Option</label>
        <input type="text" class="form-control" value="<?=$option3?>" name="option3" placeholder="Enter the correct option here">

    </div>
<?php 
}else{
echo null;
}
?>
<?php 
if(!empty($question4)){
?>
    <div class="mb-3 border border-2 border-secondary p-3 text-dark" style="background-color:white;">
        <label for="" class="form-label fw-bold text-dark">Qustion no. 04</label>
        <input type="text" class="form-control" value="<?=$question4?>" name="question4" placeholder="question title">

        <div class="d-flex justify-content-evenly">
        <div class="ps-3 pe-3 pt-4 pb-3 text-dark">
                <input type="text" class="form-control" value="<?=$A4?>" name="4A" placeholder="A: Option">
        </div>
        <div class="ps-3 pe-3 pt-4 pb-3 text-dark">
                <input type="text" class="form-control" value="<?=$B4?>" name="4B" placeholder="B: Option">
        </div>
        <div class="ps-3 pe-3 pt-4 pb-2 text-dark">
                <input type="text" class="form-control" value="<?=$C4?>" name="4C" placeholder="C: Option">
        </div>
        <div class="ps-3 pe-3 pt-4 pb-2 text-dark">
                <input type="text" class="form-control" value="<?=$D4?>" name="4D" placeholder="D: Option">
        </div>
        </div>

        <label for="" class="form-label fw-bold text-dark">Enter Correct Option</label>
        <input type="text" class="form-control" value="<?=$option4?>" name="option4" placeholder="Enter the correct option here">

    </div>
<?php 
}else{
echo null;
}
?>

<?php 
if(!empty($question5)){
?>
    <div class="mb-3 border border-2 border-secondary p-3 text-dark" style="background-color:white;">
        <label for="" class="form-label fw-bold text-dark">Qustion no. 05</label>
        <input type="text" class="form-control" value="<?=$question5?>" name="question5" placeholder="question title">

        <div class="d-flex justify-content-evenly">
        <div class="ps-3 pe-3 pt-4 pb-3 text-dark">
                <input type="text" class="form-control" value="<?=$A5?>" name="5A" placeholder="A: Option">
        </div>
        <div class="ps-3 pe-3 pt-4 pb-3 text-dark">
                <input type="text" class="form-control" value="<?=$B5?>" name="5B" placeholder="B: Option">
        </div>
        <div class="ps-3 pe-3 pt-4 pb-2 text-dark">
                <input type="text" class="form-control" value="<?=$C5?>" name="5C" placeholder="C: Option">
        </div>
        <div class="ps-3 pe-3 pt-4 pb-2 text-dark">
                <input type="text" class="form-control" value="<?=$D5?>" name="5D" placeholder="D: Option">
        </div>
        </div>

        <label for="" class="form-label fw-bold text-dark">Enter Correct Option</label>
        <input type="text" class="form-control" value="<?=$option5?>" name="option5" placeholder="Enter the correct option here">

    </div>
<?php 
}else{
echo null;
}
?>

<?php 
if(!empty($question6)){
?>
    <div class="mb-3 border border-2 border-secondary p-3 text-dark" style="background-color:white;">
        <label for="" class="form-label fw-bold text-dark">Qustion no. 06</label>
        <input type="text" class="form-control" value="<?=$question6?>" name="question6" placeholder="question title">

        <div class="d-flex justify-content-evenly">
        <div class="ps-3 pe-3 pt-4 pb-3 text-dark">
                <input type="text" class="form-control" value="<?=$A6?>" name="6A" placeholder="A: Option">
        </div>
        <div class="ps-3 pe-3 pt-4 pb-3 text-dark">
                <input type="text" class="form-control" value="<?=$B6?>" name="6B" placeholder="B: Option">
        </div>
        <div class="ps-3 pe-3 pt-4 pb-2 text-dark">
                <input type="text" class="form-control" value="<?=$C6?>" name="6C" placeholder="C: Option">
        </div>
        <div class="ps-3 pe-3 pt-4 pb-2 text-dark">
                <input type="text" class="form-control" value="<?=$D6?>" name="6D" placeholder="D: Option">
        </div>
        </div>


        <label for="" class="form-label fw-bold text-dark">Enter Correct Option</label>
        <input type="text" class="form-control" value="<?=$option6?>" name="option6" placeholder="Enter the correct option here">

    </div>
<?php 
}else{
echo null;
}
?>

<?php 
if(!empty($question7)){
?>
    <div class="mb-3 border border-2 border-secondary p-3 text-dark" style="background-color:white;">
        <label for="" class="form-label fw-bold text-dark">Qustion no. 07</label>
        <input type="text" class="form-control" value="<?=$question7?>" name="question7" placeholder="question title">

        <div class="d-flex justify-content-evenly">
        <div class="ps-3 pe-3 pt-4 pb-3 text-dark">
                <input type="text" class="form-control" value="<?=$A7?>" name="7A" placeholder="A: Option">
        </div>
        <div class="ps-3 pe-3 pt-4 pb-3 text-dark">
                <input type="text" class="form-control" value="<?=$B7?>" name="7B" placeholder="B: Option">
        </div>
        <div class="ps-3 pe-3 pt-4 pb-2 text-dark">
                <input type="text" class="form-control" value="<?=$C7?>" name="7C" placeholder="C: Option">
        </div>
        <div class="ps-3 pe-3 pt-4 pb-2 text-dark">
                <input type="text" class="form-control" value="<?=$D7?>" name="7D" placeholder="D: Option">
        </div>
        </div>

        <label for="" class="form-label fw-bold text-dark">Enter Correct Option</label>
        <input type="text" class="form-control" value="<?=$option7?>" name="option7" placeholder="Enter the correct option here">

    </div>
<?php 
}else{
echo null;
}
?>

<?php 
if(!empty($question8)){
?>
    <div class="mb-3 border border-2 border-secondary p-3 text-dark" style="background-color:white;">
        <label for="" class="form-label fw-bold text-dark">Qustion no. 08</label>
        <input type="text" class="form-control" value="<?=$question8?>" name="question8" placeholder="question title">

        <div class="d-flex justify-content-evenly">
        <div class="ps-3 pe-3 pt-4 pb-3 text-dark">
                <input type="text" class="form-control" value="<?=$A8?>" name="8A" placeholder="A: Option">
        </div>
        <div class="ps-3 pe-3 pt-4 pb-3 text-dark">
                <input type="text" class="form-control" value="<?=$B8?>" name="8B" placeholder="B: Option">
        </div>
        <div class="ps-3 pe-3 pt-4 pb-2 text-dark">
                <input type="text" class="form-control" value="<?=$C8?>" name="8C" placeholder="C: Option">
        </div>
        <div class="ps-3 pe-3 pt-4 pb-2 text-dark">
                <input type="text" class="form-control" value="<?=$D8?>" name="8D" placeholder="D: Option">
        </div>
        </div>

        <label for="" class="form-label fw-bold text-dark">Enter Correct Option</label>
        <input type="text" class="form-control" value="<?=$option8?>" name="option8" placeholder="Enter the correct option here">

    </div>
<?php 
}else{
echo null;
}
?>

<?php 
if(!empty($question9)){
?>
    <div class="mb-3 border border-2 border-secondary p-3 text-dark" style="background-color:white;">
        <label for="" class="form-label fw-bold text-dark">Qustion no. 09</label>
        <input type="text" class="form-control" name="question9" placeholder="question title">

        <div class="d-flex justify-content-evenly">
        <div class="ps-3 pe-3 pt-4 pb-3 text-dark">
                <input type="text" class="form-control" value="<?=$A9?>" name="9A" placeholder="A: Option">
        </div>
        <div class="ps-3 pe-3 pt-4 pb-3 text-dark">
                <input type="text" class="form-control" value="<?=$B9?>" name="9B" placeholder="B: Option">
        </div>
        <div class="ps-3 pe-3 pt-4 pb-2 text-dark">
                <input type="text" class="form-control" value="<?=$C9?>" name="9C" placeholder="C: Option">
        </div>
        <div class="ps-3 pe-3 pt-4 pb-2 text-dark">
                <input type="text" class="form-control" value="<?=$D9?>" name="9D" placeholder="D: Option">
        </div>
        </div>

        <label for="" class="form-label fw-bold text-dark">Enter Correct Option</label>
        <input type="text" class="form-control" value="<?=$option9?>" name="option9" placeholder="Enter the correct option here">

    </div>
<?php 
}else{
echo null;
}
?>    

<?php 
if(!empty($question10)){
?>
    <div class="mb-3 border border-2 border-secondary p-3 text-dark" style="background-color:white;">
        <label for="" class="form-label fw-bold text-dark">Qustion no. 10</label>
        <input type="text" class="form-control" value="<?=$question10?>" name="question10" placeholder="question title">

        <div class="d-flex justify-content-evenly">
        <div class="ps-3 pe-3 pt-4 pb-3 text-dark">
                <input type="text" class="form-control" value="<?=$A10?>" name="10A" placeholder="A: Option">
        </div>
        <div class="ps-3 pe-3 pt-4 pb-3 text-dark">
                <input type="text" class="form-control" value="<?=$B10?>" name="10B" placeholder="B: Option">
        </div>
        <div class="ps-3 pe-3 pt-4 pb-2 text-dark">
                <input type="text" class="form-control" value="<?=$C10?>" name="10C" placeholder="C: Option">
        </div>
        <div class="ps-3 pe-3 pt-4 pb-2 text-dark">
                <input type="text" class="form-control" value="<?=$D10?>" name="10D" placeholder="D: Option">
        </div>
        </div>

        <label for="" class="form-label fw-bold text-dark">Enter Correct Option</label>
        <input type="text" class="form-control" value="<?=$option10?>" name="option10" placeholder="Enter the correct option here">

    </div>
    <?php 
}else{
echo null;
}
?> 



<?php 
  }// for loop ends here 
}else{
  echo "Nothing Happend Here";
}
  ?>

</div>

<input type="submit" name="quiz_submit" class="p-3 bg-dark text-light fw-bold" value="Submit Update">

</form>

  </body>
       <!-- Option 1: Bootstrap Bundle with Popper -->
       <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>
