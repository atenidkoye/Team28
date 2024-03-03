<?php
include 'connect_to_db.php';

if (isset($_POST['submit-btn'])){
    $filter_name = filter_var($_POST['name'], FILTER_SANITIZE_STRING);
    $name = mysqli_real_escape_string($conn, $filter_name);

    $filter_email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    $email = mysqli_real_escape_string($conn, $filter_email);

    $filter_password = filter_var($_POST['password'], FILTER_SANITIZE_STRING);
    $password = mysqli_real_escape_string($conn, $filter_password);
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    $filter_rptpassword = filter_var($_POST['rptpassword'], FILTER_SANITIZE_STRING);
    $rptpassword = mysqli_real_escape_string($conn, $filter_rptpassword);


    $select_user = mysqli_query($conn, "SELECT * FROM `users` where email = '$email'") or die('Query not passed');

    if (mysqli_num_rows($select_user)>0){
        $message[]= 'User already exists';
    }else{
        if ($password !== $rptpassword){
            $message[] = 'Passwords do not match';
        }else{
            mysqli_query($conn, "INSERT INTO `users`(`name`, `email`, `password`) 
                VALUES ('$name', '$email','$hashedPassword')") or die('Query has failed');
            $message[]= 'Successful';
            header("Location: login.php");
        }
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="style.css">
    <title>Register</title>
</head>
<body>
   
    <section class="form-container">
        <?php
            if (isset($message)) {
                foreach ($message as $msg) {
                    echo '
                        <div class="message">
                            <span>'.$msg.'</span>
                            <i class="fa-solid fa-circle-xmark" onclick="this.parentElement.remove()"></i>
                        </div>
                    ';
                }
            }
        ?>
        <form  method="post">
            <h1>Register now</h1>
            <input type="text" name="name" placeholder="Enter your name" required>
            <input type="email" name="email" placeholder="Enter your email" required>
            <input type="password" name="password" placeholder="Enter your password" required>
            <input type="password" name="rptpassword" placeholder="Repeat password" required>
            <input type="submit" name="submit-btn" value="Register" class="btn">
            <p>Already have an account? <a href="login.php">Login</a></p>
        </form>
    </section>
</body>
</html>
