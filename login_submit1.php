<?php
session_start();

$uemail = $_POST["username"];
$upwd = $_POST["password"];

if($uemail == "admin@gmail.com" && $upwd=="Pass12345")
{
  $_SESSION['adlogin'] = "Admin";
  $response_array['status'] = "success";
}

else
{
  		$response_array['status'] = "incorrect";
  	
}
echo json_encode($response_array);
?>