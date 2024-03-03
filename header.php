<?php
    include 'connect_to_db.php';
    session_start();
    $user_id = $_SESSION['user_name'];
    


    if(!isset($user_id)){
        header('location: login.php');
    }

    // $admin_id = $_SESSION['admin_name'];


    if(isset($_POST['logout'])) {
        session_destroy();
        header('location: login.php');
        exit();
    }
?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="main2.css">
</head>
<body>
    <header>
        <p class="head">TEAM28</p>
        <nav class="navbar">
            <a href="#home">Home</a>
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

    <section class="home" id="home">
        <div class="content">
            <h3>Fresh Flowers</h3>
            <span>Natural Flowers</span>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Laborum obcaecati voluptatem reiciendis atque optio, beatae dolores ea totam amet itaque, eaque ratione illum tempore inventore enim voluptates ducimus alias maxime.</p>
            <a href="#" class="btn">Shop Now</a>
        </div>

    </section>

    <section class="products">
        <h2>OUR CATALOG</h2>
        <div class="product-content">
            <?php
                $select_products = mysqli_query($conn, "SELECT * FROM `products`") or die("Query Failed");
                if (mysqli_num_rows($select_products)>0) {
                    while($fetch_products = mysqli_fetch_assoc($select_products)){

                    
            ?>
            <form method="post" class="card">
                <img src="image/<?php echo $fetch_products['image']; ?>">
                <div class="price">€<?php echo $fetch_products['price']; ?></div>
                <div class="name"><?php echo $fetch_products['name']; ?></div>
                <input type="hidden" name="product_id" value="<?php echo $fetch_products['id']; ?>">
                <input type="hidden" name="product_name" value="<?php echo $fetch_products['name']; ?>">
                <input type="hidden" name="product_price" value="<?php echo $fetch_products['price']; ?>">
                <input type="hidden" name="product_quantity" value="1" min="1">
                <input type="hidden" name="product_id" value="<?php echo $fetch_products['image']; ?>">
                <div class="icon">
                    <a href="page.php?pid=<?php echo $fetch_products['id'];?>" class="fa-brands fa-shopify"></a>
                    <button type="submit" name="add_to_cart " class="fas fa-shopping-cart"></button>
                    <button type="submit" name="favourite" class="fas fa-heart"></button>
                </div>
            </form>
            <?php
                    }
                }else{
                        echo '<p class="empty"> No products added</p>';
                }    
            ?>
        </div>
    </section>
    <script type="text/javascript" src="script.js"></script>

   