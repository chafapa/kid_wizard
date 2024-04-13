<?php
include "../settings/connection.php";

if(isset($_POST['submit'])){
    $projectName =  $_POST['title'];
    $overview = $_POST['overview'];
    $projectID =  $_GET['project_id'];
    $category = $_POST['category']; 
    $difficulty = $_POST['difficulty_level'];
    $url = $_POST['image_url'];
    $description = $_POST['description'];
    $materials = $_POST['materials_needed'];
   
    // $sql = "UPDATE Projects SET title='$projectName' WHERE project_id='$projectID'";
    $sql = "UPDATE Projects SET title='$projectName', overview='$overview', category='$category', difficulty_level='$difficulty', image_url='$url', description='$description', materials_needed='$materials' WHERE project_id='$projectID'";
    echo 1;

    $result = mysqli_query($conn, $sql);
    if($result) {
        header("Location: ../admin/project_control_view.php");
    } else {
        echo "Connection failed";
    }
}

?>