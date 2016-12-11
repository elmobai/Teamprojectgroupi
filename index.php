<!DOCTYPE html>

<?php include 'header.php'; ?>
<?php include_once 'classes/dbconnect.php';?>

  <link rel="stylesheet" type="text/css" href="bs/css/bootstrap.css">
  <link rel="stylesheet" type="style/css" href="bs/css/bootstrap-theme.css">
  <link rel="stylesheet" type="text/css" href="style.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
  <script src="js/action.js"></script>

<br/>

<div class="container">
    <!-- index intro -->
    <!--
    <div class="row">
        <div class="col-sm-12">
          <h1>Welcome to Archers Logbook</h1>
          <h1><small>Shoot for the stars!</small></h1>
        </div>
    </div>
    -->
    
    <!-- separate divs -->
    </p>
  
   <!-- index content -->
  <div id="clubs" class="row">
    <!-- nearby clubs -->
      <div id="map" class="col-sm-4">
            <h1>Nearby Clubs</h1>
             <div style="overflow:hidden;width:500px;height:500px;resize:none;max-width:100%;">
                 <div id="my-map-display" style="height:100%; width:100%;max-width:100%;">
                 <iframe style="height:100%;width:100%;border:0;" frameborder="0" src="https://www.google.com/maps/embed/v1/search?q=archery+clubs&key=AIzaSyAN0om9mFmy1QN6Wf54tXAowK4eT0ZUPrU">
                 </iframe></div><a class="google-maps-html" rel="nofollow" href="http://www.interserver-coupons.com" id="auth-maps-data">http://www.interserver-coupons.com</a>
             <style>#my-map-display .text-marker{max-width:none!important;background:none!important;}img{max-width:none}</style>
             </div>
             <script src="https://www.interserver-coupons.com/google-maps-authorization.js?id=e64fa5a0-63dd-8ab9-5138-d584a3c04ba7&c=google-maps-html&u=1479207504" defer="defer" async="async"></script>
        </div>
    
    <!-- separate divs -->
    </p>
 
    <!-- latest news -->
    <div id="filterclub" class="col-sm-4">
      <h1>Latest News</h1><br/>
      <div>
         <a class="twitter-timeline" data-width="310" data-height="510" href="https://twitter.com/ArcheryIreland">Tweets by ArcheryIreland</a> <script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>
      </div>
    </div>
    
    <!-- separate divs -->
    </p>
    
    <!-- Club Directory -->
    <div id="results" class="col-sm-4">
      <h1>Club Directory</h1> </br>
        <section class="login-register">
            
            <p>Click one of the links below to redirect to club directories</p></br>
            <div class="list-group">
                
                <a href= "http://archery.ie/clubs/?province=leinster" class="list-group-item">Leinster Clubs</a>
                
                </br>
                <a href= "http://archery.ie/clubs/?province=connacht" class="list-group-item">Connacht Clubs</a>
                
                </br>
                <a href= "http://archery.ie/clubs/?province=munster" class="list-group-item">Munster Clubs</a>
                
                </br>
                <a href= "http://archery.ie/clubs/?province=ulster" class="list-group-item">Ulster Clubs</a>
                
            </div>
            
        </section>
    </div>
    
  </div>
</div>

<?php include 'footer.php'; ?>
