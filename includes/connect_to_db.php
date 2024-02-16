<?php
<<<<<<< HEAD
$servername = 'phptask-db-1'; // Database host --Change servername to your servername
$username = 'Team_28'; // Database username
$password = 'password'; // Database password
$database = 'Team 28'; // Database name
=======
>>>>>>> b6863f38b3896adf25179857184273e87ee9b420

// Create a database connection
$conn = new mysqli($servername, $username, $password, $database);

// Check for connection errors
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>