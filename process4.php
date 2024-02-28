<?php
// what to do with the data

if (isset($_GET["submit"])) {
    $f_name = $_GET['name'];
    $email = $_GET['email'];


// connect to database
include 'connect_to_db.php';

// insert sql statement

$sql = "SELECT from  customers(name, email)
        values ('$name', '$email')";

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