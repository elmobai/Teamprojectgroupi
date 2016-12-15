<?php 
	include_once 'api/Config.php';
	include_once 'classes/dbconnect.php'; 
	$conn = mysqli_connect(dbhost, dbuser,dbpass, dbname);		
	if(!$conn){
		return false; 
	}else{
		return $conn;
	}	
	  
	    
	
	
	session_start();
	if(isset($_SESSION['user'])=="")
	{
	 echo "<script>alert('You must log in first to continue!');</script>";
	 echo "<script>window.location = 'https://teamprojectgroupi-elmobai.c9users.io/login.php';</script>";
	}
	$user = $_SESSION['user'];
	$sql = "SELECT id FROM scores WHERE user = '".$user."' ";
	$result = $conn->query($sql);
	$count = $result->num_rows;

?>