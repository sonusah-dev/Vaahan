<?php

session_start();

if(isset($_POST['submit'])){

$id = $_GET['id'];
$vehicle_number = $_POST['vehicle_number'];
$chasis_number = $_POST['chasis_number'];
$vehicle_model = $_POST['vehicle_model'];
$operational_type = $_POST['operational_type'];
$engine_type = $_POST['engine_type'];
$tyres = $_POST['tyres'];
$driver = $_POST['driver'];
$vehicle_capacity = $_POST['vehicle_capacity'];
$avg_load = $_POST['average_load'];
$max_load = $_POST['maximum_load'];
$vehicle_owner = $_POST['vehicle_owner'];


include('../../public/connection.php');

$sql = "UPDATE vehicle SET
        vehicle_number = '$vehicle_number',
        chasis_number = '$chasis_number',
        vehicle_model = '$vehicle_model',
        operational_type = '$operational_type',
        engine_type = '$engine_type',
        tyres = '$tyres',
        driver = '$driver',
        vehicle_capacity = '$vehicle_capacity',
        avg_load = '$avg_load',
        max_load = '$max_load',
        owner_id = '$vehicle_owner'
        WHERE id = '$id'";

    if(mysqli_query($conn,$sql)){
        header('location:../../views/showVehicle.php?status=ok');
    }
    else{
        // echo mysqli_error($conn);
        header('location:../../views/showVehicle.php?status=fail');
    }

} else{
    header('location:../../views/showVehicle.php');
}

mysqli_close($conn);

?>