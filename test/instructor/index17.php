<?php 

$userInput = '("Hello, I am an XSS attack!")';
$escapedInput = htmlspecialchars($userInput, ENT_QUOTES, 'UTF-8');
echo $userInput;
// echo $escapedInput;


?>