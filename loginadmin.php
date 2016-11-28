
<?php
include_once 'classes/dbconnect.php';
session_start();

if(isset($_SESSION['user'])!="")
{
 echo "<script>alert('You are already logged in');</script>";
 echo "<script>window.location = 'index.php';</script>";
}
if(isset($_POST['btn-login']))
{
    
 $email = mysql_real_escape_string($_POST['email']);
 $password = mysql_real_escape_string($_POST['password']);
 $res=mysql_query("SELECT * FROM admin WHERE email='$email'");
 $row=mysql_fetch_array($res);
 if($row['password']==md5($password))
 {
  $_SESSION['user'] = $row['username'];
  $_SESSION['admin'] = "yes";
  header( 'Location: admin/roommanager.php');
  echo "<script type='text/javascript'>alert('You have now logged-in.');</script>";
 }
 else
 {
  ?>
        <script>alert('Wrong details entered, please try again.');</script>
        <script>window.location = 'https://teamprojectgroupi-elmobai.c9users.io/loginadmin.php';</script>;
        <?php
 }
 
}
?>
<?php include 'header.php';?>
  <div class="mdl-grid">
    <div class="mdl-cell mdl-cell--4-col"></div>
    <div class="mdl-cell mdl-cell--4-col mdl-shadow--2dp">
      <section class="login-register">
        <h3>Admin Login</h3>
        <hr/>
        <!-- login form start -->
        <form id="loginform" action="" method="post">
          
          <label for="username">Username/Email:</label><br/>
          <input type="text" name="email" class="required" "mdl-textfield__input" placeholder="Email" /></p>
          
          <label for="password">Password:</label><br/>
          <input type="password" name="password" class="required" placeholder="Password" /></br></br>
          
          <button type="submit" name="btn-login" class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored">Admin Login</button><br/><br/>
          
       <!-- <label for="remember" class="mdl-checkbox mdl-js-checkbox mdl-js-ripple-effect">
              <input type="checkbox" value="remember" id="remember" class="mdl-checkbox__input">
              <span class="mdl-checkbox__label">Stay logged-in</span>
        </label></p>
          
          <p><a href="forget.php" onclick="forget.php" id="forget">Forgot Password?</a></p>-->
          
        </form><!-- ./login form end -->
        <!--
        <?php include 'extras.php' ?>
        -->
      </section><!-- section end-->
    </div><!-- column end -->
    
    <!--
    <div class="mdl-cell mdl-cell--4-col">
         <section class="login-register">
             <a href="login.php" class="mdl-button mdl-js-button mdl-button--raised mdl-button--light">User Login</a></p>
             <a href="register.php" class="mdl-button mdl-js-button mdl-button--raised mdl-button--light">Register as User</a></p>
             <a href="registeradmin.php" class="mdl-button mdl-js-button mdl-button--raised mdl-button--light">Register as Admin</a>
    -->
        </section><!-- section end--> 
    </div>
  </div>
  
  <!--Bottom Row DELETE IF NOT NEEDED-->
  <!--
  <div class="mdl-grid">
    <div class="mdl-cell mdl-cell--4-col"></div>
    <div class="mdl-cell mdl-cell--4-col mdl-shadow--2dp">
      <section class="login-register">
          <a href="login.php" class="mdl-button mdl-js-button mdl-button--raised mdl-button--light">User Login</a>
          <a href="register.php" class="mdl-button mdl-js-button mdl-button--raised mdl-button--light">Register</a>
      </section><!-- section end-->
    <!--</div><!-- column end -->
    <!--<div class="mdl-cell mdl-cell--4-col"></div>
  </div>-->
  
<?php include 'footer.php'; ?>