<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Payment Form</title>
    
</head>
<body>
    <div class="container">
        <h2>Secure Payment</h2>
        <form id="form" action="#" method="post">

            <label for="name">first Name:</label>
            <input type="text" id="fname" name="name" required>
            <span id="NameError" class="error"></span>

            <label for="name">Last Name:</label>
            <input type="text" id="lname" name="name" required>
            <span id="lnameError" class="error"></span>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
            <span id="emailError" class="error"></span>

            <label for="card Number">Card Number</label>
            <input type="Number" id="number" name="Number" required>
            <span id="numError" class="error"></span>

            <label for="date">Expiry Date</label>
            <input type="date" id="expiry" name="date" required>
            <span id="expError" class="error"></span>

            <label for="CCV">CCV</label>
            <input type="Number" id="ccv" name="Number" required>
            <span id="ccvError" class="error"></span>
            
        </form>
    </div>

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
