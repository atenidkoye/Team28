<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="main2.css">
</head>
    <title>Document</title>
</head>
<body>
<header>
        <p class="head">TEAM28</p>
        <nav class="navbar">
            <a href="index.php">Home</a>
            <a href="#about">About</a>
            <a href="#product">Product</a>

        </nav>
        <div class="icons">
            <i class="fas fa-search"></i>
            <i class="fas fa-shopping-cart"></i>
            <i class="fas fa-user" id="user-btn"></i>
        </div>

        <div class="user-box">
            <p>Username : <span><?php echo $_SESSION['user_name'] ?></span></p>
            <p>Email : <span><?php echo $_SESSION['user_email']; ?></span></p>
            <form method="post">
                <button type="submit" name="logout" class="logout-btn">Log out</button>
            </form>
        </div>
    </header>
</body>
</html>