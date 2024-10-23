<?php
include('../back.php'); // Ensure you have a connection to your database

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['username'])) {
    $username = $_POST['username'];
    $username_exists = $user_register->fetching('registration', 'registration_id', null, "username = '$username'");
    
    if (!is_null($username_exists) && count($username_exists) > 0) {
        echo "<span style='color: red;'>Username not available</span>";
    } else {
        echo "<span style='color: green;'>Username available</span>";
    }
}
?>