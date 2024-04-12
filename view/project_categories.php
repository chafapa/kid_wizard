<?php

session_start();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project Categories</title>

    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons+Outlined">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightgallery-js/1.4.0/css/lightgallery.min.css">
    <link rel="stylesheet" href="../css/style.css">
</head>

<body>

    <header class="header">

        <a href="#" class="logo"> <i class="fas fa-school"></i> Kid Wiz</a>
        <!-- will work on this later -->
        <nav class="navbar">
            <a href="../view/user_home.php"><span class="material-icons-outlined">dashboard</span> Home</a>
            <a href="../view/myprojects_view.php" id="myprojects"><span class="material-icons-outlined">assignment</span> My Projects</a>
            <a href="../view/comm_gallery.php" id="gallery"><span class="material-icons-outlined">photo_library</span> Community Gallery</a>
            <a href="../view/search.php" id="search"><span class="material-icons-outlined">search</span> Search</a>

        </nav>
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



    <section class="education" id="education">
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <h1 class="heading">Project <span> Categories</span></h1>

        <div class="box-container">

            <a href="../view/scienceEx_view.php">
                <div class="box">
                    <h3>Science Experiments</h3>
                    <p>Engage in hands-on activities to explore scientific principles and phenomena through experiments and observations.</p>
                    <img src="../images/science.png" alt="">
                </div>
            </a>


            <a href="../view/crafts_view.php">
                <div class="box">
                    <h3>Crafts</h3>
                    <p>Get creative and crafty with various materials to make unique art pieces, decorations, and DIY projects.</p>
                    <img src="../images/craftsR.png" alt="">
                </div>
            </a>


            <a href="../view/nature_view.php">
                <div class="box">
                    <h3>Nature Exploration</h3>
                    <p>Connect with the natural world through outdoor adventures, exploring ecosystems, and learning about plants, animals, and the environment.</p>
                    <img src="../images/natureR.png" alt="">
                </div>
            </a>
        </div>

    </section>

    

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

    

    <!-- lightgallery cdn js link -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lightgallery-js/1.4.0/js/lightgallery.min.js"></script>
    <!-- custom js file link -->
    <script src="../js/script.js"></script>

    <script>
        lightGallery(document.querySelector('.gallery .gallery-container'));
    </script>

</body>

</html>