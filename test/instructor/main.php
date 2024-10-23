<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Course Curriculum Builder</title>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
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

    <button class="btn btn-primary" data-toggle="modal" data-target="#addSectionModal">Add Section</button>

    <!-- Add Section Modal -->
    <div class="modal fade" id="addSectionModal" tabindex="-1" role="dialog" aria-labelledby="addSectionModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addSectionModalLabel">Add Section</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="sectionTitle">Section Title:</label>
                        <input type="text" class="form-control" id="sectionTitle" placeholder="Enter section title">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary" onclick="addSection()">Add Section</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS, Popper.js, and jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
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
            var sectionTitle = $("#sectionTitle").val();
            $("#curriculum-container").append(`
                <div class="section">
                    <div class="section-title fw-bold mb-3">${sectionTitle}</div>
                    <button class="btn btn-success" onclick="addLecture(this)">Add Lecture</button>
                    <button class="btn btn-info" onclick="addAssignment(this)">Add Assignment</button>
                    <button class="btn btn-warning" onclick="addQuiz(this)">Add Quiz</button>
                </div>`
            );
            $('#addSectionModal').modal('hide');
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
                            <div class="content-container"></div>
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
            if (quizTitle !== null) {
                var contentHtml = `<div class="content">
                                    <div class="delete-button" onclick="deleteQuiz(this)">Delete Quiz</div>
                                    ${quizTitle}
                                    <button onclick="addQuizQuestion(this)">Add Question</button>
                                    <div class="quiz-questions-container"></div>
                                </div>`;
                $(button).parent().append(contentHtml);
            }
        }

        function selectContentType(select) {
            var contentType = select.value;
            var contentContainer = $(select).siblings(".content-container");

            contentContainer.empty();

            if (contentType === "video") {
                contentContainer.html('<label class="fw-bold mt-3">Video URL:</label><input class="form-control" type="file">');
            } else if (contentType === "article") {
                contentContainer.html('<label class="fw-bold">Article Content:</label><textarea class="form-control" placeholder="Enter article content"></textarea>');
            } else if (contentType === "smallVideo") {
                contentContainer.html('<label class="fw-bold mt-3">Small Video URL:</label><input class="form-control" type="text" placeholder="Enter small video URL">');
            }
        }

        function addQuizQuestion(button) {
            var quizQuestionsContainer = $(button).siblings(".quiz-questions-container");

            var questionHtml = `<div class="quiz-question d-fex justify-content-around">
                                <div>Question: <input type="text" placeholder="Enter quiz question"></div>
                                 
                                <ul>
                                    <li>Option A: <input type="text" class="option-input" placeholder="Enter option A"></li>
                                    <li>Option B: <input type="text" class="option-input" placeholder="Enter option B"></li>
                                    <li>Option C: <input type="text" class="option-input" placeholder="Enter option C"></li>
                                    <li>Option D: <input type="text" class="option-input" placeholder="Enter option D"></li>
                                </ul>

                            </div>
                            <div class="delete-button" onclick="deleteQuizQuestion(this)">Delete Question</div>   
                            `;
            quizQuestionsContainer.append(questionHtml);
        }

        function deleteQuiz(button) {
            $(button).siblings(".quiz-questions-container").empty();
            $(button).parent().remove();
        }

        function deleteQuizQuestion(button) {
            $(button).parent().remove();
        }
    </script>

</body>

</html>
