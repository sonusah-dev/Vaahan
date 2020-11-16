<?php

session_start();

// CONNECTION
include('../../public/connection.php');

$id = $_GET['id'];

if(isset($_GET['id'])){

// DELETE QUERY
$sql = "DELETE FROM driver WHERE id = $id";

    // CHAECK FOR DELETION STATUS
    if(mysqli_query($conn, $sql)) {
        header('location:../../views/showDriver.php?success=ok');
    }
    else {
        header('location:../../views/showDriver.php?success=fail');
    }

} else{
    header('location:../../views/showDriver.php');
}

mysqli_close($conn);

?>