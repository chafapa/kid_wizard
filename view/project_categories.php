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
            <a href="../view/commprojects_view.php" id="communityprojects"><span class="material-icons-outlined">language</span> Community Projects</a>
            <a href="../view/comm_gallery.php" id="gallery"><span class="material-icons-outlined">photo_library</span> Community Gallery</a>
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

            <!-- <div class="box">
                <h3>Science Experiments</h3>
                <p>Engage in hands-on activities to explore scientific principles and phenomena through experiments and observations.</p>
                <img src="../images/science.png" alt="">
            </div> -->

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

    <!-- education section ends -->

    <!-- teacher section starts -->
    <!-- 
    <section class="teacher" id="teacher">

        <h1 class="heading">our <span> teacher</span></h1>

        <div class="box-container">

            <div class="box">
                <img src="images/teacher1.png" alt="">
                <h3>john wright</h3>
                <p>instructor</p>
                <div class="share">
                    <i class="fab fa-facebook-f"></i>
                    <i class="fab fa-twitter"></i>
                    <i class="fab fa-instagram"></i>
                </div>
            </div>

            <div class="box">
                <img src="images/teacher2.png" alt="">
                <h3>john wright</h3>
                <p>instructor</p>
                <div class="share">
                    <i class="fab fa-facebook-f"></i>
                    <i class="fab fa-twitter"></i>
                    <i class="fab fa-instagram"></i>
                </div>
            </div>

            <div class="box">
                <img src="images/teacher3.png" alt="">
                <h3>john wright</h3>
                <p>instructor</p>
                <div class="share">
                    <i class="fab fa-facebook-f"></i>
                    <i class="fab fa-twitter"></i>
                    <i class="fab fa-instagram"></i>
                </div>
            </div>

        </div>

    </section> -->

    <!-- teacher section ends -->

    <!-- activities section starts -->
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

    <section class="footer">

        <div class="box-container">

            <div class="box">
                <h3> <i class="fas fa-school"></i> Kid Wizard </h3>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Explicabo, unde</p>
            </div>

            <div class="box">
                <h3>quick links</h3>
                <a href="#"> <i class="fas fa-caret-right"></i> enroll now</a>
                <a href="#"> <i class="fas fa-caret-right"></i> parent portal</a>
                <a href="#"> <i class="fas fa-caret-right"></i> school calendar</a>
                <a href="#"> <i class="fas fa-caret-right"></i> lunch menu</a>
                <a href="#"> <i class="fas fa-caret-right"></i> school supply list</a>
            </div>

            <div class="box">
                <h3>category</h3>
                <a href="#"> <i class="fas fa-caret-right"></i> about us</a>
                <a href="#"> <i class="fas fa-caret-right"></i> academics</a>
                <a href="#"> <i class="fas fa-caret-right"></i> admissions</a>
                <a href="#"> <i class="fas fa-caret-right"></i> news & events</a>
                <a href="#"> <i class="fas fa-caret-right"></i> contact us</a>
            </div>

            <div class="box">
                <h3>extra links</h3>
                <a href="#"> <i class="fas fa-caret-right"></i> privacy policy</a>
                <a href="#"> <i class="fas fa-caret-right"></i> terms of use</a>
                <a href="#"> <i class="fas fa-caret-right"></i> site map</a>
                <a href="#"> <i class="fas fa-caret-right"></i> FAQs</a>
                <a href="#"> <i class="fas fa-caret-right"></i> accessibility statement</a>
            </div>

        </div>

        <!-- <div class="credit"> &copy; copyright @ 2023 by <span>ninjashub</span></div> -->

    </section>


    <!-- lightgallery cdn js link -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lightgallery-js/1.4.0/js/lightgallery.min.js"></script>
    <!-- custom js file link -->
    <script src="../js/script.js"></script>

    <script>
        lightGallery(document.querySelector('.gallery .gallery-container'));
    </script>

</body>

</html>