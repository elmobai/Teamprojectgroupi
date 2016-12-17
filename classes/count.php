<?php if(isset($_SESSION['user'])=="")
	{
	 echo "<script>alert('You must log in first to continue!');</script>";
	 echo "<script>window.location = 'https://teamprojectgroupi-elmobai.c9users.io/login.php';</script>";
	}
	$db2 = Connect();
	$user = $_SESSION['user'];
	$sql = "SELECT id FROM scores WHERE user = '".$user."' ";
    if($result2 = $db2->query($sql)){
        $count = $result2->num_rows; //fetch ("$row ")
    	echo $count;
    }
?>