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

<!-- best score -->
<!--if total[0] < total[2]{ save total1 tot=total1 }else {save total0 tot=total0 if(tot < total2....}-->

<!-- add scores -->

<?php
include_once 'classes/dbconnect.php'; 

session_start();
if(isset($_SESSION['user'])=="")
{
 // code below causes loop
 //echo "<script>alert('You must log in first to continue!');</script>";
 //echo "<script>window.location = 'https://teamprojectgroupi-elmobai.c9users.io/login.php';</script>";
}

if(isset($_POST['btn-add-score']))
{
  $db = Connect();
  $round = mysqli_real_escape_string($db, $_POST['round']);
  $score1 = mysqli_real_escape_string($db, $_POST['score1']);
  $score2 = mysqli_real_escape_string($db, $_POST['score2']);
  $score3 = mysqli_real_escape_string($db, $_POST['score3']);
  $score4 = mysqli_real_escape_string($db, $_POST['score4']);
  $score5 = mysqli_real_escape_string($db, $_POST['score5']);
  $date = mysqli_real_escape_string($db, $_POST['date']);
  $total = mysqli_real_escape_string($db, ($_POST['score1']) + ($_POST['score2']) + ($_POST['score3']) + ($_POST['score4']) + ($_POST['score5']));
  $avg = mysqli_real_escape_string($db, ( (($_POST['score1']) + ($_POST['score2']) + ($_POST['score3']) + ($_POST['score4']) + ($_POST['score5'])) /5 ) );
  //$date = mysqli_real_escape_string($db, $_POST['date(yyyy/MM/dd)']);
  //look at other project for printing out date format
 

  $user = mysqli_real_escape_string($db, $_SESSION['user']);
 
  // ad col for totalS
      if(mysql_query("INSERT INTO scores(round, score1, score2, score3, score4, score5, total, avg, date, user) VALUES('".$round."','".$score1."','".$score2."','".$score3."','".$score4."','".$score5."','".$total."','".$avg."','".$date."','".$user."')"))
      {
     
         echo '<script>alert("Your scores have been added successfully!");</script>';
         echo '<script>window.location = "https://teamprojectgroupi-elmobai.c9users.io/score.php";</script>';
      
      }
 
     else
     {
      
        echo '<script>alert("Sorry, there was an error adding your scores. Please try again.");</script>';
        echo '<script>window.location = "https://teamprojectgroupi-elmobai.c9users.io/score.php";</script>';
     
     }

}
?>

