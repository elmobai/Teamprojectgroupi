<?php include 'header.php'; ?>
<?php include_once 'scoring.php';?>
<?php include_once 'classes/dbconnect.php';?>

<div class="container">
    <div class="row">
      <div class="col-sm-4">
        <div class="jumbotron">
          <a href="index.html">
            <img src="dog.jpg" alt="Dublin Dog Homes" style="width:100px;height:100px;">
          </a>
          <h3 id="find">Find a Home</h3>
          <h3 id="register">Register Your Home</h3>
        </div>
      </div>
      <div class="col-sm-8">
        <div class="jumbotron">
          <h2>Welcome to Dublin Dog Homes!</h2>
          <p>Here you can find a home for a dog or register your home to adopt a dog :)</p>
        </div>
      </div>
    </div>
    
    <div class="row">
      <div class="col-sm-12">
        <div id="action">
          <p>When you click 'Find a Home' you will be able to see all the homes waiting to adopt a dog.</p>
          <p>When you click 'Register Your Home' you will be able to register your home to adopt a dog.</p>
        </div>
      </div>
    </div>   
</div>

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
                  $user_id = $_SESSION['user'];
                  $sql = "SELECT * from scores WHERE score1,score2,score3,score4,score5 = '$score1,$score2,$score3,$score4,$score5'";
                  $query = mysql_query($sql) or die(mysql_error());
              ?>
        
              <?php 
              $res = json_decode($result, true);
              foreach($res as $item); //foreach element in $arr
              while ($row = mysql_fetch_array($query)) {?>
              
              <tr>
                <td ><?php echo $score1['score1'];?></td>
                <td ><?php echo $score2['score2'];?></td>
                <td ><?php echo $score3['score3'];?></td>
                <td ><?php echo $score4['score4'];?></td>
                <td ><?php echo $score5['score5'];?></td> 
              </tr>
              
                <?php } ?>
       </div>
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

<div class="container">
  <h1>My Stats</h1>
  <div id="my Stats" class="row" style="height:80px">
    <div id="target" class="col-sm-4 light">
    
      <h3>Scores</h3>
      <p>Please enter score below</p>
      <form  method="post">
      <br>
      <label for="Score 1">Score 1:</label><br/>
              <input type="text" name="score1" required="" placeholder="Enter Score 1" /></br>
          
       <label for="Score 2">Score 2:</label><br/>
              <input type="text" name="score2"  required="" placeholder="Enter Score 2" />
       <div>
       <label for="score 3">Score3:</label><br/>
              <input type="text" name="score3" required="" placeholder="Enter Score 3" />
        </div>
         <div>
        <label for="score 4">Score 4:</label><br/>
        <input type="text" name="score4" required="" placeholder="Enter Score 4" />
         </div>
          <div>
       <label for="score 5">Score 5:</label><br/>
              <input type="text" name="score5" required="" placeholder="Enter Score 5" /> 
           </div>
      </br>
        <button class="btn btn-success" name="btn-score" type="submit">Add Score</button>
        </form>
     
    </div>
  
    <div id="filterstat" class="col-sm-4 dark">
      <h3>Average score overall</h3>
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

<?php include 'footer.php'; ?>