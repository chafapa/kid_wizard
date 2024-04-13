<?php
session_start();
include "../settings/connection.php";
error_reporting(E_ALL);
ini_set("display_errors", 1);
function validate($input)
{
    $input = trim($input);
    global $conn;
    $input = mysqli_real_escape_string($conn, $input);
    return $input;
}

function searchProjects($keyword)
{
    global $conn;

    $keyword = validate($keyword);

    // Check if the keyword is empty
    if (empty($keyword)) {
        return [
            'status' => 'error',
            'message' => "Search field can't be blank"
        ];
    } else {
        // Construct the SQL query
        $sql = "
        SELECT 
            Projects.project_id,
            Projects.title,
            Projects.description,
            Projects.category,
            Projects.materials_needed,
            Users.user_id AS creator
        FROM 
            Projects
        INNER JOIN 
            Users ON Projects.creator_id = Users.user_id
        WHERE 
            Projects.title LIKE '%$keyword%' OR
            Projects.description LIKE '%$keyword%'
        ";

        // Execute the query
        $result = mysqli_query($conn, $sql);

        // Check if the query was successful
        if ($result) {
            // Check if any rows were returned
            if (mysqli_num_rows($result) > 0) {
                // Fetch all rows as associative array
                $final_result = mysqli_fetch_all($result, MYSQLI_ASSOC);
                return [
                    'status' => 'success',
                    'data' => $final_result
                ];
            } else {
                return [
                    'status' => 'error',
                    'message' => 'No Projects Found'
                ];
            }
        } else {
            return [
                'status' => 'error',
                'message' => 'Internal Server Error'
            ];
        }
    }
}

// Check if a search keyword is provided

?>
