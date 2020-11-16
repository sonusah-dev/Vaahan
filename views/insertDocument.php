<?php

session_start();

include('../public/connection.php');

if(isset($_POST['submit'])){
    
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

$sql = "INSERT INTO document(vehicle_id,name,document,renew_date,expiry_date,web_portal,android_portal,username,password)
        VALUES('$vehicle_id','$doc_name','$destination_file','$renew_date','$expiry_date','$access_portal_web','$access_portal_android','$username','$password')";

    if(mysqli_query($conn,$sql)){
        header('location:addDocument.php?status=ok');
    }
    else{
        // echo mysqli_error($conn);
        header('location:addDocument.php?status=ok');
    }

}
else{
    header('location:addDocument.php');
}

mysqli_close($conn);

?>