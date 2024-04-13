<?php

session_start();

// echo $_SESSION['role'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kid Wizard Website</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightgallery-js/1.4.0/css/lightgallery.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons+Outlined">

    <link rel="stylesheet" href="../css/style.css">
</head>

<body>

    <header class="header">

        <a href="#" class="logo"> <i class="fas fa-school"></i> Kid Wiz</a>
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
                <a href="#" id="myprojects"><span class="material-icons-outlined">assignment</span> My Projects</a>
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

    <section class="gallery" id="gallery">
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>

        <h1 class="heading">Community <span>gallery</span></h1>

        <div class="gallery-container">

            <a href="#" class="box">
                <img src="../images/gallery-1.jpg" alt="">
                <div class="icon"> <i class="fas fa-plus"></i></div>
            </a>

            <a href="../images/gallery-2.jpg" class="box">
                <img src="../images/gallery-2.jpg" alt="">
                <div class="icon"> <i class="fas fa-plus"></i></div>
            </a>

            <a href="../images/gallery-3.jpg" class="box">
                <img src="../images/gallery-3.jpg" alt="">
                <div class="icon"> <i class="fas fa-plus"></i></div>
            </a>

            <a href="../images/gallery-4.jpg" class="box">
                <img src="../images/gallery-4.jpg" alt="">
                <div class="icon"> <i class="fas fa-plus"></i></div>
            </a>

            <a href="../images/gallery-5.jpg" class="box">
                <img src="../images/gallery-5.jpg" alt="">
                <div class="icon"> <i class="fas fa-plus"></i></div>
            </a>

            <a href="../images/gallery-6.jpg" class="box">
                <img src="../images/gallery-6.jpg" alt="">
                <div class="icon"> <i class="fas fa-plus"></i></div>
            </a>

        </div>

    </section>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lightgallery-js/1.4.0/js/lightgallery.min.js"></script>
    <script src="../js/script.js"></script>

    <script>
        lightGallery(document.querySelector('.gallery .gallery-container'));
    </script>

</body>

</html>