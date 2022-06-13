<?php
require('database/dbconfig.php');

if (isset($_POST['project_complete'])) {
    $id = $_POST['id'];
    $user_id = $_POST['user_id'];
    // $paper_title = $_POST['paper_title'];
    // $author = $_POST['author'];
    // $getUserEmail = $_POST['getUserEmail'];
    mysqli_query($connection, "UPDATE projects SET status='Completed' WHERE id = $id AND user_id = $user_id") or die(mysqli_error());
    header("Location: myprojects.php");

}


?>