<?php 
session_start();
  if(isset($_SESSION['user'])=="")
  {
   echo "<script>alert('Please log-in to view this page.');</script>";
   echo "<script>window.location = 'login.php';</script>";
  }
  include_once '../classes/dbconnect.php';
  
  if(isset($_POST['btn-addbooking']))
  {
    $room = mysql_real_escape_string($_POST['room']);
    $capacity = mysql_real_escape_string($_POST['capacity']);
    $date = mysql_real_escape_string($_POST['date']);
    $time = mysql_real_escape_string($_POST['time']);
    $requirements = mysql_real_escape_string($_POST['requirements']);
      if(mysql_query("INSERT INTO bookings(room, capacity, date, time, requirements) VALUES ($room,$capacity,$date,$time,$requirements)"))
      {
             echo"<script>alert('Your booking had been created. Go to My Bookings to review.');</script>";
      }
      else
      {
             echo"<script>alert('Sorry, there was an error creating your booking.');</script>";
      }
  }
?>