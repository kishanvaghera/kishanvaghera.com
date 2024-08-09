<?php
error_reporting(E_ALL);
ini_set('max_execution_time', '30000'); //300 seconds = 5 minutes
ini_set('max_execution_time', '0'); // for infinite time of execution 
ini_set('post_max_size','2000M');
ini_set('upload_max_filesize','2000M');

$conn = new mysqli("localhost","admin","admin@8219","wetransfer");

// Check connection
if ($conn -> connect_errno) {
  echo "Failed to connect to MySQL: " . $conn -> connect_error;
  exit();
}
?>