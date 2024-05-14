<?php
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

// Set database connection variables
$host = 'localhost';  // Your database host, often 'localhost'
$username = 'root';  // Your database username
$password = '';  // Your database password
$database = 'feedbackform';  // Your database name

// Create connection
$conn = new mysqli($host, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
