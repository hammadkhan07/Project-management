<?php
include 'security.php';
require 'database/dbconfig.php';

//////////////// [TO CREATE ADMIN] //////////////////////////
if (isset($_POST['create_admin'])) {

$Username = $_POST['Username'];
$Email = $_POST['Email'];
$Password = $_POST['Password'];
$Usertype = $_POST['Usertype'];

mysqli_query($connection, "INSERT INTO admins (Username, Email, Password, Usertype) VALUES ('$Username','$Email','$Password','$Usertype')");
  $_SESSION['success'] = "User Added Successfully";
   header('Location: engineers.php');
}
else
{
  $_SESSION['status'] = "Addition Failed";
   header('Location: engineers.php');
}
//////////////// [TO CREATE ADMIN] //////////////////////////










////////////////////// [ADMIN LOGIN]///////////////////////
if(isset($_POST['Login']))
{
    $email_login = $_POST['emaill']; 
    $password_login = $_POST['passwordd']; 

    $query = "SELECT * FROM admins WHERE Email='$email_login' AND Password='$password_login' LIMIT 1";
    $query_run = mysqli_query($connection, $query);

   if(mysqli_fetch_array($query_run))
   {
        $_SESSION['Username'] = $email_login;
        header('Location: index.php');
   } 
   else
   {
        $_SESSION['status'] = "Email / Password is Invalid";
        header('Location: adminlogin.php');
   }
    
}
////////////////////// [ADMIN LOGIN]///////////////////////














 ///////////////////////// [To delete admins data] /////////////////////////
  if(isset($_POST['delete_btn']))
    {
    $id = $_POST['delete_id'];

$query = "DELETE FROM admins WHERE id='$id' ";
$query_run = mysqli_query($connection, $query);

   if($query_run)
    {
       $_SESSION['success'] = "Profile Deleted Successfully";
       header('Location: engineers.php'); 
    }
      else
    {
      $_SESSION['status'] = "Profile not deleted";       
      header('Location: engineers.php'); 
    }    
}
///////////////////////// [To delete admins data] /////////////////////////









//////////// [UPDATE ADMIN] /////////////////
if (isset($_POST['Update_admin'])) {

  $id = $_POST['edit_id'];
  $Username = $_POST['edit_Username'];
  $Email = $_POST['edit_Email'];
  $Password = $_POST['edit_Password'];
  $Usertype = $_POST['edit_Usertype'];

    $query = "UPDATE admins SET Username='$Username', Email='$Email', Password='$Password', Usertype='$Usertype' WHERE id='$id' ";
    $query_run = mysqli_query($connection, $query);

    if($query_run)
    {
        $_SESSION['success'] = "Data Updated Successfully";
        header('Location: engineers.php'); 
    }
    else
    {
        $_SESSION['status'] = "Data Updation Failed";
        header('Location: engineers.php'); 
    }
}
//////////// [UPDATE ADMIN] /////////////////

?>