<?php
if (isset($_GET['delete'])) {
    $delete_id = $_GET['delete'];
    $select_delete = mysqli_query($conn, "SELECT image FROM `products` WHERE id = '$delete_id'") or die('Query failed');
    $fetch_delete = mysqli_fetch_assoc($select_delete);
    unlink('image/' . $fetch_delete['image']);

    mysqli_query($conn, "DELETE FROM `products` WHERE id ='$delete_id'") or die('Query failed');
    mysqli_query($conn, "DELETE FROM `cart` WHERE pid ='$delete_id'") or die('Query failed');

    header('location: admin_product.php');
}
?>
