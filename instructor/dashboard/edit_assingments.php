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
//  echo $title;
 ?>
 <form action="" method="" class="container">

 <div class="ps-3 pe-3  pb-3 pt-3 text-dark">
          <label for="" class="form-label fw-bold">Enter Assingment Title</label>

   <input type="text" class="form-control text-dark" value="<?=$title?>" name="assingment_title1" placeholder="Assingment name">

  <?php 
  $NewObj = new backend();
  $getAssingments = $NewObj->fetching("assingments");
  if(!empty($getAssingments)){
     foreach($getAssingments as $AssingmentData){
      $assingment_title1 = $AssingmentData['assingment_title1'];
      $assingment_title2 = $AssingmentData['assingment_title2'];
      $assingment_title3 = $AssingmentData['assingment_title3'];
      $assingment_title4 = $AssingmentData['assingment_title4'];
      $assingment_title5 = $AssingmentData['assingment_title5'];
      $assesment1 = $AssingmentData['assesment1'];
      $assesment2 = $AssingmentData['assesment2'];
      $assesment3 = $AssingmentData['assesment3'];
      $assesment4 = $AssingmentData['assesment4'];
      $assesment5 = $AssingmentData['assesment5'];
      $assingment_section_name1 = $AssingmentData['assingment_section_name1'];
      $assingment_section_name2 = $AssingmentData['assingment_section_name2'];
      $assingment_section_name3 = $AssingmentData['assingment_section_name3'];
      $assingment_section_name4 = $AssingmentData['assingment_section_name4'];
      $assingment_section_name5 = $AssingmentData['assingment_section_name5'];
      $assingment_deadline_01 = $AssingmentData['assingment_deadline_01'];
      $assingment_deadline_02 = $AssingmentData['assingment_deadline_02'];
      $assingment_deadline_03 = $AssingmentData['assingment_deadline_03'];
      $assingment_deadline_04 = $AssingmentData['assingment_deadline_04'];
      $assingment_deadline_05 = $AssingmentData['assingment_deadline_05'];
  
?>

</div>

<?php 
 $title_lower = trim($title);
 $assingment_title1_lower = trim($assingment_title1);
 $assingment_title2_lower = trim($assingment_title2);
 $assingment_title3_lower = trim($assingment_title3);
 $assingment_title4_lower = trim($assingment_title4);
 $assingment_title5_lower = trim($assingment_title5);

if($title_lower == $assingment_title1_lower){



  if(!empty($assesment1)){
  ?>

<div class="ps-3 pe-3 pt-2 pb-3 text-dark">
          <label for="" class="form-label fw-bold">Assessment For Learners</label>
          <textarea class="form-control" value="" rows="3" name="assesment1" placeholder="">
          <?= $assesment1?>
          </textarea>
          <p style="font-size:13px; margin-top:5px;"> <strong><u>Note</u></strong>
          Enter the desired section you want to attach for the Assingment</p>   
</div>

  <?php 
}// inside if ends here (assessment div)
else{
?>

<div class="ps-3 pe-3  pb-3 pt-3 text-dark">
          <label for="" class="form-label fw-bold">Upload Assingment File</label>
          <input type="file" class="form-control" name="assingment_file1" placeholder="">
</div>

<?php 
}// else part ends here 

}// if condition ends (if div ends)
else{
 echo null;
}// else condition ends 

if($title_lower == $assingment_title2_lower){

  if(!empty($assesment2)){
    ?>
  
  <div class="ps-3 pe-3 pt-2 pb-3 text-dark">
            <label for="" class="form-label fw-bold">Assessment For Learners</label>
            <textarea class="form-control" value="" rows="3" name="assesment2" placeholder="">
            <?= $assesment2?>
            </textarea>
            <p style="font-size:13px; margin-top:5px;"> <strong><u>Note</u></strong>
            Enter the desired section you want to attach for the Assingment</p>   
  </div>
  
    <?php 
  }// inside if ends here (assessment div)
  else{
  ?>
  
  <div class="ps-3 pe-3  pb-3 pt-3 text-dark">
            <label for="" class="form-label fw-bold">Upload Assingment File</label>
            <input type="file" class="form-control" name="assingment_file2" placeholder="">
  </div>
  
  <?php 
  }// else part ends here 
}else{
  echo null;
}


if($title_lower == $assingment_title3_lower){

  if(!empty($assesment3)){
    ?>
  
  <div class="ps-3 pe-3 pt-2 pb-3 text-dark">
            <label for="" class="form-label fw-bold">Assessment For Learners</label>
            <textarea class="form-control" value="" rows="3" name="assesment3" placeholder="">
            <?= $assesment3?>
            </textarea>
            <p style="font-size:13px; margin-top:5px;"> <strong><u>Note</u></strong>
            Enter the desired section you want to attach for the Assingment</p>   
  </div>
  
    <?php 
  }// inside if ends here (assessment div)
  else{
  ?>
  
  <div class="ps-3 pe-3  pb-3 pt-3 text-dark">
            <label for="" class="form-label fw-bold">Upload Assingment File</label>
            <input type="file" class="form-control" name="assingment_file3" placeholder="">
  </div>
  
  <?php 
  }// else part ends here 
}else{
  echo null;
}


if($title_lower == $assingment_title4_lower){

  if(!empty($assesment4)){
    ?>
  
  <div class="ps-3 pe-3 pt-2 pb-3 text-dark">
            <label for="" class="form-label fw-bold">Assessment For Learners</label>
            <textarea class="form-control" value="" rows="3" name="assesment4" placeholder="">
            <?= $assesment4?>
            </textarea>
            <p style="font-size:13px; margin-top:5px;"> <strong><u>Note</u></strong>
            Enter the desired section you want to attach for the Assingment</p>   
  </div>
  
    <?php 
  }// inside if ends here (assessment div)
  else{
  ?>
  
  <div class="ps-3 pe-3  pb-3 pt-3 text-dark">
            <label for="" class="form-label fw-bold">Upload Assingment File</label>
            <input type="file" class="form-control" name="assingment_file4" placeholder="">
  </div>
  
  <?php 
  }// else part ends here 
}else{
  echo null;
}


if($title_lower == $assingment_title5_lower){

  if(!empty($assesment5)){
    ?>
  
  <div class="ps-3 pe-3 pt-2 pb-3 text-dark">
            <label for="" class="form-label fw-bold">Assessment For Learners</label>
            <textarea class="form-control" value="" rows="3" name="assesment5" placeholder="">
            <?= $assesment5?>
            </textarea>
            <p style="font-size:13px; margin-top:5px;"> <strong><u>Note</u></strong>
            Enter the desired section you want to attach for the Assingment</p>   
  </div>
  
    <?php 
  }// inside if ends here (assessment div)
  else{
  ?>
  
  <div class="ps-3 pe-3  pb-3 pt-3 text-dark">
            <label for="" class="form-label fw-bold">Upload Assingment File</label>
            <input type="file" class="form-control" name="assingment_file5" placeholder="">
  </div>
  
  <?php 
  }// else part ends here 
}else{
  echo null;
}

?>


<?php 
if($title_lower == $assingment_title1_lower){
 if(!empty($assingment_section_name1)){
?>

<div class="ps-3 pe-3 pt-2 pb-3 text-dark">
          <label for="" class="form-label fw-bold">Enter desired section for Assingment</label>
          <input type="text" value="<?=$assingment_section_name1?>" class="form-control" name="assingment_section_name1" placeholder="Enter Desired Section">
          <p style="font-size:13px; margin-top:5px;"> <strong><u>Note</u></strong>
          Enter the desired section you want to attach for the Assingment</p>        
</div>

<?php 
 } // inside div ends here 
 else{
  echo "Section 1 not present";
 }
}// outside div ends here
elseif($title_lower == $assingment_title2_lower){
  if(!empty($assingment_section_name2)){
    ?>
    
    <div class="ps-3 pe-3 pt-2 pb-3 text-dark">
              <label for="" class="form-label fw-bold">Enter desired section for Assingment</label>
              <input type="text" value="<?=$assingment_section_name2?>" class="form-control" name="assingment_section_name2" placeholder="Enter Desired Section">
              <p style="font-size:13px; margin-top:5px;"> <strong><u>Note</u></strong>
              Enter the desired section you want to attach for the Assingment</p>        
    </div>
    
    <?php 
     } // inside div ends here 
     else{
      echo "Section 2 not present";
     }
}

elseif($title_lower == $assingment_title3_lower){
  if(!empty($assingment_section_name3)){
    ?>
    
    <div class="ps-3 pe-3 pt-2 pb-3 text-dark">
              <label for="" class="form-label fw-bold">Enter desired section for Assingment</label>
              <input type="text" value="<?=$assingment_section_name3?>" class="form-control" name="assingment_section_name3" placeholder="Enter Desired Section">
              <p style="font-size:13px; margin-top:5px;"> <strong><u>Note</u></strong>
              Enter the desired section you want to attach for the Assingment</p>        
    </div>
    
    <?php 
     } // inside div ends here 
     else{
      echo "Section 3 not present";
     }
}

elseif($title_lower == $assingment_title4_lower){
  if(!empty($assingment_section_name4)){
    ?>
    
    <div class="ps-3 pe-3 pt-2 pb-3 text-dark">
              <label for="" class="form-label fw-bold">Enter desired section for Assingment</label>
              <input type="text" value="<?=$assingment_section_name4?>" class="form-control" name="assingment_section_name4" placeholder="Enter Desired Section">
              <p style="font-size:13px; margin-top:5px;"> <strong><u>Note</u></strong>
              Enter the desired section you want to attach for the Assingment</p>        
    </div>
    
    <?php 
     } // inside div ends here 
     else{
      echo "Section 4 not present";
     }
}


elseif($title_lower == $assingment_title5_lower){
  if(!empty($assingment_section_name5)){
    ?>
    
    <div class="ps-3 pe-3 pt-2 pb-3 text-dark">
              <label for="" class="form-label fw-bold">Enter desired section for Assingment</label>
              <input type="text" value="<?=$assingment_section_name5?>" class="form-control" name="assingment_section_name5" placeholder="Enter Desired Section">
              <p style="font-size:13px; margin-top:5px;"> <strong><u>Note</u></strong>
              Enter the desired section you want to attach for the Assingment</p>        
    </div>
    
    <?php 
     } // inside div ends here 
     else{
      echo "Section 5 not present";
     }
}
?>


<?php 
if($title_lower == $assingment_title1_lower){
 if(!empty($assingment_deadline_01) && $assingment_deadline_01 !== '0000-00-00'){
?>

<div class="ps-3 pe-3 pt-2 pb-3 text-dark">
          <label for="" class="form-label fw-bold">Mention Assingment Deadline</label>
          <input type="date" class="form-control" value="<?php echo htmlspecialchars($assingment_deadline_01); ?>" name="assingment_deadline_01" placeholder="Enter Desired Section">
          <p style="font-size:13px; margin-top:5px;"> <strong><u>Note</u></strong>
          Mention the Assingment Date Whom Assingments have to be submitted by students</p>        
</div>

<?php 
 } // inside div ends here 
 else{
  echo "Section 1 not present";
 }
}// outside div ends here
elseif($title_lower == $assingment_title2_lower){
  if(!empty($assingment_deadline_02) && $assingment_deadline_02 !== '0000-00-00'){
    ?>
    
    <div class="ps-3 pe-3 pt-2 pb-3 text-dark">
              <label for="" class="form-label fw-bold">Enter desired section for Assingment</label>
              <input type="text" value="<?php echo htmlspecialchars($assingment_deadline_02); ?>" class="form-control" name="ssingment_deadline_02" placeholder="Enter Desired Section">
              <p style="font-size:13px; margin-top:5px;"> <strong><u>Note</u></strong>
              Enter the desired section you want to attach for the Assingment</p>        
    </div>
    
    <?php 
     } // inside div ends here 
     else{
      echo "Section 2 not present";
     }
}

elseif($title_lower == $assingment_title3_lower){
  if(!empty($assingment_deadline_03) && $assingment_deadline_03 !== '0000-00-00'){
    ?>
    
    <div class="ps-3 pe-3 pt-2 pb-3 text-dark">
              <label for="" class="form-label fw-bold">Enter desired section for Assingment</label>
              <input type="text" value="<?php echo htmlspecialchars($assingment_deadline_03); ?>" class="form-control" name="ssingment_deadline_03" placeholder="Enter Desired Section">
              <p style="font-size:13px; margin-top:5px;"> <strong><u>Note</u></strong>
              Enter the desired section you want to attach for the Assingment</p>        
    </div>
    
    <?php 
     } // inside div ends here 
     else{
      echo "Section 3 not present";
     }
}

elseif($title_lower == $assingment_title4_lower){
  if(!empty($assingment_deadline_04) && $assingment_deadline_04 !== '0000-00-00'){
    ?>
    
    <div class="ps-3 pe-3 pt-2 pb-3 text-dark">
              <label for="" class="form-label fw-bold">Enter desired section for Assingment</label>
              <input type="text" value="<?php echo htmlspecialchars($assingment_deadline_04); ?>" class="form-control" name="ssingment_deadline_04" placeholder="Enter Desired Section">
              <p style="font-size:13px; margin-top:5px;"> <strong><u>Note</u></strong>
              Enter the desired section you want to attach for the Assingment</p>        
    </div>
    
    <?php 
     } // inside div ends here 
     else{
      echo "Section 4 not present";
     }
}


elseif($title_lower == $assingment_title5_lower){
  if(!empty($assingment_deadline_05) && $assingment_deadline_05 !== '0000-00-00'){
    ?>
    
    <div class="ps-3 pe-3 pt-2 pb-3 text-dark">
              <label for="" class="form-label fw-bold">Enter desired section for Assingment</label>
              <input type="text" value="<?php echo htmlspecialchars($assingment_deadline_05); ?>" class="form-control" name="ssingment_deadline_05" placeholder="Enter Desired Section">
              <p style="font-size:13px; margin-top:5px;"> <strong><u>Note</u></strong>
              Enter the desired section you want to attach for the Assingment</p>        
    </div>
    
    <?php 
     } // inside div ends here 
     else{
      echo "Section 5 not present";
     }
}
?>

<?php 
if($title_lower == $assingment_title1_lower){
?>
  <input type="submit" class="btn ms-3 btn-dark text-light fw-bold p-1" name="" value="Submit Data">
<?php 
}
elseif($title_lower == $assingment_title2_lower){
?>
  <input type="submit" class="btn ms-3 btn-dark text-light fw-bold p-1" name="" value="Submit Data">
<?php 
}elseif($title_lower == $assingment_title3_lower){
?>
  <input type="submit" class="btn ms-3 btn-dark text-light fw-bold p-1" name="" value="Submit Data">
<?php 
}elseif($title_lower == $assingment_title4_lower){
?>
  <input type="submit" class="btn ms-3 btn-dark text-light fw-bold p-1" name="" value="Submit Data">
<?php 
}elseif($title_lower == $assingment_title5_lower){
?>
 <input type="submit" class="btn ms-3 btn-dark text-light fw-bold p-1" name="" value="Submit Data">
<?php
} ?>


<?php 
  }
}else{
  echo "Nothing Happend Here";
}
  ?>
</div>
</form>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  </body>
</html>
