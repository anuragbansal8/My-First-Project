<?php
$Uid=$_POST["uid"];
$Pass=$_POST["pass"];
if($Uid=="admin" && $Pass=="password")
{

// remove all session variables
session_unset(); 

// destroy the session 
session_destroy(); 
	header("Location:panel.php");
	 
}
else
{
echo"Wrong username & password";
echo"<a href=login1.php>click</a>";
}
?>