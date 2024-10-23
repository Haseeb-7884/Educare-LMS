<?php 
include ("../back.php"); 
$newObject = new backend();

if(isset($_POST['comment_submit'])){
    $login_id = $_SESSION['id'];
    $courses_id = $_POST['courses_id'];
    $comment_content = $_POST['comment_content'];

    // Calculate the current timestamp
    $currentTimestamp = time();

    // Retrieve the timestamp of the comment (for demonstration purposes, assume it's the current timestamp)
    $commentTimestamp = $currentTimestamp;

    // Calculate the difference in seconds
    $timeDifference = $currentTimestamp - $commentTimestamp;

    // Calculate the number of days and weeks
    $days = floor($timeDifference / (60 * 60 * 24));
    $weeks = floor($days / 7);

    // Determine whether to display days or weeks
    if ($days < 7) {
        $timeElapsedMessage = "$days day(s) ago";
    } else {
        $timeElapsedMessage = "$weeks week(s) ago";
    }

    // Format the time elapsed as a date/time string
    $timeElapsedDateTime = date('Y-m-d H:i:s');

    // Store the comment and formatted time elapsed message in the database
    $AddingData = $newObject->insertion("comments",array(
        "comment" => $comment_content,
        "courses_id" => $courses_id,
        "registration_id" => $login_id,
        "time_elapsed" => $timeElapsedDateTime // Store the formatted time elapsed message
    ));

    if($AddingData){
        header("location: http://localhost/PHP-OOP/PROJECT/");
    }else{
        echo "There is an error generating";
    }
}
?>
