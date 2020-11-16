<?php

session_start();

include('../public/connection.php');

if(isset($_POST['submit'])){

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


$sql = "INSERT INTO vehicle(vehicle_number,chasis_number,vehicle_model,operational_type,engine_type,tyres,driver,vehicle_capacity,avg_load,max_load,owner_id)
        VALUES('$vehicle_number','$chasis_number','$vehicle_model','$operational_type','$engine_type','$tyres','$driver','$vehicle_capacity','$avg_load','$max_load','$vehicle_owner')";

    if(mysqli_query($conn,$sql)){
        header('location:addVehicle.php?status=ok');
    }
    else{
        header('location:addVehicle.php?status=fail');
    }
} else{
    header('location:addVehicle.php');
}

mysqli_close($conn);

?>