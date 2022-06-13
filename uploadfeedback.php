<?php
include "security.php";
require "database/dbconfig.php";

//////////////// [FOR FEEDBACK] //////////////////////////

if (isset($_POST['submitResponse'])) {

    $pname = $_POST['pname'];
    $company = $_POST['company'];
    $name = $_POST['name'];
    $rate = $_POST['rate'];
    $views = $_POST['views'];
    $user_id = $_POST['user_id'];
    
    mysqli_query($connection, "INSERT INTO testimonial (pname, company, name, rate, views, user_id) VALUES ('$pname','$company','$name','$rate','$views','$user_id')");
      $_SESSION['success'] = "Feeback Submitted Successfully";
       header('Location: session.php');
    }
    else
    {
      $_SESSION['status'] = "Feedback Submission Failed";
       header('Location: session.php');
       exit;
    }

    //////////////// [FOR FEEDBACK] //////////////////////////





?>