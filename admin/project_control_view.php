<?php
session_start();
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project Control View</title>

    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons+Outlined">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightgallery-js/1.4.0/css/lightgallery.min.css">
    <link rel="stylesheet" href="../css/style.css">
    <style>
        .division {
            display: flex;
        }

        .left {
            justify-content: left;
        }

        .right {
            justify-content: right;
            margin-left: 300px;
        }

        table {
            border-collapse: collapse;

        }

        th,
        td {
            border: 2px solid #000;
            text-align: center;
            padding: 10px;
            font-size: 20px
        }

        td {
            width: 400px;
        }


        tr:hover {
            background-color: #f9ba60;
        }
    </style>
</head>

<body>

    <header class="header">

        <a href="#" class="logo"> <i class="fas fa-school"></i> Kid Wiz</a>
        <!-- will work on this later -->
        <?php if ($_SESSION['role'] == 1) { ?>
            <nav class="navbar">
                <a href="../admin/project_control_view.php"><span class="material-icons-outlined">dashboard</span> Home</a>
                <a href="../admin/project_control_view.php" id="projects"><span class="material-icons-outlined">assignment</span> Manage Projects</a>
                <a href="../view/commprojects_view.php" id="communityprojects"><span class="material-icons-outlined">language</span> Community Projects</a>
                <a href="../view/commprojects_view.php" id="gallery"><span class="material-icons-outlined">photo_library</span> Community Gallery</a>
            </nav>

        <?php } else { ?>
            <nav class="navbar">
                <a href="../view/user_home.php"><span class="material-icons-outlined">dashboard</span> Home</a>
                <a href="../view/myprojects_view.php" id="myprojects"><span class="material-icons-outlined">assignment</span> My Projects</a>
                <a href="../view/commprojects_view.php" id="communityprojects"><span class="material-icons-outlined">language</span> Community Projects</a>
                <a href="../view/comm_gallery.php" id="gallery"><span class="material-icons-outlined">photo_library</span> Community Gallery</a>
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
            <!-- <h3>login now</h3>
            <input type="email" placeholder="your email" class="box">
            <input type="password" placeholder="your password" class="box">
            <p>forget your password <a href="#">click here</a> </p>
            <input type="submit" value="login now" class="btn"> -->
            <a href="#"><span class="material-icons-outlined">account_circle</span> My account</a>
            <a href="../login/logout_view.php"><span class="material-icons-outlined">exit_to_app</span> Log out</a>


        </form>


    </header>

    <!-- header section ends -->

    <!-- home section starts -->

    <section class="home" id="home">
        <main style='width:100%'>
            <div class="division">
                <div class="left">
                    <h1 style='text-align:left' class="heading">Projects <span> List</span></h1>
                    <a style='margin-bottom:40px' href="../admin/add_project_view.php" class="btn">Create Project</a>

                </div>
                <div class="right">
                    <br>
                    <div class="table">
                        <?php include '../functions/project_fxn.php'; ?>
                        <?php $project = $var_data; ?>
                    </div>

                </div>
            </div>


        </main>
    </section>









    <!-- home section ends -->

    <!-- about us section starts -->

    <!-- <section class="about" id="about">

        <h1 class="heading"> <span>about</span> us</h1>

        <div class="row">

            <div class="image">
                <img src="../images/about us.png" alt="">
            </div>

            <div class="content">
                <h3>Exploring, Growing, And Thriving Together</h3>
                <p>Welcome to Kid Wiz, where curiosity meets creativity! We are thrilled to offer a vibrant, user-friendly platform that sparks the imagination of young minds through a fascinating array of science and craft projects.</p>
                <p>At Kid Wiz, we believe that learning is an adventure best embarked upon with enthusiasm and a sprinkle of fun. Our mission is to provide children with accessible, interactive content that not only entertains but educates, encouraging them to explore the wonders of science and the joys of hands-on creation.</p>
                <a href="#" class="btn">read more</a>
            </div>

        </div>

    </section> -->

    <!-- about us section ends -->

    <!-- education section start -->

    <!-- <section class="education" id="education">

        <h1 class="heading">Project <span> Categories</span></h1>

        <div class="box-container">

            <div class="box">
                <h3>Science Experiments</h3>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Distinctio ration</p>
                <img src="../images/scienceN.png" alt="">
            </div>

            <div class="box">
                <h3>Crafts</h3>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Distinctio ration</p>
                <img src="../images/craftsN.png" alt="">
            </div>

            <div class="box">
                <h3>Nature Exploration</h3>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Distinctio ration</p>
                <img src="../images/natureN.png" alt="">
            </div>

        </div>

    </section> -->

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

    <!-- <section class="activities">

        <h1 class="heading">our <span>activities</span></h1>

        <div class="box-container">

            <div class="box">
                <img src="../images/activities1.png" alt="">
                <h3>games and fun</h3>
            </div>

            <div class="box">
                <img src="../images/activities2.png" alt="">
                <h3>games and fun</h3>
            </div>

            <div class="box">
                <img src="../images/activities3.png" alt="">
                <h3>games and fun</h3>
            </div>

            <div class="box">
                <img src="../images/activities4.png" alt="">
                <h3>games and fun</h3>
            </div>

            <div class="box">
                <img src="../images/activities5.png" alt="">
                <h3>games and fun</h3>
            </div>

            <div class="box">
                <img src="../images/activities6.png" alt="">
                <h3>games and fun</h3>
            </div>

            <div class="box">
                <img src="../images/activities7.png" alt="">
                <h3>games and fun</h3>
            </div>

            <div class="box">
                <img src="../images/activities8.png" alt="">
                <h3>games and fun</h3>
            </div>

        </div>

    </section> -->


    <!-- lightgallery cdn js link -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lightgallery-js/1.4.0/js/lightgallery.min.js"></script>
    <!-- custom js file link -->
    <script src="../js/script.js"></script>

    <script>
        lightGallery(document.querySelector('.gallery .gallery-container'));
    </script>

</body>

</html>