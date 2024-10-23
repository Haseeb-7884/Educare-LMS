<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $courseName = $_POST['courseName'];
    $courseSubtitle = $_POST['courseSubtitle'];
    $editorContent = $_POST['editorContent']; // Assuming you have set 'editorContent' as the name attribute for the text editor

    // Now you have $courseName, $courseSubtitle, and $editorContent, and you can process or save them as needed
    // For demonstration purposes, let's just echo the data back
    echo 'Course Name: ' . $courseName . '<br>';
    echo 'Course Subtitle: ' . $courseSubtitle . '<br>';
    echo 'Editor Content: ' . $editorContent;
} else {
    // Handle other types of requests or provide an error message
    echo 'Invalid request';
}
?>
