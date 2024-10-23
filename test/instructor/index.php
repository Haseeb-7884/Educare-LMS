<?php
include 'editor.php';

$editor = new Editor();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $content = $_POST['editor_content'];
    // Save or process the content as needed
    // For demonstration purposes, we'll just display it
    echo "Saved Content: $content";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="style.css"> -->
    <title>WordPress-like Editor</title>
    <style>
         #editor-container {
            width: 80%;
            margin: 20px auto;
        }

        #editor {
            border: 1px solid #ccc;
            min-height: 200px;
            padding: 10px;
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
    <div id="editor-container">
        <?php $editor->render(); ?>
    </div>
</body>
</html>


