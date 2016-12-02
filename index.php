<!DOCTYPE html>

<?php include 'header.php'; ?>
<?php include_once 'scoring.php';?>
<?php include_once 'classes/dbconnect.php';?>

  <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
  <link rel="stylesheet" type="style/css" href="css/bootstrap-theme.css">
  <link rel="stylesheet" type="text/css" href="style.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
  <script src="js/action.js"></script>

<!-- <div class="container">
    <div class="row">
      <div class="col-sm-12">
          <!--<h3 id="find">Login</h3>
          <h3 id="register">Register</h3>-->
      <!--  </div>

    <div class="row">
      <div class="col-sm-12">
        <div id="action">
          <p>Placeholder</p>
        </div>
      </div>
    </div>   
</div> -->


<div class="container">
  <h1>Clubs</h1>
  <div id="clubs" class="row">
    <div id="map" class="col-sm-4">
     <div style="overflow:hidden;width:500px;height:500px;resize:none;max-width:100%;"><div id="my-map-display" style="height:100%; width:100%;max-width:100%;"><iframe style="height:100%;width:100%;border:0;" frameborder="0" src="https://www.google.com/maps/embed/v1/search?q=archery+clubs&key=AIzaSyAN0om9mFmy1QN6Wf54tXAowK4eT0ZUPrU"></iframe></div><a class="google-maps-html" rel="nofollow" href="http://www.interserver-coupons.com" id="auth-maps-data">http://www.interserver-coupons.com</a><style>#my-map-display .text-marker{max-width:none!important;background:none!important;}img{max-width:none}</style></div><script src="https://www.interserver-coupons.com/google-maps-authorization.js?id=e64fa5a0-63dd-8ab9-5138-d584a3c04ba7&c=google-maps-html&u=1479207504" defer="defer" async="async"></script>
    </div>
 
    <div id="filterclub" class="col-sm-4">
      <h3>Archery Ireland</h3>
      <div>
         <a class="twitter-timeline" data-width="320" data-height="420" href="https://twitter.com/ArcheryIreland">Tweets by ArcheryIreland</a> <script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>
      </div>
    </div>
    
    <div id="results" class="col-sm-4">
      <h3>Results </h3> 
 <?php
 include_once 'classes/dbconnect.php';
    $sql = ("SELECT score1,score2,score3,score4,score5 FROM scores");
    
    
    if ($result->num_rows > 0) {
         // output data of each row
         while($row = $result->fetch_assoc()) {
             echo "<br> score: ". $row["score1"]. " - Score: ". $row["score2"]. " " . $row["score3"]. $row["score4"]. " " . $row["score5"].   "<br>";
         }
    } else {
         echo "0 results";
    }


?>  
              
              
    <h4>Clubs: </h4> 
    
    <a class ="Leinster clubs" href= "http://archery.ie/clubs/?province=leinster">•Leinster Clubs</a>
    
    </br></br>
    <a class ="Connacht Clubs" href= "http://archery.ie/clubs/?province=connacht">•Connacht Clubs</a>
    
    </br></br>
    <a class ="Munster clubs" href= "http://archery.ie/clubs/?province=munster">•Munster Clubs</a>
    
    </br></br>
    <a class ="Ulster clubs" href= "http://archery.ie/clubs/?province=ulster">•Ulster Clubs</a>
    </div>
    
  </div>
</div>

 

<div class="container">
  <h1>My Statistics</h1>
  <div id="my Stats" class="row" style="height:80px">
      
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
           
            <button class="btn btn-lg btn-success btn-block" name="btn-score" type="submit">Add scores</button></br>
        
        </form>
     </section>
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
  </div>
</div>
-->
<?php include 'footer.php'; ?>
