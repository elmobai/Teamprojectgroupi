<?php include '../header.php';
if($_SESSION['admin']=="no")
{
 echo "<script>alert('You must be logged-in as an admin to view this page.');</script>";
 echo "<script>window.location = 'https://teamprojectgroupi-elmobai.c9users.io/index.php';</script>";
}?>

<!-- Heading -->
<div class="mdl-grid panel2">
	<div class="mdl-cell mdl-cell--2-col"></div>
	<div class="mdl-cell mdl-cell--8-col">
		<h2>User Manager</h2>
		You can use this page to view registered users and their bookings.
		<!--
		<p>Room Manager: <a href="roommanager.php" class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored">Enter</a></p>
  -->
  </div>
	<div class="mdl-cell mdl-cell--2-col"></div>
</div>
<!-- Heading end -->

<!-- Registered Users -->
<div class="mdl-grid">
  <div class="mdl-cell mdl-cell--1-col"></div>
  
  <div class="mdl-cell mdl-cell--10-col mdl-shadow--2dp">
    <section class="login-register">
      <h3>Registered Users</h3>
      <hr/>
      
      <p>You can view registered users below:</p>
      <?php include '../bookings/fetchRegistered.php'; ?>
    </section>
  </div>
  
  <div class="mdl-cell mdl-cell--1-col"></div>
</div>
<!-- Registered Users end-->

<!-- User Bookings-->
<div class="mdl-grid">
  <div class="mdl-cell mdl-cell--1-col"></div>
  
  <div class="mdl-cell mdl-cell--10-col mdl-shadow--2dp">
    <section class="login-register">
      <h3>User Bookings</h3>
      <hr/>
      
      <p>You can view user bookings below:</p>
    <?php include '../bookings/fetchBookingsAdmin.php' ?>
    </section>
  </div>
  
  <div class="mdl-cell mdl-cell--1-col"></div>
</div>
<!-- User Bookings end-->
<?php include '../footer.php' ?>

<!-- Heading -->
<!--<div class="mdl-grid">
        <div class="mdl-cell mdl-cell--5-col"></div>
        <div class="mdl-cell mdl-cell--2-col">
          <?//php 
            //if($_SESSION['user']!="" && $_SESSION['admin']=="yes"){
              ?>
              Admin View</p>
              <a href="https://teamprojectgroupi-elmobai.c9users.io/room.php" class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored">Add a New Room</a>
          <?//php } ?>  
        </div>
        <div class="mdl-cell mdl-cell--5-col"></div>
      </div>-->
     