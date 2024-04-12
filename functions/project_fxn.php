<?php
include '../actions/get_all_projects_action.php';
$var_data = myfunction();

if (empty($var_data)) {
    echo "No projects found.";
} else if ($_SESSION['role'] == 1 ){
    // Display projects in a table for admin users
    echo "<table>";
    echo "<thead>";
    echo "<tr >";
    echo "<th>Project Name</th>";
    echo "<th>Actions</th>";
    echo "</tr>";
    echo "</thead>";
    echo "<tbody>";

    foreach ($var_data as $project) {
        echo "<tr>";
        echo "<td>" . htmlspecialchars($project['title']) . "</td>";
        echo "<td >";
        echo "<a href='../admin/edit_project_view.php?project_id=" . htmlspecialchars($project['project_id']) . "'>";
        echo "<span class='material-icons-outlined action-icons'>edit</span>";
        echo "</a>";
        echo "<a href='../actions/delete_project_action.php?project_id=" . $project['project_id'] . "' onclick='return confirm(\"Are you sure you want to delete this project?\")'>";
        echo "<span class='material-icons-outlined action-icons'>delete</span>";
        echo "</a>";
        echo "</td>";
        echo "</tr>";
    }

    echo "</tbody>";
    echo "</table>";
}
?>
