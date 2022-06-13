<?php

if(isset($_POST['Logout']))
{
    session_start(); //to ensure you are using same session
    session_destroy();
    unset($_SESSION['Username']);
    header('Location: adminlogin.php');
}

?>