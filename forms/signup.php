<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sign up</title>
  <style>
    .error {
      color: red;
    }

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



  <form id="myForm" method="POST" action='/Team28/process1.php' onsubmit="return validateForm()">
    <label for="fname">Fullname:</label>
    <input type="text" id="fname" name="username">
    <span id="fullnameError" class="error"></span>

    <br>
  
    <label for="email">Email:</label>
    <input type="text" id="email" name="email">
    <span id="emailError" class="error"></span>

    <br>

    <label for="address">Address:</label>
    <input type="text" id="address" name="address">
    <span id="addressError" class="error"></span>

    <br>

    <label for="phone">Phone:</label>
    <input type="text" id="phone" name="phone">
    <span id="phoneError" class="error"></span>

    <br>

 
    <input type="hidden" name="submit" value="submit">

    <input type="submit" value="submit">
  </form>

  <script>
    function validateForm() {
      var fname = document.getElementById('fname').value;
      var email = document.getElementById('email').value;
      var phone = document.getElementById('phone').value;
      var address = document.getElementById('address').value;

      document.getElementById('fullnameError').innerHTML = '';
      document.getElementById('emailError').innerHTML = '';
      document.getElementById('phoneError').innerHTML = '';
      document.getElementById('addressError').innerHTML = '';

      if (fname.trim() === '') {
        document.getElementById('fullnameError').innerHTML = 'Fullname is required';
        return false;
      }
      if (email.trim() === '') {
        document.getElementById('emailError').innerHTML = 'Email is required';
        return false;
      }
      if (phone.trim() === '') {
        document.getElementById('phoneError').innerHTML = 'Phone is required';
        return false;
      }
      if (address.trim() === '') {
        document.getElementById('addressError').innerHTML = 'Address is required';
        return false;
      }

     return true;
    }

    if(validateForm){
        alert ('form submitted successfuly');
    }
  </script>
</body>
</html>
