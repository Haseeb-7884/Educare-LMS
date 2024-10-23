<?php include("../../back.php"); 

$instructor_data = new backend();

$new_id = $_SESSION['id'];
echo $new_id;

if(isset($_POST['profile_update'])){
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $number = $_POST['number'];
    $website = $_POST['website'];
    $headline = $_POST['headline'];

    //for handling image
    $image = $_FILES['image'];
    $imgArray = imagehandling($image);
  
    $twitter = $_POST['twitter'];
    $facebook = $_POST['facebook'];
    $linkdin = $_POST['linkdin']; 
    $youtube = $_POST['youtube']; 
    $biography = $_POST['biography'];   
    $MoreInfo = $_POST['MoreInfo'];   
    $teachings = $_POST['teachings']; 

    $instructor_id = $_POST['instructor_id']; 

    $update_inserted_id = $instructor_data->update('instructor',array('fname'=>$fname,'lname'=>$lname,'headline'=>$headline,'number'=>$number,
    'instructor_img'=> $imgArray['imgPath'],'website'=>$website,
    'twitter'=>$twitter,'facebook'=>$facebook,'linkdin'=>$linkdin,
    'youtube'=>$youtube,'biography'=>$biography,'MoreInfo'=>$MoreInfo,'teachings'=>$teachings,
    'registration_id'=>$new_id),"instructor_id = $instructor_id",null);


}else{
    echo "Error in file connecting";
}
?>