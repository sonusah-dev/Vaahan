<?php

session_start();

$id = $_GET['id'];

// CONNECTION
include('../../public/connection.php');

if(isset($_GET['id'])){

// DELETE QUERY
$sql = "DELETE FROM owner WHERE id = $id";

    // CHAECK FOR DELETION STATUS
    if(mysqli_query($conn, $sql)) {
        header('location:../../views/showOwner.php?success=ok');
    }
    else {
        header('location:../../views/showOwner.php?fail=ok');
    }

} else{
    header('location:../../views/showOwner.php');
}



mysqli_close($conn);

?>