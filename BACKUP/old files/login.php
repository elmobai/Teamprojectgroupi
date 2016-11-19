<?php
include_once 'classes/dbconnect.php';
session_start();

if(isset($_SESSION['user'])!="")
{
 echo "<script>alert('You are already logged in');</script>";
 header( 'Location: index.php');
}

if(isset($_POST['btn-login']))
{
 $email = mysql_real_escape_string($_POST['email']);
 $password = mysql_real_escape_string($_POST['password']);
 $res=mysql_query("SELECT * FROM registered WHERE email='$email'");
 $row=mysql_fetch_array($res);
 
 if($row['password']==md5($password))
 {
  $_SESSION['user'] = $row['username'];
  $_SESSION['admin'] = "no";
  header( 'Location: index.php');
  echo "<script type='text/javascript'>alert('You have now logged-in.');</script>";
 }
 else
 {
  ?>
        <script>alert('Wrong details entered, please try again.');</script>
 echo "<script>window.location = 'https://teamprojectgroupi-elmobai.c9users.io/index.php';</script>";
        <?php
 }
}
?>