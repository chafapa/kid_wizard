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

    <script src="https://cdnjs.cloudflare.com/ajax/libs/lightgallery-js/1.4.0/js/lightgallery.min.js"></script>
    <!-- custom js file link -->
    <script src="../js/script.js"></script>

    <script>
        lightGallery(document.querySelector('.gallery .gallery-container'));
    </script>

</body>

</html>