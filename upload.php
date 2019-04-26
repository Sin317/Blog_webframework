
<!DOCTYPE html>
<head>
	<title> Bill Image </title>
	<link rel="icon" type="image/x-icon" href="icon.png">
	<meta charset='utf-8'>
<!--link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script-->
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
  <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">
<style>
.topnav {
  overflow: hidden;
  background-color: #333;
}

.topnav a {
  float: left;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.active {
  background-color: #4CAF50;
  color: white;
}

.topnav .icon {
  display: none;
}

@media screen and (max-width: 600px) {
  .topnav a:not(:first-child) {display: none;}
  .topnav a.icon {
    float: right;
    display: block;
  }
}

@media screen and (max-width: 600px) {
  .topnav.responsive {position: relative;}
  .topnav.responsive .icon {
    position: absolute;
    right: 0;
    top: 0;
  }
  .topnav.responsive a {
    float: none;
    display: block;
    text-align: left;
  }
}


.divider-text {
    position: relative;
    text-align: center;
    margin-top: 15px;
    margin-bottom: 15px;
}
.divider-text span {
    padding: 7px;
    font-size: 12px;
    position: relative;   
    z-index: 2;
}
.divider-text:after {
    content: "";
    position: absolute;
    width: 100%;
    border-bottom: 1px solid #ddd;
    top: 55%;
    left: 0;
    z-index: 1;
}
footer{
     background-color: #555;
      color: white;
}
#bill1{
      width: 160px;
    }
</style>
</head>
<body>
<div class="topnav" id="myTopnav">
<a href="login_success.php">Home</a>
<a href="image_upload.php" class="active">Bill Image</a>
<a href="summary.php">Summary</a>
<a href="calculator.html" target="_blank"> Calculator </a>
  <a href="details.php">Upload Bill Details</a>
<a href="logout.php?logout=true"> Logout </a>
  <a href="javascript:void(0);" class="icon" onclick="myFunction1()">
    <i class="fa fa-bars"></i>
  </a>
</div>
<br>
<br>
<br>
<h2> Image Uploaded.... </h2>

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
</body>