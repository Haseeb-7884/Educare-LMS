<?php 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "course_builder";

$conn = new mysqli($servername, $username, $password, $dbname);
// Assuming you have already connected to the database and have a valid connection in $conn
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Process course sections
    if (isset($_POST['sectionName']) && is_array($_POST['sectionName'])) {
        foreach ($_POST['sectionName'] as $key => $sectionName) {
            $sectionName = $conn->real_escape_string($sectionName);
            $contentOption = $conn->real_escape_string($_POST['contentOption'][$key]);

            // Insert data into course_sections table
            $sql = "INSERT INTO course_sections (section_name, content_option) VALUES ('$sectionName', '$contentOption')";
            $conn->query($sql);

            // Get the ID of the last inserted section
            $sectionId = $conn->insert_id;

switch ($_POST['quizType'][0]) {
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
                }
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

            // Get the ID of the last inserted section
            $sectionId = $conn->insert_id;

            // Insert data into quick_quizzes table
            $sql = "INSERT INTO quick_quizzes (section_id, question_text, option1, option2, correct_option) 
                    VALUES ('$sectionId', '$quickQuizQuestion', '$quickQuizOption1', '$quickQuizOption2', '$quickQuizOption3')";
            if ($conn->query($sql) === FALSE) {
                echo "Error inserting into quick_quizzes: " . $conn->error;
            }
        }
        break;

    // Add more cases if needed
}

}
    }
    echo "Data submitted successfully!";
}else {
    echo "Invalid request method!";
}

?>



