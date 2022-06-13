<?php

require "database/dbconfig.php";


////////////////////// [START] : UPDATE ABSTRACT ////////////////////////////

if (isset($_POST['UploadReview'])) {

$id = $_POST['id'];
$user_id = $_POST['user_id'];
$myreview = "No file Uploaded";

 
$file_url = $_POST['file_url'];
$fileName = $file_url;

if ($_FILES['myreview']['error'] == 0)
{
 $name = uniqid(time());
 $extension = pathinfo($_FILES['myreview']['name'], PATHINFO_EXTENSION);
 $SIZES = ($_FILES['myreview']['size'] > 1500000);
 $fileName = $name . "." . $extension;
 $hasFileUploaded = move_uploaded_file($_FILES['myreview']['tmp_name'], 'reviewdoc/' . $fileName);
}


 $affected =  mysqli_query($connection, "UPDATE projects SET reviewfile='$fileName' WHERE id = $id AND user_id = $user_id") or die(mysqli_error());
 
 if ($affected) 
 {
    if ($hasFileUploaded)
        unlink('reviewdoc/' . $file_url);
        
        header("Location: myprojects.php?detach=Review File Uploaded");
    {

    }
 }
}


////////////////////// [END] : UPDATE ABSTRACT ////////////////////////////

?>