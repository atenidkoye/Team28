<?php
include 'connect_to_db.php';
session_start();
$admin_id = $_SESSION['admin_name'];

if (!isset($admin_id)) {
    header('location: login.php');
    exit();
}

if (isset($_POST['Logout'])) {
    session_destroy();
    header('location: login.php');
    exit();
}

if (isset($_POST['add_product'])) {
    $product_name = mysqli_real_escape_string($conn, $_POST['name']);
    $product_price = mysqli_real_escape_string($conn, $_POST['price']);
    $product_description = mysqli_real_escape_string($conn, $_POST['description']);
    $image = $_FILES['image']['name'];
    $image_size = $_FILES['image']['size']; 
    $image_tmp_name = $_FILES['image']['tmp_name']; 

    // Create the 'image/' directory if it doesn't exist
    if (!file_exists('image/')) {
        mkdir('image/');
    }

    // path for the uploaded file
    $image_folder = 'image/'. $image;

    $select_product_name = mysqli_query($conn, "SELECT `name` FROM `products` WHERE `name` = '$product_name'") or die('Query failed');

    if (mysqli_num_rows($select_product_name) > 0) {
        $message[] = 'Product name already exists';
    } else {
        $insert_product = mysqli_query($conn, "INSERT INTO `products` (`name`, `price`, `product_detail`, `image`)
                VALUES ('$product_name', '$product_price', '$product_description', '$image')") or die('Query failed');
        if ($insert_product) {
            if ($image_size > 5000000) {
                $message[] = 'Image size is too large';
            } else {
                move_uploaded_file($image_tmp_name, $image_folder);
                $message[] = 'Product added successfully';
            }
        }
    }
}
include 'delete.php';

?>


<style type="text/css">
    <?php
        include 'style.css';
    ?>
</style>    


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        include 'admin_header.php';
    ?>
    <?php
        if (isset($message)){
            foreach($message as $msg){
                echo '
                    <div class="message">
                        <span>'.$msg.'</span>
                        <i class="fa-solid fa-circle-x" onclick="this.parentElement.remove()"></i>
                    </div>
                ';
            }    
        }
    ?>
    <div class="line2"></div>
    <section class="add-products form-container" >
        <form method="post" action="" enctype="multipart/form-data">
            <div class="input-field">
                <label>product name</label>
                <input type="text" name="name" required>
            </div>
            <div class="input-field">
                <label>product price</label>
                <input type="text" name="price" required>
            </div>
            <div class="input-field">
                <label>product description</label>
                <textarea name="description" required></textarea>
            </div>
            <div class="input-field">
                <label>product image</label>
                <input type="file" name="image" accept="image/jpg, image/png, image/jpeg, image/webp" required>
            </div>
            <input type="submit" name="add_product" value="add product" class="btn">
        </form>
    </section>

    <div class="line3"></div>
    <div class="line4"></div>
    <section class="show-products">
        <div class="box-container">
            <?php
                $select_products = mysqli_query($conn, "SELECT * FROM `products`") or die('Query failed');
                if(mysqli_num_rows($select_products)>0){
                    while($fetch_products = mysqli_fetch_assoc($select_products)){

            ?>        
            <div class="box">
                <img src="image/<?php echo $fetch_products['image']; ?>">
                <p>price:€ <?php echo $fetch_products['price']; ?> </p>
                <h4><?php echo $fetch_products['name']; ?> </h4>
                <details><?php echo $fetch_products['product_detail']; ?></details>
                <a href="admin_product.php?edit=<?php echo $fetch_products['id']; ?>" class="edit">Edit</a>
                <a href="admin_product.php?delete=<?php echo $fetch_products['id']; ?>" class="delete" 
                    onclick=" return confirm('Confirm Delete');">Delete</a>
            </div>
            <?php
                    }
                }else{
                        echo'
                            <div class="empty">
                                <p> No products added</p>
                            </div>    
                        ';
                }   
            ?>
        </div>
    </section>
    
</body>
</html>