<?php
include("../settings/core.php");
// userLogin();
// userAvailable();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Project</title>

    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons+Outlined">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightgallery-js/1.4.0/css/lightgallery.min.css">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/add_project.css">

</head>

<body>

    <header class="header">

       
    <a href="#" class="logo"> <i class="fas fa-school"></i> Kid Wiz</a>
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

             <a href="#"><span class="material-icons-outlined">account_circle</span> My account</a>
            <a href="../login/logout_view.php"><span class="material-icons-outlined">exit_to_app</span> Log out</a>


 

    </header>


    <section class="home" id="home">

        <div class="content">
            <h3>Create a New Project</h3>
            <br>
            <form action="../actions/add_project_action.php" method="post">
                <label for="title">Title:</label>
                <input type="text" id="title" name="title" required>

                <label for="overview">Overview:</label>
                <textarea id="overview" name="overview" required></textarea>

                <label for="category">Category:</label>
                <select name="category" class="box" required>
                    <option value=""></option>
                    <option value="0">Crafts</option>
                    <option value="1">Nature Exploration</option>
                    <option value="2">Science Experiment</option>
                </select>

                <div class="difficulty-select">
                    <label for="difficulty_level">Difficulty Level:</label>
                    <select name="difficulty_level" class="box" required>
                        <option value=""></option>
                        <option value="0">Easy</option>
                        <option value="1">Medium</option>
                        <option value="2">Challenging</option>
                    </select>
                </div>

                <label for="image_url">Image url:</label>
                <input type="text" id="image_url" name="image_url" required autocapitalize="off">

                <label for="description">Description:</label>
                <textarea id="description" name="description" required></textarea>

                <label for="materials_needed">Materials Needed:</label>
                <textarea id="materials_needed" name="materials_needed" required></textarea>

                <!-- Creator ID and Status ID can be hidden fields if they are not supposed to be changed by the user -->
                <input type="hidden" id="creator_id" name="creator_id" value="1">
                <input type="hidden" id="status_id" name="status_id" value="1">

                <!-- <button type="submit" name="submit" value="Create Project"></button> -->
                <button type="submit" name="submit" class="btn">Create Project</button>
            </form>
        </div>



        <div class="image">
            <img src="../images/twokids.png" alt="">
        </div>

    </section>

    <script src="../js/script.js"></script>
</body>

</html>