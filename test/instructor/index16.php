<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Course Curriculum Builder</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
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

        .delete-button {
            cursor: pointer;
            color: red;
            display: inline-block;
            margin-top: 5px;
        }

        .quiz-question {
            margin-top: 10px;
            border-top: 1px solid #ddd;
            padding-top: 10px;
        }

        .option-input {
            margin-top: 5px;
        }
    </style>
</head>
<body>

<div id="curriculum-container">
    <!-- Sections will be dynamically added here -->
</div>

<button class="btn btn-primary add-content-button" onclick="addSection()">Add Section</button>

<script src="https://code.jquery.com/jquery-3.6.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<script>
    $(document).ready(function () {
        // Load saved curriculum data from localStorage
        var savedCurriculum = localStorage.getItem('curriculum');
        if (savedCurriculum) {
            $('#curriculum-container').html(savedCurriculum);
        }

        $("#curriculum-container").sortable({
            placeholder: "section-placeholder",
            update: function (event, ui) {
                saveCurriculum();
            }
        });
    });

    function saveCurriculum() {
        // Save curriculum data to localStorage
        var curriculumHtml = $('#curriculum-container').html();
        localStorage.setItem('curriculum', curriculumHtml);
    }

    function addSection() {
        var sectionTitle = prompt("Enter section title:");
        var sectionHtml = `<div class="section">
                                <div class="section-title">${sectionTitle}</div>
                                <button class="btn btn-info" onclick="addLecture(this)">Add Lecture</button>
                                <button class="btn btn-success" onclick="addAssignment(this)">Add Assignment</button>
                                <button class="btn btn-warning" onclick="addQuiz(this)">Add Quiz</button>
                            </div>`;
        $("#curriculum-container").append(sectionHtml);
        saveCurriculum();
    }

    function addLecture(button) {
        var lectureTitle = prompt("Enter lecture title:");
        var contentHtml = `<div class="content">${lectureTitle}
                            <label>Content Type:</label>
                            <select class="form-control" onchange="selectContentType(this)">
                                <option value="video">Video</option>
                                <option value="article">Article</option>
                                <option value="smallVideo">Small Video</option>
                            </select>
                            <div class="content-container"></div>
                        </div>`;
        $(button).parent().append(contentHtml);
        saveCurriculum();
    }

    function addAssignment(button) {
        var assignmentTitle = prompt("Enter assignment title:");
        // Redirect to the Assignment editing page
        // window.location.href = `assignment-edit.php?title=${encodeURIComponent(assignmentTitle)}`;
        alert(`Redirecting to assignment edit page for: ${assignmentTitle}`);
    }

    function addQuiz(button) {
        var quizTitle = prompt("Enter quiz title:");
        if (quizTitle !== null) {
            var contentHtml = `<div class="content">
                                    <div class="delete-button btn btn-danger" onclick="deleteQuiz(this)">Delete Quiz</div>
                                    ${quizTitle}
                                    <button class="btn btn-primary" onclick="addQuizQuestion(this)">Add Question</button>
                                    <div class="quiz-questions-container"></div>
                                </div>`;
            $(button).parent().append(contentHtml);
            saveCurriculum();
        }
    }

    function selectContentType(select) {
        var contentType = select.value;
        var contentContainer = $(select).siblings(".content-container");

        contentContainer.empty();

        if (contentType === "video") {
            contentContainer.html('<label>Video URL:</label><input type="file" class="form-control">');
        } else if (contentType === "article") {
            contentContainer.html('<label>Article Content:</label><textarea class="form-control" placeholder="Enter article content"></textarea>');
        } else if (contentType === "smallVideo") {
            contentContainer.html('<label>Small Video URL:</label><input type="text" class="form-control" placeholder="Enter small video URL">');
        }
        saveCurriculum();
    }

    function addQuizQuestion(button) {
        var quizQuestionsContainer = $(button).siblings(".quiz-questions-container");

        var questionHtml = `<div class="quiz-question">
                                <div class="delete-button btn btn-danger" onclick="deleteQuizQuestion(this)">Delete Question</div>
                                <div>Question: <input type="text" class="form-control" placeholder="Enter quiz question"></div>
                                <ul>
                                    <li>Option A: <input type="text" class="option-input form-control" placeholder="Enter option A"></li>
                                    <li>Option B: <input type="text" class="option-input form-control" placeholder="Enter option B"></li>
                                    <li>Option C: <input type="text" class="option-input form-control" placeholder="Enter option C"></li>
                                    <li>Option D: <input type="text" class="option-input form-control" placeholder="Enter option D"></li>
                                </ul>
                            </div>`;
        quizQuestionsContainer.append(questionHtml);
        saveCurriculum();
    }

    function deleteQuiz(button) {
        $(button).siblings(".quiz-questions-container").empty();
        $(button).parent().remove();
        saveCurriculum();
    }

    function deleteQuizQuestion(button) {
        $(button).parent().remove();
        saveCurriculum();
    }
</script>

</body>
</html>
