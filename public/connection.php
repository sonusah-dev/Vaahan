<?php

$db_host = 'localhost';
$db_username = 'root';
$db_password = 'mysql;';
$db_name = 'vaahan_seva';

// CONNECTING DATABASE
$conn = mysqli_connect($db_host, $db_username, $db_password , $db_name);

// CHECK CONNECTION
if(!$conn) {
    die('Database connection failed');
}
// else{
//     echo("HELOO I AM WORKING FINE");
// }

?>