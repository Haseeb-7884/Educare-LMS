<?php
if (isset($_GET['file'])) {
    // Decode the file path
    $file = urldecode($_GET['file']);
    
    // Remove any extraneous characters
    $file = str_replace(['\'', '"'], '', $file);
    
    // Ensure the file path is relative to the current directory
    $file = basename($file);
    $filePath = 'uploads/notes/' . $file;

    // Check if file exists
    if (file_exists($filePath)) {
        // Force download
        header('Content-Description: File Transfer');
        header('Content-Type: application/octet-stream');
        header('Content-Disposition: attachment; filename=' . basename($filePath));
        header('Expires: 0');
        header('Cache-Control: must-revalidate');
        header('Pragma: public');
        header('Content-Length: ' . filesize($filePath));
        readfile($filePath);
        exit;
    } else {
        echo "File not found.";
    }
} else {
    echo "No file specified.";
}
?>
