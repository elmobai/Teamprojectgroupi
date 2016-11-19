<!--Register SQL-->
<?php
session_start();
if(isset($_SESSION['user'])!="")
{
 echo "<script>alert('You are already registered and logged in');</script>";
 echo "<script>window.location = 'index.php';</script>";
}
include_once 'classes/dbconnect.php';

if(isset($_POST['btn-signupadmin']))
{
 $firstname = mysql_real_escape_string($_POST['firstname']);
 $lastname = mysql_real_escape_string($_POST['lastname']);
 $email = mysql_real_escape_string($_POST['email']);
 $username = mysql_real_escape_string($_POST['username']);
 $password = md5(mysql_real_escape_string($_POST['password']));
 $code = md5(mysql_real_escape_string($_POST['code']));
 
 if(mysql_query("INSERT INTO admin (firstname,lastname,email,username,password,code) VALUES('$firstname','$lastname','$email','$username','$password','$code')"))
 {
  ?>
        <script>alert('Thank you, your details have been added successfully.');</script>
 echo "<script>window.location = 'https://teamprojectgroupi-elmobai.c9users.io/index.php';</script>";
        <?php
 }
 else
 {
  ?>
        <script>alert('Sorry, there was an error adding your detials. Please try again.');</script>
 echo "<script>window.location = 'https://teamprojectgroupi-elmobai.c9users.io/login.php';</script>";
        <?php
 }
}
?>