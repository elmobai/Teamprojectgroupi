<?php
session_start();
if(isset($_SESSION['user'])!="")
{
 echo "<script>alert('You are already registered and logged in');</script>";
 echo "<script>window.location = 'index.php';</script>";
}
include_once 'classes/dbconnect.php';

if(isset($_POST['btn-signup']))
{
 $firstname = mysql_real_escape_string($_POST['firstname']);
 $lastname = mysql_real_escape_string($_POST['lastname']);
 $email = mysql_real_escape_string($_POST['email']);
 $username = mysql_real_escape_string($_POST['username']);
 $password = md5(mysql_real_escape_string($_POST['password']));
 
 if(mysql_query("INSERT INTO register(firstname,lastname,email,username,password) VALUES('$firstname','$lastname','$email','$username','$password')"))
 {
  ?>
        <script>alert('Thank you, Your details have been added successfully. You will recieve a confirmation email shortly');</script>
 echo "<script>window.location = 'index.php';</script>";
        <?php
 }
 else
 {
  ?>
        <script>alert('Sorry, there was an error adding your detials. Please try again.');</script>
 echo "<script>window.location = 'https://itp-module-x14346081.c9users.io/register.php';</script>";
        <?php
 }
}
?>