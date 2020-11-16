<?php

session_start();

include('../public/connection.php');

if(isset($_POST['submit'])){

$id = $_GET['id'];

$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$phone = $_POST['phone'];
$emergency_number = $_POST['emergency_number'];
$email = $_POST['email'];
$license_card = $_FILES['license_card'];
$license_number = $_POST['license_number'];
$license_expiry_date = $_POST['license_expiry_date'];
$driving_experience = $_POST['driving_experience'];
$job_status = $_POST['job_status'];
$street = $_POST['street'];
$city = $_POST['city'];
$pincode = $_POST['pincode'];
$state = $_POST['state'];
$temp_street = $_POST['temp_street'];
$temp_city = $_POST['temp_city'];
$temp_pincode = $_POST['temp_pincode'];
$temp_state = $_POST['temp_state'];


print_r($license_card);

// FILE TRANSFER OF IMAGES
$license_card_name = $license_card['name'];
$license_card_path = $license_card['tmp_name'];
$license_card_error = $license_card['error'];

    if($license_card_error == 0){
        $destination = '../public/uploads/driverDocs/'.$license_card_name;
        move_uploaded_file($license_card_path, $destination);
    }

$sql = "UPDATE driver SET
        first_name = '$first_name',
        last_name = '$last_name',
        phone = '$phone',
        emergency_number = '$emergency_number',
        email = '$email',
        license_card = '$destination',
        license_number = '$license_number',
        license_expiry_date = '$license_expiry_date',
        driving_experience = '$driving_experience',
        job_status = '$job_status',
        street = '$street',
        city = '$city',
        pincode = '$pincode',
        state = '$state',
        temp_street = '$temp_street',
        temp_city = '$temp_city',
        temp_pincode = '$temp_pincode',
        temp_state = '$temp_state'
        WHERE id = '$id' ";

    if(mysqli_query($conn, $sql)){
        // echo "updated Successfully";
        header('location:../views/showDriver.php?status=ok');
    } else{
        // echo mysqli_error($conn);
        header('location:../views/showDriver.php?status=fail');
    }

} else{
    header('location:../views/showDriver.php');
}

mysqli_close($conn);

?>