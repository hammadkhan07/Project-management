<?php
include 'security.php';
include 'database/dbconfig.php';



//////////////////////////[FOR USER REGISTRATION]/////////////////////////

if (isset($_POST['Signup'])) {
    $Names = $_POST['Names'];
    $Phone = $_POST['Phone'];
    $email = $_POST['email'];
    $Password = $_POST['Password'];
    $Usertype = $_POST['Usertype'];

    $email_check = "SELECT * FROM usertable WHERE email = '$email'";

    $res = mysqli_query($connection, $email_check);
    if(mysqli_num_rows($res) > 0){

        // $errors['email'] = "Email that you have entered is already exist!";
        $errorMsg = "Email that you have entered is already exist!";
        header('location: index.php?msg='.$errorMsg.'&status=0'); 
    } else {

   

        $encpass = $password;
        // $code = rand(999999, 111111);
        // $status = "notverified";   
        $insert_data = "INSERT INTO usertable (Names, Phone, email, Password, Usertype)
                        values('$Names','$Phone','$email','$Password','$Usertype')";
        $data_check = mysqli_query($connection, $insert_data);


        if($data_check){
            $msg = "Registered Successfully";
            header('location: index.php?msg='.$msg.'&status=1');
            exit;
 
        }


}
}


//////////////////////////[END USER REGISTRATION]/////////////////////////











//////////////////////////[END USER LOGIN]/////////////////////////



if(isset($_POST['Login']))
{
    $email_login = $_POST['emaill']; 
    $password_login = $_POST['passwordd']; 

    $query = "SELECT * FROM usertable WHERE email='$email_login' AND password='$password_login' LIMIT 1";
    $query_run = mysqli_query($connection, $query);

   if(mysqli_fetch_array($query_run))
   {
        $_SESSION['Names'] = $email_login;
        header('Location: userpanel.php');
   } 
   else
   {
        $errorMsg = "Incorrect Email or Password";
        header('location: index.php?msg='.$errorMsg.'&status=1');
        exit;
   }
    
}


//////////////////////////[END USER LOGIN]/////////////////////////






////////////////////// [START] : UPDATE PASSWORD ////////////////////////////


if (isset($_POST['change_pass'])) {


$email = $_POST['email'];
$NewPassword = $_POST['new_password'];
$ConfirmPassword = $_POST['confirm_password'];

$email_check = "SELECT * FROM usertable WHERE email = '$email'";

    $res = mysqli_query($connection, $email_check);
    if(mysqli_num_rows($res) <= 0){

        $msg = "Email you entered does not exist!";
        header('location: index?msg='.$msg.'&status=0'); 
    } else {


        $insert_data = "UPDATE usertable SET Password='$NewPassword' WHERE email='$email'";
        $data_check = mysqli_query($connection, $insert_data);


        if($data_check){
            $msg = "Password Changed Successfully";
            header('location: index.php?msg='.$msg.'&status=1');
 
        }


}
}
    
////////////////////// [END] : UPDATE PASSWORD ////////////////////////////

?>
