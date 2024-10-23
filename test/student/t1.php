<?php
$file_path = 'head'; // Specify the path to your file

if (file_exists($file_path)) {
    // Set headers for file download
    header('Content-Description: File Transfer');
    header('Content-Type: application/octet-stream');
    header('Content-Disposition: attachment; filename="'.basename($file_path).'"');
    header('Expires: 0');
    header('Cache-Control: must-revalidate');
    header('Pragma: public');
    header('Content-Length: ' . filesize($file_path));
    readfile($file_path); // Output the file content
    exit;
} else {
    echo 'File not found.';
}
?>

<a href="head.txt"></a>

