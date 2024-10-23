<?php
// process.php

if ($_SERVER["REQUEST_METHOD"] == "GET") {
    // Retrieve values from the query string
    $username = $_GET['username']; // Assuming 'username' is not hidden
    $hiddenFieldValue = $_GET['hiddenField']; // Retrieve the value of the hidden field

    // Do something with the values
    echo "Username: " . $username . "<br>";
    echo "Hidden Field Value: " . $hiddenFieldValue . "<br>";
}
?>
