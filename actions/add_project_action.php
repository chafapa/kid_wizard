<?php
include "../settings/connection.php";
error_reporting(E_ALL);
ini_set("display_errors", 1);


session_start();
// if (isset($_SESSION['personid'])) {
//     $creatorId = $_SESSION['personid'];
// }
//  else {
//     header("Location: ../login/login_view.php");
// }

$creatorId = $_SESSION['personid'];
// $statusId = $_SESSION['personid'];

if (isset($_POST['submit'])) {
    // Get the project details from the form
    $title = mysqli_real_escape_string($conn, $_POST['title']);
    echo 1;
    $description = mysqli_real_escape_string($conn, $_POST['description']);
    echo 2;
    $category = mysqli_real_escape_string($conn, $_POST['category']);
    echo 3;
    $difficulty_level = (int)$_POST['difficulty_level'];
    echo 4;
    $overview = mysqli_real_escape_string($conn, $_POST['overview']);
    echo 5;
    $materials = mysqli_real_escape_string($conn, $_POST['materials_needed']);
    echo 6;
    $image_url = mysqli_real_escape_string($conn, $_POST['image_url']);



    $projectSql = "INSERT INTO `Projects` (title, description, category, overview, materials_needed, creator_id, difficulty_level, image_url) 
    VALUES ('$title', '$description', '$category', '$overview', '$materials', '$creatorId', '$difficulty_level', '$image_url')";
    echo 7;
    $projectResult = mysqli_query($conn, $projectSql);
    var_dump($projectResult);
    echo 8;

    $projectId = mysqli_insert_id($conn);


    $materialsArray = explode("\n", $materials);

    // foreach ($materialsArray as $material) {

    //     $material = trim($material);
    //     if (!empty($material)) {
    //         $materialSql = "INSERT INTO Project_Materials (project_id, material_name) VALUES ($projectId, '$material')";
    //         mysqli_query($conn, $materialSql);
    //     }
    // }

    // Redirect the user after insertion
    if ($projectResult) {
        header("Location: ../admin/project_control_view.php");
    } else {
        echo "Connection failed";
    }
}

?>