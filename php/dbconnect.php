<?php
//error_reporting(0);
//timezone_location_get("Africa-Ghana");

ob_start();
session_start();

DEFINE ('DB_USER', 'root');
DEFINE ('DB_PSWD', ''); 
DEFINE ('DB_HOST', 'localhost'); 
DEFINE ('DB_NAME', 'educare'); 

// DEFINE ('DB_USER', 'wewe');
// DEFINE ('DB_PSWD', 'emma806203'); 
// DEFINE ('DB_HOST', 'mysql.we.theikeorg.xyz'); 
// DEFINE ('DB_NAME', 'weeducare'); 

$conn =  new mysqli(DB_HOST,DB_USER,DB_PSWD,DB_NAME);


if (isset($_GET['logout'])) {
	
	ob_end_flush();
	session_unset();
	session_destroy();
	$_SESSION['user_name']="";
	
	header("location:login.php");
}

?>