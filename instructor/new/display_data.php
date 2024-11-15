<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    echo '<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">';
    echo "<div class='container mt-5'>";
    echo "<h2 class='mb-4'>Submitted Form Data</h2>";

    // Display table header
    echo "<table class='table table-bordered'>";
    echo "<thead class='thead-dark'>";
    echo "<tr>";
    echo "<th>Section Name</th>";
    echo "<th>Content Option</th>";
    echo "<th>Details</th>";
    echo "</tr>";
    echo "</thead>";

    // Loop through each section
    foreach ($_POST['sectionName'] as $index => $sectionName) {
        $contentOption = $_POST['contentOption'][$index];
        echo "<tr>";
        echo "<td>{$sectionName}</td>";
        echo "<td>{$contentOption}</td>";
        echo "<td>";

        // Display content details based on the selected option
        switch ($contentOption) {
            case 'quiz':
                displayQuizDetails($index);
                break;

            case 'assignment':
                displayAssignmentDetails($index);
                break;

            case 'lecture':
                displayLectureDetails($index);
                break;
        }

        echo "</td>";
        echo "</tr>";
    }

    echo "</table>";
    echo "</div>";
}

// Function to display Quiz details
// Function to display Quiz details
function displayQuizDetails($index) {
    $quizQuestionKey = 'quizQuestion';
    $quizOptions1Key = 'quizOption1';
    $quizOptions2Key = 'quizOption2';
    $quizOptions3Key = 'quizOption3';
    $quizOptions4Key = 'quizOption4';

    $quizQuestion = $_POST[$quizQuestionKey][$index] ?? '';
    $quizOptions1 = $_POST[$quizOptions1Key][$index] ?? '';
    $quizOptions2 = $_POST[$quizOptions2Key][$index] ?? '';
    $quizOptions3 = $_POST[$quizOptions3Key][$index] ?? '';
    $quizOptions4 = $_POST[$quizOptions4Key][$index] ?? '';

    // Display Quiz details in a Bootstrap table
    echo "<strong>Quiz Question:</strong> {$quizQuestion}<br>";
    echo "<strong>Option 1:</strong> {$quizOptions1}<br>";
    echo "<strong>Option 2:</strong> {$quizOptions2}<br>";
    echo "<strong>Option 3:</strong> {$quizOptions3}<br>";
    echo "<strong>Option 4:</strong> {$quizOptions4}<br>";
}

// Function to display Assignment details
function displayAssignmentDetails($index) {
    $assignmentType = $_POST['assignmentType'][$index];

    // Display Assignment details in a Bootstrap table
    echo "<strong>Assignment Type:</strong> {$assignmentType}<br>";

    // Depending on the assignmentType, display specific data
    switch ($assignmentType) {
        case 'small_assessment':
            $smallAssessmentDescription = $_POST['smallAssessmentDescription'][$index];
            echo "<strong>Small Assessment Description:</strong> {$smallAssessmentDescription}<br>";
            break;

        case 'assignment':
            // Process assignment file upload if needed
            displayFileDetails('assignmentFile', $index);
            break;

        case 'practical_task':
            $practicalTaskDetails = $_POST['practicalTaskDetails'][$index];
            echo "<strong>Practical Task Details:</strong> {$practicalTaskDetails}<br>";
            break;
    }
}

// Function to display Lecture details
function displayLectureDetails($index) {
    $lectureType = $_POST['lectureType'][$index];

    echo "<strong>Lecture Type:</strong> {$lectureType}<br>";

    // Call displayFileDetails for relevant cases
    switch ($lectureType) {
        case 'article':
            displayFileDetails('article', $index);
            break;

        case 'lecture_video':
            displayFileDetails('localVideo', $index);
            break;

        case 'lecture_video_online':
            $youtubeVideoLink = $_POST['YoutubeVideo'][$index];
            echo "<strong>YouTube Video Link:</strong> {$youtubeVideoLink}<br>";
            break;
    }
}

// Function to display file details
function displayFileDetails($fileType, $index) {
    if (!isset($_FILES[$fileType]['name'][$index]) || empty($_FILES[$fileType]['name'][$index])) {
        echo "<strong>{$fileType}:</strong> No file uploaded.<br>";
        return;
    }

    $fileNames = $_FILES[$fileType]['name'][$index];
    $fileTempNames = $_FILES[$fileType]['tmp_name'][$index];

    // Display all uploaded files
    for ($i = 0; $i < count($fileNames); $i++) {
        $fileName = $fileNames[$i];
        $fileTempName = $fileTempNames[$i];

        // Check if file is uploaded successfully
        if (is_uploaded_file($fileTempName)) {
            // Move the uploaded file to the "uploads" directory
            $uploadDir = "upload/";
            $uploadPath = $uploadDir . basename($fileName);

            if (move_uploaded_file($fileTempName, $uploadPath)) {
                // File uploaded successfully
                echo "<strong>{$fileType}:</strong> {$fileName}<br>";
            } else {
                // File upload failed
                echo "<strong>{$fileType}:</strong> Failed to upload file '{$fileName}'.<br>";
            }
        } else {
            // File upload failed
            echo "<strong>{$fileType}:</strong> Failed to upload file '{$fileName}'.<br>";
        }
    }
}
?>
