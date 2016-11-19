<?php 
include_once '
Config.php';

function Connect(){
		$conn = mysqli_connect(dbhost, dbuser,dbpass, dbname);		
		if(!$conn){
			return false; 
		}else{
			return $conn;
		}	
    }
    
?>