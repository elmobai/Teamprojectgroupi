

<?php

include_once '../classes/dbconnect2.php';

session_start();
if(isset($_SESSION['user'])=="")
{
 echo "<script>alert('You must log in first to continue!');</script>";
 echo "<script>window.location = 'https://teamprojectgroupi-elmobai.c9users.io/login.php';</script>";
}

if(isset($_POST['btn-addbooking']))
{
  $db = Connect();
  $room = mysqli_real_escape_string($db, $_POST['room']);
  $capacity = mysqli_real_escape_string($db, $_POST['capacity']);
  $requirements = mysqli_real_escape_string($db, $_POST['requirements']);
  $date = mysqli_real_escape_string($db, $_POST['date']);
  $time = mysqli_real_escape_string($db, $_POST['time']);
  $user = mysqli_real_escape_string($db, $_SESSION['user']);
  $sql = "INSERT INTO bookings(ROOM ,REQUIREMENTS, DATE, TIME, CAPACITY, USER) VALUES('".$room."','".$requirements."','".$date."','".$time."','".$capacity."','".$user."')";
  $result = $db->query($sql);
  
  if ($result){
   //message
     "<script>alert('Success.');</script>";
  } else {
   //message
   echo mysqli_error($db);
  }
  $db->close();
   echo "<script>window.location = 'https://teamprojectgroupi-elmobai.c9users.io/login.php';</script>";
}
?>




  <div class="mdl-grid">
    <div class="mdl-cell mdl-cell--6-col">
    
    <p> Please choose a room and seats required:</p>
            
    <form id="bookingForm" action="addBooking.php" method="post"> 
       <div class="mdl-grid">
          <div class="mdl-cell mdl-cell--6-col">
            <label for="room">Room:</label></br>
            
           <select id="roomList" name="room" autofocus required="" onchange="document.getElementById('roomImage').src = ('../images/rooms/'+this.value+'.jpg')">
              <option value="select_room">Select a room</option>
              <option value="SCR3">SCR3</option>
              <option value="3.02">3.02</option>
              <option value="3.03">3.03</option>
              <option value="3.04">3.04</option>
              <option value="Theatre3">Theatre 3</option>
            </select>
            
          </div>
          
          <div class="mdl-cell mdl-cell--6-col">
            <label for="capacity">Seats Required:</label></br>
            <input name="capacity" width="20%"  type="number" default value="1" min="1" max="100" maxlength="3" required=""/></p>
          </div>
          
          </div><!-- row end -->
          
        <!-- row start -->  
       <div class="mdl-grid">
          <div class="mdl-cell mdl-cell--6-col">
          <label for="date">Date Chosen:</label><br/>
            <input name="date"readonly required="" value="{{date | date:'yyyy/MM/dd'}}" />
          </br>
          </div>
          <div class="mdl-cell mdl-cell--6-col">
          <label for="time">Time Chosen:</label><br/>
             <input name="time" readonly required="" value="{{date | date:'HH:mm'}}" />
          </p></br>
          </div>
          
        </div><!-- row end -->
          
         <!-- row start -->
         <div class="mdl-grid">
          <div class="mdl-cell mdl-cell--12-col">
          <label for="requirements">Additional Details:</label></br>
          <textarea name="requirements" placeholder="eg. Wheelchair accessibility" rows="6" cols="50" maxlength="150"/></textarea></p>
          <!-- rows="6" cols="32" maxlength="150"/></textarea></p> -->
          </div>
          
        </div><!-- row end --><p>To finish the booking process, please click the 'complete' button below:</p>
        <input type="submit" form="bookingForm" id="btn-addbooking" name="btn-addbooking" value="Complete" class="hidden"/>
          <!-- <a href="https://https://teamprojectgroupi-elmobai.c9users.io/room.php" class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored">Add a New Room</a> -->
        </form>

      </div>
        
    <div class="mdl-cell mdl-cell--6-col">
      <div class="room">
        
          
          <img class="photo" id="roomImage" src="../images/rooms/select_room_2.png" alt="Please contact a system administrator if you see this"/>
          
        
      </div>
    </div>
