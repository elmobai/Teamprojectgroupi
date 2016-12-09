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

<br/>

<div class="container">
  
   <div id="Welcome" class="row">
     <h1>Welcome to Archers logbook!</h1>
    <div id="About us" class="col-m-6">
            <h2>About us!</h2>
             <p1>Welcome to Archers logbook where you can log and track your scores!</p1>
            <h1>Club Directory</h1> </br>
            
            <a class ="Leinster clubs" href= "http://archery.ie/clubs/?province=leinster">• Leinster Clubs</a>
            
            </br></br>
            <a class ="Connacht Clubs" href= "http://archery.ie/clubs/?province=connacht">• Connacht Clubs</a>
            
            </br></br>
            <a class ="Munster clubs" href= "http://archery.ie/clubs/?province=munster">• Munster Clubs</a>
            
            </br></br>
            <a class ="Ulster clubs" href= "http://archery.ie/clubs/?province=ulster">• Ulster Clubs</a>
        </section>
    </div>
    
  </div>
</div>

<?php include 'footer.php'; ?>
