<?php
require_once 'Config.php';

class DbRooms{
    public function Connect(){
		$conn = mysqli_connect(dbhost, dbuser,dbpass, dbname);		
		if(!$conn){
			return false;
		}else{
			return $conn;
		}	
    }
    
    
    public function viewRooms(){
        $query = "SELECT DESCRIPTION, TYPE, ROOM, CAPACITY FROM rooms";
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

class DbBookings{
    public function Connect(){
		$conn = mysqli_connect(dbhost, dbuser,dbpass, dbname);		
		if(!$conn){
			return false;
		}else{
			return $conn;
		}	
    }

    public function viewBookings(){
        $query = "SELECT ROOM, CAPACITY, DATE, TIME FROM bookings";
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
    
    public function viewBookingsAdmin(){
        $query = "SELECT ROOM, CAPACITY, DATE, TIME, USER FROM bookings";
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

class DbRegistered{
    public function Connect(){
		$conn = mysqli_connect(dbhost, dbuser,dbpass, dbname);		
		if(!$conn){
			return false;
		}else{
			return $conn;
		}	
    }
    public function viewRegistered(){
        $query = "SELECT firstname, lastname, username, email FROM registered";
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
    