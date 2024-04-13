<?php
session_start();
include "../settings/connection.php";

function myfunction() {
    global $conn;
    $sql = "SELECT * FROM Projects";
    $result = $conn->query($sql);

    if ($result) {
        $projectsArray = mysqli_fetch_all($result, MYSQLI_ASSOC);
        return $projectsArray;
    } else {
        return false;
    }
}

?>

