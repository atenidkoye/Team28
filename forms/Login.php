<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="style.css">
<title>Signup Form</title>
</head>
<body>

    <div class="container">

      <h2>Login Form</h2>
        <form action="#" method="post">
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" required>
            </div>
            <div class="form-group">
                <input type="submit" value="Sign in">
            </div>
        </form>
    </div>
<script>

    function Email()
{
	let email=document.getElementById("email").value;  
	if(email ==""|| !email.value.includes("@"))     // if email is empty or does not include @
	{
		document.getElementById('email').innerHTML = "Enter your Email ";
		document.getElementById('email').style.backgroundColor = "#F9BDBD";	
		return false;
	}
	else 
	{
        document.getElementById('email').style.backgroundColor = "#DEF8CC";
		document.getElementById('email').innerHTML = "";
    }
	return true;
}
</script>
</body>
</html>

</body>
</html>