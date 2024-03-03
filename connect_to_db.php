<?php
$servername = ''; // Database host --Change servername to your servername
$username = ''; // Database username
$password = ''; // Database password
$database = ''; // Database name

// Create a database connection
$conn = new mysqli($servername, $username, $password, $database);

// Check for connection errors
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>