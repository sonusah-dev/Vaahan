<?php

session_start();

$id = $_GET['id'];
$username = $_POST['username'];
$password = $_POST['password'];
$confirm_password = $_POST['confirm_password'];

include('../../public/connection.php');

$sql = "UPDATE user SET username='$username', password='$password' WHERE id ='$id' ";

if($password === $confirm_password){

    if(mysqli_query($conn,$sql)){
        echo "Updated successfully";
    }
    else{
        echo mysqli_error($conn);
    }

}

mysqli_close($conn);

?>