<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php 

include('../../back.php');
if  (isset($_SESSION['title']) && isset($_SESSION['category_id'])) {
    $courseName = $_SESSION['title'];
    $category = $_SESSION['category_id'];
    echo"<div class='mb-3 text-dark mt-5'>
    <label class='form-label'>
        <strong class='text-dark'>Course title</strong></label>
    <input type='text' name='course_name' id='course_name' class='form-control  form-control-lg' placeholder='$courseName'>
    <div class='form-text'>Your title should be a mix of attention-grabbing, informative, and
        optimized for search.
        <strong class='text-dark'>Title should contain only 8 words</strong>
        </div>
</div>";}

?>  

<script>
    document.addEventListener('DOMContentLoaded', function() {
        var input = document.getElementById('course_name');
        var wordCountDisplay = document.getElementById('word_count');

        input.addEventListener('input', function() {
            var wordCount = this.value.trim().split(/\s+/).length;
            wordCountDisplay.textContent = 'Word count: ' + wordCount;
            
            // Check if word count is greater than 8
            if (wordCount > 8) {
                wordCountDisplay.style.color = 'red';
                wordCountDisplay.textContent += ' (Exceeds limit)';
            } else {
                wordCountDisplay.style.color = '';
            }
        });
    });
</script>

</body>
</html>