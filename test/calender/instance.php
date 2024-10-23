<?php 
include ('calender.php');
// $calendar = new Calendar();
$calendar = new Calendar();
// $calendar->add_event('Holiday', '2023-05-14');
$newCalendar = $calendar->add_event('Holiday', '2023-05-14', 7, 'red');
echo $newCalendar;
?>