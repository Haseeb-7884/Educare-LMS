<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $date = $_POST["date"];
    $time = $_POST["time"];
    $status = $_POST["status"];

    // Process and store availability
    // Here you can modify your Calendar class to add the new availability
    // For example:
    // $calendar->add_event('Available', $date . ' ' . $time, 1, ($status == 'available' ? 'green' : 'red'));

    // After processing, redirect back to the main page or display a success message
    header("Location: example2.php");
    exit();
}
?>
