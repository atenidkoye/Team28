<?php
$servername = 'website-db-1'; // Database host --Change servername to your servername
$username = 'flowershop'; // Database username
$password = 'password'; // Database password
$database = 'flowershop'; // Database name

// Create a database connection
$conn = new mysqli($servername, $username, $password, $database);

// Check for connection errors
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>