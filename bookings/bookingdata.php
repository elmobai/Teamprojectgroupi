<?php
/*include "classes/dbconnect.php";
function update_db($name, $time,$date, $room){
   $conn = new projects('mysql:host=locahost; dbname=projects');
   $stmt = $conn->prepare("UPDATE table ");
   $stmt->execute(array($name, $time, $date,$room));

  if($stmt->rowCount() > 0){
     return 'Updated';}
  else {
     return 'Something is wrong';
    }
 }

?>