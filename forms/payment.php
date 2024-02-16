<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Payment Form</title>

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
    
        <h2>Secure Payment</h2>
        <form id="myForm" action="Team28/process3.php" method="post">

            <label for="name">Full Name:</label>
            <input   type="text" id="fname" name="name" required>
            <span id="NameError" class="error"></span>

            <label for="email">Email:</label>
            <input class="text" type="text" id="email" name="email" required>
            <span id="emailError" class="error"></span>

            <label for="card Number">Card Number</label>
            <input class="text" type="text" id="number" name="CardNumber" required>
            <span id="numError" class="error"></span>

            <label for="date">Expiry Date</label>
            <input class="text" type="text" id="expiry" name="Expirydate" required>
            <span id="expError" class="error"></span>

            <label for="CCV">CCV</label>
            <input type="Number" id="ccv" name="cvv" required>
            <span id="ccvError" class="error"></span>

            <br>

            <input type="hidden" name="submit" value="submit">

            <input type="submit" value="submit">
            
        </form>

        <script>
    
    function validateForm() {
    
      var fname = document.getElementById('fname').value;
      var Email = document.getElementById('email').value;
      var cardnumber = document.getElementById('number').value;
      var expiryDate = document.getElementById('expiry').value;
      var ccv = document.getElementById('ccv').value;

     
      document.getElementById('NameError').innerHTML = 'Name is Required';
      document.getElementById('emailError').innerHTML = 'Email Required';
      document.getElementById('numError').innerHTML = 'card number requied';
      document.getElementById('expError').innerHTML = 'expiry date required';
      document.getElementById('ccvError').innerHTML = 'ccv required';

      
      if (fname.trim() === '') {
        document.getElementById('NameError').innerHTML = 'Name is Required';
        return false;
      }

      
      if (Email.trim() === '') {
        document.getElementById('emailError').innerHTML = 'Email is required';
        return false;
      }
      if (cardnumber.trim() === '') {
        document.getElementById('numError').innerHTML = 'Card Number Required';
        return false;
      }
      if (expiryDate.trim() === '') {
        document.getElementById('expError').innerHTML = 'Expiry date Required';
        return false;
      }
      if (ccv.trim() === '') {
        document.getElementById('ccvError').innerHTML = 'ccv Required';
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
