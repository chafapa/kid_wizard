<?php
// include("../settings/core.php");
// userLogin();
// userAvailable();
include "../settings/core.php";
include "../actions/get_a_project_action.php";
error_reporting(E_ALL);
ini_set("display_errors", 1);

if (isset($_GET['project_id'])) {
    $check1 = $_GET['project_id'];
    echo 1;
} else {
    header("Location:../admin/project_control_view.php");
    echo 2;
}
$check2 = getFunction($check1);
echo 3;

$title = isset($check2['title']) ? htmlspecialchars($check2['title']) : "";
$url = isset($check2['image_url']) ? htmlspecialchars($check2['image_url']) : "";


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Project</title>

    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons+Outlined">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightgallery-js/1.4.0/css/lightgallery.min.css">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/add_project.css">

</head>

<body>

    <a href="#" class="logo"> <i class="fas fa-school"></i> Kid Wiz</a>
    <!-- will work on this later -->
    <?php if ($_SESSION['role'] == 1) { ?>
        <nav class="navbar">
            <a href="../admin/project_control_view.php"><span class="material-icons-outlined">dashboard</span> Home</a>
            <a href="../admin/project_control_view.php" id="projects"><span class="material-icons-outlined">assignment</span> Manage Projects</a>
            <a href="../view/comm_gallery.php" id="gallery"><span class="material-icons-outlined">photo_library</span> Community Gallery</a>
            <a href="../view/search.php" id="search"><span class="material-icons-outlined">search</span> Search</a>

        </nav>

    <?php } else { ?>
        <nav class="navbar">
            <a href="../view/user_home.php"><span class="material-icons-outlined">dashboard</span> Home</a>
            <a href="../view/myprojects_view.php" id="myprojects"><span class="material-icons-outlined">assignment</span> My Projects</a>
            <a href="../view/comm_gallery.php" id="gallery"><span class="material-icons-outlined">photo_library</span> Community Gallery</a>
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

    <form action="" class="login-form">
        <a href="#"><span class="material-icons-outlined">account_circle</span> My account</a>
        <a href="../login/logout_view.php"><span class="material-icons-outlined">exit_to_app</span> Log out</a>


    </form>


    </header>


    <section class="home" id="home">

        <div class="content">
            <h3>Edit Project</h3>
            <br>
            <form action="../actions/edit_a_project_action.php?id=<?php echo htmlspecialchars($check1) ?>" method="post">
                <input type="hidden" name="cid" value="<?php echo htmlspecialchars($check2['project_id']) ?>">

                <label for="title">Title:</label>
                <!-- <input type="text" id="title" name="title" value="<?php echo htmlspecialchars($check2['title']) ?>" required> -->
                <input type="text" id="title" name="title" value="<?php echo htmlspecialchars($title) ?>" required>

                <label for="overview">Overview:</label>
                <textarea id="overview" name="overview" value="<?php echo htmlspecialchars($check2['overview']) ?>" required></textarea>

                <label for="category">Category:</label>
                <select name="category" class="box" required>
                    <option value=""></option>
                    <option value="0" <?php if ($check2['category'] == '0') echo 'selected'; ?>>Crafts</option>
                    <option value="1" <?php if ($check2['category'] == '1') echo 'selected'; ?>>Nature Exploration</option>
                    <option value="2" <?php if ($check2['category'] == '2') echo 'selected'; ?>>Science Experiment</option>
                </select>


                <div class="difficulty-select">
                    <label for="difficulty_level">Difficulty Level:</label>
                    <select name="difficulty_level" class="box" required>
                        <option value=""></option>
                        <option value="0" <?php if ($check2['difficulty_level'] == '0') echo 'selected'; ?>>Easy</option>
                        <option value="1" <?php if ($check2['difficulty_level'] == '1') echo 'selected'; ?>>Medium</option>
                        <option value="2" <?php if ($check2['difficulty_level'] == '2') echo 'selected'; ?>>Challenging</option>
                    </select>
                </div>


                <label for="image_url">Image url:</label>
                <input type="text" id="image_url" name="image_url" value="<?php echo htmlspecialchars($url) ?>" required autocapitalize="off">

                <label for="description">Description:</label>
                <textarea id="description" name="description" value="<?php echo htmlspecialchars($check2['description']) ?>" required></textarea>

                <label for="materials_needed">Materials Needed:</label>
                <textarea id="materials_needed" name="materials_needed" value="<?php echo htmlspecialchars($check2['materials_needed']) ?>" required></textarea>

                <input type="hidden" id="creator_id" name="creator_id" value="1">
                <input type="hidden" id="status_id" name="status_id" value="1">

                <button type="submit" name="submit" class="btn">Update Project</button>
            </form>
        </div>

        <div class="image">
            <img src="../images/edit1.png" alt="">
        </div>

    </section>

    <script src="../js/script.js"></script>
</body>

</html>