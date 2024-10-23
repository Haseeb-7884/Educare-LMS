<?php 

// Define two strings
$string1 = "Hello World";
$string2 = "hello world ntnitin";

// Split the strings into words
$words1 = explode(" ", $string1);
$words2 = explode(" ", $string2);

// Convert all words to lowercase
$words1Lower = array_map('strtolower', $words1);
$words2Lower = array_map('strtolower', $words2);

// Compare the sets of lowercase words
if (array_diff($words1Lower, $words2Lower) === array_diff($words2Lower, $words1Lower)) {
    // If sets match, compare individual words with original case
    $matched = true;
    foreach ($words1 as $key => $word1) {
        if (strtolower($word1) !== strtolower($words2[$key])) {
            $matched = false;
            break;
        }
    }
    if ($matched) {
        echo "The strings have the same words ignoring case sensitivity.\n";
    } else {
        echo "The strings do not have the same words ignoring case sensitivity.\n";
    }
} else {
    echo "The strings do not have the same words ignoring case sensitivity.\n";
}
?>

