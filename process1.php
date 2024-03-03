<?php
include 'connect_to_db.php';

if (isset($_POST['submit-btn'])){
    $name = mysqli_real_escape_string($conn, filter_var($_POST['name'], FILTER_SANITIZE_FULL_SPECIAL_CHARS));
    $email = mysqli_real_escape_string($conn, filter_var($_POST['email'], FILTER_SANITIZE_EMAIL));
    $password = mysqli_real_escape_string($conn, filter_var($_POST['password'], FILTER_SANITIZE_FULL_SPECIAL_CHARS));
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT); // Hash the password
    $rptpassword = mysqli_real_escape_string($conn, filter_var($_POST['rptpassword'], FILTER_SANITIZE_FULL_SPECIAL_CHARS));

    $select_user = mysqli_query($conn, "SELECT * FROM `users` where email = '$email'") or die('Query not passed');

    if (mysqli_num_rows($select_user) > 0){
        $message[] = 'User already exists';
    } else {
        if ($password !== $rptpassword){
            $message[] = 'Passwords do not match';
        } else {
            mysqli_query($conn, "INSERT INTO `users`(`name`, `email`, `password`) 
                VALUES ('$name', '$email','$hashedPassword')") or die('Query has failed');
            $message[] = 'Registration successful';
            header("Location: register.php");
            exit();
        }
    }
}
?>
