<?php
// connect to the database
require 'database/dbconfig.php';

if (isset($_POST['upload_project_file'])) {

    $Pname = $_POST['Pname'];
    $Ptype = $_POST['Ptype'];
    $testingtype = $_POST['testingtype'];
    $timeframe = $_POST['timeframe'];
    $status = "Submitted";
    $package = $_POST['package'];
    $Payment = $_POST['Payment'];
    $user_id = $_POST['user_id'];
    $Engineer = "None";
    $engineer_id = "0";
    $reviewfile = "No File Uploaded";


    if (isset($_FILES['myproject']))
    {
        $name = uniqid(time());
        $extension = pathinfo($_FILES['myproject']['name'], PATHINFO_EXTENSION);
        $SIZES = ($_FILES['myproject']['size'] > 1000000);
        $fileName = $name . "." . $extension;
        $hasFileUploaded = move_uploaded_file($_FILES['myproject']['tmp_name'], 'adminpanel/project/' . $fileName);
    }

    if ($hasFileUploaded)
    {
             mysqli_query($connection, "INSERT INTO projects (Pname, Ptype, testingtype, timeframe, package, Payment, status, name, user_id, Engineer, engineer_id, reviewfile) VALUES ('$Pname','$Ptype','$testingtype','$timeframe','$package','$Payment','$status','$fileName','$user_id','$Engineer','$engineer_id','$reviewfile')");
            //  $_SESSION['success'] = "Project Uploaded Successfully";
             header("Location: projectsession.php?success=Project Uploaded Successfully");
      }
       else {
           $_SESSION['status'] = "Project Submission Failed";
            header('Location: projectsession.php');
}
}

?>