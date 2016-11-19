<?php 
/*
include ('register.php');

if(isset($_SESSION['error']))
 {
  header("Location: index.php");
  exit;
 }
 else
 {
  $username = $_POST['username'];
  $email = $_POST['email'];
  $password = $_POST['password'];
  

  $sql = "INSERT INTO registered (username, email, password) VALUES ('$username', '$email', '$password')";
  $result2 = mysqli_query($mysqli,$sql2) or die(mysqli_error());

  if($result2)
  {
   $to = $email;
   $subject = "Confirmation from dragon booking to $username";
   $header = "dragon booking: Confirmation from dragonbooking";
   $message = "Please click the link below to verify and activate your account. rn";
   $message .= "https://itp-module-x14346081.c9users.io/index.php?passkey=$com_code";

   $sentmail = mail($to,$subject,$message,$header);

   if($sentmail)
            {
   echo "Your Confirmation link Has Been Sent To Your Email Address.";
   }
   else
         {
    echo "Cannot send Confirmation link to your e-mail address";
   }
  }
 }
}
?>