<?php

$text1 = "This is the FIRST text.";
$text2 = "THIS is the first TEXT.";

// Convert texts to lowercase
$text1_lower = strtolower($text1);
$text2_lower = strtolower($text2);

echo $text1_lower;

// Tokenize texts into words
$words_text1 = preg_split('/\s+/', $text1_lower, -1, PREG_SPLIT_NO_EMPTY);
$words_text2 = preg_split('/\s+/', $text2_lower, -1, PREG_SPLIT_NO_EMPTY);

foreach($words_text1 as $major_text){
    echo $major_text;
}

// Check if both texts are exactly the same
if ($text1_lower === $text2_lower) {
    echo "Success: Texts are identical.";
} else {
    // Compare words to find differences
    $diff_text1 = array_diff($words_text1, $words_text2);
    $diff_text2 = array_diff($words_text2, $words_text1);
    
    if (empty($diff_text1) && empty($diff_text2)) {
        echo "Success: Texts match when ignoring case.";
    } else {
        echo "Error: Texts do not match.";
        // if (!empty($diff_text1)) {
        //     echo " Differences in Text 1: " . implode(", ", $diff_text1);
        // }
        // if (!empty($diff_text2)) {
        //     echo " Differences in Text 2: " . implode(", ", $diff_text2);
        // }
    }
}
?>
