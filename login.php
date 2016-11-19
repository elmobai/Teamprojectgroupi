<?php
session_start();

if(isset($_SESSION['user'])!="")
{
 echo "<script>alert('You are already logged in');</script>";
 header( 'Location: index.php');
}
include_once 'classes/dbconnect.php';

if(isset($_POST['btn-login']))
{
     $email = mysql_real_escape_string($_POST['email']);
     $password = mysql_real_escape_string($_POST['password']);
     $res = mysql_query("SELECT * FROM registered WHERE email='$email'");
     $row = mysql_fetch_array($res);
     
     if($row['password']==md5($password))
     {
          $_SESSION['user'] = $row['username'];
          $_SESSION['admin'] = "no";
          header('Location: index.php');
          echo "<script type='text/javascript'>alert('You have now logged-in.');</script>";
     }
     else
     {
      ?>
            <script>alert('Wrong details entered, please try again.');</script>
     echo "<script>window.location = 'login.php';</script>";
            <?php
     }
}
?>

<?php include 'header.php';?>
  <div class="mdl-grid">
    <div class="mdl-cell mdl-cell--4-col"></div>
    <div class="mdl-cell mdl-cell--4-col mdl-shadow--2dp">
      <section class="login-register">
        <!-- Login Section -->
        <h3>User Login</h3>
        <hr/>
        
        <!-- login form start -->
        <form id="loginform" action="" method="post">
          <!-- row 1 -->
          <label for="username">Username/Email:</label><br/>
          <input type="text" name="email" class="required" "mdl-textfield__input" placeholder="Email"/></p>
          
          <!-- row 2 -->
          <label for="password">Password:</label><br/>
          <input type="password" name="password" class="required" "mdl-textfield__input" placeholder="password" /></br></br>
          
          <!-- row 3 -->
          <button type="submit" name="btn-login" class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored">Login</button></br></br>
          
          <label for="remember" class="mdl-checkbox mdl-js-checkbox mdl-js-ripple-effect">
              <input type="checkbox" value="remember" id="remember" class="mdl-checkbox__input">
              <span class="mdl-checkbox__label">Stay logged-in</span>
          </label></p>
          
          <p><a href="forget.php" onclick="forget.php" id="forget">Forgot Password?</a></p>
          
        </form><!-- ./login form end -->
            <?php include 'extras.php' ?>
        </section><!-- section end--> 
    </div><!-- column end -->
   
  
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
  
<?php include 'footer.php'; ?>