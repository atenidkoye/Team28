<?php
$servername = 'localhost'; // Database host --Change servername to your servername
$username = 'abraham23000'; // Database username
$password = 'kKqPIXQL'; // Database password
$database = 'wp_abraham23000'; // Database name

// Create a database connection
$conn = new mysqli($servername, $username, $password, $database);

// Check for connection errors
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>