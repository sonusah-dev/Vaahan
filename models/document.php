<?php

session_start();


include('../public/connection.php');

if(isset($_POST['submit'])){

$id = $_GET['id'];

$vehicle_id = $_POST['vehicle_id'];
$doc_name = $_POST['doc_name'];
$doc_file = $_FILES['doc_file'];
$renew_date = $_POST['renew_date'];
$expiry_date = $_POST['expiry_date'];
$access_portal_web = $_POST['access_portal_web'];
$access_portal_android = $_POST['access_portal_android'];
$username = $_POST['username'];
$password = $_POST['password'];


// FILE TRANSFER OF IMAGES
$doc_file_name = $doc_file['name'];
$doc_file_path = $doc_file['tmp_name'];
$doc_file_error = $doc_file['error'];

    if($doc_file_error == 0){
        $destination_file = '../public/uploads/vehicleDocs/'.$doc_file_name;
        move_uploaded_file($doc_file_path, $destination_file);
    }

$sql = "UPDATE document SET
        vehicle_id = '$vehicle_id',
        name = '$doc_name',
        document = '$destination_file',
        renew_date = '$renew_date',
        expiry_date = '$expiry_date',
        web_portal = '$access_portal_web',
        android_portal = '$access_portal_android',
        username = '$username',
        password = '$password'
        WHERE id = '$id'";

    if(mysqli_query($conn,$sql)){
        header('location:../views/showDocument.php?status=ok');
    }
    else{
        // echo mysqli_error($conn);
        header('location:../views/showDocument.php?status=fail');
    }

} else{
     header('location:../views/showDocument.php');
}

mysqli_close($conn);

?>