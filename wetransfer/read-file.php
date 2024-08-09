<?php
// Define a base directory to restrict file access
$baseDir = './uploads/';
$file = $baseDir . basename($_POST['file']); // Use basename() to avoid directory traversal

// echo $file;
// exit;
// Check if the file exists within the base directory

if (file_exists($file)) {
    // Set headers
    header('Content-Description: File Transfer');
    header('Content-Type: application/octet-stream');
    header('Content-Disposition: attachment; filename="' . basename($file) . '"');
    header('Expires: 0');
    header('Cache-Control: must-revalidate');
    header('Pragma: public');
    header('Content-Length: ' . filesize($file));
    
    ob_clean();
    flush();
    
    readfile($file);
    exit;
} else {
    echo "File does not exist or access is denied.";
}
?>
