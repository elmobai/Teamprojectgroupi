<!-- database connection is being established -->
<?php
include_once 'classes/dbconnect.php';
session_start(); 
?>
<!DOCTYPE html>
<html lang="en">

<head>
  
  
  <link rel="icon" href="https://teamprojectgroupi-elmobai.c9users.io/images/header/logo2.png" type="image/png" sizes="16x16 32x32">
  <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:300,400,500,700" type="text/css" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" />
  <link rel="stylesheet" href="https://code.getmdl.io/1.1.2/material.indigo-blue.min.css" />
  <link type="text/css" rel="stylesheet" href="../css/footable.core.min.css" />
  <link type="text/css" rel="stylesheet" href="../css/calendar.css" />
  <link type="text/css" rel="stylesheet" href="../css/style.css" />
  <link type="text/css" rel="stylesheet" href="../css/landingPage.css" />
  <!-- custom icons via FontAwesome -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
  
  <title>Archer's Logbook</title>
  
</head>

 


<body>

  <!-- Always shows a header, even in smaller screens. -->
<div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
  <header class="mdl-layout__header ">
    
    
    
    <!-- Left aligned menu below button -->

<!-- Hamburger Menu 
<button id="demo-menu-lower-left"
        class="mdl-button mdl-js-button mdl-button--icon">
  <i class="material-icons">more_vert</i>
</button>
End Hamburger Menu-->

<!-- 
<ul class="mdl-menu mdl-menu--bottom-left mdl-js-menu mdl-js-ripple-effect"
    for="demo-menu-lower-left">
  <li class="mdl-menu__item">Some Action</li>
  <li class="mdl-menu__item mdl-menu__item--full-bleed-divider">Another Action</li>
  <li disabled class="mdl-menu__item">Disabled Action</li>
  <li class="mdl-menu__item">Yet Another Action</li>
</ul>
-->

    <div class="mdl-layout__header-row ">
      <!-- Title -->
      <a class=" brand" href="https://teamprojectgroupi-elmobai.c9users.io/index.php">
        <span class="mdl-layout-title">
          <img src="https://teamprojectgroupi-elmobai.c9users.io/images/header/logo2.png" alt="logo" style="width:15%;height:15%;"/>
          Arecher's Logbook
        </span>
      </a>
      <!-- Add spacer, to align navigation to the right -->
      <div class="mdl-layout-spacer"></div>
      <!-- Navigation. We hide it in small screens. -->
      <nav class="mdl-navigation mdl-js-layout">
        <a class="mdl-navigation__link" href="https://teamprojectgroupi-elmobai.c9users.io/index.php">Available Rooms</a>
        <a class="mdl-navigation__link" href="https://teamprojectgroupi-elmobai.c9users.io/map.php">Floor Plan</a>
 
        <!-- Show 'Booking Manager' if user is loggged in-->
       <?php 
          if($_SESSION['admin']=="no"){
            ?>
             <a class="mdl-navigation__link" href="https://teamprojectgroupi-elmobai.c9users.io/bookings/bookingmanager.php">Bookings</a>
        <?php 
        } 
        ?>
        
        <!-- Show 'Admin Manager' if admin is loggged in-->
        <?php 
          if($_SESSION['admin']=="yes"){
            ?>
            <a class="mdl-navigation__link" href="https://teamprojectgroupi-elmobai.c9users.io/admin/usermanager.php">Users</a>
            <a class="mdl-navigation__link" href="https://teamprojectgroupi-elmobai.c9users.io/admin/roommanager.php">Rooms</a>
        <?php } ?>
        
        <!-- Show 'Logout' if user/admin is loggged in-->
        <?php 
        if(isset($_SESSION['user'])!=""){
          ?>
         <a class="mdl-navigation__link"><?php echo $_SESSION['user']; ?></font></strong></a>
         <a href="https://teamprojectgroupi-elmobai.c9users.io/logout.php" class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored">Logout</a>
      <?php } ?>

      <!-- Show 'Login' if user/admin is not loggged in-->
      <?php 
        if(isset($_SESSION['user'])==""){
          ?>
          <a class="mdl-navigation__link" href="https://teamprojectgroupi-elmobai.c9users.io/login.php">Login</a>
      <?php } ?>
      
     </nav>
    </div>
  </header>
  
  <!-- content open -->
  <main class="mdl-layout__content">
    <div class="page-content">
      <!-- if logged in, username will appear -->
  <!--<div class="mdl-grid">
    <div class="mdl-cell mdl-cell--12-col">
      <h2 class="centered">
      <?php 
        if(isset($_SESSION['user'])!=""){
          ?>
          <p><strong>Logged in as: <?php echo $_SESSION['user']; ?></strong></p>
         <a href="logout.php" class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored">Logout</a>
      <?php } ?>-->
      </h2></div>
  </div>
  </html>