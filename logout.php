<?php
session_start();

if(!isset($_SESSION['login']))
{
	header("Location: login_success.php");
}
else if(isset($_SESSION['login'])!="")
{
	header("Location: index.php");
}

if(isset($_GET['logout']))
{
	session_destroy();
	unset($_SESSION['login']);
	header("Location: index.php");
}

echo "Logging out... please wait.";

?>