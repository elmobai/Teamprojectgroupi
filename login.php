<?php
include_once 'classes/dbconnect.php';
session_start();

if(isset($_SESSION['user'])!="")
{
 echo "<script>alert('You are already logged in');</script>";
 header( 'Location: index.php');
}

if(isset($_POST['btn-login']))
{
 $email = mysql_real_escape_string($_POST['email']);
 $password = mysql_real_escape_string($_POST['password']);
 $res=mysql_query("SELECT * FROM registered WHERE email='$email'");
 $row=mysql_fetch_array($res);
 
 if($row['password']==md5($password))
 {
  $_SESSION['user'] = $row['username'];
  $_SESSION['admin'] = "no";
  header( 'Location: score.php');
  echo "<script type='text/javascript'>alert('You have now logged-in.');</script>";
 }
 else
 {
  ?>
        <script>alert('Wrong details entered, please try again.');</script>
        <script>window.location = 'login.php';</script>;
        <?php
 }
}
?>

<?php include 'header.php';?>
  <div class="container"></br></br>
     <div class="row">
           
        <div class="col-sm-4"></div>
        
        <div class="col-sm-4">
          <section class="login-register">
            
            <!-- login form start -->
            <form id="loginform" class="form-signin" action="" method="post">
             
              <h1>Sign In</h1></br></br>
              <!-- <hr/> -->
            
              <!-- row 1 -->
              <!--<label for="username">Username/Email:</label><br/>-->
              <input type="email" name="email" class="required mdl-textfield__input form-control" required="" placeholder="Email" autofocus=""/></p>
              
              <!-- row 2 -->
              <!--<label for="password">Password:</label><br/>-->
              <input type="password" name="password" class="required mdl-textfield__input form-control" required=""placeholder="Password"/></br></br>
              
              <!-- row 3 -->
              <button type="submit" name="btn-login" class="btn btn-lg btn-success btn-block">Sign In</button></br></br>
              
              <!-- row 4 -->
              <label for="remember" class="mdl-checkbox mdl-js-checkbox mdl-js-ripple-effect">
                  <input type="checkbox" value="remember-me" id="remember" class="mdl-checkbox__input"><span class="mdl-checkbox__label">Stay Signed-In</span>
              </label></p>
              
              <!--<p><a href="forget.php" onclick="forget.php" id="forget">Forgot Password?</a></p>-->
              
            </form><!-- ./login form end -->
                <!-- <?php include 'extras.php' ?> -->
            </section><!-- section end--> 
        </div><!-- column end -->
        
        <div class="col-sm-4"></div>
    </div>
 </div>
    
   
  
  <!--Bottom Row DELETE IF NOT NEEDED-->
  <!--
  <div class="mdl-grid">
    <div class="mdl-cell mdl-cell--4-col"></div>
    <div class="mdl-cell mdl-cell--4-col mdl-shadow--2dp">
      <section class="login-register">
          <a href="loginadmin.php" class="mdl-button mdl-js-button mdl-button--raised mdl-button--light">Admin Login</a>
          <a href="register.php" class="mdl-button mdl-js-button mdl-button--raised mdl-button--light">Register</a>
      </section><!-- section end-->
    <!--</div><!-- column end -->
    <!--<div class="mdl-cell mdl-cell--4-col"></div>
  </div>-->
  
<?php include 'footer.php';?>