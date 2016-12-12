<?php 
include_once 'api/Config.php';

function Connect(){
		$conn = mysqli_connect(dbhost, dbuser,dbpass, dbname);		
		if(!$conn){
			return false; 
		}else{
			return $conn;
		}	
    }
    
?>

<?php
include_once 'classes/dbconnect.php'; 

session_start();
if(isset($_SESSION['user'])=="")
{
 echo "<script>alert('You must log in first to continue!');</script>";
 echo "<script>window.location = 'https://teamprojectgroupi-elmobai.c9users.io/login.php';</script>";
}

if(isset($_POST['btn-score']))
{
  $db = Connect();
  $round = mysqli_real_escape_string($db, $_POST['round']);
  $score1 = mysqli_real_escape_string($db, $_POST['score1']);
  $score2 = mysqli_real_escape_string($db, $_POST['score2']);
  $score3 = mysqli_real_escape_string($db, $_POST['score3']);
  $score4 = mysqli_real_escape_string($db, $_POST['score4']);
  $score5 = mysqli_real_escape_string($db, $_POST['score5']);
  $user = mysqli_real_escape_string($db, $_SESSION['user']);
 
  
  if(mysql_query("INSERT INTO scores(round, score1,score2,score3,score4,score5, user) VALUES('".$round."','".$score1."','".$score2."','".$score3."','".$score4."','".$score5."','".$user."')"))
  {
  ?>
     <script>alert('Thank you, Your scores have been added successfully!');</script>
     echo "<script>window.location = 'https://teamprojectgroupi-elmobai.c9users.io/score.php';</script>";
  <?php
 }
 
 else
 {
  ?>
    <script>alert('Sorry, there was an error adding your scores. Please try again.');</script>
    echo "<script>window.location = 'https://teamprojectgroupi-elmobai.c9users.io/score.php';</script>";
 <?php
 }

}
?>