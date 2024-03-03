<?php
include 'connect_to_db.php';

session_start();

if (isset($_POST['submit-btn'])){
    $filter_email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    $email = mysqli_real_escape_string($conn, $filter_email);
   
    $filter_password = filter_var($_POST['password'], FILTER_SANITIZE_STRING);
    $password = mysqli_real_escape_string($conn, $filter_password);
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    $select_user = mysqli_query($conn, "SELECT * FROM `users` where email = '$email'") or die('Query not passed');

    if (mysqli_num_rows($select_user)>0){
        $user = mysqli_fetch_assoc($select_user);
        if (password_verify($password, $user['password'])) {
            if ($user['user_type']== 'admin'){
                $_SESSION['admin_name'] = $user['name'];
                $_SESSION['admin_email'] = $user['email'];
                $_SESSION['admin_id'] = $user['id'];
                header('location: admin.php');
            }else if ($user['user_type']== 'user'){
                $_SESSION['user_name'] = $user['name'];
                $_SESSION['user_email'] = $user['email'];
                $_SESSION['user_id'] = $user['id'];
                header('location: index.php');
            }
        } else {
            $message[] = 'incorrect email or password';
        }
    }
}
?>