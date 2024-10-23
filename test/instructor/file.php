<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Course Curriculum Builder</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <style>
        body {
            font-family: 'Arial', sans-serif;
            padding: 20px;
            background-color: #f8f9fa;
        }

        .section {
            background-color: #ffffff;
            border: 1px solid #e0e0e0;
            border-radius: 5px;
            margin-bottom: 20px;
            padding: 20px;
        }

        .section-title {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
        }

        .section-actions {
            display: flex;
            gap: 10px;
        }

        .lecture,
        .assignment,
        .quiz {
            margin-top: 20px;
            border: 1px solid #ddd;
            padding: 20px;
            border-radius: 5px;
        }

        .delete-button {
            cursor: pointer;
            color: red;
        }

        .add-content-button {
            margin-top: 20px;
        }
    </style>
</head>
<body>

<div class="container">
    <div id="curriculum-container">
        <!-- Sections will be dynamically added here -->
    </div>

    <button class="btn btn-primary add-content-button" onclick="addSection()">Add Section</button>
</div>

<!-- Section Modal -->
<div class="modal" id="sectionModal">
    <div class="modal-dialog">
        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Add Section</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <!-- Modal Body -->
            <div class="modal-body">
                <div class="form-group">
                    <label for="sectionTitle">Section Title:</label>
                    <input type="text" class="form-control" id="sectionTitle" placeholder="Enter section title">
                </div>
            </div>

            <!-- Modal Footer -->
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary" onclick="saveSection()">Add Section</button>
            </div>

        </div>
    </div>
</div>

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
        $('#sectionTitle').val('');
        $('#sectionModal').modal('show');
    }

    function saveSection() {
        var sectionTitle = $('#sectionTitle').val();
        if (sectionTitle.trim() === '') {
            alert('Please enter a valid section title.');
            return;
        }

        var sectionHtml = `<div class="section">
                                <div class="section-title">
                                    <h4>${sectionTitle}</h4>
                                    <div class="section-actions">
                                        <span class="delete-button" onclick="deleteSection(this)">Delete Section</span>
                                    </div>
                                </div>
                                <div class="content-container"></div>
                            </div>`;
        $("#curriculum-container").append(sectionHtml);
        saveCurriculum();
        $('#sectionModal').modal('hide');
    }

    function deleteSection(button) {
        $(button).closest('.section').remove();
        saveCurriculum();
    }

    function addContent(section, contentType) {
        var contentTitle = prompt(`Enter ${contentType} title:`);
        if (!contentTitle) return;

        var contentHtml = `<div class="${contentType}">
                                <h5>${contentTitle}</h5>
                                <button class="btn btn-danger delete-button" onclick="deleteContent(this)">Delete ${contentType}</button>
                            </div>`;
        $(section).find('.content-container').append(contentHtml);
        saveCurriculum();
    }

    function deleteContent(button) {
        $(button).closest('.lecture, .assignment, .quiz').remove();
        saveCurriculum();
    }

</script>

</body>
</html>
