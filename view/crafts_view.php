<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);
session_start();
include "../settings/connection.php";

// if (!isset($_SESSION['user_id'])) {
//     header("Location: ../login/login_view.php");
//     exit();
// }

// var_dump($_SESSION);
$user_id = $_SESSION['personid'];
$username = $_SESSION['firstn'];
// Fetch the user's projects
// $sql = "SELECT * FROM Projects WHERE creator_id = $user_id";
$sql = "SELECT * FROM Projects WHERE category = 0";
$result = mysqli_query($conn, $sql);


$projects = mysqli_fetch_all($result, MYSQLI_ASSOC);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons+Outlined">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightgallery-js/1.4.0/css/lightgallery.min.css">
    <link rel="stylesheet" href="../css/style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

</head>

<body>

    <header class="header">

        <a href="#" class="logo"> <i class="fas fa-school"></i> Kid Wiz</a>
        <!-- will work on this later -->

        <?php if ($_SESSION['role'] == 1) { ?>
            <nav class="navbar">
                <a href="../admin/project_control_view.php"><span class="material-icons-outlined">dashboard</span> Home</a>
                <a href="../admin/project_control_view.php" id="projects"><span class="material-icons-outlined">assignment</span> Manage Projects</a>
                <a href="../view/commprojects_view.php" id="gallery"><span class="material-icons-outlined">photo_library</span> Community Gallery</a>
                <a href="../view/search.php" id="search"><span class="material-icons-outlined">search</span> Search</a>

            </nav>

        <?php } else { ?>
            <nav class="navbar">
                <a href="../view/user_home.php"><span class="material-icons-outlined">dashboard</span> Home</a>
                <a href="../view/myprojects_view.php" id="myprojects"><span class="material-icons-outlined">assignment</span> My Projects</a>
                <a href="#" id="gallery"><span class="material-icons-outlined">photo_library</span> Community Gallery</a>
                <a href="../view/search.php" id="search"><span class="material-icons-outlined">search</span> Search</a>

            </nav>
        <?php } ?>
        <div class="icons">
            <a href="#" class="fas fa-user" id="login-btn">
                <?php
                $username = $_SESSION['firstn'];
                if (isset($username)) {
                    echo '<span style="font-size: 18px; font-weight: normal">Welcome, ' . $username . '</span>';
                }
                ?>
            </a>
            <div class="fas fa-bars" id="menu-btn"></div>
        </div>

         
            <a href="#"><span class="material-icons-outlined">account_circle</span> My account</a>
            <a href="../login/logout_view.php"><span class="material-icons-outlined">exit_to_app</span> Log out</a>


 


    </header>
    

    <section class="education" id="education">
        <br>
        <br>
        <br>
        <section class="activities" id="activities">
            <h1 class="heading">Nature <span> Projects</span></h1>
            <div class="box-container">
                <?php foreach ($projects as $project) : ?>
                    <div class="box" onclick="redirect(<?php echo $project['project_id']; ?>)">
                        <h3><?php echo $project['title']; ?></h3>
                        <p><?php echo $project['overview']; ?></p>
                    </div>
                <?php endforeach; ?>
            </div>

            <script>
                function redirect(projectId) {
                    window.location.href = '../view/project_details.php?project_id=' + projectId;
                }
            </script>

        </section>


    </section>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/lightgallery-js/1.4.0/js/lightgallery.min.js"></script>
    <script src="../js/script.js"></script>

</body>

</html>