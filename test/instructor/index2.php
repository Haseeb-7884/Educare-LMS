<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hidden Input Example</title>
</head>
<body>

    <form action="process.php" method="get">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required>
        
        <!-- Hidden input field -->
        <input type="hidden" name="hiddenField" value="hiddenValue">

        <input type="submit" value="Submit">
    </form>

</body>
</html>
