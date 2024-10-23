<?php
// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "quiz_database";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get form data
$question = $_POST['question'];
$options = $_POST['options'];
$correct_option = $_POST['correct_option'];

// print_r($options);
// Convert options array to comma-separated string
$options_str = implode(",", $options);
echo $options_str;

// SQL query to insert data into database using ENUM for options
// $sql = "INSERT INTO quiz_table (question, options, correct_option) VALUES ('$question', '$options_str', '$correct_option')";

// if ($conn->query($sql) === TRUE) {
//     echo "Quiz data submitted successfully";
// } else {
//     echo "Error: " . $sql . "<br>" . $conn->error;
// }

$conn->close();
?>
