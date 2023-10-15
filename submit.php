<?php
// Get the submitted Arabic input
$arabicInput = $_POST['arabicInput'];

// Get the creator's IP address
$ipAddress = $_SERVER['REMOTE_ADDR'];

// Get the current date and time
$timestamp = date('Y-m-d H:i:s');

// Create a unique filename using the timestamp
$filename = "submission_$timestamp.txt";

// Save the input, IP address, and date to a file
$content = "Submission Date: $timestamp\nCreator IP: $ipAddress\nArabic Input:\n$arabicInput";
file_put_contents($filename, $content);

// Send a response
echo 'Your submission has been saved.';

// You can also log the filename, IP address, and date for reference
error_log("File saved: $filename");
error_log("Creator IP: $ipAddress");
error_log("Submission Date: $timestamp");
?>
