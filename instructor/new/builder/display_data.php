<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Display Form Data</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <h1>Display Form Data</h1>
        <div class="row">
            <div class="col-md-6">
                <h2>Main Section:</h2>
                <p>Main Section Name: <?php echo $_POST['mainSectionName']; ?></p>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-md-6">
                <h2>Sections:</h2>
                <?php 
                // Loop through each section
                for ($i = 0; $i < count($_POST['sectionName']); $i++) {
                    echo "<h3>Section " . ($i + 1) . ":</h3>";
                    echo "<p>Section Name: " . $_POST['sectionName'][$i] . "</p>";
                    echo "<p>Content Option: " . $_POST['contentOption'][$i] . "</p>";

                    // Handle different content options
                    switch ($_POST['contentOption'][$i]) {
                        case 'assignment':
                            echo "<p>Assignment Type: " . $_POST['assignmentType'][$i] . "</p>";
                            // Handle specific details based on assignment type
                            if ($_POST['assignmentType'][$i] === 'small_assessment') {
                                echo "<p>Small Assessment Description: " . $_POST['smallAssessmentDescription'][$i] . "</p>";
                            } elseif ($_POST['assignmentType'][$i] === 'assignment') {
                                echo "<p>Uploaded Assignment File: " . $_FILES['assignmentFile']['name'][$i] . "</p>";
                            } elseif ($_POST['assignmentType'][$i] === 'practical_task') {
                                echo "<p>Practical Task Details: " . $_POST['practicalTaskDetails'][$i] . "</p>";
                            }
                            break;
                        case 'quiz':
                            echo "<p>Quiz Type: " . $_POST['quizType'][$i] . "</p>";
                            // Handle quiz questions
                            echo "<h4>Quiz Questions:</h4>";
                            for ($j = 0; $j < count($_POST['quizQuestion'][$i]); $j++) {
                                echo "<p>Question " . ($j + 1) . ": " . $_POST['quizQuestion'][$i][$j] . "</p>";
                                // Display options
                                echo "<ul>";
                                for ($k = 1; $k <= 4; $k++) {
                                    echo "<li>Option $k: " . $_POST['quizOption' . $k][$i][$j] . "</li>";
                                }
                                echo "</ul>";
                                // Display correct option
                                echo "<p>Correct Option: " . $_POST['quizOption5'][$i][$j] . "</p>";
                            }
                            break;
                        case 'lecture':
                            echo "<p>Video Type: " . $_POST['lectureType'][$i] . "</p>";
                            // Handle lecture details
                            if ($_POST['lectureType'][$i] === 'article') {
                                echo "<p>Uploaded Article: " . $_FILES['article']['name'][$i] . "</p>";
                            } elseif ($_POST['lectureType'][$i] === 'lecture_video') {
                                echo "<p>Uploaded Video: " . $_FILES['localVideo']['name'][$i] . "</p>";
                            } elseif ($_POST['lectureType'][$i] === 'lecture_video_online') {
                                echo "<p>YouTube Video Link: " . $_POST['youtubeVideoLink'][$i] . "</p>";
                            }
                            break;
                        default:
                            break;
                    }
                    echo "<hr>";
                }
                ?>
            </div>
        </div>
    </div>
</body>
</html>
