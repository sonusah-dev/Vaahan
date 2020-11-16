<?php

session_start();

$id = $_GET['id'];

// CONNECTION
include('../../public/connection.php');

// DELETE QUERY
$sql = "DELETE FROM user WHERE id = $id";

// CHAECK FOR DELETION STATUS
if(mysqli_query($conn, $sql)) {
    header('location:../userdetail.php?success=ok');
}
else {
    header('location:../userdetail.php?fail=ok');
}

mysqli_close($conn);

?>