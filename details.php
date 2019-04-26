<?php
session_start();
if(!isset($_SESSION['login']))
{
  header("Location: index.php");
}
?>


<?php
	$db = mysqli_connect('localhost','root','','details');
	if(isset($_POST['submit'])){
		$varbill=$_POST['bill'];
		$vardate=$_POST['date'];
		$varcat=$_POST['category'];
		$varcompany=$_POST['company'];
		//$varbudget=$_POST['budget'];
		$varspent=$_POST['spent'];
		$SQ="INSERT INTO accounts (Bill_number,date_d,Category,Company,Spent) VALUES ('$varbill','$vardate','$varcat','$varcompany','$varspent')";
		if(!mysqli_query($db,$SQ)){
			die("error:".mysqli_error($db));

		}
	}
	mysqli_close($db);
?>
<!DOCTYPE html>
<head>
	<title> Details </title>
	<link rel="icon" type="image/x-icon" href="icon.png">
	<meta charset='utf-8'>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
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

body{ background-image:url("https://hdwallsource.com/img/2014/9/blur-26347-27038-hd-wallpapers.jpg"); background-repeat:no-repeat; background-position:center; background-size:cover; padding:10px;}
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
<a href="image_upload.php">Bill Image</a>
<a href="summary.php">Summary</a>
<a href="calculator.html" target="_blank"> Calculator </a>
  <a href="#home" class="active">Upload Bill Details</a>
<a href="logout.php?logout=true"> Logout </a>
  <a href="javascript:void(0);" class="icon" onclick="myFunction1()">
    <i class="fa fa-bars"></i>
  </a>
</div>
<div id="signform">
<div class="container">
<div class="card bg-light">
<article class="card-body mx-auto" style="max-width: 400px;">
	<h4 class="card-title mt-3 text-center">Fill Details</h4>
	<form name="myForm" onsubmit="return validateForm()" method="POST" action="details.php">
	<div class="form-group input-group">
		<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-envelope"></i> </span>
		 </div>
        <input name="bill" required class="form-control" placeholder="Bill Number" type="text">
    </div> <!-- form-group// -->
    <div class="form-group input-group">
    	<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-calendar"></i> </span>
		 </div>
        <input name="date" required class="form-control" placeholder="Date of Issue" type="date">
    </div> <!-- form-group// -->
    <div class="form-group input-group">
		<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-user"></i> </span>
		 </div>
        <input name="category" required class="form-control" placeholder="Category" type="text">
    </div> 
    <div class="form-group input-group">
		<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-user"></i> </span>
		 </div>
        <input name="company" required class="form-control" placeholder="Company" type="text">
    </div> 
    <div class="form-group input-group">
		<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-credit-card"></i> </span>
		 </div>
        <input name="spent" required class="form-control" placeholder="Amount Spent" type="text">
    </div> 
    <div class="form-group">
     <button type="submit" class="btn btn-primary btn-block" name='submit'>  Submit  </button>
    </div>
    </form>
</article>
</div> <!-- card.// -->

</div> 
<!--container end.//-->

<br><br>
</div>
<footer class='container-fluid text-center'>
  <p>&copy;NKN collaborations 2018-2019</p>
</footer>
<script>
function validateForm() {
    var x = document.forms["myForm"]["bill"].value;
    var y = document.forms["myForm"]["date"].value;
    var p = document.forms["myForm"]["category"].value;
    var z = document.forms["myForm"]["company"].value;
    var q = document.forms["myForm"]["spent"].value;
    if (x == "" || y=="" || z=="" || p=="" || q=="") {
        alert("All fields must be filled out");
        return false;
    }
    else{
        alert("Bill was uploaded successfully!")
    }
}
function myFunction1() {
    var x = document.getElementById("myTopnav");
    if (x.className === "topnav") {
        x.className += " responsive";
    } else {
        x.className = "topnav";
    }
}
</script>
</body>
</html>
