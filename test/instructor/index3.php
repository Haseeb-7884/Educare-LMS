<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Course Submission Form</title>
</head>
<body>  

<h2>Course Submission Form</h2>

<form action="process_form.php" method="post">
    <label for="courseName">Course Name:</label>
    <input type="text" name="courseName" required>

    <label for="category">Category:</label>
    <select name="category" required>
        <option value="programming">Programming</option>
        <option value="design">Design</option>
        <option value="business">Business</option>
        <!-- Add more categories as needed -->
    </select>

    <button type="submit">Submit</button>
</form>

</body>
</html>
