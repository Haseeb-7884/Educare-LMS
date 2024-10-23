
<?php
// Check if the 'file' parameter is set in the URL
if (isset($_GET['file'])) {
    // Sanitize the filename to prevent directory traversal
    $file_name = basename($_GET['file']);
    
    // Specify the directory where your files are stored
    $file_path = '../new/' . $file_name;

    // Check if the file exists
    if (file_exists($file_path)) {
        // Set headers for file download
        header('Content-Description: File Transfer');
        header('Content-Type: application/octet-stream');
        header('Content-Disposition: attachment; filename="' . $file_name . '"');
        header('Expires: 0');
        header('Cache-Control: must-revalidate');
        header('Pragma: public');
        header('Content-Length: ' . filesize($file_path));
        
        // Output the file content
        readfile($file_path);
        exit;
    } else {
        echo 'File not found.';
    }
} else {
    echo 'Invalid request.';
}
?>
