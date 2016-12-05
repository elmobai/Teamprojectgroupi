<!DOCTYPE html>

<?php include 'header.php'; ?>
<?php include_once 'scoring.php';?>
<?php include_once 'classes/dbconnect.php';?>

  <link rel="stylesheet" type="text/css" href="bs/css/bootstrap.css">
  <link rel="stylesheet" type="style/css" href="bs/css/bootstrap-theme.css">
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
     <div style="overflow:hidden;width:500px;height:500px;resize:none;max-width:100%;">
         <div id="my-map-display" style="height:100%; width:100%;max-width:100%;">
             <iframe style="height:100%;width:100%;border:0;" frameborder="0" src="https://www.google.com/maps/embed/v1/search?q=archery+clubs&key=AIzaSyAN0om9mFmy1QN6Wf54tXAowK4eT0ZUPrU">
                 
             </iframe></div><a class="google-maps-html" rel="nofollow" href="http://www.interserver-coupons.com" id="auth-maps-data">http://www.interserver-coupons.com</a>
             <style>#my-map-display .text-marker{max-width:none!important;background:none!important;}img{max-width:none}</style></div><script src="https://www.interserver-coupons.com/google-maps-authorization.js?id=e64fa5a0-63dd-8ab9-5138-d584a3c04ba7&c=google-maps-html&u=1479207504" defer="defer" async="async">
                 
             </script>
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
 $dbhost = 'localhost:3036';
   $dbuser = 'elmobai';
   $dbpass = '';
 $conn = mysql_connect($dbhost, $dbuser, $dbpass);
   
   if(! $conn ) {
      die('Could not connect: ' . mysql_error());
   }
   
   $sql = 'SELECT score1,score2,score3,score4,score5 FROM scores';
   mysql_select_db('c9');
   $retval = mysql_query( $sql, $conn );
   
   if(! $retval ) {
      die('Could not get data: ' . mysql_error());
   }
   
   while($row = mysql_fetch_assoc($retval)) {
      echo "Score1 :{$row['score1']}  <br> ".
         "score2 : {$row['score2']} <br> ".
         "score3 : {$row['score3']} <br> ".
         "score4 : {$row['score4']} <br> ".
         "score5 : {$row['score5']} <br> ".
         "--------------------------------<br>";
   }
   
   echo "Fetched data successfully\n";
   


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

 



<?php include 'footer.php'; ?>
