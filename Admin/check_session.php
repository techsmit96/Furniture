<?php
//session_start();
if($_SESSION["admin"] != ""){}
else{
	header("location:admin_login.php");
}

$inactive=10000;
if(isset($_SESSION["timeout"]))
{
	$sessiontt1=time()- $_SESSION["timeout"];
	if($sessiontt1 > $inactive)
	{
		session_destroy();
		header("location:logout.php");
	}
}
$_SESSION["timeout"]=time();
?>