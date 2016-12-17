<!-- delete scores/delete button -->
<?php
  mysql_connect("localhost", "elmobai", "") 
  or die("Connection Failed"); 
  mysql_select_db("c9")
  or die("Connection Failed"); 
  
  $id = $_POST['id']; 
  $query = "DELETE from scores WHERE id = '".$id."' "; 
  if(mysql_query($query)){ 
    //pop up for suc
    //on ok refresh (google it nig)
    echo '<script>alert("Scores deleted successfully!");
     window.location = "https://teamprojectgroupi-elmobai.c9users.io/score.php";</script>';
  } else{
    //pop for failed goes here
    echo '<script>alert("Error deleting scores, please try again!");
     window.location = "https://teamprojectgroupi-elmobai.c9users.io/score.php";</script>';
  } 

?>