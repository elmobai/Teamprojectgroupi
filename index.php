<?php include 'header.php'; ?>
<?php include_once 'scoring.php';?>
<div class="container">
  <h1>Clubs</h1>
  <div id="clubs" class="row">
    <div id="map" class="col-sm-4 dark">
     <div style="overflow:hidden;width:500px;height:500px;resize:none;max-width:100%;"><div id="my-map-display" style="height:100%; width:100%;max-width:100%;"><iframe style="height:100%;width:100%;border:0;" frameborder="0" src="https://www.google.com/maps/embed/v1/search?q=archery+clubs&key=AIzaSyAN0om9mFmy1QN6Wf54tXAowK4eT0ZUPrU"></iframe></div><a class="google-maps-html" rel="nofollow" href="http://www.interserver-coupons.com" id="auth-maps-data">http://www.interserver-coupons.com</a><style>#my-map-display .text-marker{max-width:none!important;background:none!important;}img{max-width:none}</style></div><script src="https://www.interserver-coupons.com/google-maps-authorization.js?id=e64fa5a0-63dd-8ab9-5138-d584a3c04ba7&c=google-maps-html&u=1479207504" defer="defer" async="async"></script>
    </div>
 
    <div id="filterclub" class="col-sm-4 light">
      <h3>Archery Ireland</h3>
      <div>
         <a class="twitter-timeline" data-width="320" data-height="420" href="https://twitter.com/ArcheryIreland">Tweets by ArcheryIreland</a> <script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>
      </div>
    </div>
    
    <div id="results" class="col-sm-4 dark">
      <h3>Results </h3> 
    <a class ="results" href= "http://archery.ie/wicklow-indoor-open-championships/">•2016 results</a>
    </br></br>
    <a class ="results" href= "http://archery.ie/wicgit klow-indoor-open-championships/">•2015 results</a>
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