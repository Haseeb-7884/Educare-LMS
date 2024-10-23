<?php include("../../back.php") ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quiz Submission Form</title>
</head>
<body>
    <h2>Quiz Submission Form</h2>
    <form action="submit_quiz.php" method="post">
        <label for="question">Question:</label><br>
        <input type="text" id="question" name="question" required><br><br>
        
        <label for="options">Options:</label><br>
        <input type="text" id="option1" name="options[]" placeholder="Option 1" required><br>
        <input type="text" id="option2" name="options[]" placeholder="Option 2" required><br>
        <input type="text" id="option3" name="options[]" placeholder="Option 3" required><br>
        <input type="text" id="option4" name="options[]" placeholder="Option 4" required><br><br>
        
        <label for="correct_option">Correct Option:</label><br>
        <select id="correct_option" name="correct_option" required>
            <option value="1">Option 1</option>
            <option value="2">Option 2</option>
            <option value="3">Option 3</option>
            <option value="4">Option 4</option>
        </select><br><br>
        
        <input type="submit" value="Submit">
    </form>
</body>
</html>
