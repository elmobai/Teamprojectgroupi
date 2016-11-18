<?php
 include_once 'dbconnect.php';
 session_start();

 if(isset($_POST['btn-login']))
 {
  $username = trim($_POST['username']);
  $password = trim($_POST['password']);
  
  $password = md5($password);
   $res=mysql_query("SELECT * registered WHERE username= '$username'");
   $row=mysql_fetch_array($res);
  
  
   if($row['password']==$password){
    
    echo "ok"; // log in
    $_SESSION['user'] = $row['username'];
   }
   else{
    
    echo "username or password does not exist."; // wrong details 
   }
    
  }
  
?>
<?php include 'header.php';?>

<div class="container">
    <h1>Sign In</h1>
    <div class="row">
        <div class="col-sm-4"></div>

        <div class="col-sm-4">
            <!-- login form start -->
            <p></p>
            <form id="loginform" action="" method="post">
              <!-- row 1 -->
              <!--<label for="username">Username:</label><br/>-->
              <input type="text" class="form-control" name="username" class="required" "mdl-textfield__input" placeholder="Email address"/></p>

              <!-- row 2 -->
              <!--<label for="password">Password:</label><br/>-->
              <input type="password" class="form-control" name="password" class="required" "mdl-textfield__input" placeholder="Password" /></br></br>
              
              <label for="remember" class="">
                  <input type="checkbox" value="remember" id="remember" class="">
                  <span class="">Stay signed-in</span>
              </label></p>
              
              <!-- row 3 -->
              <button class="btn btn-success" type="submit" name="btn-login" class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored">Sign In</button></br></br>
             <!-- <p><a href="forget.php" onclick="forget.php" id="forget">Forgot Password?</a></p>-->
            </form><!-- ./login form end -->
        </div><!-- column end -->
        
        <div class="col-sm-4"></div>

    </div>
</div>
   
<?php include 'footer.php'; ?>
  
  