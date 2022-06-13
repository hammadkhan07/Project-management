<?php
session_start();

if(isset($_POST['logout_btn']))
{
    session_start(); //to ensure you are using same session
    session_destroy();
    unset($_SESSION['Names']);
    header('Location: index.php');
}

?>