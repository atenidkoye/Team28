<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h2>Signup Form</h2>
    <form action="/Team28/process.php" method="post">
        <div class="form-group">
            <label for="fullname">Full Name</label>
            <input type="text" id="fullname" name="name" required>
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" id="email" name="email" required>
        </div>
        <div class="form-group">
            <label for="Phone">Phone</label>
            <input type="Phone" id="Phone" name="phone" required>
        </div>
        <div class="form-group">
            <label for="address">Address</label>
            <input type="address" id="address" name="address" required>
        </div>
        <div class="form-group">
            <input type="submit" value="Sign Up">
        </div>
    </form>
</body>
</html>