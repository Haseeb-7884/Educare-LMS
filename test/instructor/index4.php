<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Text Editor</title>
    <style>
        #editor {
            border: 1px solid #ccc;
            min-height: 100px;
            padding: 10px;
            width: 100%;
        }
    </style>
</head>
<body>
    <form action="" method="post">
        <label for="courseName">Course Name:</label>
        <input type="text" id="courseName" name="courseName" required>

        <label for="courseSubtitle">Course Subtitle:</label>
        <input type="text" id="courseSubtitle" name="courseSubtitle" required>

        <div id="editor" contenteditable="true" placeholder="Start typing here..."></div>

        <!-- Hidden input field to store editor content -->
        <input type="hidden" id="editorContent" name="editorContent">

        <button type="button" onclick="execCommand('bold')">Bold</button>
        <button type="button" onclick="execCommand('underline')">Underline</button>
        <button type="button" onclick="execCommand('italic')">Italic</button>

        <button type="submit">Save Content</button>
    </form>

    <script>
        function execCommand(command) {
            document.execCommand(command, false, null);
        }

        // Update hidden input value before form submission
        document.querySelector('form').addEventListener('submit', function() {
            var editorContent = document.getElementById('editor').innerHTML;
            document.getElementById('editorContent').value = editorContent;
        });
    </script>
</body>
</html>
