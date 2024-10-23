<?php 
include 'calender.php';
$calendar = new Calendar();
// $calendar->add_event('Available', '2024-03-19', 1, 'green');
// $calendar->add_event('Uavailable', '2024-03-20', 1, 'red');
// $calendar->add_event('Uavailable', '2024-03-20', 1, 'red');
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Instructor Availability</title>
    <link href="calendar.css" rel="stylesheet" type="text/css">
</head>
<body>
    <nav class="navtop">
        <div>
            <h1>Instructor Availability</h1>
        </div>
    </nav>
    <div class="content home">
        <div class="calendar">
            <!-- Display Calendar -->
            <?=$calendar?>
        </div>
        <div class="availability-form">
            <h2>Set Availability</h2>
            <form action="process_availability.php" method="post">
                <label for="date">Date:</label>
                <input type="date" id="date" name="date" required><br><br>
                <label for="time">Time:</label>
                <input type="time" id="time" name="time" required><br><br>
                <label for="status">Availability:</label>
                <select id="status" name="status" required>
                    <option value="available">Available</option>
                    <option value="unavailable">Unavailable</option>
                </select><br><br>
                <input type="submit" value="Submit">
            </form>
        </div>
    </div>
</body>
</html>
