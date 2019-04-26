<?php
//ob_start(); 
session_start();
echo "
       <!DOCTYPE html>
<html>
<head>
<meta name='viewport' content='width=device-width, initial-scale=1'>
<link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css'>
<link rel='icon' type='image/x-icon' href='icon.png'>
</head>
<body>

<h2> You have logged in successfully!! </h2>
<h3>Click <a href='login_success.php'>here</a> to continue as @user</h3>

<svg width='100%' height='300px'>
<g id='R1' transform='translate(250 250)'> 
  <ellipse rx='100' ry='0' opacity='.5'>
  <animateTransform attributeName='transform' type='rotate' dur='7s' from='0' to='360' repeatCount='indefinite' />
  <animate attributeName='cx' dur='8s' values='-20; 220; -20' repeatCount='indefinite' />
  <animate attributeName='ry' dur='3s' values='10; 60; 10' repeatCount='indefinite' />
  </ellipse>
</g>
<use xlink:href='#R1' transform='rotate(72 390 150)' />
<use xlink:href='#R1' transform='rotate(144 390 150)' />
<use xlink:href='#R1' transform='rotate(216 390 150)' />
<use xlink:href='#R1' transform='rotate(288 390 150)' />
</svg>
<script src='https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>
    <script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js'></script>
</body>
</html>
    ";
//ob_end_flush();  
?>