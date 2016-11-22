<?php 
if(isset($_SESSION['user'])=="")
{
 echo "<script>alert('Please log-in before viewing this page.');</script>";
 echo "<script>window.location = 'https://teamprojectgroupi-elmobai.c9users.io/login.php';</script>";
}?>


<div class="container">
  <h1>My Stats</h1>
  <div id="my Stats" class="row" style="height:80px">
    <div id="target" class="col-sm-4 light">
    
      <h3>Scores</h3>
      <p>Please enter score below</p>
      <form  method="post">
      <br>
      <label for="Score 1">Score1:</label><br/>
              <input type="text" name="score1" required="" placeholder="Enter Score1" /></br>
          
       <label for="Score 2">Score2:</label><br/>
              <input type="text" name="score2"  required="" placeholder="Enter Score2" />
       <div>
       <label for="score 3">Score3:</label><br/>
              <input type="text" name="score3" required="" placeholder="Enter Score3" />
        </div>
         <div>
        <label for="score 4">Score4:</label><br/>
        <input type="text" name="score4" required="" placeholder="Enter Score4" />
         </div>
          <div>
       <label for="score 5">Score5:</label><br/>
              <input type="text" name="score5" required="" placeholder="Enter Score5" /> 
           </div>
      </br>
        <button class="btn btn-success" name="btn-score" type="submit">Add Score</button>
        </form>
     
    </div>
  
    <div id="filterstat" class="col-sm-4 dark">
      <h3>Filter</h3>
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
    </div>
    
    <div id="graph" class="col-sm-4 light">
      <h3>Graph</h3> 
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
    <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...</p>
    </div>
    
  </div>
  
</div>

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