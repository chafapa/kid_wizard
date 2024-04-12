<?php

$server= "localhost";
$username = "root";
$password = "d8/P4qCTjCRN";
$database = "kid_wiz";


$conn = new mysqli($server, $username, $password, $database) or die("could not connect to database");

//check the connection

if($conn -> connect_error){
    die("Connection failed: " . $conn -> connect_error);
}




?> 