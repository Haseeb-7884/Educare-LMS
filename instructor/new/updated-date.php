<?php
include('../../back.php');

// Function to update the last update date for a course
function updateLastUpdateForCourse($courseId) {
    // Update the last update time for the course
    $filename = "last_update_$courseId.txt";
    file_put_contents($filename, date('Y-m-d H:i:s'));
}

// Function to check for changes based on courses
function checkForChanges() {
    // Fetch course data from a database or another dynamic source
    $cources_data = new backend();
    $courses = $cources_data->fetching('cource');

    // Check for changes in each course
    foreach ($courses as $course) {
        $courseId = $course['courses_id']; // Replace 'course_id' with the actual column name in your database
        $lastUpdateFile = "last_update_$courseId.txt";
        $lastUpdateTime = file_exists($lastUpdateFile) ? filemtime($lastUpdateFile) : 0;
        $currentTimestamp = time();
        $timeSinceLastUpdate = $currentTimestamp - $lastUpdateTime;

        // Assume a change occurs if it's been more than 5 minutes (300 seconds) for each course
        if ($timeSinceLastUpdate > 300) {
            // Update the last update time for the course
            updateLastUpdateForCourse($courseId);

            // You might also perform other course-specific update logic here

            return true; // Changes detected
        }
    }

    return false; // No changes detected for any course
}

// Function to fetch courses from a database
function getCoursesFromDatabase() {
    $cources_data = new backend();
    return $cources_data->fetching('cource');
}

// Function to get the current server date and update the last update date
function updateLastUpdate() {
    // Call the checkForChanges function to determine if an update is needed
    $contentChanged = checkForChanges();

    // If changes are detected, update the last update date for display
    if ($contentChanged) {
        return date('Y-m-d H:i:s');
    }

    // If no changes, return the existing last update date
    $filename = 'last_update.txt';
    if (file_exists($filename)) {
        return file_get_contents($filename);
    } else {
        return 'Not available';
    }
}

// Display the last update date on the webpage
$lastUpdateDate = updateLastUpdate();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Website</title>
</head>
<body>
    <h1>Welcome to Your Website</h1>

    <p>Last updated on: <?php echo $lastUpdateDate; ?></p>
</body>
</html>
