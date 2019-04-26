<?php
session_start();
if(!isset($_SESSION['adlogin']))
{
  header("Location: index.php");
}
?>

<!DOCTYPE html>
<html lang='en'>
<head>
  <title>Billing System</title>
  <meta charset='utf-8'>
  <link rel='icon' type='image/x-icon' href='icon.png'>
  <meta name='viewport' content='width=device-width, initial-scale=1'>
  <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css'>
  <script src='https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>
  <script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js'></script>
  <style>
    /* Remove the navbar's default margin-bottom and rounded borders */ 
    .navbar {
      margin-bottom: 0;
      border-radius: 0;
      background-color:  #800000;
    }
    #main1{
      background-color: white;

    }
    #bill1{
      width: 160px;
    }
    /* Set height of the grid so .sidenav can be 100% (adjust as needed) */
    .row.content {height: 450px}
    
    /* Set gray background color and 100% height  #f1f1f1 */
    .sidenav {
      padding-top: 20px;
      background-color:   #A6D785;
      height: 100%;
    }
    
    /* Set black background color, white text and some padding */
    footer {
      background-color: #555;
      color: white;
      padding: 15px;
    }
    #about{
      color: black;
    }
    /* On small screens, set height to 'auto' for sidenav and grid */
    @media screen and (max-width: 767px) {
      .sidenav {
        height: auto;
        padding: 15px;
      }
      .row.content {height:auto;} 
    }
  </style>
</head>
<body>

<nav class='navbar navbar-inverse'>
  <div class='container-fluid'>
    <div class='navbar-header'>
      <button type='button' class='navbar-toggle' data-toggle='collapse' data-target='#myNavbar'>
        <span class='icon-bar'></span>
        <span class='icon-bar'></span>
        <span class='icon-bar'></span>                        
      </button>
      <a class='navbar-brand' href='#'>Logo</a>
    </div>
    <div class='collapse navbar-collapse' id='myNavbar'>
      <ul class='nav navbar-nav'>
        <li class='active'><a href='index_logged.php'>Home</a></li>
        <li> <a href='stats1.php'> Statistics </a> </li>
      </ul>
      <ul class='nav navbar-nav navbar-right'>
        <li><a href='logout.php'><span class='glyphicon glyphicon-user'></span>Logout</a></li>
      </ul>
    </div>
  </div>
</nav>
  
<div class='container-fluid text-center' id='main1'>    
  <div class='row content'>
    <div class='col-sm-2 sidenav'>
      <p> One of the easiest ways to analyse your expenditures! </p>
    </div>
    <div class='col-sm-8 text-left'id='about'> 
      <h1 >Welcome @ <?php echo $_SESSION['adlogin']; ?></h1>
    </div>
    <div class='col-sm-2 sidenav'>
      <div class='well'>
        <img id='bill1' src='bill1.png'>
      </div>
      <div class='well'>
        <p>No worries about any extra mathematical calculations with us!</p>
      </div>
    </div>
  </div>
</div>

<footer class='container-fluid text-center'>
  <p>&copy;NKN collaborations 2018-2019</p>
</footer>

</body>
</html>
