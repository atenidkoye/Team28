<?php
$servername = 'phptasks-db-1'; // Database host --Change servername to your servername
$username = 'Team28'; // Database username
$password = 'newteam28'; // Database password
$database = 'Team28'; // Database name

// Create a database connection
$conn = new mysqli($servername, $username, $password, $database);

// Check for connection errors
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
?>
