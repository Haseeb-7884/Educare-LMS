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

        #curriculum-container {
            width: 70%;
            margin: auto;
        }

        .section {
            background-color: #f4f4f4;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            cursor: move;
        }

        .section-form {
            margin-top: 20px;
        }
    </style>
</head>
<body>

<div id="curriculum-container">
    <!-- Sections will be dynamically added here -->
</div>

<div class="section-form">
    <label for="sectionType">Section Type:</label>
    <select id="sectionType">
        <option value="video">Video</option>
        <option value="quiz">Quiz</option>
        <option value="assignment">Assignment</option>
        <!-- Add more section types as needed -->
    </select>
    <button onclick="addSection()">Add Section</button>
</div>

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
        var sectionType = $("#sectionType").val();
        var sectionTitle = prompt("Enter section title:");
        var sectionHtml = `<div class="section" data-type="${sectionType}">
                                <div>${sectionTitle}</div>
                                <button onclick="addContent('${sectionType}')">Add ${sectionType}</button>
                            </div>`;
        $("#curriculum-container").append(sectionHtml);
    }

    function addContent(sectionType) {
        var contentTitle = prompt(`Enter ${sectionType} title:`);
        var contentHtml = `<div>${contentTitle}</div>`;
        $(`[data-type="${sectionType}"]`).append(contentHtml);
    }
</script>

</body>
</html>
