<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $pssRepeat = $_POST["pssrepeat"];

    // Basic server-side validation
    if (empty($name) || empty($email) || empty($password) || empty($pssRepeat)) {
        echo "All fields must be filled";
        exit(); 
    }

    if ($password !== $pssRepeat) {
        echo "Passwords do not match";
        exit(); 
    }
    

    // Hash the password
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    // Connect to database
    require_once 'includes/connect_to_db.php'; 

    // Insert SQL statement
    $sql = "INSERT INTO customers (name, email, cust_pass) VALUES ('$name', '$email', '$hashedPassword')";

    if ($conn->query($sql) === TRUE) {
        echo "Registration Successful";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Close database connection
    $conn->close();
} else {
    header("location: /forms/signup.php");
    exit();
}
?>
