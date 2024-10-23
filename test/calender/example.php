
<?php
include 'calender.php';
$calendar = new Calendar();
$calendar->add_event('Available', '2024-03-19', 1, 'green');
$calendar->add_event('Uavailable', '2024-03-20', 1, 'red');
$calendar->add_event('Uavailable', '2024-03-20', 1, 'red');
// $calendar->add_event('Holiday', '2023-05-16', 7);
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Event Calendar</title>
		<!-- <link href="style.css" rel="stylesheet" type="text/css"> -->
		<link href="calendar.css" rel="stylesheet" type="text/css">
	</head>
	<body>
	    <nav class="navtop">
	    	<div>
	    		<h1>Event Calendar</h1>
	    	</div>
	    </nav>
		<div class="content home">
			<?=$calendar?>
		</div>
	</body>
</html>