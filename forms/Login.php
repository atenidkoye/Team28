<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>Login Form</title>
  <style>

#myForm {
      width: 300px;
      margin: 0 auto;
      font-family: Arial, sans-serif;
    }

    label {
      display: block;
      margin-bottom: 5px;
    }

    input[type="text"] {
      width: 100%;
      padding: 8px;
      margin-bottom: 10px;
      border: 1px solid #ccc;
      border-radius: 4px;
      box-sizing: border-box;
    }

    input[type="submit"] {
      width: 100%;
      padding: 10px;
      background-color: #4CAF50;
      color: white;
      border: none;
      border-radius: 4px;
      cursor: pointer;
    }

    input[type="submit"]:hover {
      background-color: #45a049;
    }
    
  </style>
</head>
<body>

  <form id="myForm" action="" method="GET">
    <label for="username">fullname:</label>
    <input type="text" id="username" name="fullname">
    <span id="usernameError" class="error"></span>

    <br>

    <label for="password">Email</label>
    <input type="text" id="password" name="password">
    <span id="passwordError" class="error"></span>

    <br>

    <input type="submit" value="Submit">
  </form>

  <script>
    
    function validateForm() {
   
      var username = document.getElementById('username').value;
      var password = document.getElementById('password').value;

    
      document.getElementById('usernameError').innerHTML = 'Please enter your username';
      document.getElementById('passwordError').innerHTML = 'Enter a correct password';

    
      if (username.trim() === '') {
        document.getElementById('usernameError').innerHTML = 'Username is required';
        return false;
      }

      
      if (password.trim() === '') {
        document.getElementById('passwordError').innerHTML = 'Password is required';
        return false;
      }

      return true;
    }

    document.getElementById('myForm').addEventListener('submit', function(event) {
      
      event.preventDefault();

      
      if (validateForm()) {
       
        alert('Form submitted successfully!');
      }
    });
  </script>
</body>
</html>
