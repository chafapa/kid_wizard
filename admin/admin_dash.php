<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kid Wizard Website</title>

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
            <a href="../admin/project_control_view.php"><span class="material-icons-outlined">dashboard</span> Home</a>
            <a href="../admin/project_control_view.php" id="projects"><span class="material-icons-outlined">assignment</span> Manage Projects</a>
            <a href="../view/commprojects_view.php" id="gallery"><span class="material-icons-outlined">photo_library</span> Community Gallery</a>
            <a href="../view/search.php" id="search"><span class="material-icons-outlined">search</span> Search</a>

        </nav>
        <div class="icons">
            <a href="../login/logout_view.php" class="fas fa-user" id="login-btn"></a>
            <!-- <div class="fas fa-bars" id="menu-btn"></div> -->
        </div>
         <form action="" class="login-form">
            <h3>login now</h3>
            <input type="email" placeholder="your email" class="box">
            <input type="password" placeholder="your password" class="box">
            <p>forget your password <a href="#">click here</a> </p>
            <input type="submit" value="login now" class="btn">
        </form>

    </header>

    <!-- header section ends -->

    <!-- home section starts -->

    <section class="home" id="home">

        <div class="content">
            <h3>Welcome to the <span>Administrator's Dashboard</span></h3>
            <a href="../admin/project_control_view.php" class="btn">Manage Projects</a>
        </div>

        <div class="image">
            <img src="../images/twokids.png" alt="">
        </div>

        <div class="custom-shape-divider-bottom-1684324473">
            <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
                <path d="M985.66,92.83C906.67,72,823.78,31,743.84,14.19c-82.26-17.34-168.06-16.33-250.45.39-57.84,11.73-114,31.07-172,41.86A600.21,600.21,0,0,1,0,27.35V120H1200V95.8C1132.19,118.92,1055.71,111.31,985.66,92.83Z" class="shape-fill"></path>
            </svg>
        </div>

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