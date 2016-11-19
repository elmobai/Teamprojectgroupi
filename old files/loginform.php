<?php include 'header.php';?>
<!--login form-->
<?php include_once 'classes/dbconnect.php'; include_once 'register.php'; ?> <!--dbconnect.php-->
<!-- This includes the header section to the top of the webpage -->
<?php?>

<div class="container">
    <h1>Sign In</h1>
    <div class="row">
        <div class="col-sm-4"></div>

        <div class="col-sm-4">
            <!-- login form start -->
            <p></p>
            <form id="loginform" action="" method="post">
            
              <!--<label for="username">Username:</label><br/>-->
              <input type="text" class="form-control" name="email" required="" placeholder="Email address"/>
              </p>

              <!--<label for="password">Password:</label><br/>-->
              <input type="password" class="form-control" name="password" required="" placeholder="Password" />
              </br></br>
              
              <button type="submit" class="btn btn-success" name="btn-login">Sign In</button>
              </br></br>
              
              <label for="remember" class="">
                  <input type="checkbox" value="remember" id="remember" class="">
                  <span class="">Stay signed-in</span>
              </label>
            </p>
             <!-- <p><a href="forget.php" onclick="forget.php" id="forget">Forgot Password?</a></p>-->
            </form><!-- ./login form end -->
        </div><!-- column end -->
        
        <div class="col-sm-4"></div>

    </div>
</div>
   
<?php include 'footer.php'; ?>