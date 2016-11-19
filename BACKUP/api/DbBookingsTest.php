<?php
header('Access-Control-Allow-Origin: *');
require_once 'config.php';

class DbBookingsTest{
    public function Connect(){
		$conn = mysqli_connect(dbhost, dbuser,dbpass, dbname);		
		if(!$conn){
			return false;
		}else{
			return $conn;
		}	
    }
    
    
    public function viewBookings(){
        $query = "SELECT DESCRIPTION, TYPE, ROOM FROM rooms";
        $con = $this->Connect();
        
        $result = mysqli_query($con, $query);
        
        if(mysqli_num_rows($result) > 0){
            $rows = array();
            while($row = mysqli_fetch_array($result,MYSQLI_ASSOC)){
                $rows[]= $row;
            }
 
            return $rows;
        }else{
            return false;
        }
    }
}
    ?>