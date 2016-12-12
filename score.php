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
    
    <div id="graph" class="col-sm-4">

         <section class="login-register">
          <!-- <h1>Graph</h1></br> -->
          <ul class="list-group">
             <h1>Statistics Overview</h1></br>
             <p>Your results are listed below</p></br></br>
             
             <h4><li class="list-group-item">Games I've Played: x</li></h4>
             <h4><li class="list-group-item">Average score: 
             
             </li>
             
             <h4><li class="list-group-item">Overall score: x</li></h4>
             SELECT    score1,
                       score2,
                       score3,
                       score4,
                       score5,
                      (score1 + score2 +  score3 + score4 + score5 )   as ‘AVERAGE’
                      FROM scores

             <h4><li class="list-group-item">Best game: x</li></h4>
             SELECT MAX( AVERAGE ) 
             FROM scores
                       
             
             <h4><li class="list-group-item">Worst game: x</li></h4>
             SELECT MIN( AVERAGE ) 
             FROM scores

                       
             <h4><li class="list-group-item">Most recent game: date</li></h4>
             
             <h4><li class="list-group-item">Most recent score: date</li></h4>
 
           </ul>  
        </section>
      </diiv>
    </div>
      
    <!-- separate divs -->
    </p>
      
    <!-- Score -->  
    <!--<div id="target" class="col-sm-4 light"> -->
    <div id="target" class="col-sm-4"> 
    <section class="login-register">
      
      <form class="form-signin" method="post">
      
          <h1>Add Scores</h1></br>
          <p>Please enter your score below</p></br></br>
          
          <input type="number" class="required mdl-textfield__input form-control" name="round" required="" min="1" placeholder="Enter round number" autofocus=""/></p>
          
          <!-- <label for="Score 1">Score 1:</label><br/> -->
          <input type="number" class="required mdl-textfield__input form-control" name="score1" required="" min="0" max="10" placeholder="Enter shot 1 (1-10)"/></p>
              
           <!-- <label for="Score 2">Score 2:</label> -->
           <input type="number" class="required mdl-textfield__input form-control" name="score2"  required="" min="0" max="10" placeholder="Enter shot 2 (1-10)"/></p>
    
           <!-- <label for="score 3">Score 3:</label> -->
           <input type="number" class="required mdl-textfield__input form-control" name="score3" required=""  min="0" max="10" placeholder="Enter shot 3 (1-10)"/></p>
    
            <!-- <label for="score 4">Score 4:</label><br/> -->
            <input type="number" class="required mdl-textfield__input form-control" name="score4" required=""  min="0" max="10" placeholder="Enter shot 4 (1-10)"/></p>
            
           <!-- <label for="score 5">Score 5:</label> -->
           <input type="number" class="required mdl-textfield__input form-control" name="score5" required=""  min="0" max="10" placeholder="Enter shot 5 (1-10)"/></br></br>
           
           <button class="btn btn-lg btn-warning btn-block" name="btn-add-score" type="submit">Add scores</button></br>
        
        </form>
     </section>
    </div>
  
    <!-- separate divs -->
    </p>
    
    <div id="filterstat" class="col-sm-4">
      
      <section class="login-register">
      <h1>Edit Scores</h1></br>
       <p>You can edit your scores below</p></br></br>
        
       <?php
                  $user_id = $_SESSION['user'];
                  $sql = "SELECT * from scores WHERE user = '$user_id'";
                  $query = mysql_query($sql) or die(mysql_error());
              ?>
        
              <?php 
              $res = json_decode($result, true);
              //foreach($res as $item); //foreach element in $arr
              while ($row = mysql_fetch_array($query)) {?>
              
               
                   <ul class='list-group'>
                    <li class='list-group-item'>
                     
                      <h3>Shot: <?php echo $row['round'];?> </h3></br>
                      <h4>Shot 1: <?php echo $row['score1'];?> </h4>
                      <h4>Shot 2: <?php echo $row['score2'];?>  </h4>
                      <h4>Shot 3: <?php echo $row['score3'];?>  </h4>
                      <h4>Shot 4: <?php echo $row['score4'];?>  </h4>
                      <h4>Shot 5: <?php echo $row['score5'];?>  </h4></br>
                      
                      <button class="btn btn-lg btn-danger btn-block" name="btn-del-score" type="submit">Delete round</button></br>
                    </li>
                   </ul>
                   
             
          <?php } ?>
       
      </section>
    </div>
    
    </div>
</div>

<?php include 'index.php'; ?>