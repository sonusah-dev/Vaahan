<?php

session_start();

include('../public/connection.php');

if(isset($_POST['submit'])){

    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM user WHERE username = '$username'";
    $result = mysqli_fetch_array(mysqli_query($conn, $sql));    

    if(password_verify($password, $result['password'])){
        $_SESSION['id'] = $result['id'];
        $_SESSION['first_name'] = $result['first_name'];
        $_SESSION['last_name'] = $result['last_name'];
        $_SESSION['email'] = $result['email'];
        $_SESSION['username'] = $_result['username'];
        header('location:../index.html');
    } else {
        header('location:../views/login.php');
    }

} else {
   header('location:../views/login.php'); 
}

mysqli_close($conn);

?>