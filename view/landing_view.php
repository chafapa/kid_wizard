<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kid Wizard Website</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightgallery-js/1.4.0/css/lightgallery.min.css">
    <link rel="stylesheet" href="../css/style.css">
</head>

<body>

    <header class="header">

        <a href="#" class="logo"> <i class="fas fa-school"></i> Kid Wiz</a>
        <!-- will work on this later -->
        <nav class="navbar">
        </nav>

        <div class="icons">
            <a href="../login/login_view.php" class="fas fa-user" id="login-btn">  Log in</a>
        </div>


    </header>



    <section class="home" id="home">

        <div class="content">
            <h3>welcome to <span>Kid Wizard</span></h3>
            <p>Explore, Learn, Grow</p>
        </div>

        <div class="image">
            <img src="../images/home.png" alt="">
        </div>

        <div class="custom-shape-divider-bottom-1684324473">
            <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
                <path d="M985.66,92.83C906.67,72,823.78,31,743.84,14.19c-82.26-17.34-168.06-16.33-250.45.39-57.84,11.73-114,31.07-172,41.86A600.21,600.21,0,0,1,0,27.35V120H1200V95.8C1132.19,118.92,1055.71,111.31,985.66,92.83Z" class="shape-fill"></path>
            </svg>
        </div>

    </section>



    <section class="about" id="about">

        <h1 class="heading"> <span>What do</span> we do?</h1>

        <div class="row">

            <div class="image">
                <img src="../images/about us.png" alt="">
            </div>

            <div class="content">
                <h3>Exploring, Growing, And Thriving Together</h3>
                <p>Welcome to Kid Wiz, where curiosity meets creativity! We are thrilled to offer a vibrant, user-friendly platform that sparks the imagination of young minds through a fascinating array of science and craft projects.</p>
                <p>At Kid Wiz, we believe that learning is an adventure best embarked upon with enthusiasm and a sprinkle of fun. Our mission is to provide children with accessible, interactive content that not only entertains but educates, encouraging them to explore the wonders of science and the joys of hands-on creation.</p>
                <a href="../view/aboutUs_view.php" class="btn">read more</a>
            </div>

        </div>

 

    <!-- lightgallery cdn js link -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lightgallery-js/1.4.0/js/lightgallery.min.js"></script>
    <!-- custom js file link -->
    <script src="../js/script.js"></script>

    <script>
        lightGallery(document.querySelector('.gallery .gallery-container'));
    </script>

</body>

</html>