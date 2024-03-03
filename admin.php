<?php
    include 'connect_to_db.php';
    session_start();
    $admin_id = $_SESSION['admin_name'];
    


    if(!isset($admin_id)){
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="style.css">
    <title>Admin</title>
</head>
<body>
    <?php
        include 'admin_header.php';
    ?>
    <div class="line4"></div>
    <section class="dashboard">
        <div class="box-container">
            <div class="box">
                <?php
                    $total_pendings = 0;
                    $select_pendings = mysqli_query($conn, "SELECT * FROM `orders` WHERE payment_status = 'pending'")
                        or die('Query failed');
                    while ($fetch_pending = mysqli_fetch_assoc($select_pendings)) {
                        $total_pendings += $fetch_pending['total_price'];
                    }   
                ?>
                <h3>€ <?php echo $total_pendings; ?></h3>
                <p>total pending</p>
            </div>

            <div class="box">
                <?php
                    $total_complete = 0;
                    $select_complete = mysqli_query($conn, "SELECT * FROM `orders` WHERE payment_status = 'complete'")
                        or die('Query failed');
                    while ($fetch_complete = mysqli_fetch_assoc($select_complete)) {
                        $total_complete += $fetch_complete['total_price'];
                    }   
                ?>
                <h3>€ <?php echo $total_complete; ?></h3>
                <p>total complete</p>
            </div>


            <div class="box">
                <?php
                    $select_orders = mysqli_query($conn, "SELECT * FROM `orders`")
                        or die('Query failed');
                    $num_of_orders = mysqli_num_rows($select_orders)
                       
                ?>
                <h3><?php echo $num_of_orders; ?></h3>
                <p>orders</p>                
            </div>


            <div class="box">
                <?php
                    $select_products = mysqli_query($conn, "SELECT * FROM `products`")
                        or die('Query failed');
                    $num_of_products = mysqli_num_rows($select_products)
                       
                ?>
                <h3><?php echo $num_of_products; ?></h3>
                <p>products</p>
        </div>
    </section>
    <script type="text/javascript" src="script.js"></script>
</body>
</html>