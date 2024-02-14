<?php
// what to do with the data

if (isset($_POST["submit"])) {
    $f_name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];


// connect to database
include 'connect_to_db.php';

// insert sql statement

$sql = "insert into customers(name, email, phone_number, address)
        values ('$f_name', '$email', '$phone', '$address')";

if ($conn->query($sql)===TRUE) {
    echo "Successful";
}
else {
    echo "Error:" .$sql . "<bt>" . $conn->error;
}

// close database connection

$conn->close();
}
?>