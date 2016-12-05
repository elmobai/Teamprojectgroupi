<?php include 'header.php'; ?>
<?php include_once 'scoring.php';?>
<?php include_once 'classes/dbconnect.php';?>

<?php 
if(isset($_SESSION['user'])=="")
{
 echo "<script>alert('Please log-in before viewing this page.');</script>";
 echo "<script>window.location = 'https://teamprojectgroupi-elmobai.c9users.io/login.php';</script>";
}?>

<div class="container">
  <h1>My Statistics</h1>
  <div id="my Stats" class="row">
    
    <!-- separate divs -->
    </p>
      
    <!-- Score -->  
    <!--<div id="target" class="col-sm-4 light"> -->
    <div id="target" class="col-sm-4"> 
    <section class="login-register">
      
      <form class="form-signin" method="post">
      
          <h1>Scores</h1></br>
          <p>Please enter your score below</p></br></br>
          
          <!-- <label for="Score 1">Score 1:</label><br/> -->
          <input type="text" class="required mdl-textfield__input form-control" name="score1" required="" placeholder="Enter score 1" autofocus=""/></p>
              
           <!-- <label for="Score 2">Score 2:</label> -->
           <input type="text" class="required mdl-textfield__input form-control" name="score2"  required="" placeholder="Enter score 2"/></p>
    
           <!-- <label for="score 3">Score 3:</label> -->
           <input type="text" class="required mdl-textfield__input form-control" name="score3" required="" placeholder="Enter score 3"/></p>
    
            <!-- <label for="score 4">Score 4:</label><br/> -->
            <input type="text" class="required mdl-textfield__input form-control" name="score4" required="" placeholder="Enter score 4"/></p>
            
           <!-- <label for="score 5">Score 5:</label> -->
           <input type="text" class="required mdl-textfield__input form-control" name="score5" required="" placeholder="Enter score 5"/></br></br>
           
            <button class="btn btn-lg btn-warning btn-block" name="btn-score" type="submit">Add scores</button></br>
        
        </form>
     </section>
    </div>
  
    <!-- separate divs -->
    </p>
    
    <div id="filterstat" class="col-sm-4">
      
      <section class="login-register">
      <h1>Filter</h1>
      <?php
	// Connect to database server
	
	// Select database
	mysql_select_db("c9") or die(mysql_error());
	// SQL query
	$strSQL = "SELECT AVG(AVERAGE) AS AVERAGE FROM scores";
	// Execute the query (the recordset $rs contains the result)
	$rs = mysql_query($strSQL);
	
	
	   // Write the value of the column AVERAGE
	  echo $row['AVERAGE'] .
	  
	// Close the database connection
	mysql_close();
?>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
      <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...</p>
      
      </section>
    </div>
    
    <!-- separate divs -->
    </p>
    
    <div id="graph" class="col-sm-4">

         <section class="login-register">
         <!-- <h1>Graph</h1></br> -->
            <h1>Results</h1></br>
            <p>Your results are listed below</p></br></br>
            
            <p>Games I've Played: 10</br></br>
            
            <p>My Average Score: 9</p>
            <p>My Overall Score: 190</br></br>
            
            <p>My best score: 1</p>
            <p>My worst score: 10</br></br>
            
            <p>My most recent game: 01/12/2016</p>
            <p>My most recent score: 10</p>
        </section>
    </diiv>
    
  </div>
  
          <!-- divs are overlapping -->
          <!--
          <div class="row" style="height:80px">
              <div id="target" class="col-sm-12"> 
                   include 'index.php'; ?>
             </div>
          </div>
          
          <div class="row" style="height:80px">
              <div id="target" class="col-sm-12"> 
                  include 'footer.php'; ?>
              </div>
          </div>
          
        </div>
        -->

        <!--
        <div class="container">
           <h1>Edit Stats</h1>
           <div id="editstats" class="row">
           <div class="col-sm-12 dark">
              <h3>Input Stats</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
              <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...</p>
            </div>
          </div>
        </div>
        -->
        
        <!--
        <div class="container">
           <h1>Edit Stats</h1>
           <div id="editstats" class="row">
              <div class="col-sm-12 dark">
                  <h3>Input Stats</h3>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
                  <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...</p>
            </div>
          </div>-->
  
    </div>
</div>

<?php include 'index.php'; ?>