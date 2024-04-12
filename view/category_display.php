<?php

error_reporting(E_ALL);
ini_set("display_errors", 1);
session_start();
include "../settings/connection.php";


$user_id = $_SESSION['personid'];
$username = $_SESSION['firstn'];

$sql0 = "SELECT * FROM Projects WHERE category = 0 ";
$sql1 = "SELECT * FROM Projects WHERE category = 1 ";
$sql2 = "SELECT * FROM Projects WHERE category = 2 ";

$result0 = mysqli_query($conn, $sql0);
$result1 = mysqli_query($conn, $sql1);
$result2 = mysqli_query($conn, $sql2);






?>