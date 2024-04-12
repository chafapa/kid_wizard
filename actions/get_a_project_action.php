<?php
include '../settings/connection.php';

function getFunction($projectID){
    global $conn;
    $sql = "SELECT * FROM Projects WHERE project_id = '$projectID'";
    $result = $conn->query($sql);
    if ($result === 1) {
        $row = $result->fetch_assoc();
        return $row;
    } else {
        return false;
    }
}


?>