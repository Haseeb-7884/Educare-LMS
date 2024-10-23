<?php
session_start();

// Check if session variables are set
if (isset($_SESSION['title']) && isset($_SESSION['category'])) {
    $title = $_SESSION['title'];
    $selectedCategory = $_SESSION['category'];
} else {
    // Redirect to the form page if session variables are not set
    header('Location: index.php');
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Main Page</title>
</head>
<body>

<h2>Main Page</h2>

<form action="process_form.php" method="post">
    <label for="courseName">Course Name:</label>
    <input type="text" id="courseName" value="<?php echo $title; ?>" readonly>

    <label for="category">Category:</label>
    <select name="selected_option">
        <?php
        // Fetch all categories and populate the dropdown
        $categories = array("programming", "design", "business");  // Replace with actual categories from your database

        foreach ($categories as $category) {
            $selected = ($category == $selectedCategory) ? 'selected' : '';
            echo "<option value=\"$category\" $selected>$category</option>";
        }
        ?>
    </select>

    <button type="submit" name="submit">Submit</button>
</form>

</body>
</html>
