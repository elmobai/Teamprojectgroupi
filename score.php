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
   <h1><?php echo $_SESSION['user']; ?>'s Profile</h1>
   
   <div id="my Stats" class="row">
   
    <!-- separate divs -->
    </p>
   
    <!-- statistics overview --> 
    <div id="graph" class="col-sm-4">

         <section class="login-register">
          <!-- <h1>Graph</h1></br> -->
          <ul class="list-group">
             <h1>Statistics Overview</h1></br>
             <p>Your results are listed below</p></br></br>
             
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
                ?></li></h4>
              <!-- <?php if($row = mysql_fetch_array("SELECT AVERAGE FROM scores WHERE user = '".$user."'")){?>-->
             <h4><li class="list-group-item">Average score: <?php echo $row['AVERAGE'];?> points</li></h4>
             
             <!--
             SELECT    score1,
                       score2,
                       score3,
                       score4,
                       score5,
                      (score1 + score2 +  score3 + score4 + score5 )   as ‘AVERAGE’
                      FROM scores
            -->
             <?php }?>
             <?php if($row = mysql_fetch_array("")){?>
             <h4><li class="list-group-item">Best game: 50 points</li></h4>
             <!--SELECT MAX( AVERAGE ) 
             FROM scores
                       
             -->
              <?php }?>
              <?php if($row = mysql_fetch_array("")){?>
             <h4><li class="list-group-item">Worst game: 5 point </li></h4>
             <!--
             SELECT MIN( AVERAGE ) 
             FROM scores
                -->
                    <?php }?>    
                    <?php if($row = mysql_fetch_array("")){?>
                    
             <h4><li class="list-group-item">Most recent game: 13/12/2016</li></h4>
              <?php }?><!-- TIMESTAMP WITH ADD DATETIME ECHO DATE TIME HERE (DATE_SUB)
              <?php if($row = mysql_fetch_array("")){?>
             <h4><li class="list-group-item">Most recent score: 13/12/2-16</li></h4>
                <?php }?>
           </ul>  
        </section>
      </diiv>
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
          <input type="number" class="required mdl-textfield__input form-control" name="score5" required=""  min="0" max="10" placeholder="Enter shot 5 (1-10)"/></br></br>
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
              $sql = "SELECT * from scores WHERE user = '$user_id'";
              $queryAdd = mysql_query($sql) or die(mysql_error());
         
          $res = json_decode($result, true);
          //foreach($res as $item); //foreach element in $arr
          while ($row = mysql_fetch_array($queryAdd)) {?>
          
               <ul class='list-group'>
                <li class='list-group-item'>
                        
                  <p name="id">id: <?php echo $row['id'];?> </p></br>
                  <h3>Round: <?php echo $row['round'];?> </h3></br>
                  <h4>Shot 1: <?php echo $row['score1'];?> </h4>
                  <h4>Shot 2: <?php echo $row['score2'];?>  </h4>
                  <h4>Shot 3: <?php echo $row['score3'];?>  </h4>
                  <h4>Shot 4: <?php echo $row['score4'];?>  </h4>
                  <h4>Shot 5: <?php echo $row['score5'];?>  </h4>
                  <h4>Total: <?php echo  ($row['score3']) + ($row['score2']) + ($row['score1']) + ($row['score4']) + ($row['score5']);?> </h4></br>
                  
                  <!--
                     add button to here
                  -->
                  <!-- delete scores -->
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
                      } else{
                        //pop for failed goes here
                      } 
                
                    ?>
                    
                <form method="post">
                  <input style="display:none;" name="id" type="number" min="1" placeholder="" value="<?php echo $row['id'];?>" required=""></p>
                  <input name="delete" class="btn btn-lg btn-danger btn-block" type="submit" id="btn-del-score" value="Delete id">
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