<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Course Curriculum Builder</title>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            padding: 20px;
        }

        .section {
            background-color: #f4f4f4;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            cursor: move;
        }

        .content {
            margin: 10px;
            border: 1px solid #ddd;
            padding: 10px;
        }

        .add-content-button {
            margin-top: 10px;
        }
    </style>
</head>
<body>

<div id="curriculum-container">
    <!-- Sections will be dynamically added here -->
</div>

<button onclick="addSection()">Add Section</button>

<script src="https://code.jquery.com/jquery-3.6.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script>
    $(function () {
        $("#curriculum-container").sortable({
            placeholder: "section-placeholder",
            update: function (event, ui) {
                // Handle section reordering here
            }
        });
    });

    function addSection() {
        var sectionTitle = prompt("Enter section title:");
        var sectionHtml = `<div class="section">
                                <div class="section-title">${sectionTitle}</div>
                                <button onclick="addLecture(this)">Add Lecture</button>
                                <button onclick="addAssignment(this)">Add Assignment</button>
                                <button onclick="addQuiz(this)">Add Quiz</button>
                            </div>`;
        $("#curriculum-container").append(sectionHtml);
    }

    function addLecture(button) {
        var lectureTitle = prompt("Enter lecture title:");
        var contentHtml = `<div class="content">${lectureTitle}
                           <button onclick="addVideo(this)">Add Video</button>
                           <button onclick="addArticle(this)">Add Article</button>
                        </div>`;
        $(button).parent().append(contentHtml);
    }

    function addAssignment(button) {
        var assignmentTitle = prompt("Enter assignment title:");
        // Redirect to the Assignment editing page
        window.location.href = `assignment-edit.php?title=${encodeURIComponent(assignmentTitle)}`;
    }

    function addQuiz(button) {
        var quizTitle = prompt("Enter quiz title:");
        // Redirect to the Quiz editing page
        window.location.href = `quiz-edit.php?title=${encodeURIComponent(quizTitle)}`;
    }

    function addVideo(button) {
        var videoUrl = prompt("Enter video URL:");
        var videoHtml = `<div>Video: ${videoUrl}</div>`;
        $(button).parent().append(videoHtml);
    }

    function addArticle(button) {
        var articleContent = prompt("Enter article content:");
        var articleHtml = `<div>Article: ${articleContent}</div>`;
        $(button).parent().append(articleHtml);
    }
</script>

</body>
</html>
