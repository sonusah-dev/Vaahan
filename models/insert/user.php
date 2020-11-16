<?php

session_start();

include('../../public/connection.php');

$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$username = $_POST['username'];
$password = $_POST['password'];

$password_encrypt = password_hash($password, PASSWORD_BCRYPT);

$sql = "INSERT INTO user(first_name,last_name,phone,email,username,password)
        VALUES('$first_name','$last_name','$phone','$email','$username','$password_encrypt')";

if(mysqli_query($conn,$sql)){
    header('location:../../views/login.php');
}else{
    header('location:../../views/register.php');
}

mysqli_close($conn);

?>