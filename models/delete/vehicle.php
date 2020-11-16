<?php

session_start();

$id = $_GET['id'];

// CONNECTION
include('../../public/connection.php');

if(isset($_GET['id'])){

// DELETE QUERY
$sql = "DELETE FROM vehicle WHERE id = $id";

    // CHAECK FOR DELETION STATUS
    if(mysqli_query($conn, $sql)) {
        header('location:../../views/showVehicle.php?fail=ok');
    }
    else {
        header('location:../../views/showVehicle.php?fail=fail');
    }

} else{
    header('location:../../views/showVehicle.php');
}

mysqli_close($conn);

?>