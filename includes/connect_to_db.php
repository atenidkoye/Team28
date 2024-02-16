<?php
$servername = 'phptask-db-1'; // Database host
$username = 'Team_28'; // Database username
$password = 'team28new'; // Database password
$database = 'Team_28'; // Database name
// Create a database connection
$conn = new mysqli($servername, $username, $password, $database);

// Check for connection errors
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>