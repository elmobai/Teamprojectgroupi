<?php 
include_once '../api/config.php';

function Connect(){
		$conn = mysqli_connect(dbhost, dbuser,dbpass, dbname);		
		if(!$conn){
			return false; 
		}else{
			return $conn;
		}	
    }
    
?>