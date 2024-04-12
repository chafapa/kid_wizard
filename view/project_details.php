<?php
include "../settings/connection.php";

if (isset($_GET['project_id'])) {
    $project_id = $_GET['project_id'];
    $sql = "SELECT * FROM Projects WHERE project_id = $project_id";
    $result = mysqli_query($conn, $sql);
    $project = mysqli_fetch_assoc($result);
} else {
    // Handle case where project id is not provided
    header("Location: my_projects.php"); // Redirect to my_projects.php
    exit();
}

$image_url = urldecode($_GET['image_url']);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $project['title']; ?> Details</title>
</head>

<body>
    <h1><?php echo $project['title']; ?></h1>
    <br>
    <br>
    <br>
    <p><?php echo $project['description']; ?></p>
    <img src="<?php echo $image_url; ?>" alt="Project Image">
</body>

</html>