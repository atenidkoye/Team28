<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Form Validation</title>
  <style>
    .error {
      color: red;
    }
  </style>
</head>
<body>

  <form id="myForm">
    <label for="username">Username:</label>
    <input type="text" id="username" name="username">
    <span id="usernameError" class="error"></span>

    <br>

    <label for="password">Password:</label>
    <input type="password" id="password" name="password">
    <span id="passwordError" class="error"></span>

    <br>

    <input type="submit" value="Submit">
  </form>

  <script>
    // Function to validate the form
    function validateForm() {
      // Get form elements
      var username = document.getElementById('username').value;
      var password = document.getElementById('password').value;

      // Reset error messages
      document.getElementById('usernameError').innerHTML = '';
      document.getElementById('passwordError').innerHTML = '';

      // Validate username
      if (username.trim() === '') {
        document.getElementById('usernameError').innerHTML = 'Username is required';
        return false;
      }

      // Validate password
      if (password.trim() === '') {
        document.getElementById('passwordError').innerHTML = 'Password is required';
        return false;
      }

      // Form is valid
      return true;
    }

    // Add event listener to the form on submit
    document.getElementById('myForm').addEventListener('submit', function(event) {
      // Prevent the default form submission
      event.preventDefault();

      // Validate the form
      if (validateForm()) {
        // If the form is valid, you can submit it or perform other actions
        alert('Form submitted successfully!');
      }
    });
  </script>
</body>
</html>
