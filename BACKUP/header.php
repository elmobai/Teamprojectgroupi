<!--Styling for Website-->
<!-- database connection is being established -->
<?php
include_once 'classes/dbconnect.php';
session_start(); 
?>
<!DOCTYPE html>
<html lang="en">

<!--head-->
<head>

  <meta charset="utf-8"> 
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="theme-color" content="#555">
  
  <script src="js/action.js"></script>
  <link rel="stylesheet" type="text/css" href="style.css"/>
  <link rel="stylesheet" type="text/css" href="bs/css/bootstrap.css"/>
  <link rel="stylesheet" type="style/css" href="bs/css/bootstrap-theme.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 
 <!--taken from dragon bookings--> 
  <link type="text/css" rel="stylesheet" href="../css/footable.core.min.css" />
  <link type="text/css" rel="stylesheet" href="../css/calendar.css" />
  <link type="text/css" rel="stylesheet" href="../css/style.css" />
  <link type="text/css" rel="stylesheet" href="../css/landingPage.css" />
  
  <!--favicon-->
  <link rel="icon" href="https://teamprojectgroupi-elmobai.c9users.io/images/logo.jpg" type="image/png" sizes="16x16 32x32">
  
  <!--Page Title-->  
  <title>Archer's Logbook</title>

</head>

<body>

<header>
  <!--navbar-->
  <nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container-fluid">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
  <!--  <a class="navbar-brand" href="index.php">Archer's Logbook</a>-->
        <a class="navbar-brand" href="https://teamprojectgroupi-elmobai.c9users.io/index.php">
          <span class="mdl-layout-title">
            <img src="https://teamprojectgroupi-elmobai.c9users.io/images/logo.jpg" alt="logo" style="width:15%;height:90%;"/>
            Archer's Logbook
          </span>
        </a>
        
      </div>
      <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav">
          <!--
          <li class="active"><a href="#">Home</a></li>
          <li><a>Shoot for the Stars!</a></li>
          -->
        </ul>
        <ul class="nav navbar-nav navbar-right">
          
          <!-- Show 'sign in' and 'sign up' if user is not loggged in -->
          <?php 
            if(isset($_SESSION['user'])==""){
              ?>
            <li><a href="https://teamprojectgroupi-elmobai.c9users.io/login.php"><span class="glyphicon glyphicon-log-in"></span> Sign In</a></li>
            <li><a href="https://teamprojectgroupi-elmobai.c9users.io/register.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
          <?php } ?>
          
          <!-- Show 'sign out' if user is loggged in -->
          <!--change == to != -->
          <?php 
          if(isset($_SESSION['user'])!=""){ 
            ?>
           <a><?php echo $_SESSION['user']; ?></font></strong></a>
           <li><a href="https://teamprojectgroupi-elmobai.c9users.io/logout.php"><span class="glyphicon glyphicon-log-out"></span> Sign Out</a></li>
          <?php } ?>
          
        </ul>
      </div>
    </div>
  </nav>
</header>

<!--old header-->
<div class="jumbotron text-center">
    <!--
    <h1>Archer's Logbook</h1>
    <h1><small>Shoot for the stars!</small></h1>
    
    
    <a href="https://teamprojectgroupi-elmobai.c9users.io/index.php">
      <img src="https://teamprojectgroupi-elmobai.c9users.io/images/logo.jpg" alt="Archer's Logbook" border="0">
    </a>-->
    
    <div>
    <p></p>
    
    <!--dropdown button
    <div class="dropdown">
      <button class="dropbtn">Profile</button>
      <div class="dropdown-content">
        <a href="https://teamprojectgroupi-elmobai.c9users.io/login.php">Login</a>
        <a href="https://teamprojectgroupi-elmobai.c9users.io/registerform.php">Register</a>
      </div>
      </p>
    </div>
    -->
  </div>

</body>
</html>