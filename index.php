<?php
//ob_start();
session_start();
if(isset($_SESSION['login'])!="")
{
  header('Location: login_success.php');
}

//ob_end_flush();
?>
<?php
echo "
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
      width: 120px;
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
    </div>
    <div class='collapse navbar-collapse' id='myNavbar'>
      <ul class='nav navbar-nav'>
        <li class='active'><a href='#'>Home</a></li>
        <li><a href='#about'>About</a></li>
        <li><a href='signup.php'><span class='glyphicon glyphicon-edit'></span>Sign Up</a></li>
        <li><a href='#'>Tutorial</a></li>
        <li><a href='contact.html'>Contact</a></li>
        <li><a href='adminlog.php'>Admin</a></li>
      </ul>
      <ul class='nav navbar-nav navbar-right'>
        <li><a href='login.php'><span class='glyphicon glyphicon-log-in'></span> Login</a></li>
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
      <h1 >Welcome</h1>
      <p> One of the major problems in colleges during any events is that not every expenditure can be extracted back from the college. Or some fake bills and get more money than they've actually spent. Our website also provides the statistics about how much money is spent and how much is remaining. We also support an online calculator with an easily workable interface.</p>
      <hr>
      <h3>Access:</h3>
      <p> Students can sign up under the respective domains they are working for;<br> There is an administrator who monitors which domains are active when and the funds alloted to each student. </p>
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
";
?>