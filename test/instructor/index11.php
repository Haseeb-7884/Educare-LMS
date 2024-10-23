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
                            <label>Content Type:</label>
                            <select onchange="selectContentType(this)">
                                <option value="video">Video</option>
                                <option value="article">Article</option>
                                <option value="smallVideo">Small Video</option>
                            </select>
                            <div id="contentContainer"></div>
                        </div>`;
        $(button).parent().append(contentHtml);
    }

    function addAssignment(button) {
        var assignmentTitle = prompt("Enter assignment title:");
        var contentHtml = `<div class="content">${assignmentTitle}
                            <button onclick="editAssignment(this)">Edit Assignment</button>
                        </div>`;
        $(button).parent().append(contentHtml);
    }

    function addQuiz(button) {
        var quizTitle = prompt("Enter quiz title:");
        var contentHtml = `<div class="content">${quizTitle}
                            <button onclick="addQuizQuestion(this)">Add Question</button>
                            <div id="quizQuestionsContainer"></div>
                        </div>`;
        $(button).parent().append(contentHtml);
    }

    function selectContentType(select) {
        var contentType = select.value;
        var contentContainer = document.getElementById("contentContainer");

        if (contentType === "video") {
            contentContainer.innerHTML = '<label>Video URL:</label><input type="text" placeholder="Enter video URL">';
        } else if (contentType === "article") {
            contentContainer.innerHTML = '<label>Article Content:</label><textarea placeholder="Enter article content"></textarea>';
        } else if (contentType === "smallVideo") {
            contentContainer.innerHTML = '<label>Small Video URL:</label><input type="text" placeholder="Enter small video URL">';
        }
    }

    function addQuizQuestion(button) {
        var question = prompt("Enter quiz question:");
        var optionA = prompt("Enter option A:");
        var optionB = prompt("Enter option B:");
        var optionC = prompt("Enter option C:");
        var optionD = prompt("Enter option D:");

        var quizQuestionsContainer = document.getElementById("quizQuestionsContainer");
        var questionHtml = `<div>
                                <div>Question: ${question}</div>
                                <ul>
                                   <li>Option A: ${optionA}</li>
                                    <li>Option B: ${optionB}</li>
                                    <li>Option C: ${optionC}</li>
                                    <li>Option D: ${optionD}</li>
                                </ul>
                            </div>`;
        quizQuestionsContainer.innerHTML += questionHtml;
    }

    function editAssignment(button) {
        var assignmentContent = prompt("Edit assignment content:");
        $(button).parent().html(`Assignment: ${assignmentContent}`);
    }
</script>

</body>
</html>
