<?php
session_start();

$uemail = $_POST["username"];
$upwd = $_POST["password"];

if($uemail == "user@gmail.com" && $upwd=="Pass12345")
{
  $_SESSION['login'] = "User";
  $response_array['status'] = "success";
}

else
{
  		$response_array['status'] = "incorrect";
  	
}
echo json_encode($response_array);
?>