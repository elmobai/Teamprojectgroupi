<?php
   include("dbconnect.php");
   include("config.php");
   session_start();
   
   if(isset($_SESSION['user'])!="")
{
 echo "<script>alert('You are already logged in');</script>";
 header( 'Location: bookings/bookingmanager.php');
}

if(isset($_POST['btn-login']))
{
 $username = mysql_real_escape_string($_POST['username']);
 $password = mysql_real_escape_string($_POST['password']);
 $res=mysql_query("SELECT * FROM user WHERE email='$username'");
 $row=mysql_fetch_array($res);
 
 if($row['password']==md5($password))
 {
  $_SESSION['user'] = $row['username'];
  //$_SESSION['admin'] = "no";
  header( 'Location: index.php');
  echo "<script type='text/javascript'>alert('You have now logged-in.');</script>";
 }
 else
 {
  ?>
        <script>alert('Wrong details entered, please try again.');</script>
 echo "<script>window.location = 'login.php';</script>";
        <?php
 }
}

?>
<html>
   
   <head>
      <title>Login Page</title>
      
      <style type = "text/css">
         body {
            font-family:Arial, Helvetica, sans-serif;
            font-size:24px;
            background-color:#0000;
         }
         
         label {
            font-weight:bold;
            width:100px;
            font-size:14px;
            background-color: #D1C6C4;
         }
         
         .box {
            border:#666666 solid 1px;
         }
      </style>
      
   </head>
   
   <body bgcolor = "#FFFFFF">
	
      <div align = "center" margin-top:"30px;">
         <div style = "width:300px; border: solid 1px #333333; " align = "left;" margin-top:"30px;">
            <div style = "background-color:#333333; color:#FFFFFF; padding:3px;"><b>Login</b></div>
				
            <div style = "margin:30px">
               
               <form action = "" method = "post">
                  <label>User Name  :</label><input type = "text" name = "Username" class = "box"/><br /><br />
                  <label>Password  :</label><input type = "password" name = "password" class = "box" /><br/><br />
                  <input type = "submit" value = " Login"/><br />
                  <a href="#" class="home_btn" onclick="location.reload();location.href='index.html'">go back</a>
               </form>
               
               <div style = "font-size:11px; color:#cc0000; margin-top:10px"><?php echo $error; ?></div>
					
            </div>
				
         </div>
			
      </div>

   </body>
</html>