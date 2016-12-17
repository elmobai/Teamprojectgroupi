<?php include 'header.php'; ?>
<?php include_once 'scoring.php';?>
<?php include_once 'classes/dbconnect.php';?>
<?php include_once 'api/DbBookings.php';?>



<?php 
if(isset($_SESSION['user'])=="")
{
 echo "<script>alert('Please log-in before viewing this page.');</script>";
 echo "<script>window.location = 'https://teamprojectgroupi-elmobai.c9users.io/login.php';</script>";
}?>
 
</br>
 
<div class="container">
    
    <!--welcome-->
    <h1><?php 
              if(isset($_SESSION['user'])!=""){ 
                ?>
              
                  Welcome <?php if(isset($_SESSION['user'])=="")
                    	{
                    	 echo "<script>alert('You must log in first to continue!');</script>";
                    	 echo "<script>window.location = 'https://teamprojectgroupi-elmobai.c9users.io/login.php';</script>";
                    	}
                    	$db2 = Connect();
                    	$user = $_SESSION['user'];
                    	$sql44 = "SELECT firstname FROM registered WHERE email = '".$user."' ";
                         if ($result23 = $db2->query($sql44)){
                            if($row3 = $result23->fetch_assoc()){
                                $firstname2 = $row3['firstname']; //fetch ("$row ")
                            	echo $firstname2;
                            }?>!</font></strong>
                        <?php }
              } ?></h1>
   
   <!-- row of 3 columns -->
   <div class="row">
   
    <!-- separate divs -->
    </p>
   
    <!-- statistics overview col --> 
    <div class="col-sm-4">

         <section class="login-register">
          <ul class="list-group">
            <h1>Statistics Overview</h1></br>
            <p>Your results are listed below</p></br></br>
             
            <!--games i've played-->
            <h4><li class="list-group-item">Games I've Played: 
                 
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
            </li></h4>
              
             <!--average score--> 
             <h4><li class="list-group-item">Average Score: 0
                 
                 <!--?php if(isset($_SESSION['user'])=="")
                	{
                	 echo "<script>alert('You must log in first to continue!');</script>";
                	 echo "<script>window.location = 'https://teamprojectgroupi-elmobai.c9users.io/login.php';</script>";
                	}
                	$db3 = Connect();
                	$user = $_SESSION['user'];
                	$sql = "SELECT avg FROM scores WHERE user = '".$user."' ";
                    if($resultA = $db3->query($sql)){
                        $avg = $resultA->num_rows;  //fetch ("$row ")
                    	echo $avg;
                    }
                ?-->
            </li></h4>
             
             <!--<h4><li class="list-group-item">Average score: 0</li></h4>-->
             <!--?php echo $row['avg'];?>-->
                 
                 <!-- <!-?php if($row = mysql_fetch_array("SELECT AVERAGE FROM scores WHERE user = '".$user."'")){?>-->
                 
             <!--best game-->
             <h4><li class="list-group-item">Best game: 0</li></h4>
              
             <!--worst game--> 
             <h4><li class="list-group-item">Worst game: 0</li></h4>
              
             <!--most recent game-->       
             <h4><li class="list-group-item">Most recent game: 0</li></h4>
                <!-- TIMESTAMP WITH ADD DATETIME ECHO DATE TIME HERE (DATE_SUB)-->
                <?php $result = mysql_query('SELECT date FROM scores');
                        $row_first = mysql_fetch_array($result);
                        mysql_data_seek($result , (mysql_num_rows($result)-1));
                        $row_last =  mysql_fetch_array($result);?>
                
              
             
             
           </ul>  
        </section>
        
    </div>
      
    <!-- separate divs -->
    </p>
    
    <!-- add score -->  
    <div id="target" class="col-sm-4"> 
    <section class="login-register">
      
      <form class="form-signin" method="post">
      
          <h1>Add Scores</h1></br>
          <p>Please enter your score below</p></br></br>
          
          <input type="number" class="required mdl-textfield__input form-control" name="round" required="" min="1" placeholder="Enter round number" autofocus=""/></p>
          <input type="number" class="required mdl-textfield__input form-control" name="score1" required="" min="0" max="10" placeholder="Enter shot 1 (1-10)"/></p>
          <input type="number" class="required mdl-textfield__input form-control" name="score2"  required="" min="0" max="10" placeholder="Enter shot 2 (1-10)"/></p>
          <input type="number" class="required mdl-textfield__input form-control" name="score3" required=""  min="0" max="10" placeholder="Enter shot 3 (1-10)"/></p>
          <input type="number" class="required mdl-textfield__input form-control" name="score4" required=""  min="0" max="10" placeholder="Enter shot 4 (1-10)"/></p>
          <input type="number" class="required mdl-textfield__input form-control" name="score5" required=""  min="0" max="10" placeholder="Enter shot 5 (1-10)"/></p>
          <input type = "date" class="data-sort-initial required mdl-textfield__input form-control" name="date" placeholder="date"/></br></br>
          <button class="btn btn-lg btn-warning btn-block" name="btn-add-score" type="submit">Add scores</button></br>
        
        </form>
     </section>
    </div>
  
    <!-- separate divs -->
    </p>
   
    <!-- edit scores-->
    <div id="filterstat" class="col-sm-4">
      <section class="login-register">
      <h1>Edit Scores</h1></br>
       <p>You can edit your scores below</p></br></br>
        
       <?php
              $user_id = $_SESSION['user'];
              $sql = "SELECT * from scores WHERE user = '$user_id' ORDER BY round";
              $queryAdd = mysql_query($sql) or die(mysql_error());
         
              //$res = json_decode($result, true);
              //foreach($res as $item); //foreach element in $arr
              while ($row = mysql_fetch_array($queryAdd)) {?>
          
               <ul class='list-group'>
                <li class='list-group-item'>
                        
                  <!--<p name="id">id: <?php echo $row['id'];?> </p></br>-->
                  <h3>Round <?php echo $row['round'];?> </h3></br>
                  <h4>Shot 1: <?php echo $row['score1'];?> </h4>
                  <h4>Shot 2: <?php echo $row['score2'];?>  </h4>
                  <h4>Shot 3: <?php echo $row['score3'];?>  </h4>
                  <h4>Shot 4: <?php echo $row['score4'];?>  </h4>
                  <h4>Shot 5: <?php echo $row['score5'];?>  </h4></br>
              <!--<h4>Total: <?php echo  ($row['score1']) + ($row['score2']) + ($row['score3']) + ($row['score4']) + ($row['score5']);?> </h4>-->
                  <h4>Total: <?php echo $row['total'];?>  </h4>
                  <h4>Average: <?php echo $row['avg'];?>  </h4>
                  <h4>Date: <?php echo $row['date'];?>  </h4>
                  </br>
                  
                  
                    
                <form action="delete.php" method="post">
                  <input style="display:none;" name="id" type="number" min="1" placeholder="" value="<?php echo $row['id'];?>" required=""></p>
                  <input name="delete" class="btn btn-lg btn-danger btn-block" type="submit" id="btn-del-score" value="Delete">
                </form>
                 
                  </br>
                </li>
               </ul>
             <?php } ?>  
                
      </section>
    </div>
    
    </div>
</div>

<?php include 'index.php'; ?>