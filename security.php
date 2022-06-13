<?php
if(!isset($_SESSION)) 
{ 
    session_start(); 
} 
include('database/dbconfig.php');
if($connection)
{
    // echo "Database Connected";
}
else
{
    header("Location: database/dbconfig.php");
}

if(!$_SESSION['Names'])
{
    header('Location: index.php');
}
?>