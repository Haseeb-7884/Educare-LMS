<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Course Curriculum Builder</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        #courseBuilder {
            margin-bottom: 150px;
            margin-top: 30px;
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
            top: 0px;
            right: 27px;
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
        .quiz-question-container {
            margin-top: 10px;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        .quiz-question-container label,
        .quiz-question-container input {
            display: block;
            margin-bottom: 5px;
        }
    </style>
</head>
<body>

<div id="courseBuilder">
    <form id="curriculumForm" action="display_data1.php" method="post" enctype="multipart/form-data">
 
    <button type="button" class="btn-primary fw-bold mb-3" id="addMainSectionBtn" onclick="addMainSection()">Add Main Section</button>

        <!-- Input field for main section name (hidden by default) -->
        <div id="mainSectionInputWrapper" style="display: none;">
            <label for="mainSectionName" class="fw-bold text-dark">Main Section Name:</label>
            <input type="text" id="mainSectionName" name="mainSectionName">
        </div>

        <div id="sectionsContainer">
            <!-- Sections will be dynamically added here -->
        </div>
        
        <button type="button" class="btn-primary fw-bold" onclick="addSection()">Add Section</button>
        <button type="submit" class="btn-primary fw-bold">Proceed to next</button>
    </form>

    <script>
        let sectionCounter = 1;

        
        document.getElementById('addMainSectionBtn').addEventListener('click', function() {
        document.getElementById('mainSectionInputWrapper').style.display = 'block';
        this.style.display = 'none'; // Hide the button after showing the input field
    });

        function addSection() {
            const sectionsContainer = document.getElementById('sectionsContainer');
            const sectionDiv = document.createElement('div');
            sectionDiv.className = 'section';
            sectionDiv.id = `section${sectionCounter}`;
            sectionDiv.innerHTML = `
                <button class="delete-button" onclick="deleteSection(${sectionCounter})">Delete</button>
                <label for="sectionName${sectionCounter}" class="fw-bold text-dark">Section Name:</label>
                <input type="text" id="sectionName${sectionCounter}" name="sectionName[]">

                <label for="contentOption${sectionCounter}" class="fw-bold text-dark">Content Option:</label>
                <select id="contentOption${sectionCounter}" name="contentOption[]"
                        onchange="updateSpecificContent(${sectionCounter})">
                    <option value="" class="" selected disabled>Select from following</option>
                    <option value="lecture">Lecture</option>
                    <option value="assignment">Assignment</option>
                    <option value="quiz">Quiz</option>
                </select>
                
                <div class="specific-content" id="specificContent${sectionCounter}">
                    <!-- Content specific to each option will be added here -->
                </div>

                <!-- Hidden input field for contentOption -->
                <input type="hidden" name="contentOption[]" value="quick_quiz">
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
        const quizQuestionsContainerId = `quizQuestionsContainer${sectionId}`;

        const selectedOption = contentOptionSelect.value;
        specificContentDiv.innerHTML = ''; // Clear previous content

        if (selectedOption === 'assignment') {
            // Add assignment specific inputs
            specificContentDiv.innerHTML = `
                <label for="assignmentType${sectionId}" class="fw-bold mt-2 text-dark">Assignment Type:</label>
                <select id="assignmentType${sectionId}" name="assignmentType[]"
                        onchange="updateAssignmentDetails(${sectionId})">
                    <option value="" class="" selected disabled>Select from following</option>
                    <option value="small_assessment">Small Assessment</option>
                    <option value="assignment">Assignment</option>
                    <option value="practical_task">Practical Task</option>
                </select>
                <div id="assignmentDetails${sectionId}"></div>
            `;
        } else if (selectedOption === 'quiz') {
            // Add quiz specific inputs
            specificContentDiv.innerHTML = `
                <label for="quizType${sectionId}" class="fw-bold mt-2 text-dark">Quiz Type:</label>
                <select id="quizType${sectionId}" name="quizType[]"
                        onchange="updateQuizDetails(${sectionId}, '${quizQuestionsContainerId}')">
                    <option value="" class="" selected disabled>Select from following</option>
                    <option value="quick_quiz">Quick Quiz</option>
                    <option value="quiz">Quiz</option>
                </select>
                <div id="${quizQuestionsContainerId}">
                    <!-- Initial question fields -->
                    <div class="quiz-question-container">
                        <label for="quizQuestion${sectionId}_1" class="fw-bold mt-2 text-dark">Question 1:</label>
                        <input type="text" id="quizQuestion${sectionId}_1" name="quizQuestion[]">

                        <label for="quizOption1${sectionId}_1">Option 1:</label>
                        <input type="text" id="quizOption1${sectionId}_1" name="quizOption1[]">

                        <label for="quizOption2${sectionId}_1">Option 2:</label>
                        <input type="text" id="quizOption2${sectionId}_1" name="quizOption2[]">

                        <label for="quizOption3${sectionId}_1">Option 3:</label>
                        <input type="text" id="quizOption3${sectionId}_1" name="quizOption3[]">

                        <label for="quizOption4${sectionId}_1">Option 4:</label>
                        <input type="text" id="quizOption4${sectionId}_1" name="quizOption4[]">

                        <label for="quizOption5${sectionId}_1" >Correct Option</label>
                        <input type="text" id="quizOption5${sectionId}_1" name="quizOption5[]">


                        <button type="button" class="btn-primary fw-bold" id="quizAddMoreButton${sectionId}_1" onclick="addQuizQuestion(${sectionId}, '${quizQuestionsContainerId}')">Add more questions</button>
                        <button type="button" class="btn-danger fw-bold" onclick="deleteQuizQuestion(${sectionId}, '${quizQuestionsContainerId}', 1)">Delete</button>
                    </div>
                </div>
            `;
        } else if (selectedOption === 'lecture') {
            // Add lecture specific inputs
            specificContentDiv.innerHTML = `
                <label for="lectureType${sectionId}" class="fw-bold mt-2 text-dark">Video Type:</label>
                <select id="lectureType${sectionId}" name="lectureType[]"
                        onchange="updateLectureDetails(${sectionId})">
                    <option value="" class="" selected disabled>Select from following</option>
                    <option value="article">Upload Article</option>
                    <option value="lecture_video">Lecture Video</option>
                    <option value="lecture_video_online">Video from YouTube</option>
                </select>
                <div id="lectureDetails${sectionId}"></div>
            `;
        }
    }

    function updateLectureDetails(sectionId) {
    const lectureTypeSelect = document.getElementById(`lectureType${sectionId}`);
    const lectureDetailsDiv = document.getElementById(`lectureDetails${sectionId}`);

    const selectedLectureType = lectureTypeSelect.value;
    lectureDetailsDiv.innerHTML = ''; // Clear previous content

    if (selectedLectureType === 'article') {
        lectureDetailsDiv.innerHTML = `
            <label for="articleLectureDescription${sectionId}" class="fw-bold mt-1 text-dark">Upload your Article:</label>
            <input type="file" id="article${sectionId}" name="article[]" onchange="displayFileName(this, ${sectionId})">
            <div id="fileDisplay${sectionId}"></div>
        `;
    } else if (selectedLectureType === 'lecture_video') {
        lectureDetailsDiv.innerHTML = `
            <label for="localVideoDescription${sectionId}" class="fw-bold mt-1 text-dark">Upload Video from local storage:</label>
            <input type="file" id="localVideo${sectionId}" name="localVideo[]" onchange="displayFileName(this, ${sectionId})">
            <div id="fileDisplay${sectionId}"></div>
        `;
    } else if (selectedLectureType === 'lecture_video_online') {
        lectureDetailsDiv.innerHTML = `
            <label for="youtubeVideoLink${sectionId}" class="fw-bold mt-1 text-dark">Paste YouTube Video link:</label>
            <input type="text" id="youtubeVideoLink${sectionId}" name="youtubeVideoLink[]">
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
                    <label for="smallAssessmentDescription${sectionId}" class="fw-bold mt-1 text-dark">Small Assessment Description:</label>
                    <textarea id="smallAssessmentDescription${sectionId}" name="smallAssessmentDescription[]"></textarea>
                `;
            } else if (selectedAssignmentType === 'assignment') {
                assignmentDetailsDiv.innerHTML = `
                    <label for="assignmentFile${sectionId}" class="fw-bold mt-2 text-dark">Upload Assignment File:</label>
                    <input type="file" id="assignmentFile${sectionId}" name="assignmentFile[]" onchange="displayFileName(this, ${sectionId})">
                `;
            } else if (selectedAssignmentType === 'practical_task') {
                assignmentDetailsDiv.innerHTML = `
                    <label for="practicalTaskDetails${sectionId}" class="fw-bold mt-2 text-dark">Practical Task Details:</label>
                    <input type="text" id="practicalTaskDetails${sectionId}" name="practicalTaskDetails[]">
                `;
            }
        }


        function updateQuizDetails(sectionId, quizQuestionsContainerId) {
        const quizTypeSelect = document.getElementById(`quizType${sectionId}`);
        const quizDetailsDiv = document.getElementById(`${quizQuestionsContainerId}`);
        const selectedQuizType = quizTypeSelect.value;
        quizDetailsDiv.innerHTML = ''; // Clear previous content

        if (selectedQuizType === 'quick_quiz') {
            // Display input for one question with two options
            quizDetailsDiv.innerHTML = `
                <label for="quizQuestion${sectionId}" class="fw-bold mt-2 text-dark">Question:</label>
                <input type="text" id="quizQuestion${sectionId}" name="quickQuizQuestion[]">
                
                <label for="quizOption1${sectionId}">Option 1:</label>
                <input type="text" id="quizOption1${sectionId}" name="quickQuizOption1[]">

                <label for="quizOption2${sectionId}">Option 2:</label>
                <input type="text" id="quizOption2${sectionId}" name="quickQuizOption2[]">

                <label for="quizOption3${sectionId}">Correct Option</label>
                <input type="text" id="quizOption3${sectionId}" name="quickQuizOption3[]">
            `;
        } else if (selectedQuizType === 'quiz') {
            // Display input for one question with four options and an "Add more questions" link
            quizDetailsDiv.innerHTML = `
                <label for="quizQuestion${sectionId}_1" class="fw-bold mt-2 text-dark">Question 1:</label>
                <input type="text" id="quizQuestion${sectionId}_1" name="quizQuestion[]">

                <label for="quizOption1${sectionId}_1">Option 1:</label>
                <input type="text" id="quizOption1${sectionId}_1" name="quizOption1[]">

                <label for="quizOption2${sectionId}_2">Option 2:</label>
                <input type="text" id="quizOption2${sectionId}_2" name="quizOption2[]">

                <label for="quizOption3${sectionId}_3">Option 3:</label>
                <input type="text" id="quizOption3${sectionId}_3" name="quizOption3[]">

                <label for="quizOption4${sectionId}_4">Option 4:</label>
                <input type="text" id="quizOption4${sectionId}_4" name="quizOption4[]">

                <label for="quizOption4${sectionId}_4">Correct Option</label>
                <input type="text" id="quizOption5${sectionId}_5" name="quizOption5[]">

                <button type="button" class="btn-primary fw-bold" id="quizAddMoreButton${sectionId}_1" onclick="addQuizQuestion(${sectionId}, '${quizQuestionsContainerId}')">Add more questions</button>
            `;
        }
    }

   
    function deleteQuizQuestion(sectionId, questionContainerId, questionCounter) {
        const quizQuestionsContainer = document.getElementById(questionContainerId);
        const questionToDelete = document.getElementById(`quizQuestion${sectionId}_${questionCounter}`);

        if (questionToDelete) {
            // Remove the questionDiv from quizQuestionsContainer
            quizQuestionsContainer.removeChild(questionToDelete.parentElement);

            // Renumber the remaining questions
            renumberQuizQuestions(sectionId, questionContainerId);
        }
    }

    
    
function renumberQuizQuestions(sectionId, questionContainerId) {
    const quizQuestionsContainer = document.getElementById(questionContainerId);
    const questionDivs = quizQuestionsContainer.querySelectorAll('.quiz-question-container');

    questionDivs.forEach((questionDiv, index) => {
        const questionInputs = questionDiv.querySelectorAll(`input[type="text"]`);

        questionInputs.forEach(input => {
            const oldId = input.id;
            const newId = oldId.replace(/\d+$/, index + 1);

            // Update the id attribute
            input.id = newId;
            input.name = input.name.replace(/\[\d+\]/, `[${index}]`);
        });

        const buttons = questionDiv.querySelectorAll('button');
        buttons.forEach(button => {
            if (button.textContent === 'Add more questions') {
                button.setAttribute('onclick', `addQuizQuestion(${sectionId}, '${questionContainerId}')`);
            } else if (button.textContent === 'Delete') {
                button.setAttribute('onclick', `deleteQuizQuestion(${sectionId}, '${questionContainerId}', ${index + 1})`);
            }
        });
    });
}


    function addQuizQuestion(sectionId, questionContainerId) {
    const quizQuestionsContainer = document.getElementById(questionContainerId);
    const questionCounter = quizQuestionsContainer.childElementCount + 1;

    const questionDiv = document.createElement('div');
    questionDiv.className = 'quiz-question-container';
    questionDiv.innerHTML = `
        <label for="quizQuestion${sectionId}_${questionCounter}" class="fw-bold mt-2 text-dark">Question ${questionCounter}:</label>
        <input type="text" id="quizQuestion${sectionId}_${questionCounter}" name="quizQuestion[]">

        <label for="quizOption1${sectionId}_${questionCounter}">Option 1:</label>
        <input type="text" id="quizOption1${sectionId}_${questionCounter}" name="quizOption1[]">

        <label for="quizOption2${sectionId}_${questionCounter}">Option 2:</label>
        <input type="text" id="quizOption2${sectionId}_${questionCounter}" name="quizOption2[]">

        <label for="quizOption3${sectionId}_${questionCounter}">Option 3:</label>
        <input type="text" id="quizOption3${sectionId}_${questionCounter}" name="quizOption3[]">

        <label for="quizOption4${sectionId}_${questionCounter}">Option 4:</label>
        <input type="text" id="quizOption4${sectionId}_${questionCounter}" name="quizOption4[]">

        <label for="quizOption5${sectionId}_${questionCounter}">Correct Option</label>
        <input type="text" id="quizOption5${sectionId}_${questionCounter}" name="quizOption5[]">

        <button type="button" class="btn-primary fw-bold" onclick="addQuizQuestion(${sectionId}, '${questionContainerId}')">Add more questions</button>
        <button type="button" class="btn-danger fw-bold" onclick="deleteQuizQuestion(${sectionId}, '${questionContainerId}', ${questionCounter})">Delete</button>
    `;

    // Append the questionDiv to quizQuestionsContainer
    quizQuestionsContainer.appendChild(questionDiv);
}



    </script>

</body>
</html>
