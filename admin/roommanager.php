<?php include '../header.php';
if($_SESSION['admin']=="no")
{
 echo "<script>alert('You must be logged-in as an admin to view this page.');</script>";
 echo "<script>window.location = 'https://teamprojectgroupi-elmobai.c9users.io/index.php';</script>";
}?>

<?php include_once 'addRoom.php'; ?>

<div class="mdl-grid panel2">
	<div class="mdl-cell mdl-cell--2-col"></div>
	<div class="mdl-cell mdl-cell--8-col">
		<h2>Room Manager</h2>
		You can use this page to add new rooms and manage current ones.
  <!--
  <p>User Manager: <a href="usermanager.php" class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored">Enter</a></p>
  -->
</div>
	<div class="mdl-cell mdl-cell--2-col"></div>
</div>

<?php include '../room.php' ?>

<!--
<div class="mdl-grid panel2">
	<div class="mdl-cell mdl-cell--2-col"></div>
	<div class="mdl-cell mdl-cell--8-col">
		<button type="submit" form="addRoomForm" onclick="location.reload();location.href='room.php'">Click me!</button>
  </div>
	<div class="mdl-cell mdl-cell--2-col"></div>
</div>
-->

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
     