<?php

require "database/dbconfig.php";


if (isset($_POST['Assign'])) {

    $id = $_POST['id'];
    $user_id = $_POST['user_id'];
    $engineer_id = $_POST['EngineerID'];
    $Engineer = $_POST['EngineerName'];

    mysqli_query($connection, "UPDATE projects SET engineer_id='$engineer_id', Engineer='$Engineer' WHERE id = $id AND user_id = $user_id") or die(mysqli_error());
    
    $_SESSION['success'] = "Engineer Assigned Successfully";
    header("Location: user_projects.php");

}

?>