<?php
session_start();
include "../settings/connection.php";

function validate($input)
{
    // Implement your validation logic here
    // For example, you can use trim and mysqli_real_escape_string to sanitize the input
    return $input;
}

function error422($message)
{
    // Return an error response with status code 422
    $data = [
        'status' => 422,
        'message' => $message,
    ];
    header("HTTP/1.0 422 Unprocessable Entity");
    return json_encode($data);
}

function searchProjects($data1)
{
    // Assuming $conn is your database connection object
    global $conn;

    // Validate input keyword
    $keyword = validate($data1->keyword);

    // Check if the keyword is empty
    if (empty($keyword)) {
        return error422("Search field can't be blank");
    } else {
        // Construct the SQL query
        $sql = "
        SELECT 
            Projects.project_id,
            Projects.title,
            Projects.description,
            Projects.category,
            Projects.materials_needed,
            Users.creator_id AS creator
        FROM 
            Project
        INNER JOIN 
            Users ON Project.creator_id = Users.user_id
        WHERE 
            Project.title LIKE '%$keyword%' OR
            Project.description LIKE '%$keyword%' OR
            User.username LIKE '%$keyword%'
        ";

        // Execute the query
        $result = mysqli_query($conn, $sql);

        // Check if the query was successful
        if ($result) {
            // Check if any rows were returned
            if (mysqli_num_rows($result) > 0) {
                // Fetch all rows as associative array
                $final_result = mysqli_fetch_all($result, MYSQLI_ASSOC);

                // Prepare the response data
                $data = [
                    'status' => 200,
                    'message' => 'Project List Found',
                    'data' => $final_result
                ];
                // Set HTTP status code and return the response as JSON
                header("HTTP/1.0 200 Project List Found");
                return json_encode($data);
            } else {
                // No projects found
                $data = [
                    'status' => 404,
                    'message' => 'No Projects Found',
                ];
                // Set HTTP status code and return the response as JSON
                header("HTTP/1.0 404 No Projects Found");
                return json_encode($data);
            }
        } else {
            // Internal server error
            $data = [
                'status' => 500,
                'message' => 'Internal Server Error',
            ];
            // Set HTTP status code and return the response as JSON
            header("HTTP/1.0 500 Internal Server Error");
            return json_encode($data);
        }
    }
}

// Call the searchProjects function with the input data
if (isset($_GET['keyword'])) {
    // Assuming input data is passed as a JSON object
    $input_data = json_decode($_GET['keyword']);
    echo searchProjects($input_data);
}

?>




<!DOCTYPE html>
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
</head>

<body>

    <header class="header">

        <a href="#" class="logo"> <i class="fas fa-school"></i> Kid Wiz</a>
        <?php if ($_SESSION['role'] == 1) { ?>
            <nav class="navbar">
                <a href="../admin/project_control_view.php"><span class="material-icons-outlined">dashboard</span> Home</a>
                <a href="../admin/project_control_view.php" id="projects"><span class="material-icons-outlined">assignment</span> Manage Projects</a>
                <a href="../view/commprojects_view.php" id="communityprojects"><span class="material-icons-outlined">language</span> Community Projects</a>
                <a href="../view/comm_gallery.php" id="gallery"><span class="material-icons-outlined">photo_library</span> Community Gallery</a>
            </nav>

        <?php } else { ?>
            <nav class="navbar">
                <a href="../view/user_home.php"><span class="material-icons-outlined">dashboard</span> Home</a>
                <a href="../view/myprojects_view.php" id="myprojects"><span class="material-icons-outlined">assignment</span> My Projects</a>
                <a href="../view/commprojects_view.php" id="communityprojects"><span class="material-icons-outlined">language</span> Community Projects</a>
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
</body>

</html>