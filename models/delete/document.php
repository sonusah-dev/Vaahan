<?php

session_start();

// CONNECTION
include('../../public/connection.php');

$id =  $_GET['id'];

if(isset($_GET['id'])){

// DELETE QUERY
$sql = "DELETE FROM document WHERE id = $id";

    // CHAECK FOR DELETION STATUS
    if(mysqli_query($conn, $sql)) {
        header('location:../../views/showDocument.php?status=ok');
    }
    else {
        //  echo mysqli_error($conn);
        header('location:../../views/showDocument.php?status=fail');
    }

} else{
    header('location:../../views/showDocument.php');
}

mysqli_close($conn);

?>