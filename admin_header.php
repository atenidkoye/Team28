<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <title>Document</title>
</head>
<body>
    <header class="header">
        <div class="flex">
            <a href="admin.php" class="logo"><img src="images/logo3.png"></a>

            <nav class="navbar">
                <a href="admin.php">Home</a>
                <a href="admin_product.php">Products</a>
                <a href="admin_order.php">Orders</a>
            </nav>
            <div class="icons">
                <i class="fas fa-user" id="user-btn"></i>
                <i class="fa-solid fa-list" id="menu-btn"></i>
            </div>
            <div class="user-box">
                <p>Username : <span><?php echo $_SESSION['admin_name'] ?></span></p>
                <p>Email : <span><?php echo $_SESSION['admin_email']; ?></span></p>
                <form method="post">
                    <button type="submit" name="logout" class="logout-btn">Log out</button>
                </form>
            </div>
        </div>

    </header>
    <div class="banner">
        <div class="detail">
            <h1>Admin Dashboard</h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                Cumque aperiam sed repudiandae et,
            </p>
        </div>
    </div>
</body>
</html>