<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve form data
    $courseName = $_POST['courseName'];
    $category = $_POST['category'];

    // Store data in session variables
    $_SESSION['courseName'] = $courseName;
    $_SESSION['category'] = $category;

    // Redirect to the main page
    header('Location: page.php');
    exit();
} else {
    // Redirect to the form page if accessed directly
    header('Location: index3.php');
    exit();
}
?>
