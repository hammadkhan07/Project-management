<?php
include 'security.php';
include('database/dbconfig.php');
$output = '';

if(isset($_POST['adminProjectId'])) {

if($_POST["adminProjectId"] != '')  
{  
     $sql = "SELECT * FROM admins WHERE id = '".$_POST["adminProjectId"]."'";  
}  
else  
{  
     $sql = "SELECT * FROM admins";  
}  
$result = mysqli_query($connection, $sql);  
$return_arr = array();
while($row = mysqli_fetch_array($result))  
{ 
    $id = $row['id'];
    $name = $row['Username'];
    $email = $row['Email'];
//     $ptype = $row['Ptype'];
    // $name = $row['name'];
    // $email = $row['email'];

    $return_arr[] = array("id" => $id,
                    "name" => $name,
                    "email" => $email,);
     // $emparray[] = $row;  
}  
      echo json_encode($return_arr); 
}

?>