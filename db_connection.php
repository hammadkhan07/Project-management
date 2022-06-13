<?php
function OpenCon()
 {
 $dbhost = "localhost";
 $dbuser = "root";
 $dbpass = "";
 $db = "test";
 $connection = mysqli_connect($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $connection -> error);
 
 return $connection;
 }
 
function CloseCon($connection)
 {
 $connection -> close();
 }
   
?>