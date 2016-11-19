<?php /*
session_start();
if(isset($_SESSION['user'])=="")
{
 echo "<script>alert('Please log-in to view this page.');</script>";
 echo "<script>window.location = 'login.php';</script>";
}
include_once '../classes/dbconnect.php';

if(isset($_POST['btn-addRoom']))
{
 $room = mysql_real_escape_string($_POST['room']);
 $location = mysql_real_escape_string($_POST['location']);
 $capacity = mysql_real_escape_string($_POST['capacity']);
 $type = mysql_real_escape_string($_POST['type']);
 $description = mysql_real_escape_string($_POST['description']);
 //$photo = mysql_real_escape_string($_POST['photo']);
 if(mysql_query("INSERT INTO rooms(ROOM, LOCATION, CAPACITY, TYPE, DESCRIPTION) VALUES ('".$room."','".$location."','".$capacity."','".$type."','".$description."')"))
 {
        echo"<script>alert('Your room has been added successfully.');</script>";
 }
 else
 {
        echo"<script>alert('Sorry, there was an error adding that room.');</script>";
 }
}*/
?>



<?php

include_once '../classes/dbconnect2.php';

session_start();
if(isset($_SESSION['user'])=="")
{
 echo "<script>alert('You must log in first to continue!');</script>";
 echo "<script>window.location = 'https://teamprojectgroupi-elmobai.c9users.io/login.php';</script>";
}

if(isset($_POST['btn-addRoom']))
{
  $db = Connect();
  $room = mysqli_real_escape_string($db, $_POST['room']);
  $capacity = mysqli_real_escape_string($db, $_POST['capacity']);
  $description = mysqli_real_escape_string($db, $_POST['description']);
  $location = mysqli_real_escape_string($db, $_POST['location']);
  $type = mysqli_real_escape_string($db, $_POST['type']);
  $sql = "INSERT INTO rooms(ROOM ,DESCRIPTION, LOCATION, TYPE, CAPACITY) VALUES('".$room."','".$description."','".$location."','".$type."','".$capacity."')";
  $result = $db->query($sql);
  
  if ($result){
   //message
    echo "<script>alert('Room added Successfully.');</script>";
 echo "<script>window.location = 'https://teamprojectgroupi-elmobai.c9users.io/admin/roommanager.php';</script>";
  } else {
   //message
   echo mysqli_error($db);
  }
  $db->close();
}
?>