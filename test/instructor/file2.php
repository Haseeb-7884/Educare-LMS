<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Course Curriculum Builder</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            background-color: #f5f5f5;
        }
        #courseBuilder {
            max-width: 800px;
            margin: auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .section {
            margin-top: 20px;
            padding: 10px;
            background-color: #f9f9f9;
            border-radius: 5px;
            position: relative;
        }
        .delete-button {
            position: absolute;
            top: 5px;
            right: 5px;
            background-color: #ff5c5c;
            color: white;
            padding: 5px 10px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        label {
            display: block;
            margin-bottom: 5px;
        }
        input, select, textarea {
            width: calc(100% - 16px);
            padding: 8px;
            margin-bottom: 10px;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        button {
            background-color: #4caf50;
            color: white;
            padding: 10px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        button:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>

<div id="courseBuilder">
    <h2 style="text-align: center;">Course Curriculum Builder</h2>
    
    <form id="curriculumForm" action="display_data.php" method="post">
        <div id="sectionsContainer">
            <!-- Sections will be dynamically added here -->
        </div>
        
        <button type="button" onclick="addSection()">Add Section</button>
        <button type="submit">Submit Curriculum</button>
    </form>

    <script>
        let sectionCounter = 1;

        function addSection() {
            const sectionsContainer = document.getElementById('sectionsContainer');
            const sectionDiv = document.createElement('div');
            sectionDiv.className = 'section';
            sectionDiv.id = `section${sectionCounter}`;
            sectionDiv.innerHTML = `
                <button class="delete-button" onclick="deleteSection(${sectionCounter})">Delete</button>
                <label for="sectionName${sectionCounter}">Section Name:</label>
                <input type="text" id="sectionName${sectionCounter}" name="sectionName[]">

                <label for="contentOption${sectionCounter}">Content Option:</label>
                <select id="contentOption${sectionCounter}" name="contentOption[]"
                        onchange="updateSpecificContent(${sectionCounter})">
                    <option value="lecture">Lecture</option>
                    <option value="assignment">Assignment</option>
                    <option value="quiz">Quiz</option>
                    <option value="video">Video</option>
                </select>
                
                <div class="specific-content" id="specificContent${sectionCounter}">
                    <!-- Content specific to each option will be added here -->
                </div>
            `;
            sectionsContainer.appendChild(sectionDiv);
            sectionCounter++;
        }

        function deleteSection(sectionId) {
            const sectionToRemove = document.getElementById(`section${sectionId}`);
            sectionToRemove.parentNode.removeChild(sectionToRemove);
        }

        function updateSpecificContent(sectionId) {
            const contentOptionSelect = document.getElementById(`contentOption${sectionId}`);
            const specificContentDiv = document.getElementById(`specificContent${sectionId}`);

            const selectedOption = contentOptionSelect.value;
            specificContentDiv.innerHTML = ''; // Clear previous content

            if (selectedOption === 'assignment') {
                // Add assignment specific inputs
                specificContentDiv.innerHTML = `
                    <label for="assignmentType${sectionId}">Assignment Type:</label>
                    <select id="assignmentType${sectionId}" name="assignmentType[]"
                            onchange="updateAssignmentDetails(${sectionId})">
                        <option value="small_assessment">Small Assessment</option>
                        <option value="assignment">Assignment</option>
                        <option value="practical_task">Practical Task</option>
                    </select>
                    <div id="assignmentDetails${sectionId}"></div>
                `;
            } else if (selectedOption === 'quiz') {
                // Add quiz specific inputs
                specificContentDiv.innerHTML = `
                    <label for="quizType${sectionId}">Quiz Type:</label>
                    <select id="quizType${sectionId}" name="quizType[]"
                            onchange="updateQuizDetails(${sectionId})">
                        <option value="quick_quiz">Quick Quiz</option>
                        <option value="quiz">Quiz</option>
                    </select>
                    <div id="quizDetails${sectionId}"></div>
                `;
            }
        }

        function updateAssignmentDetails(sectionId) {
            const assignmentTypeSelect = document.getElementById(`assignmentType${sectionId}`);
            const assignmentDetailsDiv = document.getElementById(`assignmentDetails${sectionId}`);

            const selectedAssignmentType = assignmentTypeSelect.value;
            assignmentDetailsDiv.innerHTML = ''; // Clear previous content

            if (selectedAssignmentType === 'small_assessment') {
                assignmentDetailsDiv.innerHTML = `
                    <label for="smallAssessmentDescription${sectionId}">Small Assessment Description:</label>
                    <textarea id="smallAssessmentDescription${sectionId}" name="smallAssessmentDescription[]"></textarea>
                `;
            } else if (selectedAssignmentType === 'assignment') {
                assignmentDetailsDiv.innerHTML = `
                    <label for="assignmentFile${sectionId}">Upload Assignment File:</label>
                    <input type="file" id="assignmentFile${sectionId}" name="assignmentFile[]">
                `;
            } else if (selectedAssignmentType === 'practical_task') {
                assignmentDetailsDiv.innerHTML = `
                    <label for="practicalTaskDetails${sectionId}">Practical Task Details:</label>
                    <input type="text" id="practicalTaskDetails${sectionId}" name="practicalTaskDetails[]">
                `;
            }
        }

        function updateQuizDetails(sectionId) {
            const quizTypeSelect = document.getElementById(`quizType${sectionId}`);
            const quizDetailsDiv = document.getElementById(`quizDetails${sectionId}`);

            const selectedQuizType = quizTypeSelect.value;
            quizDetailsDiv.innerHTML = ''; // Clear previous content

            if (selectedQuizType === 'quick_quiz') {
                // Display input for one question with two options
                quizDetailsDiv.innerHTML = `
                    <label for="quickQuizQuestion${sectionId}">Question:</label>
                    <input type="text" id="quickQuizQuestion${sectionId}" name="quickQuizQuestion_${sectionId}[]">

                    <label for="quickQuizOption1${sectionId}">Option 1:</label>
                    <input type="text" id="quickQuizOption1${sectionId}" name="quickQuizOption1_${sectionId}[]">

                    <label for="quickQuizOption2${sectionId}">Option 2:</label>
                    <input type="text" id="quickQuizOption2${sectionId}" name="quickQuizOption2_${sectionId}[]">
                `;
            } else if (selectedQuizType === 'quiz') {
                // Display input for one question with four options and an "Add more questions" link
                quizDetailsDiv.innerHTML = `
                    <label for="quizQuestion${sectionId}_1">Question 1:</label>
                    <input type="text" id="quizQuestion${sectionId}_1" name="quizQuestion_${sectionId}[]">

                    <label for="quizOption1${sectionId}_1">Option 1:</label>
                    <input type="text" id="quizOption1${sectionId}_1" name="quizOption1_${sectionId}[]">

                    <label for="quizOption2${sectionId}_1">Option 2:</label>
                    <input type="text" id="quizOption2${sectionId}_1" name="quizOption2_${sectionId}[]">

                    <label for="quizOption3${sectionId}_1">Option 3:</label>
                    <input type="text" id="quizOption3${sectionId}_1" name="quizOption3_${sectionId}[]">

                    <label for="quizOption4${sectionId}_1">Option 4:</label>
                    <input type="text" id="quizOption4${sectionId}_1" name="quizOption4_${sectionId}[]">

                    <button type="button" onclick="addQuizQuestion(${sectionId})">Add more questions</button>
                `;
            }
        }

        function addQuizQuestion(sectionId) {
    const quizDetailsDiv = document.getElementById(`quizDetails${sectionId}`);
    const questionCounter = quizDetailsDiv.querySelectorAll('input[id^="quizQuestion"]').length + 1;

    const questionDiv = document.createElement('div');
    questionDiv.className = 'quiz-question-container';
    questionDiv.innerHTML = `
        <label for="quizQuestion${sectionId}_${questionCounter}">Question ${questionCounter}:</label>
        <input type="text" id="quizQuestion${sectionId}_${questionCounter}" name="quizQuestion_${sectionId}[]">

        <label for="quizOption1${sectionId}_${questionCounter}">Option 1:</label>
        <input type="text" id="quizOption1${sectionId}_${questionCounter}" name="quizOption1_${sectionId}[]">

        <label for="quizOption2${sectionId}_${questionCounter}">Option 2:</label>
        <input type="text" id="quizOption2${sectionId}_${questionCounter}" name="quizOption2_${sectionId}[]">

        <label for="quizOption3${sectionId}_${questionCounter}">Option 3:</label>
        <input type="text" id="quizOption3${sectionId}_${questionCounter}" name="quizOption3_${sectionId}[]">

        <label for="quizOption4${sectionId}_${questionCounter}">Option 4:</label>
        <input type="text" id="quizOption4${sectionId}_${questionCounter}" name="quizOption4_${sectionId}[]">
    `;

    // Append the questionDiv to quizDetailsDiv before the "Add more questions" button
    quizDetailsDiv.insertBefore(questionDiv, quizDetailsDiv.lastChild.previousSibling);
}


    </script>

</body>
</html>
