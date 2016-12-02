<?php
session_start();
include_once 'classes/dbconnect.php'; 
if(isset($_SESSION['user'])!="")
	header("Location: index.php");

    
if(isset($_POST['btn-score']))
{
 $score1 = mysql_real_escape_string($_POST['score1']);
 $score2 = mysql_real_escape_string($_POST['score2']);
 $score3 = mysql_real_escape_string($_POST['score3']);
 $score4 = mysql_real_escape_string($_POST['score4']);
 $score5 = mysql_real_escape_string($_POST['score5']);
 $AVERAGE = mysql_real_escape_string($_POST['AVERAGE']);
 if(mysql_query("INSERT INTO scores(score1,score2,score3,score4,score5) VALUES('$score1','$score2','$score3','$score4','$score5')"))
 

  {
  ?>
               <script>alert('Thank you, Your scores have been added successfully!');</script>
 echo "<script>window.location = 'https://teamprojectgroupi-elmobai.c9users.io/index.php';</script>";
        <?php
 }
 else
 {
  ?>
        <script>alert('Sorry, there was an error adding your scores. Please try again.');</script>
 echo "<script>window.location = 'https://teamprojectgroupi-elmobai.c9users.io/index.php';</script>";
        <?php
 }
}

?>