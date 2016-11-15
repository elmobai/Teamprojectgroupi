 <!-- row 2 -->
<?php
session_start();
include_once 'dbconnect.php';
if(isset($_SESSION['user'])!="")
	header("Location: index.php");


if(isset($_SESSION['c9'])!="") {
    header("Location: index.php");
    
if(isset($_POST['btn-scoreSubmit']))
{
 $Score 1 = mysql_real_escape_string($_POST['Score1']);
 $Score 2 = mysql_real_escape_string($_POST['Score2']);
 $Score 3 = mysql_real_escape_string($_POST['Score3']);
 $Score 4 = mysql_real_escape_string($_POST['Score4']);
 $Score 5 = mysql_real_escape_string($_POST['Score5']));
 
 if(mysql_query("INSERT INTO Scores(Score1, Score2,score3,score4,score5) VALUES('$Score1','$Score2','$Score3','$Score4','$Score5')"))
 {
  ?>
        <script>alert('scores added');</script>
 echo "<script>window.location = 'https://teamprojectgroupi-elmobai.c9users.io/index.php';</script>";
        <?php
 }
 else
 {
  ?>
        <script>alert('error adding score try again.');</script>
 echo "<script>window.location = 'https://teamprojectgroupi-elmobai.c9users.io/index.php';</script>";
        <?php
 }
}
?>
 -->