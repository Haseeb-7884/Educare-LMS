<?php 
include("config.php");
include("api.php");
$arr['topic']='Test by Vishal';
$arr['start_date']=date('2024-04-18 00:10:37');
$arr['duration']=30;
$arr['password']='vishal';
$arr['type']='2';
$result =createMeeting($arr);
echo "<pre>";
print_r($arr);
?>