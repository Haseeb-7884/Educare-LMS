<?php
// Establish database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "course_builder";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Process course sections
    if (isset($_POST['sectionName']) && is_array($_POST['sectionName'])) {
        $mainSectionName = $conn->real_escape_string($_POST['mainSectionName']); // Add this line to get the main section name

        foreach ($_POST['sectionName'] as $key => $sectionName) {
            $sectionName = $conn->real_escape_string($sectionName);
            $contentOption = $conn->real_escape_string($_POST['contentOption'][$key]);

            // Insert data into course_sections table
            $sql = "INSERT INTO course_sections (section_name, content_option, main_section_name) VALUES ('$sectionName', '$contentOption','$mainSectionName')";
            $conn->query($sql);

            // Get the ID of the last inserted section
            $sectionId = $conn->insert_id;

            // Process content based on the selected option
            switch ($contentOption) {
                case 'assignment':
                    $assignmentType = $conn->real_escape_string($_POST['assignmentType'][$key]);
                    $smallAssessmentDescription = isset($_POST['smallAssessmentDescription'][$key]) ? $conn->real_escape_string($_POST['smallAssessmentDescription'][$key]) : '';
                    $practicalTaskDetails = isset($_POST['practicalTaskDetails'][$key]) ? $conn->real_escape_string($_POST['practicalTaskDetails'][$key]) : '';
                    $assignmentFilePath = isset($_FILES['assignmentFile']['name'][$key]) ? $_FILES['assignmentFile']['name'][$key] : '';

                    if (!empty($assignmentFilePath)) {
                        $assignmentFileName = $_FILES['assignmentFile']['name'][$key];
                        $assignmentFilePath = 'assignment/' . $assignmentFileName; // Update the path as needed
                        move_uploaded_file($_FILES['assignmentFile']['tmp_name'][$key], $assignmentFilePath);
                    }

                    // Insert data into assignments table
                    $sql = "INSERT INTO assignments (section_id, assignment_type, small_assessment_description, practical_task_details, assingment_file) 
                            VALUES ('$sectionId', '$assignmentType', '$smallAssessmentDescription', '$practicalTaskDetails','$assignmentFilePath')";
                    $conn->query($sql);
                    break;


                    case 'quick_quiz':
                        // Your code for handling quick quizzes
                        if (isset($_POST['sectionName'][0]) && isset($_POST['quickQuizQuestion'][0])) {
                            $sectionName = $conn->real_escape_string($_POST['sectionName'][0]);
                            $quickQuizQuestion = $conn->real_escape_string($_POST['quickQuizQuestion'][0]);
                            $quickQuizOption1 = $conn->real_escape_string($_POST['quickQuizOption1'][0]);
                            $quickQuizOption2 = $conn->real_escape_string($_POST['quickQuizOption2'][0]);
                            $quickQuizOption3 = $conn->real_escape_string($_POST['quickQuizOption3'][0]);
                
                            // Insert data into course_sections table
                            $sql = "INSERT INTO course_sections (section_name, content_option) VALUES ('$sectionName', 'quiz')";
                            if ($conn->query($sql) === FALSE) {
                                echo "Error inserting into course_sections: " . $conn->error;
                            }

                            echo $sql;
                
                            // Get the ID of the last inserted section
                            $sectionId = $conn->insert_id;
                
                            // Insert data into quick_quizzes table
                            $sql = "INSERT INTO quick_quizzes (section_id, question_text, option1, option2, correct_option) 
                                    VALUES ('$sectionId', '$quickQuizQuestion', '$quickQuizOption1', '$quickQuizOption2', '$quickQuizOption3')";
                            if ($conn->query($sql) === FALSE) {
                                echo "Error inserting into quick_quizzes: " . $conn->error;
                            }
                            // echo $sql;
                        }
                        break;


                case 'quiz':
                if (isset($_POST['sectionName'][0]) && isset($_POST['quizQuestion'][0])) {
                    $sectionName = $conn->real_escape_string($_POST['sectionName'][0]);
                    $quizQuestion = $conn->real_escape_string($_POST['quizQuestion'][0]);

                    $sectionId = $conn->insert_id;

                    // Insert data into quiz_questions table
                    $sql = "INSERT INTO quiz_questions (section_id, quiz_type, question_text, option1, option2, option3, option4, correct_option) 
                            VALUES ('$sectionId', 'quiz', '$quizQuestion', 
                                    '{$_POST['quizOption1'][0]}', '{$_POST['quizOption2'][0]}', '{$_POST['quizOption3'][0]}', '{$_POST['quizOption4'][0]}','{$_POST['quizOption5'][0]}')";
                    if ($conn->query($sql) === FALSE) {
                        echo "Error inserting into quiz_questions: " . $conn->error;
                    } else {
                        echo "Data submitted successfully!";
                    }
                    // echo $sql;
                }
                break;

                
                // Inside the 'lecture' case
                case 'lecture':
                    $lectureType = $conn->real_escape_string($_POST['lectureType'][$key]);

                    // Insert data into lectures table
                    $sql = "INSERT INTO lectures (section_id, lecture_type) VALUES ('$sectionId', '$lectureType')";
                    $conn->query($sql);

                    $lectureId = $conn->insert_id;

                    switch ($lectureType) {
                        // ... (Other cases remain unchanged)

                        // Inside the 'article' case
                        case 'article':
                            $articleLectureDescription = $conn->real_escape_string($_POST['articleLectureDescription'][$key]);

                            // Handle article upload
                            if (isset($_FILES['article']['name'][$key]) && !empty($_FILES['article']['name'][$key])) {
                                $articleFileName = $_FILES['article']['name'][$key];
                                $articleFilePath = 'lecture/' . $articleFileName; // Update the path as needed

                                // Move the uploaded file to the desired directory
                                move_uploaded_file($_FILES['article']['tmp_name'][$key], $articleFilePath);

                                // Update article_lecture_description in lectures table
                                $sql = "UPDATE lectures SET article_lecture_description = '$articleFilePath' WHERE id = '$lectureId'";
                                $conn->query($sql);
                            }
                            break;

                        // Inside the 'lecture_video' case
                        case 'lecture_video':
                            $localVideoDescription = $conn->real_escape_string($_POST['localVideoDescription'][$key]);

                            // Handle local video upload
                            if (isset($_FILES['localVideo']['name'][$key]) && !empty($_FILES['localVideo']['name'][$key])) {
                                $localVideoFileName = $_FILES['localVideo']['name'][$key];
                                $localVideoFilePath = 'lecture/' . $localVideoFileName; // Update the path as needed

                                // Move the uploaded file to the desired directory
                                move_uploaded_file($_FILES['localVideo']['tmp_name'][$key], $localVideoFilePath);

                                // Update local_video_path in lectures table
                                $sql = "UPDATE lectures SET local_video_path = '$localVideoFilePath' WHERE id = '$lectureId'";
                                $conn->query($sql);
                            }
                            break;

                        // Inside the 'lecture_video_online' case
                        case 'lecture_video_online':
                            $youtubeVideoLink = isset($_POST['youtubeVideoLink'][$key]) ? $conn->real_escape_string($_POST['youtubeVideoLink'][$key]) : '';
                        
                            // Update youtube_video_link in lectures table
                            $sql = "UPDATE lectures SET youtube_video_link = '$youtubeVideoLink' WHERE id = '$lectureId'";
                            if ($conn->query($sql) === FALSE) {
                                echo "Error updating record: " . $conn->error;
                            }
                            break;
                    }
                    break;
            }
        }
    }

    // echo "Data submitted successfully!";
} else {
    echo "Invalid request method!";
}

// Close the database connection
$conn->close();
?>
