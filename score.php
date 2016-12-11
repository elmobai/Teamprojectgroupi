<?php include 'header.php'; ?>
<?php include_once 'scoring.php';?>
<?php include_once 'classes/dbconnect.php';?>

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
             
             <h4><li class="list-group-item">Games I've Played: 10</li></h4>
             <h4><li class="list-group-item">Average score: 9</li></h4>
             <h4><li class="list-group-item">Overall score: 190</li></h4>
             <h4><li class="list-group-item">Best game: 60</li></h4>
             <h4><li class="list-group-item">Worst game: 10</li></h4>
             <h4><li class="list-group-item">Most recent game: 01/12/2016</li></h4>
             <h4><li class="list-group-item">Most recent score: 10</li></h4>
 
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
          
          <!-- <label for="Score 1">Score 1:</label><br/> -->
          <input type="text" class="required mdl-textfield__input form-control" name="score1" required="" placeholder="Enter shot 1 (1-10)" autofocus=""/></p>
              
           <!-- <label for="Score 2">Score 2:</label> -->
           <input type="text" class="required mdl-textfield__input form-control" name="score2"  required="" placeholder="Enter shot 2 (1-10)"/></p>
    
           <!-- <label for="score 3">Score 3:</label> -->
           <input type="text" class="required mdl-textfield__input form-control" name="score3" required="" placeholder="Enter shot 3 (1-10)"/></p>
    
            <!-- <label for="score 4">Score 4:</label><br/> -->
            <input type="text" class="required mdl-textfield__input form-control" name="score4" required="" placeholder="Enter shot 4 (1-10)"/></p>
            
           <!-- <label for="score 5">Score 5:</label> -->
           <input type="text" class="required mdl-textfield__input form-control" name="score5" required="" placeholder="Enter shot 5 (1-10)"/></br></br>
           
            <button class="btn btn-lg btn-warning btn-block" name="btn-score" type="submit">Add scores</button></br>
        
        </form>
     </section>
    </div>
  
    <!-- separate divs -->
    </p>
    
    <div id="filterstat" class="col-sm-4">
      
      <section class="login-register">
      <h1>Filter Scores</h1></br>
       <p>You can sort your scores below</p></br></br>
        
       
           
        <?php
         $dbhost = 'localhost:3036';
         $dbuser = 'elmobai';
         $dbpass = '';
         $conn = mysql_connect($dbhost, $dbuser, $dbpass);
           
           if(! $conn ) {
              die('Could not connect: ' . mysql_error());
           }
           
           $sql = "SELECT id,score1,score2,score3,score4,score5 FROM scores WHERE user = '$user'";
           

           mysql_select_db('c9');
           $retval = mysql_query( $sql, $conn );
           
           if(! $retval ) {
              die('Could not get data: ' . mysql_error());
           }
           while($row = mysql_fetch_assoc($retval)) {
              echo 
                 "
                   <ul class='list-group'>
                    <li class='list-group-item'>
                      <h4> Round: x </h4><br>
                      Shot 1: {$row['score1']} <br>
                      Shot 2: {$row['score2']} <br>
                      Shot 3: {$row['score3']} <br>
                      Shot 4: {$row['score4']} <br>
                      Shot 5: {$row['score5']} <br>
                    </li>
                   </ul>
                 ";
           }?>  
           
      </section>
    </div>
    
    </div>
</div>

<?php include 'index.php'; ?>