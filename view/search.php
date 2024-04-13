
<?php session_start();?><!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search Projects</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightgallery-js/1.4.0/css/lightgallery.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons+Outlined">

    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/search.css">
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

        <form action="" class="login-form">
            <a href="#"><span class="material-icons-outlined">account_circle</span> My account</a>
            <br>
            <a href="../login/logout_view.php"><span class="material-icons-outlined">exit_to_app</span> Log out</a>


        </form>

    </header>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>

    <div class="search-container">
        <form method="post" action="../actions/search_action.php" name="search-form">
            <input type="text" name="keyword" placeholder="Search projects...">
            <button name="submit" type="submit"><span class="material-icons-outlined">search</span></button>
        </form>
    </div>

</body>

</html>