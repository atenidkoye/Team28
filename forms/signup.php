<?php
include '../includes/top.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up Form</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f1f1f1;
        }

        .signup-container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .signup-form {
            background-color: #fff;
            padding: 40px;
            border-radius: 4px;
            box-shadow: 0px 0px 10px rgba(0,0,0,0.1);
        }
        .signup-form h2 {
            text-align: center;
            margin-bottom: 30px;
        }
        .signup-form-form {
            display: flex;
            flex-direction: column;
        }
        .signup-form-form input[type="text"], .signup-form-form input[type="password"] {
            padding: 10px;
            margin-bottom: 10px;
            border-radius: 4px;
            border: 1px solid #ccc;
        }
        .signup-form-form button[type="submit"] {
            background-color: #4CAF50;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
    </style>
    <script>
        function validateForm() {
            var name = document.forms["signup-form"]["name"].value;
            var email = document.forms["signup-form"]["email"].value;
            var password = document.forms["signup-form"]["password"].value;
            var repeatPassword = document.forms["signup-form"]["pssrepeat"].value;

            // Basic validation
            if (name === "" || email === "" || password === "" || repeatPassword === "") {
                alert("All fields must be filled out");
                return false;
            }

            // Check if passwords match
            if (password !== repeatPassword) {
                alert("Passwords do not match");
                return false;
            }

            return true;
        }
    </script>
</head>
<body>
    <div class="signup-container">
        <section class="signup-form">
            <h2>Sign Up</h2>
            <div class="signup-form-form">
                <form id="signup-form" action="../process1.php" method="post" onsubmit="return validateForm()">
                    <input type="text" name="name" placeholder="Full name">
                    <input type="text" name="email" placeholder="Email">
                    <input type="password" name="password" placeholder="Password">
                    <input type="password" name="pssrepeat" placeholder="Repeat password">
                    <button type="submit" name="submit">Sign Up</button>
                </form>
            </div>
        </section>
    </div>
</body>
</html>
