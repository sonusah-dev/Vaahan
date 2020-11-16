<?php

session_start();

include('../public/connection.php');

if(isset($_POST['submit'])){

$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$id_proof = $_FILES['id_proof'];
$street = $_POST['street'];
$city = $_POST['city'];
$pincode = $_POST['pincode'];
$state = $_POST['state'];
$temp_street = $_POST['temp_street'];
$temp_city = $_POST['temp_city'];
$temp_pincode = $_POST['temp_pincode'];
$temp_state = $_POST['temp_state'];


// FILE TRANSFER OF IMAGES
$id_proof_name = $id_proof['name'];
$id_proof_path = $id_proof['tmp_name'];
$id_proof_error = $id_proof['error'];

    if($id_proof_error == 0){
        $destination_file = '../public/uploads/ownerDocs/'.$id_proof_name;
        move_uploaded_file($id_proof_path, $destination_file);
    }

$sql = "INSERT INTO owner(first_name,last_name,phone,email,id_proof,street,city,pincode,state,temp_street,temp_city,temp_pincode,temp_state)
        VALUES('$first_name','$last_name','$phone','$email','$destination_file','$street','$city','$pincode','$state','$temp_street','$temp_city','$temp_pincode','$temp_state')";

    if(mysqli_query($conn,$sql)){
        header('location:addOwner.php?status=ok');
    }
    else{
        header('location:addOwner.php?status=fail');
    }

}else{
    header('location:addOwner.php');
}


mysqli_close($conn);

?>