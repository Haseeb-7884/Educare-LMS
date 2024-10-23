<!-- display_data.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Display Curriculum Data</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
    </style>
</head>
<body>

<h2>Display Curriculum Data</h2>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    foreach ($_POST as $key => $value) {
        if (is_array($value)) {
            echo "<strong>$key:</strong><ul>";
            foreach ($value as $item) {
                echo "<li>$item</li>";
            }
            echo "</ul>";
        } else {
            echo "<p><strong>$key:</strong> $value</p>";
        }
    }
} else {
    echo "<p>No data submitted.</p>";
}
?>

</body>
</html>
